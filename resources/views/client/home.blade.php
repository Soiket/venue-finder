@extends('client.app')

@section('client_main')
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ asset('client/img/bg-img/bg-1.jpg') }});">
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">The Vacation Heaven</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla
                                    dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp"
                                    data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ asset('client/img/bg-img/bg-2.jpg') }});">
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">A place to remember</h2>
                                <p data-animation="fadeInUp" data-delay="700ms"></p>
                                <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp"
                                    data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ asset('client/img/bg-img/bg-3.jpg') }});">
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Enjoy your life</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at
                                    rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp"
                                    data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="book-now-form">
                        <form action="{{ route('venueSearch') }}" method="GET">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select1">Venue Name</label>
                                <input type="search" name="name" id="venue_name" height="100px"
                                    placeholder=" Looking for a venue....">
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select1">Select Division</label>
                                <select class="" id="division" name="division">
                                    <option value="">Select One</option>
                                    @foreach ($division as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select2">Select Zone</label>
                                <select name="zone" id="zone" class="">
                                    <option value="all">Select One</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Search</button>
                            <button style="background-color: rgb(27, 27, 27)" class="btn btn-info" type="reset"
                                id="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="rooms-area section-padding-100-0" id="result">
    </section>
    <!-- ##### Book Now Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="about-text text-center mb-100">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>A place to remember</h2>
                        </div>


                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <h4><strong>Intercontinental</strong></h4>
                                            <p style="text-align: left">
                                                Located in the prestigious downtown business district, InterContinental
                                                Dhaka is the foremost name of luxury. The hotel is beautifully designed
                                                boasted with Millennium modern outlook with a touch of local culture.
                                                Featuring 226 luxury rooms and suites, a selection of restaurants offering
                                                exquisite cuisines. Host your events at the meeting spaces equipped with
                                                modern facilities. Our outdoor temperature-controlled swimming pool and
                                                Health Club is a perfect destination for business or leisure.

                                            </p>
                              </div>
                              <div class="carousel-item">
                                <h4>Bangabandhu International Conference Center:</h4>
                                <p style="text-align: left">
                                    Bangabandhu International Conference Center (BICC) is the only multi-purpose
                                    convention facility in the country, having 17 (seventeen) venues for holding
                                    small to large scale events, i.e, state functions, social events, seminars,
                                    conferences, product launches, annual general meetings, fairs, exhibitions,
                                    cultural programs, reality shows, etc. BICC has been the venue for many renowned
                                    economic, social and cultural events. It has proudly hosted a number of
                                    international conferences and summits.
                                </p>
                              </div>
                              <div class="carousel-item">
                                <h4>International Convention City Bashundhara:</h4>
                                            <p style="text-align: left">
                                                (ICCB) is the only integrated and mega facility in the country that was built
                                                with a view to redefine the scope and standard of domestic service industry. It
                                                came into operation on January 1, 2015. It is perfect option for sociocultural,
                                                corporate, educational, commercial, national and international events of any
                                                type.<br>
    
                                                Having more than 650 thousand square feet of covered space within its four
                                                beautifully designed halls supported by ample open space for purposeful usage,
                                                the facility is equipped to host big crowd events for up to 20 thousand
                                                guests at a time.
                                            </p>
                              </div>
                            </div>
                           
                           
                          </div>
                  


                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail homepage mb-100">
                        <!-- First Img -->
                        <div class="first-img wow fadeInUp" data-wow-delay="100ms">
                            <img src="{{ asset('client/img/s4.jpg') }}" alt="">
                        </div>
                        <!-- Second Img -->
                        <div class="second-img wow fadeInUp" data-wow-delay="300ms">
                            <img src="{{ asset('client/img/s3.jpg') }}" alt="">
                        </div>
                        <!-- Third Img-->
                        <div class="third-img wow fadeInUp margin-top:-5%" data-wow-delay="500ms">
                            <img src="{{ asset('client/img/s2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Pool Area Start ##### -->
    <section class="pool-area section-padding-100 bg-img bg-fixed"
        style="background-image: url({{ asset('client/img/s1.jpg') }});">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="pool-content text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="section-heading text-center white">
                            <div class="line-"></div>
                            <h2>Saint Martin's Island</h2>
                            <p>Saint Martin's Island has become a tourist spot, and five shipping liners run daily trips to
                                the island. Tourists can book their trip either from Chittagong or from Cox's Bazar. The
                                surrounding coral reef has an extension named Chera Dwip. A small bush is there, which is
                                the only green part. People do not live on this part, so it is advisable for the tourists to
                                go there early and come back by afternoon.</p>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-cocktail-1"></i>
                                    <p>Pool Beachbar</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-swimming-pool"></i>
                                    <p>Infinity Pool</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-beach"></i>
                                    <p>Sunbeds</p>
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Pool Area End ##### -->

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Choose a room</h2>
                        <br>
                        <br>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img"
                            style="background-image: url({{ asset('client/img/s5.jpg') }});"></div>
                        <!-- Price -->
                        <p class="price-from">From $150/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Deluxe Room</h4>
                            <p>Well-appointed Deluxe rooms offer excellent amenities including a fully equipped kitchen with
                                microwave, free Wi-Fi and 40-inch LED TV, ensuring that you have a comfortable stay in
                                Dhaka.
                                City view
                                Work space
                                Ideal for 2 adults and 1 child or 2 adults
                                King or twin beds
                                Complimentary toiletries
                                Bathrobes and slippers
                                Towels
                            </p>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img"
                            style="background-image: url({{ asset('client/img/s6.jpg') }});"></div>
                        <!-- Price -->
                        <p class="price-from">From $150/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Double Suite</h4>
                            <p>Featuring a plush bed and living space with extra seating, a sleeper sofa, and a TV that can
                                be seen from every angle of the suite. Each studio suite includes a workstation, a wet bar,
                                a refrigerator, and a microwave.
                            </p>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="500ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img"
                            style="background-image: url({{ asset('client/img/s7.jpg') }});"></div>
                        <!-- Price -->
                        <p class="price-from">From $100/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Single Room</h4>
                            <p>Our highly affordable and bestselling single bed room lets you step into a world of comfort,
                                fabricated with plush amenities in the most subtle way. Our Premier Single room rent in
                                Dhaka is one of the most economic rate room appointed with a single bed associated by cosy
                                cornered reading table along with mood controlled lamps; so work or play both can switch
                                when time demands for it.
                            </p>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Rooms Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area d-flex flex-wrap align-items-center">
        <div class="home-map-area">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137"
                allowfullscreen></iframe>
        </div>
        <!-- Contact Info -->
        <div class="contact-info">
            <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                <div class="line-"></div>
                <h2>Contact Info</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri
                    sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum
                    dolor sit amet, consectetur adipiscing.</p>
            </div>
            <h4 class="wow fadeInUp" data-wow-delay="300ms">Los Angeles 1481 Creekside Lane Avila Beach, CA 931</h4>
            <h5 class="wow fadeInUp" data-wow-delay="400ms">+53 345 7953 32453</h5>
            <h5 class="wow fadeInUp" data-wow-delay="500ms">yourmail@gmail.com</h5>
            <!-- Social Info -->
            <div class="social-info mt-50 wow fadeInUp" data-wow-delay="600ms">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->



    <style>
        div#processing {
            display: none;
        }

        div#processing div {
            background: rgba(0, 0, 0, .5);
            position: fixed;
            width: 100vw;
            height: 100vh;
            color: #fff;
            text-align: center;
            vertical-align: middle;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media print {
            a {
                text-decoration: none !important;
                color: #222 !important;
            }

            th {
                font-size: 10px !important;
                padding: 2px !important;
                text-align: center;
            }

            tr {
                font-size: 10px !important;
                margin: 2px !important;
                padding: 2px !important;
            }

            td {
                font-size: 10px !important;
                margin: 2px !important;
                padding: 2px !important;
            }

            table {
                width: 100%;
            }

            .shadow {
                box-shadow: none;
            }

            tr th:last-child {
                display: none !important;
            }

            tr td:last-child {
                display: none !important;
            }
        }
    </style>
@endsection

@section('ajax')
    <script>
        $(document).ready(function() {

            $('#reset').click(function() {
                $('#result').html('');
                $('#zone').html('<option value="all">Select One</option>');
            });
            $('#searchBtn').on('click', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'get',
                    url: '{{ route('venueSearch') }}',
                    data: $('#search').serialize(),
                    success: function(result) {
                        $('#result').html(result);
                    }
                });
            });
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
