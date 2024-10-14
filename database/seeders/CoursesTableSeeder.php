<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseSchedule;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course1 = Course::create([
            'title' => 'Coding with Scratch',
            'description' => 'Basic concepts of programming.',
            'image' => 'default.png',
            'active' => 1
        ]);

        $course2 = Course::create([
            'title' => 'Coding with Python',
            'description' => 'Basic concepts of python programming.',
            'image' => 'default.png',
            'active' => 1
        ]);

        $course3 = Course::create([
            'title' => 'Data Analysis',
            'description' => 'Basic concepts of data analysis programming.',
            'image' => 'default.png',
            'active' => 0
        ]);

        // Create schedules for course1
        CourseSchedule::create([
            'course_id' => $course1->id,
            'start_time' => Carbon::now()->addDays(1)->setTime(10, 0),
            'end_time' => Carbon::now()->addDays(1)->setTime(12, 0),
            'capacity' => 30,
        ]);

        CourseSchedule::create([
            'course_id' => $course2->id,
            'start_time' => Carbon::now()->addDays(3)->setTime(14, 0),
            'end_time' => Carbon::now()->addDays(3)->setTime(16, 0),
            'capacity' => 25,
        ]);

        // Create schedules for course2
        CourseSchedule::create([
            'course_id' => $course3->id,
            'start_time' => Carbon::now()->addDays(2)->setTime(9, 0),
            'end_time' => Carbon::now()->addDays(2)->setTime(11, 0),
            'capacity' => 20,
        ]);
    }
}
