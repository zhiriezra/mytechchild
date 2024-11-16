<?php

// app/Services/Payments/PaymentGatewayInterface.php
namespace App\Services\Payments;

interface PaymentGatewayInterface
{
    public function charge($amount, $currency, $paymentData);
    public function refund($transactionId, $amount);
}

