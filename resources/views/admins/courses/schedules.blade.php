@extends('layouts.app1')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container card p-4 shadow">

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                Manage Schedules
            </h4>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="mb-60">

                <div>
                    {{-- <a href="{{ route('teacher.add.schedule', ['course' => $course->id]) }}" class="btn btn-sm btn-primary">Add Schedule</a> --}}
                </div>
                @if($schedules->isEmpty())
                    <p>No schedules available for this course.</p>
                @else
                    <table class="table table-striped text-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Course</th>
                                <th>Confirmed Slots</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $key => $schedule)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ \Carbon\Carbon::parse($schedule->start_time)->toDayDateTimeString() }}</td>
                                    <td>{{ \Carbon\Carbon::parse($schedule->end_time)->toDayDateTimeString() }}</td>
                                    <td>{{ $schedule->course->title }}</td>

                                    <td>
                                        @if($schedule->confirmedBookings()->count() == $schedule->availableSlots())
                                            <span class="text-sm text-success">Capacity Full</span>
                                        @else
                                            {{ $schedule->confirmedBookings()->count() }}/{{ $schedule->availableSlots() }}
                                        @endif
                                    </td>
                                    <td>
                                        <span class="text-sm p-1 {{ $schedule->status == 'approved' ? 'text-success' : ($schedule->status == 'declined' ? 'text-danger' : 'text-warning')}}">{{ $schedule->status }}</span>
                                    </td>
                                    <td>
                                        {{-- <a href="{{ route('teacher.edit.schedule', ['schedule' => $schedule->id]) }}" class="btn btn-sm btn-info">Edit</a> --}}
                                        @if($schedule->status == 'pending')
                                            <a class="btn btn-success btn-sm" href="{{ route('admin.approve.schedule', ['schedule' => $schedule->id])}}">Approve</a>
                                            <a class="btn btn-sm btn-danger" href="{{ route('admin.decline.schedule', ['schedule' => $schedule->id])}}">Decline</a>
                                        @elseif($schedule->status == 'approved')
                                            <a class="btn btn-sm btn-danger" href="{{ route('admin.decline.schedule', ['schedule' => $schedule->id])}}">Decline</a>
                                        @else
                                            <a class="btn btn-success btn-sm" href="{{ route('admin.approve.schedule', ['schedule' => $schedule->id])}}">Approve</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

            </div>
            <div class="text-center">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
            </div>

        </div>

    </div>
</section>
@endsection
