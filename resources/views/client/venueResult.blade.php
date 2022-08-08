
    <div class="container">
        <div class="row justify-content-center">

            <!-- Single Rooms Area -->
            @foreach ($list as $item)
                <div class="col-12 col-md-6 col-lg-4">
                   
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img"
                            style="background-image: url({{ URL::asset('storage/images') }}/{{$item->image}});"></div>
                        <!-- Price -->
                        <p class="price-from">From {{round($item->price)}}Tk/Day</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>{{$item->name}}</h4>
                            <p>{{$item->description}}</p>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Book Event</a>
                    </div>
                    
                </div>
                @endforeach
        </div>
    </div>

