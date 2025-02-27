<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Payment; // Import your Payment model

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Set your Stripe API secret key
        Stripe::setApiKey(config('services.stripe.secret'));

        // Get the payment information from the request
        $cardNumber = $request->input('card_number');
        $expirationMonth = $request->input('expiration_month');
        $expirationYear = $request->input('expiration_year');
        $cvc = $request->input('cvc');

        // Create a charge using the Stripe API
        try {
            $charge = Charge::create([
                'amount' => 1000, // Amount in cents
                'currency' => 'usd',
                'source' => $request->input('stripeToken'),
                'description' => 'Payment description',
                'source' => [
                    'object' => 'card',
                    'number' => $cardNumber,
                    'exp_month' => $expirationMonth,
                    'exp_year' => $expirationYear,
                    'cvc' => $cvc,
                ],
            ]);

            // Payment successful
            // Store the payment information in your database
            // Payment successful
            // Store the payment information in your database
            $payment = new Transaction();
            //$payment->user_id = auth()->user()->id; // Assuming you have user authentication
            $payment->amount = 10.00; // Store the actual payment amount
            $payment->transaction_id = $charge->id; // Store the Stripe charge ID
            // Add other relevant payment details
            $payment->save();

            return redirect()->back()->with('success', 'Payment successful.');
        } catch (CardException $e) {
            // Payment failed due to card error
            $errorMessage = $e->getMessage();
            return redirect()->back()->with('error', $errorMessage);
        } catch (\Exception $e) {
            // Other generic payment failure
            return redirect()->back()->with('error', 'Payment failed. Please try again.');
        }
    }
}
