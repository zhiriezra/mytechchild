<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [''];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function confirmedBookings(){
        return $this->bookings()->where('status', 'confirmed')->get();
    }

    public function myBooking($schedule_id){
        return $this->hasMany(Booking::class)->where('course_schedule_id', $schedule_id)->first();
    }

    public function teacher(){
        return $this->hasOne(Teacher::class);
    }

    public function scopeStudents($query)
    {
        return $query->where('role', 'student')->get();
    }

    public function scopeTeachers($query)
    {
        return $query->where('role', 'teacher')->get();
    }

}
