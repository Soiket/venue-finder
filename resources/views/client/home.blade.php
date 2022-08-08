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
                        <form action="" id="search">
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
                            <button @click="search" class="btn btn-primary" type="submit" id="searchBtn"><i
                                    class="fa fa-search"></i> Search</button>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris
                            sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus
                            finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem
                            maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus
                            faucibus finibus.</p>
                        <div class="about-key-text">
                            <h6><span class="fa fa-check"></span> Donec malesuada lorem maximus mauris sceleri</h6>
                            <h6><span class="fa fa-check"></span> Malesuada lorem maximus mauris sceleri</h6>
                        </div>
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail homepage mb-100">
                        <!-- First Img -->
                        <div class="first-img wow fadeInUp" data-wow-delay="100ms">
                            <img src="{{ asset('client/img/bg-img/5.jpg') }}" alt="">
                        </div>
                        <!-- Second Img -->
                        <div class="second-img wow fadeInUp" data-wow-delay="300ms">
                            <img src="{{ asset('client/img/bg-img/6.jpg') }}" alt="">
                        </div>
                        <!-- Third Img-->
                        <div class="third-img wow fadeInUp" data-wow-delay="500ms">
                            <img src="{{ asset('client/img/bg-img/7.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Pool Area Start ##### -->
    <section class="pool-area section-padding-100 bg-img bg-fixed"
        style="background-image: url({{ asset('client/img/bg-img/4.png') }});">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="pool-content text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="section-heading text-center white">
                            <div class="line-"></div>
                            <h2>Infinity Pool</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus
                                mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus
                                faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum.</p>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris
                            sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img"
                            style="background-image: url({{ asset('client/img/bg-img/1.jpg') }});"></div>
                        <!-- Price -->
                        <p class="price-from">From $150/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Deluxe Room</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus
                                mauris sceleri sque.</p>
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
                            style="background-image: url({{ asset('client/img/bg-img/8.jpg') }});"></div>
                        <!-- Price -->
                        <p class="price-from">From $150/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Double Suite</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus
                                mauris sceleri sque.</p>
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
                            style="background-image: url({{ asset('client/img/bg-img/9.jpg') }});"></div>
                        <!-- Price -->
                        <p class="price-from">From $100/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Single Room</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus
                                mauris sceleri sque.</p>
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
