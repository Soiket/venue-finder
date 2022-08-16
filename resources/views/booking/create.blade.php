@extends('client.app')

@section('client_main')
    <div style="height: 200px">


    </div>
    <div class="container">

        <div class="col-md-12">
            <h3>Booking Venues</h3>
            <form action="{{ route('booking.store') }}" method="POST"
                style="background-color: rgb(190, 187, 183); padding:20px; width:50%">
                @csrf
                <div class="form-group">
                    <label for="Date">Check Availibility </label> <i class="fa fa-calendar-check-o fa-2x" aria-hidden="true"></i>
                    <input class="date form-control" type="text" name="date"  placeholder="yyyy-mm-dd" required >
                    <input type="hidden" value="{{ $venue->id }}" name="venue_id">
                </div>
                <div class="form-group">
                    <label for="floatingSelect">Select Division</label>
                    <select class="form-select" id="payment_method" name="payment_method" aria-label="State" required>
                        <option value="">Select One</option>

                        <option value="cash" <?= $booking->payment_method === 'cash' ? 'selected' : '' ?>>Cash</option>
                        <option value="bkash" <?= $booking->payment_method === 'bkash' ? 'selected' : '' ?>>bkash</option>
                        <option value="nagod" <?= $booking->payment_method === 'nagod' ? 'selected' : '' ?>>Nagod</option>
                        <option value="ssl" <?= $booking->payment_method === 'ssl' ? 'selected' : '' ?>>SSL Commeerz
                        </option>
                        <option value="cheque" <?= $booking->payment_method === 'cheque' ? 'selected' : '' ?>>Cheque
                        </option>

                    </select>

                </div>
                <button type="submit" class="btn btn-primary" style="text-align: center">Confirm</button>
            </form>

        </div>

    </div>
    <div style="height: 50px">


    </div>
@endsection
