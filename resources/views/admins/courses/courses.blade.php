@extends('layouts.app1')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container card p-4 shadow">

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                Manage Course
            </h4>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="mb-60">

                <div>
                    <a href="{{ route('admin.add.course') }}" class="btn btn-sm btn-primary">Add Course</a>
                </div>
                @if($courses->isEmpty())
                    <p>No schedules available for this course.</p>
                @else
                    <table class="table table-striped text-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>NGN Amount</th>
                                <th>USD Amount</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $key => $course)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $course->title }}</td>
                                    <td>&#8358;{{ number_format($course->amount_ngn, 2) }}</td>
                                    <td>${{ number_format($course->amount_usd, 2) }}</td>
                                    <td>
                                        @if($course->active)
                                            <span class="text-success">Active</span>
                                        @else
                                            <span class="text-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $course->created_at->diffForHumans() }} </td>
                                    <td>
                                        @if($course->active)
                                            <a class="btn btn-sm btn-danger" href="{{ route('admin.deactivate.course', ['course' => $course->id]) }}">Deactivate</a>
                                        @else
                                            <a class="btn btn-sm btn-success" href="{{ route('admin.activate.course', ['course' => $course->id]) }}">Activate</a>
                                        @endif

                                        <a href="{{ route('admin.edit.course', ['course' => $course->id] )}}" class="btn btn-primary btn-sm">Edit</a>
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
