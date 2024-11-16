<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSchedule extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function confirmedBookings()
    {
        return $this->bookings()->where('status', 'confirmed')->get();
    }

    public function availableSlots()
    {
        return $this->capacity - $this->bookings()->where('status', 'confirmed')->count();
    }

    // Get schedule count for user
    // public function checkExistingSchedule($user_id){
    //     return $this->bookings()->where('user_id', $user_id)->count();
    // }
}
