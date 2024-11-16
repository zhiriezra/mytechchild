<div>
    <div class="mb-4">
        <h5 class="pb-2">My Bookings</h5>
    </div>

    <div class="row justify-content-center g-xl-4 g-3 mb-60">
        <table class="table table-striped text-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Class</th>
                    <th>Start time</th>
                    <th>End time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($bookings->count() > 0)
                    @foreach($bookings as $key => $booking)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $booking->courseSchedule->course->title }}</td>
                            <td>{{ \Carbon\Carbon::parse($booking->courseSchedule->start_time)->format('l g:i A') }}</td>
                            <td>{{ \Carbon\Carbon::parse($booking->courseSchedule->end_time)->format('l g:i A') }}</td>
                            <td>
                                @if($booking->status == 'pending')
                                    <a href="{{ route('student.booking.confirm',['booking' => $booking->id])}}" class="btn btn-primary btn-sm">Make Payment</a>
                                    <a href="{{ route('student.booking.cancel', ['booking' => $booking->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to cancel this booking?')">Cancel Booking</a>

                                @elseif($booking->status == 'confirmed')
                                    <a href="#" class="btn btn-primary btn-sm">Join Session</a>
                                @else
                                    cancelled
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p class="text-danger">No confirmed bookings yet</p>
                @endif
            </tbody>
        </table>
    </div>
</div>
