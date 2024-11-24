@extends('layouts.app1')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container card p-4 shadow">

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                Manage Teachers
            </h4>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="mb-60">

                <div>
                    <a href="{{ route('admin.add.teacher') }}" class="btn btn-sm btn-danger">Add Teacher</a>
                </div>
                @if($teachers->isEmpty())
                    <p>No schedules available for this teacher.</p>
                @else
                    <table class="table table-striped text-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Assigned Courses</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $key => $user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>{{ $user->teacher->courses->count() }}</td>
                                    <td>{{ $user->created_at->toFormattedDateString() }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
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
