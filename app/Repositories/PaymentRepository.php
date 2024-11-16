<?php

namespace App\Repositories;

use App\Models\Payment;

class PaymentRepository
{
    public function savePayment($paymentData){
        return Payment::create($paymentData);
    }

    public function getPaymentHistoryForUser($userId){
        return Payment::where('user_id', $userId)->orderBy('created_at', 'desc')->get();
    }

}
