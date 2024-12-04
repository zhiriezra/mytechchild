<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\StripeWebhookController;
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

    Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

        // Admin schedule routes
        Route::get('schedules', [AdminController::class, 'schedules'])->name('schedules');
        Route::get('approve/{schedule}', [AdminController::class, 'approveSchedule'])->name('approve.schedule');
        Route::get('decline/{schedule}', [AdminController::class, 'declineSchedule'])->name('decline.schedule');

        // manage courses
        Route::get('courses', [AdminController::class, 'courses'])->name('courses');
        Route::get('add-course', [AdminController::class, 'addCourse'])->name('add.course');
        Route::post('add-course', [AdminController::class, 'storeCourse'])->name('store.course');
        Route::get('edit-course/{course}', [AdminController::class, 'editCourse'])->name('edit.course');
        Route::post('edit-course/{course}', [AdminController::class, 'updateCourse'])->name('update.course');

        Route::get('activate/{course}', [AdminController::class, 'activateCourse'])->name('activate.course');
        Route::get('deactivate/{course}', [AdminController::class, 'deactivateCourse'])->name('deactivate.course');

        // manage teachers
        Route::get('teachers', [AdminController::class, 'teachers'])->name('teachers');
        Route::get('add-teacher', [AdminController::class, 'addTeacher'])->name('add.teacher');
        Route::post('add-teacher', [AdminController::class, 'storeTeacher'])->name('store.teacher');

    });

    Route::group(['middleware' => ['role:teacher'], 'prefix' => 'teacher', 'as' => 'teacher.'], function () {
        Route::get('dashboard', [TeacherController::class, 'index'])->name('dashboard');

        Route::get('courses/{course}/schedules', [TeacherController::class, 'showCourseSchedules'])->name('courses.schedules');
        Route::get('courses/{course}/schedules/add', [TeacherController::class, 'addSchedule'])->name('add.schedule');
        Route::post('courses/{course}/schedules/add', [TeacherController::class, 'storeSchedule'])->name('store.schedule');
        Route::get('schedule/{schedule}/edit', [TeacherController::class, 'editSchedule'])->name('edit.schedule');
        Route::post('schedule/{schedule}/edit', [TeacherController::class, 'updateSchedule'])->name('update.schedule');


    });

    // DON'T FORGET TO ADD THESE MIDDLEWARES   1. verified 2. profile.completed
    Route::group(['middleware' => ['role:student'], 'prefix' => 'student', 'as' => 'student.'], function () {

        Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');
        Route::get('/courses/{course}/schedules', [StudentController::class, 'showCourseSchedules'])->name('courses.schedules');

        Route::get('booking/{booking}/cancel-booking', [StudentController::class, 'cancelBooking'])->name('booking.cancel');
        Route::get('bookings/{booking}/confirm-booking', [PaymentController::class, 'showPaymentView'])->name('booking.confirm');
        Route::post('bookings/{booking}/process-payment', [PaymentController::class, 'processPayment'])->name('process.payment');

    });

    Route::get('/checkout/success', [PaymentController::class, 'success'])->name('checkout.success');
    Route::get('/checkout/cancel', [PaymentController::class, 'cancel'])->name('checkout.cancel');


});

Route::post('/webhook', [StripeWebhookController::class, 'handleWebhook']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');

Route::get('/auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);
