<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [FrontController::class, 'welcome']);
Route::get('/about', [FrontController::class, 'about'])->name('about');

Route::get('/email/verify',[VerificationController::class, 'show'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

Route::get('/courses/{course}', [FrontController::class, 'courseDetail'])->name('course.details');



Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::group(['middleware' => ['role:admin', 'verified', 'profile.completed'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    });

    Route::group(['middleware' => ['role:teacher'], 'prefix' => 'teacher', 'as' => 'teacher.'], function () {
        Route::get('/dashboard', [TeacherController::class, 'index'])->name('dashboard');

        Route::get('/courses/{course}/schedules', [TeacherController::class, 'showCourseSchedules'])->name('courses.schedules');
        Route::get('courses/{course}/schedules/add', [TeacherController::class, 'addSchedule'])->name('add.schedule');
        Route::post('courses/{course}/schedules/add', [TeacherController::class, 'storeSchedule'])->name('store.schedule');

    });

    // DON'T FORGET TO ADD THESE MIDDLEWARES   1. verified 2. profile.completed
    Route::group(['middleware' => ['role:student'], 'prefix' => 'student', 'as' => 'student.'], function () {
        Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');
        Route::get('/courses/{course}/schedules', [StudentController::class, 'showCourseSchedules'])->name('courses.schedules');
        Route::post('schedules/{schedule}/book', [StudentController::class, 'bookSchedule'])->name('schedules.book');
        Route::get('schedules/{schedule}/cancel-booking', [StudentController::class, 'cancelSchedule'])->name('schedules.cancel');
    });

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
