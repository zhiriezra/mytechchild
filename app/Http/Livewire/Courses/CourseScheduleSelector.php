<?php

namespace App\Http\Livewire\Courses;

use App\Models\Booking;
use App\Models\CourseSchedule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CourseScheduleSelector extends Component
{
    public $dates = [];
    public $times = [];
    public $selectedDate = null;
    public $selectedTime = null;
    public $course;

    public $error = false;
    public $errorMessage = '';
    public $booked = false;

    public function render()
    {
        return view('livewire.courses.course-schedule-selector');
    }

    public function mount(){
        $this->loadDates();
    }

    public function loadDates(){
        $this->dates = $this->course->schedules()->selectRaw('DATE(start_time) as date')
            ->where('status', 'approved')
            ->distinct()
            ->orderBy('date', 'asc')
            ->pluck('date')
            ->toArray();
    }

    public function selectDate($date)
    {
        $this->selectedDate = $date;
        $this->selectedTime = null; // Reset time selection
        $this->loadTimes();
    }

    public function loadTimes()
    {
        if ($this->selectedDate) {
            $this->times = $this->course->schedules()->whereDate('start_time', $this->selectedDate)
                ->orderBy('start_time', 'asc')
                ->get()
                ->map(function($schedule) {
                    return $schedule->start_time;
                })
                ->unique()
                ->toArray();
        }
    }

    public function selectTime($time)
    {
        $this->selectedTime = $time;
        $selectedTime = Carbon::parse($time)->toTimeString();
        $schedule = $this->course->schedules()->whereTime('start_time', $selectedTime)->first();
        // Check if the user has already booked this schedule
        $existingBooking = Booking::where('user_id', Auth::id())
            ->where('course_schedule_id', $schedule->id)
            ->where('status', '!=', 'cancelled')
            ->first();

        if ($existingBooking) {
            $this->errorMessage = 'You have already booked this schedule';
            return $this->error = true;
        }

        Booking::create([
            'user_id' => Auth::id(),
            'course_schedule_id' => $schedule->id,
            'status' => 'pending',
        ]);

        $this->booked = true;
        $this->emit('bookingCreated');

    }
}
