@extends('admin.dashboard.app')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Confirm Booking') }}</div>

                    @if (session()->has('message'))
                        <div style="color:green; float:right">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="card-body">

                        <form method="POST" action="{{ route('booking.update', $booking->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label for="status"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Booking Status') }}</label>
                                <div class="col-md-6">         
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="">Select One</option>
                                        <option value="confirm" <?= $booking->status === 'confirm' ? 'selected' : '' ?>>Confirm</option>
                                        <option value="pending" <?= $booking->status === 'pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="cancel" <?= $booking->status === 'cancel' ? 'selected' : '' ?>>Cancel</option>
                                    </select>

                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <form>
                <input type="button" value="Go back!" onclick="history.back()">
            </form>
        </div>
    </div>
@endsection
