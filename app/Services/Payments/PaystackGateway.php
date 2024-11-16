<?php

namespace App\Services\Payments;

use Exception;
use Illuminate\Support\Facades\Http;

class PaystackGateway implements PaymentGatewayInterface
{

    protected $apiUrl = 'https://api.paystack.co/';

    public function charge($amount, $currency, $paymentData){

        $user = auth()->user();

        try {
            $response = Http::withHeaders([
                "Authorization" => "Bearer ". config('services.paystack.secret'),
                "Content-Type" => "application/json",
            ])
            ->post($this->apiUrl.'transaction/initialize', [
                'email' => $user->email,
                'amount' => $amount * 100,
                "currency" => $currency,
                "reference" => $paymentData['reference'],
            ]);

            return $response->json();

        } catch(Exception $e){
            throw new Exception("Paystack charge failed: " . $e->getMessage());
        }
    }

    public function refund($transactionId, $amount){

    }
}
