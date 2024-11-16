<?php
// app/Services/Payments/PaymentGatewayFactory.php
namespace App\Services\Payments;

use InvalidArgumentException;

class PaymentGatewayFactory
{
    public static function make($gateway): PaymentGatewayInterface
    {
        switch ($gateway) {
            case 'stripe':
                return new StripeGateway();
            case 'paystack':
                return new PaystackGateway();
            default:
                throw new InvalidArgumentException("Unsupported payment gateway: {$gateway}");
        }
    }
}
