<div>
    <div class="">

        <div class="row">
            <div class="col-sm-4 mb-4">
                <h5 class="pb-2">Select a Course:</h5>
                <select class="form-control border p-2" wire:model="selectedCourse">
                    <option value="">-- Select course --</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-8 mb-4">
                <h5 class="pb-2">Select Schedule:</h5>
                <div>
                    @if(!$dates)
                        <div class="alert alert-info">
                            No schedule for this class.
                        </div>
                    @endif
                    @foreach($dates as $date)
                        <button class="btn btn-outline-danger rounded-pill me-2 mb-2 text-sm" wire:click="selectDate('{{ $date }}')" @if($selectedDate === $date) active @endif>
                            {{ \Carbon\Carbon::parse($date)->format('D') }} - {{ \Carbon\Carbon::parse($date)->format('F j, Y') }}
                        </button>
                    @endforeach
                </div>
            </div>

        </div>
    </div>


        {{-- Time Selection --}}
    @if($selectedDate)
        <div class="my-4">
            <h5 class="pb-2">Select a Time:</h5>
            <div>
                @forelse($times as $time)
                    <button
                        class="btn btn-outline-success rounded-pill me-2 mb-2"
                        wire:click="selectTime('{{ $time }}')"
                        @if($selectedTime === $time) active @endif
                    >
                        {{ \Carbon\Carbon::parse($time)->format('g:i A') }}
                    </button>
                @empty
                    <p>No available times for this date.</p>
                @endforelse
            </div>
        </div>
    @endif

    {{-- Selected Schedule --}}
    @if($booked)
        <div class="alert alert-info">
            <strong>Selected Schedule:</strong> {{ \Carbon\Carbon::parse($selectedDate)->format('F j, Y') }} at {{ \Carbon\Carbon::parse($selectedTime)->format('g:i A') }}
        </div>
    @endif

    @if($error)
        <div class="alert alert-danger">
            {{ $errorMessage }}
        </div>
    @endif

</div>
