<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\User;
use App\Notifications\PaymentSuccessful;
use Illuminate\Http\Request;
use Stripe\Webhook;
use Illuminate\Support\Facades\Log;


class StripeWebhookController extends Controller
{
    public function handleWebhook(Request $request){

        $stripeWebhookSecret = 'whsec_7f41571ee989190ffef8115784979a4634b1a669e8e03fed991d4e2a5bdcbc91';
        $payload = $request->getContent();
        $sigHeader = $request->header('stripe-signature');

        try {
            $event = Webhook::constructEvent($payload, $sigHeader, $stripeWebhookSecret);

            if ($event->type === 'checkout.session.completed') {
                $session = $event->data->object;

                $this->fulfillOrder($session);

                $user_id = $session->metadata->user_id;
                $user = User::find($user_id);

                if ($user) {
                    $user->notify(new PaymentSuccessful($session->amount_total / 100, $session->currency));
                }


            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Webhook handling error'], 400);
        }

        return response()->json(['status' => 'success'], 200);
    }

    protected function fulfillOrder($session)
    {
        // Retrieve and update order status
        $payment = Payment::where('stripe_session', $session->id)->first();
        $booking = Booking::find($session->metadata->booking_id);

        if($booking){

            $booking->status = 'confirmed';
            $booking->save();
        }

        if ($payment && $payment->status !== 'completed') {
            $payment->status = 'completed';
            $payment->save();

            Log::info('Order fulfilled:', ['order_id' => $payment->id, 'status' => $payment->status]);

        } else {

            Log::warning('Order not found or already paid:', ['session_id' => $session->id]);
        }
    }
}
