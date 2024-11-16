<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseSchedule;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'title' => 'Scratch Programming',
            'description' => "With Scratch, kids start coding in a playful, visual way. They'll learn the basics by creating their own animations, games, and stories. This course builds confidence and creativity—perfect for young beginners!",
            'image' => 'default.png',
            'amount_ngn' => 25000,
            'amount_usd' => 25,
            'active' => 1
        ]);

        $course2 = Course::create([
            'title' => 'App Development for Kids',
            'description' => "In this course, kids get hands-on with app design and development. They’ll create real, functional apps that teach them core concepts of coding, problem-solving, and design thinking.",
            'image' => 'default.png',
            'amount_ngn' => 25000,
            'amount_usd' => 25,
            'active' => 1
        ]);


        // Create schedules for course1
        CourseSchedule::create([
            'course_id' => $course1->id,
            'start_time' => Carbon::now()->addDays(1)->setTime(10, 0),
            'end_time' => Carbon::now()->addDays(1)->setTime(12, 0),
            'capacity' => 30,
        ]);

        CourseSchedule::create([
            'course_id' => $course1->id,
            'start_time' => Carbon::now()->addDays(2)->setTime(11, 0),
            'end_time' => Carbon::now()->addDays(5)->setTime(12, 0),
            'capacity' => 30,
        ]);

        CourseSchedule::create([
            'course_id' => $course1->id,
            'start_time' => Carbon::now()->addDays(2)->setTime(4, 0),
            'end_time' => Carbon::now()->addDays(5)->setTime(6, 0),
            'capacity' => 30,
        ]);

        CourseSchedule::create([
            'course_id' => $course2->id,
            'start_time' => Carbon::now()->addDays(3)->setTime(2, 0),
            'end_time' => Carbon::now()->addDays(3)->setTime(3, 0),
            'capacity' => 25,
        ]);

        CourseSchedule::create([
            'course_id' => $course2->id,
            'start_time' => Carbon::now()->addDays(1)->setTime(6, 0),
            'end_time' => Carbon::now()->addDays(3)->setTime(8, 0),
            'capacity' => 25,
        ]);

        CourseSchedule::create([
            'course_id' => $course2->id,
            'start_time' => Carbon::now()->addDays(3)->setTime(16, 0),
            'end_time' => Carbon::now()->addDays(3)->setTime(18, 0),
            'capacity' => 25,
        ]);

        DB::table('course_teacher')->insert([
            'course_id' => 1,
            'teacher_id' => 1
        ]);


        DB::table('course_teacher')->insert([
            'course_id' => 2,
            'teacher_id' => 1
        ]);

    }
}
