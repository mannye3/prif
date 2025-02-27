<?php

namespace App\Http\Controllers;

use URL;
use Input;
use Session;
use Redirect;
use Validator;
use PayPal\Api\Item;
use PayPal\Api\Payer;
use App\Http\Requests;
use PayPal\Api\Amount;
use App\Models\Booking;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use App\Models\PaypalPayment;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use Illuminate\Support\Facades\Mail;
use PayPal\Auth\OAuthTokenCredential;

class PaypalController extends Controller
{
    private $apiContext;

    public function __construct()
    {
        $paypalConfig = config('paypal');
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential($paypalConfig['client_id'], $paypalConfig['secret'])
        );
        $this->apiContext->setConfig($paypalConfig['settings']);
    }

    public function payWithPaypal()
    {
        return view('payment');
    }

    public function postPaymentWithpaypal(Request $request)
    {
        $ride_name = $request['ride_name'];

        $description =  'Ride Booking for ' . $ride_name . ' ';

        $email = $request['c_email'];
        $name = $request['c_name'];
        $phone = $request['p_name'];
        $b_code = $request['b_code'];
        $amount = $request['amount'];
        $b_type = $request['b_type'];




        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item = new Item();
        $item->setName('Product 1')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->input('amount'));

        $itemList = new ItemList();
        $itemList->setItems([$item]);

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($request->input('amount'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription('Enter Your transaction description');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(URL::route('status'))
            ->setCancelUrl(URL::route('status'));

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions([$transaction]);

        try {
            $payment->create($this->apiContext);
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            if (config('app.debug')) {

                Session::flash('error', 'Connection timeout');

                return back();

                // Session::put('error', 'Connection timeout');
                // Session::flash('success', 'Payment successful!');

                // return redirect()->back()->with('error', 'Connection timeout');

                //return Redirect::route('paywithpaypal');
            } else {
                Session::put('error', 'Some error occurred, sorry for the inconvenience');
                return redirect()->back()->with('error', 'Some error occurred, sorry for the inconvenience');
                //return back();
                //return Redirect::route('paywithpaypal');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() === 'approval_url') {
                $redirectUrl = $link->getHref();
                break;
            }
        }

        Session::put('paypal_payment_id', $payment->getId());
        Session::put('email', $email);
        Session::put('first_name', $name);
        Session::put('ride_name', $ride_name);
        Session::put('phone', $phone);
        Session::put('b_code', $b_code);
        Session::put('b_type', $b_type);
        // Session::put('last_name', $lastName);
        // Session::put('last_name', $lastName);

        //Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirectUrl)) {
            return Redirect::away($redirectUrl);
        }

        Session::put('error', 'Unknown error occurred');
        return redirect()->back()->with('error', 'Unknown error occurred');

        //return back();
        //return Redirect::route('paywithpaypal');
    }

    public function getPaymentStatus(Request $request)
    {
        $paymentId = Session::get('paypal_payment_id');
        $email = Session::get('email');
        $firstName = Session::get('first_name');
        $ride_name = Session::get('ride_name');
        $b_code = Session::get('b_code');
        $phone = Session::get('phone');
        $b_type = Session::get('b_type');
        // $lastName = Session::get('last_name');
        // $lastName = Session::get('last_name');
        // $lastName = Session::get('last_name');

        Session::forget('paypal_payment_id');
        Session::forget('email');
        Session::forget('first_name');
        Session::forget('b_code');
        Session::forget('phone');
        Session::forget('ride_name');
        Session::forget('b_type');
        //Session::forget('last_name');

        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            Session::put('error', 'Payment failed');
            return redirect()->back()->with('error', 'Payment failed');

            // return back();
            //return Redirect::route('paywithpaypal');
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));

        try {
            $result = $payment->execute($execution, $this->apiContext);

            if ($result->getState() === 'approved') {
                $paymentModel = new PaypalPayment();
                $paymentModel->transaction_id = $paymentId;
                $paymentModel->payer_id = $request->input('PayerID');
                $paymentModel->amount = $result->getTransactions()[0]->getAmount()->getTotal();
                $paymentModel->customer_email = $email;
                $paymentModel->customer_name = $firstName;
                $paymentModel->save();



                $payment_booking =  Booking::where('b_code', $b_code)->first();
                $status = 1;
                $payment_booking->status = $status;
                $payment_booking->save();

                if ($payment_booking->b_type == "airport_pickup") {
                    $email_data = array(
                        'c_email' => $payment_booking->c_email,
                        'c_name' => $payment_booking->c_name,
                        'c_phone' => $payment_booking->c_phone,
                        'totalFare' => $payment_booking->totalFare,
                        'b_code' => $payment_booking->b_code,
                        'ride_id' => $payment_booking->ride_id,
                        'b_pickup' => $payment_booking->b_pickup,
                        'b_date' => $payment_booking->b_date,
                        'b_time' => $payment_booking->b_time,
                        'b_dropoff' => $payment_booking->b_dropoff,
                        'b_distance' => $payment_booking->b_distance,
                        'created_at' => $payment_booking->created_at,

                    );
                    Mail::send('emails.email_test', $email_data, function ($message) use ($email_data) {
                        $message->to($email_data['c_email'],)
                            ->subject('Booking Details')
                            ->from('no-reply@fmdqgroup.com', 'Booking Details');
                    });


                    return Redirect::to('/booking_confirmation/' . $b_code)->with('success', 'Market created successfully.');
                }




                if ($payment_booking->b_type == "hourly") {
                    $email_data = array(
                        'c_email' => $payment_booking->c_email,
                        'c_name' => $payment_booking->c_name,
                        'c_phone' => $payment_booking->c_phone,
                        'totalFare' => $payment_booking->totalFare,
                        'b_code' => $payment_booking->b_code,
                        'ride_id' => $payment_booking->ride_id,
                        'b_pickup' => $payment_booking->b_pickup,
                        'b_date' => $payment_booking->b_date,
                        'b_time' => $payment_booking->b_time,
                        'created_at' => $payment_booking->created_at,

                    );
                    Mail::send('emails.hourly', $email_data, function ($message) use ($email_data) {
                        $message->to($email_data['c_email'],)
                            ->subject('Booking Details')
                            ->from('no-reply@fmdqgroup.com', 'Booking Details');
                    });


                    return Redirect::to('/booking_confirmation/' . $b_code)->with('success', 'Market created successfully.');
                }



                // Session::put('success', 'Payment success!');
                //return Redirect::to('/booking_confirmation/')->with('success', 'Market created successfully.');;

                //return redirect()->back()->with('success', 'Payment success!');

                // return back();
                //return Redirect::route('paywithpaypal');
            }
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            Session::put('error', 'Payment failed');
            return redirect()->back()->with('error', 'Payment failed');

            // return back();
            //return Redirect::route('paywithpaypal');
        }

        Session::put('error', 'Payment failed');
        return redirect()->back()->with('error', 'Payment failed');

        // return back();
        //return Redirect::route('paywithpaypal');
    }
}
