@extends('client.app')

@section('client_main')
    <div style="height: 200px">


    </div>

    <div class="container" style="margin-bottom:50px">
        <div class="row">

            <div class="col-md-4">
                <form action="{{ route('venueSearch') }}" method="GET"
                    style="background-color: rgb(255, 175, 4); padding:20px">                   

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
                                    @if($item->image)
                                        <img src="{{ asset('images/venue/'.$item->image) }}" alt="{{ $item->name }}"
                                            class="img-fluid">
                                    @else
                                    <img style="height: 100%" src="https://images.unsplash.com/photo-1551174078-56deb88b8799?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmFuZ2xhZGVzaCUyMGxvY2F0aW9ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
                                    @endif 
                                    
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
