@extends('layouts.app1')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container card p-4 shadow">

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                Schedules for {{ $course->title }}
            </h4>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="mb-60">
                @livewire('courses.course-schedule-selector',['course' => $course])
                @livewire('courses.bookings', ['course' => $course])


                {{-- @if($course->schedules->isEmpty())
                    <p>No schedules available for this course.</p>
                @else
                    <table class="table table-striped text-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Available Slots</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($course->schedules as $key => $schedule)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ \Carbon\Carbon::parse($schedule->start_time)->toDayDateTimeString() }}</td>
                                    <td>{{ \Carbon\Carbon::parse($schedule->end_time)->toDayDateTimeString() }}</td>
                                    <td>
                                        {{ $schedule->availableSlots() }}
                                    </td>
                                    <td>

                                        @if(\Carbon\Carbon::parse($schedule->start_time)->isPast())
                                            <span class="text-danger">Cannot book a schedule that has already started</span>
                                        @elseif(auth()->user()->myBooking($schedule->id) && auth()->user()->myBooking($schedule->id)->status == 'confirmed')
                                            <a href="" class="text-success">Confirmed</a>
                                            <a href="{{ route('student.schedules.cancel', $schedule->id)}} " class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to cancel this booking?')">Cancel booking</a>

                                        @elseif(auth()->user()->myBooking($schedule->id) != null)
                                            <a href="{{ route('student.booking.confirm', ['booking' => auth()->user()->myBooking($schedule->id)->id ]) }}" class="btn btn-sm btn-primary">Make payment</a>
                                            <a href="{{ route('student.schedules.cancel', $schedule->id)}} " class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to cancel this booking?')">Cancel schedule</a>
                                        @elseif($schedule->availableSlots() > 0)
                                            <form action="{{ route('student.schedules.book', $schedule->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm">Book now</button>
                                            </form>
                                        @else
                                            <span class="text text-danger" disabled>Class at full capacity</span>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif --}}


            </div>
            <div class="text-center">
                <a href="{{ route('student.dashboard') }}" class="btn btn-primary">Back to Classes List</a>
            </div>

        </div>

    </div>
</section>
@endsection
