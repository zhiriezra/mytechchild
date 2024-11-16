<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function index(){
        $user = Auth::user();
        $courses = $user->teacher->courses;

        return view('teachers.dashboard', compact('courses'));
    }

    public function showCourseSchedules($courseId){
        $course = Course::with('schedules.bookings')->findOrFail($courseId);
        return view('teachers.courses.schedules', compact('course'));
    }

    public function addSchedule($courseId){
        $course = Course::find($courseId);
        return view('teachers.courses.add-schedule', compact('course'));
    }

    public function storeSchedule(Request $request, $courseId){

        $course = Course::find($courseId);

        $validator = Validator::make($request->all(), [
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'capacity' => 'required|integer|min:1',
        ]);

        $validator->after(function ($validator) use ($request, $courseId) {
            $startTime = Carbon::parse($request->start_time);
            $endTime = Carbon::parse($request->end_time);

            // Query to check for any overlapping schedules
            $overlappingSchedule = DB::table('course_schedules')
                ->where('course_id', $courseId)
                ->where(function ($query) use ($startTime, $endTime) {
                    $query->where(function ($subQuery) use ($startTime, $endTime) {
                        $subQuery->whereBetween('start_time', [$startTime, $endTime])
                                 ->orWhereBetween('end_time', [$startTime, $endTime]);
                    })
                    ->orWhere(function ($subQuery) use ($startTime, $endTime) {
                        $subQuery->where('start_time', '<=', $startTime)
                                 ->where('end_time', '>=', $endTime);
                    });
                })
                ->exists();

            if ($overlappingSchedule) {
                $validator->errors()->add('start_time', 'This time slot overlaps with an existing schedule.');
            }
        });

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        CourseSchedule::create([
            'course_id' => $courseId,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'capacity' => $request->capacity
        ]);


        return redirect()->back()->with('success', 'Time slot added successfully add another one?');
    }

    public function editSchedule($schedule_id){
        $schedule = CourseSchedule::find($schedule_id);

        return view('teachers.courses.edit-schedule', compact('schedule'));
    }

    public function updateSchedule(Request $request, $schedule_id){
        $schedule = CourseSchedule::find($schedule_id);
        $courseId = $schedule->course->id;

        $validator = Validator::make($request->all(), [
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'capacity' => 'required|integer|min:1',
        ]);

        $validator->after(function ($validator) use ($request, $schedule_id, $courseId) {
            $startTime = Carbon::parse($request->start_time);
            $endTime = Carbon::parse($request->end_time);

            // Query to check for any overlapping schedules
            $overlappingSchedule = DB::table('course_schedules')
                ->where('course_id', $courseId)
                ->whereNot('id', $schedule_id)
                ->where(function ($query) use ($startTime, $endTime) {
                    $query->where(function ($subQuery) use ($startTime, $endTime) {
                        $subQuery->whereBetween('start_time', [$startTime, $endTime])
                                 ->orWhereBetween('end_time', [$startTime, $endTime]);
                    })
                    ->orWhere(function ($subQuery) use ($startTime, $endTime) {
                        $subQuery->where('start_time', '<=', $startTime)
                                 ->where('end_time', '>=', $endTime);
                    });
                })
                ->exists();

            if ($overlappingSchedule) {
                $validator->errors()->add('start_time', 'This time slot overlaps with an existing schedule.');
            }
        });

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        CourseSchedule::create([
            'course_id' => $courseId,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'capacity' => $request->capacity
        ]);
    }
}

