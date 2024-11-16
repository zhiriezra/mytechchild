<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the course schedule that the booking is for.
     */
    public function courseSchedule()
    {
        return $this->belongsTo(CourseSchedule::class);
    }

    public function scopeConfirmed($query)
    {
        return $query->where('status', 'confirmed')->get();
    }

}
