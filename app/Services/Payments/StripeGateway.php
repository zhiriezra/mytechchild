<?php

namespace App\Services\Payments;

use App\Models\Payment;
use Exception;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeGateway implements PaymentGatewayInterface
{

    protected $apiUrl = 'https://api.paystack.co/';

    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function charge($amount, $currency, $paymentData){

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => $currency,
                    'unit_amount' => $amount * 100,
                    'product_data' => [
                        'name' => $paymentData['course'],
                    ],
                ],
                'quantity' => 1
            ]],

            'metadata' => [
                        'user_id' => auth()->id(),
                        'booking_id' => $paymentData['booking_id']
            ],
            'mode' => 'payment',
            'success_url' => route('checkout.success'),
            'cancel_url' => route('checkout.cancel')
            ]);

            $payment = Payment::find($paymentData['payment_id']);
            $payment->stripe_session = $session->id;
            $payment->save();

            return $session;
    }

    public function refund($transactionId, $amount){

    }
}
