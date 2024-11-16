<?php

namespace App\Http\Livewire\Courses;

use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Bookings extends Component
{
    public $course;
    public $bookings;

    protected $listeners = ['bookingCreated' => 'loadBookings'];

    public function mount(){
        $this->loadBookings();
    }

    public function loadBookings(){
        $this->bookings = Booking::with('courseSchedule.course')
            ->where('user_id', auth()->id())
            ->whereHas('courseSchedule.course', function($query){
                $query->where('course_id', $this->course->id);
            })
            ->get();
    }

    public function render()
    {
        return view('livewire.courses.bookings');
    }
}
