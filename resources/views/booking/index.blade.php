@extends('admin.dashboard.app')

@section('main')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    @if (session()->has('message'))
                        <div style="color:green; float:right">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="card-body">

                        <h5 class="card-title">Manage Booking </h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Venue Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Booking Date</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->venue->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->payment_method }}</td>
                                        @if($item->status == 'pending')
                                        <td style="background-color: rgb(255, 0, 0)" >{{ $item->status }}</td>
                                        @elseif($item->status == 'confirm')
                                        <td style="background-color: rgb(75, 255, 4)" >{{ $item->status }}</td>
                                        @elseif($item->status == 'cancel')
                                        <td style="background-color: rgb(255, 0, 179)" >{{ $item->status }}</td>
                                        @endif
                                        <td>
                                            <button class="btn btn-primary"><a
                                                    href="{{ route('booking.edit', $item->id) }}"
                                                    style="color: aliceblue">Edit</a></button>

                                            {{-- <form  method="post" action="">
                                                @csrf
                                                <button style="margin-inline: 60px;margin-top: -66px;" class="btn btn-danger" type="submit">Delete</button>

                                            </form> --}}

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
                <form>
                    <input type="button" value="Go back!" onclick="history.back()">
                </form>
            </div>
        </div>
    </section>
@endsection
