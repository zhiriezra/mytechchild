<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Course;
use App\Models\CourseSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        $courses = Course::with('schedules')->where('active', 1)->get();
        return view('students.dashboard', compact('courses'));
    }

    public function showCourseSchedules($courseId){
        $course = Course::with('schedules.bookings')->findOrFail($courseId);
        return view('students.courses.schedules', compact('course'));
    }

    public function bookSchedule(Request $request, $scheduleId){
        $schedule = CourseSchedule::findorFail($scheduleId);

        // Check if the schedule is in the future
        if (Carbon::parse($schedule->start_time)->isPast()) {
            return redirect()->back()->with('error', 'Cannot book a schedule that has already started.');
        }

        // Check if there are available slots
        if ($schedule->availableSlots() <= 0) {
            return redirect()->back()->with('error', 'No available slots for this schedule.');
        }

        // Check if the user has already booked this schedule
        $existingBooking = Booking::where('user_id', Auth::id())
            ->where('course_schedule_id', $scheduleId)
            ->where('status', '!=', 'cancelled')
            ->first();

        if ($existingBooking) {
            return redirect()->back()->with('error', 'You have already booked this schedule.');
        }

        $booking = Booking::create([
            'user_id' => Auth::id(),
            'course_schedule_id' => $scheduleId,
            'status' => 'pending',
        ]);

       return redirect()->back()->with('success', 'Booking created successfully! Please confirm your booking by making payment.');
    }

    public function cancelSchedule($scheduleId){
        $booking = Booking::where('user_id', Auth::id())
            ->where('course_schedule_id', $scheduleId)
            ->where('status', '!=', 'cancelled')
            ->first();

        $booking->delete();
        return redirect()->back()->with('success', 'Booking removed successfully!');

    }
}
