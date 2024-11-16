<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\CourseSchedule;
use App\Repositories\PaymentRepository;
use App\Services\Payments\PaymentGatewayFactory;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $paymentRepository;

    public function __construct(PaymentRepository $paymentRepository) {
        $this->paymentRepository = $paymentRepository;
    }

    public function showPaymentView($booking_id){
        $booking = Booking::find($booking_id);
        $course = $booking->courseSchedule->course;

        return view('students.payments.create', compact('booking', 'course'));
    }

    public function processPayment(Request $request, $booking_id){
        $booking = Booking::find($booking_id);
        $course = $booking->courseSchedule->course;

        $request->validate([
            'gateway' => 'required|string',
            'amount' => 'required|numeric',
            'email' => 'required|email',
            'source' => 'required_if:gateway,stripe',
        ]);

        $gateway = $request->input('gateway');

        //Decide the gateway
        $paymentGateway = PaymentGatewayFactory::make($gateway);

        $amount = (float)$request->input('amount');
        $email = $request->input('email');
        $reference = uniqid();
        $source = $request->input('source');
        $currency = $request->input('currency', 'USD');

        // save paymentData
        $payment = $this->paymentRepository->savePayment([
            'user_id' => auth()->id(),
            'email' => $email,
            'booking_id' => $booking_id,
            'gateway' => $gateway,
            'amount' => $amount,
            'currency' => $currency,
            'reference' => $reference,
            'description' => 'Payment description',
            'source' => $source,
            'course' => $course->title,
            'status' => 'pending'
        ]);

        $paymentData = [
            'source' => $source,
            'email' => $email,
            'currency' => $currency,
            'reference' => $reference,
            'course' => $course->title,
            'payment_id' => $payment->id,
            'booking_id' => $booking_id,
        ];


        $response = $paymentGateway->charge($amount, $currency, $paymentData);

        return redirect()->away($response->url);

        // if($response['status'] == true && $response['message'] == "Authorization URL created"){
        //     return redirect($response['data']['authorization_url']);
        // }

        // return response()->json(['status' => 'success', 'data' => $response]);
    }

    public function success(){
        return view('students.payments.success');
    }

    public function cancel(){
        return view('students.payments.cancel');

    }
}
