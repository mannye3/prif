<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Square\SquareClient;

class SquarePaymentController extends Controller
{
    public function createCheckout(Request $request)
    {
        $accessToken = config("square." . env("SQUARE_ENV") . "_access_token");
        //$accessToken = config("square.sandbox_access_token");

        $squareClient = new SquareClient([
            'accessToken' => $accessToken,
            'environment' => env("SQUARE_ENV")
        ]);

        $checkoutApi = $squareClient->getCheckoutApi();

        $createCheckoutRequest = new \Square\Models\CreateCheckoutRequest([
            'location_id' => 'your_location_id',
            'order' => [
                // Define your order details here
            ],
            'redirect_url' => route('square.checkout.success')
        ]);

        $checkoutResponse = $checkoutApi->createCheckout($createCheckoutRequest);

        return redirect($checkoutResponse->getCheckout()->getCheckoutPageUrl());
    }

    public function checkoutSuccess(Request $request)
    {
        // Handle successful payment confirmation
        // You can retrieve transaction details from the $request or Square API

        return view('checkout.success');
    }
}
