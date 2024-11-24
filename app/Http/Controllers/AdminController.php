<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Course;
use App\Models\CourseSchedule;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDO;

class AdminController extends Controller
{
    public function index(){
        $courses = Course::all();
        $bookings = Booking::confirmed();
        $teachers = User::teachers();
        $students = User::students();

        return view('admins.dashboard', compact('courses', 'bookings', 'teachers', 'students'));
    }

    public function schedules(){
        $schedules = CourseSchedule::orderBy('created_at', 'DESC')->get();
        return view('admins.courses.schedules', compact('schedules'));
    }

    public function approveSchedule(CourseSchedule $schedule){
        $schedule->status = 'approved';
        $schedule->save();

        session()->flash('success', 'Schedule update success');
        return redirect()->back();
    }

    public function declineSchedule(CourseSchedule $schedule){
        $schedule->status = 'declined';
        $schedule->save();

        session()->flash('success', 'Schedule update success');
        return redirect()->back();

    }

    // classes management methods

    public function courses(){
        $courses = Course::all();

        return view('admins.courses.courses', compact('courses'));
    }

    public function addCourse(){

        return view('admins.courses.add-course');
    }

    public function storeCourse(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'amount_ngn' => 'required',
            'amount_usd' =>  'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = 'default.png';

        if($request->hasFile('image')){

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Store the image in the "public/images" directory
            $image->storeAs('public/images', $imageName);
        }

        $course = new Course();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->amount_ngn = $request->amount_ngn;
        $course->amount_usd = $request->amount_usd;
        $course->image = $imageName;
        $course->active = 1;

        $course->save();

        session()->flash('success', 'course added successfully');
        return redirect()->route('admin.courses');

    }

    public function editCourse(Course $course){
        return view('admins.courses.edit-course', compact('course'));
    }

    public function updateCourse(Course $course, Request $request){

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'amount_ngn' => 'required',
            'amount_usd' =>  'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        if($request->hasFile('image')){

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Store the image in the "public/images" directory
            $image->storeAs('public/images', $imageName);

            $course->image = $imageName;
        }


        $course->title = $request->title;
        $course->description = $request->description;
        $course->amount_ngn = $request->amount_ngn;
        $course->amount_usd = $request->amount_usd;

        $course->save();

        session()->flash('success', 'course updated successfully');
        return redirect()->route('admin.courses');
    }

    public function activateCourse(Course $course){
        $course->active = 1;
        $course->save();

        session()->flash('success', 'Class update success');
        return redirect()->back();
    }

    public function deactivateCourse(Course $course){
        $course->active = 0;
        $course->save();

        session()->flash('success', 'Class update success');
        return redirect()->back();

    }

    // Manage teachers

    public function teachers(){
        $teachers = User::teachers();
        return view('admins.teachers.index', compact('teachers'));
    }

    public function addTeacher(){
        $courses = Course::all();
        return view('admins.teachers.add', compact('courses'));
    }
    public function storeTeacher(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'mobile' => 'required|unique:users,mobile',
            'courses' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = 'default.png';

        if($request->hasFile('image')){

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Store the image in the "public/images" directory
            $image->storeAs('public/profile', $imageName);
        }

        DB::transaction(function () use ($request, $imageName) {

            // create user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'username' => strstr($request->email, '@', true),
                'role' => 'teacher',
                'profile_image' => $imageName,
                'password' => Hash::make('password123'),
            ]);

            // create teacher
            $teacher = Teacher::create([
                'user_id' => $user->id
            ]);

            // associate teacher with course
            foreach($request->courses as $course){
                DB::table('course_teacher')->insert([
                    'teacher_id' => $teacher->id,
                    'course_id' => $course
                ]);
            }


        });

        session()->flash('success', 'Successfully added new teacher');
        return redirect()->route('admin.teachers');
    }


}
