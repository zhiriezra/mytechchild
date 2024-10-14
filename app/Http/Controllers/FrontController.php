<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome(){
        $courses = Course::with('schedules')->where('active', 1)->get();
        return view('front.welcome', compact('courses'));
    }

    public function about(){
        return view('front.about');
    }

    public function courseDetail($courseId){
        $course = Course::where(['active' => 1, 'id' => $courseId])->first();
        return view('front.course-detail', compact('course'));
    }
}
