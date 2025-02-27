<?php

namespace App\Http\Controllers;

use Stripe;
use Session;
use App\Models\Booking;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    public function stripePost(Request $request)

    {

        $ride_name = $request['ride_name'];

        $description =  'Ride Booking for ' . $ride_name . ' ';

        $email = $request['c_email'];
        $name = $request['c_name'];
        $phone = $request['p_name'];
        $b_code = $request['b_code'];
        $amount = $request['amount'];

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));



        $customer = Stripe\Customer::create(array(


            "email" => $email,

            "name" => $name,

            "source" => $request->stripeToken

        ));



        $pay =  Stripe\Charge::create([

            "amount" => $amount * 100,

            "currency" => "usd",

            "customer" => $customer->id,

            "description" => $description,

        ]);

        return $pay;

        $payment = new Transaction();
        //$payment->customer_id = $customer->id;
        $payment->customer_email = $customer->email;
        $payment->customer_name = $customer->name;
        $payment->amount = $amount; // Assuming the amount is 100 in cents
        $payment->currency = 'usd';
        $payment->transaction_id = $customer->id;
        $payment->description = $description;
        $payment->save();

        $payment_booking =  Booking::where('b_code', $b_code)->first();
        $status = 1;
        $payment_booking->status = $status;
        $payment_booking->save();

        //Session::flash('success', 'Payment successful!');

        //return Redirect::to('/users/partipante-form-step-two/' . $new_onboard_id);


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




        return Redirect::to('/booking_confirmation/' . $b_code)->with('success', 'Market created successfully.');;

        //return Redirect::back()->with('success', 'Market created successfully.');

        //return back();
    }
}
