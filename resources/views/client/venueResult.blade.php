@extends('client.app')

@section('client_main')
    <div style="height: 200px">


    </div>

    <div class="container" style="margin-bottom:50px">
        <div class="row">

            <div class="col-md-4">
                <form action="{{ route('venueSearch') }}" method="POST"
                    style="background-color: rgb(255, 175, 4); padding:20px">
                    @csrf

                    <div class="form-group">
                        <label for="inputAddress2">Search Venu Name </label>
                        <input type="text" class="form-control" id="venue_name" name="name" placeholder="Venu Name">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputState">Select Division</label>
                            <select class="" id="division" name="division">
                                <option value="">Select One</option>
                                @foreach ($division as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputState">Select Zone</label>
                            <select name="zone" id="zone" class="">
                                <option value="all">Select One</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" style="text-align: center">Search</button>
                </form>

            </div>

            <div class="col-md-8">
                <h4>Searching result for
                    @if (request()->name)
                        {{ request()->name }}
                    @elseif(request()->division && request()->zone)
                        Divions / Zones
                    @endif

                </h4>
                @foreach ($list as $item)
                    <div class="card">
                        <h5 class="card-header"></h5>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-4">

                                    <img style="height: 100%" src="{{ asset('storage/images') }}/{{ $item->image }}">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <a href="{{ $item->location }}" class="card-text" style="color: rgb(0, 60, 255)">Show On
                                        Map <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></a>
                                    <p class="card-text"><b>Address: </b>{{ $item->address }}</p>
                                    <p class="card-text">{{ $item->description }}</p>
                                    <h5 style="" class="card-title"><b>BDT</b> {{ round($item->price) }}</h5>

                                    <a href="{{ route('venuBooking', $item->id) }}" class="btn btn-primary"
                                        style="float: right">Book Now</a>
                                </div>

                            </div>


                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-8 mt-2">
                Total : {{ $list->total() }}
                <div class="float-right">{{ $list->appends(Request::all())->links() }}</div>
            </div>

        </div>
    </div>
    
@endsection
@section('ajax')
    <script>
        $(document).ready(function() {

            $('#division').on('change', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'get',
                    url: '{{ route('getDivsionsZoneList') }}',
                    data: {
                        id: $(this).val()
                    },
                    success: function(result) {
                        console.log(result);
                        $('#zone').html(result);
                    }
                });
            });
        });
    </script>
@endsection
