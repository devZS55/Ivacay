@push('css')
    <style>
        .sel a {
            color: #ffffff;
            font-size: 14px;
        }

        .next_icon {
            position: absolute;
            left: 150px;
            width: 30%;
        }

        .next_icon1 {
            position: absolute;
            top: 0;
            right: 150px;
            width: 30%;
        }

        .next_icon2 {
            position: absolute;
            top: 100px;
            left: 0px;
            right: 0;
        }

        .next_icon3 {
            position: absolute;
            left: 30px;
            right: 0;
            top: 270px;
            width: 60%;
        }

        .icons_3 {
            position: relative;
        }

        .next_icon4 {
            position: absolute;
            top: 270px;
            right: 20px;
            width: 60%;
        }

        .second_foter {
            padding: 7% 0 0;
        }


        .banner_text.text-center h3 {
            text-transform: capitalize;
        }
    </style>
@endpush


@extends('layouts.main')
@section('content')
    <!-- banner start -->
    <section class="main_slider">
        <div class="continer">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 centerCol">
                    <div class="square_img">
                        <img src="{{ asset('images/square.png') }}" class="img-fluid" alt="">
                        <h3><strong>Book</strong> With <strong>Crypto</strong></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="big_img wow fadeInUp" data-wow-duration="2s">
                        <div class="animate-charcter">
                            <h2>Travel</h2>
                        </div>
                        <img src="{{ asset('images/banner_img.png') }}" class="img-circle" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- about sec start  -->
    <section class="about_sec">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="lips_div te text-center">
                        <h3><strong>ivacay</strong></h3>
                        <p>ivacay is your one stop all inclusive company, that offers discounted vacation packages
                            and Customized services for your adventures. We offer local entertainment, excursions and
                            tour guides to your destination. Create your ultimate experience with our interactive easy
                            to use website. Be more by exploring more with ivacay.
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="about_text wow fadeInLeft" data-wow-duration="2s">
                        <h3>About Us</h3>
                        <p>There’s often a stigma around <span>tourism</span>, most people will say that you should try
                            and see all
                            the
                            famous places, but that’s not always the goal. It can be so much more than just doing the
                            rounds
                            at some favorite tourist spots, especially if you’re one of those <span> backpackers</span>
                            who’s looking
                            for a
                            full-fledged adventure. Taking a trip should be a fulfilling activity, not a generic trail
                            of footsteps
                            that you’re expected to follow. At first, going from one place to another may seem like a
                            hassle
                            without those footsteps to track, but we can help you with that</p>
                        <a href="{{ route('UI_about_us') }}" class="btn btn_dashed"> Read More</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="about_img wow fadeInRight" data-wow-duration="2s">
                        <div class="about_slide">

                            <div>
                                <div class="img_1"> <img src="{{ asset('images/ab_11.jpg') }}"
                                        class="img-fluid img1" alt=""></div>
                            </div>
                            <div>
                                <div class="img_1"> <img src="{{ asset('images/ab_12.jpg') }}"
                                        class="img-fluid img1" alt=""></div>
                            </div>
                            {{-- <div>
                                <div class="img_1"> <img src="{{ asset('images/ab_1.jpg') }}"
                                        class="img-fluid img1" alt=""></div>
                            </div> --}}

                        </div>
                        <div class="img_2"><img src="{{ asset('images/ab_21.jpg') }}"
                                class="img-fluid float-left" alt=""></div>
                    </div>
                </div>
            </div>
            <!--       <div class="lips_sec">
                                                <div class="row">
                                                  <div class="col-xs-12 col-sm-12 col-md-12 centerCol">
                                                    <div class="lips_div text-center">
                                                      <h3><strong>Book Your </strong> Destination</h3>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                                                      <div class="input_form">
                                                        <form action="">
                                                          <input type="text" placeholder="Where to go?">
                                                          <select name="" id="">
                                                            <option value="">From</option>
                                                            <option value="">Lorem Ipsum</option>
                                                            <option value="">Lorem Ipsum</option>
                                                          </select>
                                                          <select name="" id="">
                                                            <option value="">To</option>
                                                            <option value="">Lorem Ipsum</option>
                                                            <option value="">Lorem Ipsum</option>
                                                          </select>
                                                          <button type="submit"> Go</button>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div> -->
            <!-- Log In Start -->
            <section class="log_in">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="lips_sec">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                                        <div class="lips_div text-center">
                                            <h3><strong>Plan Your </strong>Vacation</h3>
                                            <p>There are a few key elements that make up a good vacation, and one of them is
                                                planning.
                                                Planning can make or break your holiday, so it’s best to proceed carefully.
                                                We’ve
                                                gathered a
                                                bunch of steps for those of you who need a roadmap to plan travels! Let’s
                                                get
                                                started.
                                            </p>
                                            <div class="input_form">
                                                <form action="{{ route('Vacationer_search_packages') }}" method="POST">
                                                    @csrf
                                                    <ul>
                                                        <li>
                                                            <label for="">Where to go?</label>
                                                            <!-- <input type="search" placeholder="Search Country" id="search" name="country" required> -->
                                                            <select class="sel" name="country_id" required>
                                                                <option selected="" hidden="" value="" disabled="">Select
                                                                    Country
                                                                </option>
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->id }}">
                                                                        {{ $country->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <!-- <input type="text" placeholder="" id="wtg"> -->
                                                        </li>
                                                        <li>
                                                            <label for="">From</label>
                                                            <input name="from_date"
                                                                min="{{ Carbon\Carbon::now()->addDay()->format('Y-m-d') }}"
                                                                type="date" placeholder="" id="fromdate" required>
                                                        </li>
                                                        <li>
                                                            <label for="">To</label>
                                                            <input name="end_date"
                                                                min="{{ Carbon\Carbon::now()->addDay()->format('Y-m-d') }}"
                                                                type="date" placeholder="" id="todate" required>
                                                        </li>
                                                        <li>
                                                            <label for="">Favored scenery</label>
                                                            <!-- <input type="search" placeholder="Search Country" id="search" name="country" required> -->
                                                            <select class="slelct_text" name="activity" required>
                                                                <option value="">Select Favored scenery</option>
                                                                <option value="Ancient Architecture">Ancient Architecture
                                                                </option>
                                                                <option value="Beaches">Beaches</option>
                                                                <option value="Concrete Jungles">Concrete Jungles</option>
                                                                <option value="Deserts">Deserts</option>
                                                                <option value="Forests">Forests</option>
                                                                <option value="Flea Markets">Flea Markets</option>
                                                                <option value="Safari">Safari</option>
                                                                <option value="Volcanic Hotspots">Volcanic Hotspots</option>
                                                                <option value="Wine Country">Wine Country</option>
                                                                <option value="Mountains">Mountains</option>
                                                                <option value="Lake/River fronts">Lake/River fronts</option>
                                                                <option value="Tropical Rain forests">Tropical Rain forests
                                                                </option>
                                                            </select>
                                                            <!-- <input type="text" placeholder="" id="wtg"> -->
                                                        </li>
                                                        <li class="down">
                                                            <label class="text_label" for="">Price</label>
                                                            <input class="text_input" type="number" name="price"
                                                                placeholder="Enter your Max budget" id="fromdate" required>
                                                        </li>
                                                        <li class="down">
                                                            <label class="text_label" for="">Activities</label>
                                                            <input class="text_input" name="activities" type="text"
                                                                placeholder="activities you want to do" id="fromdate">
                                                        </li>
                                                        <li class=" down down_btn">
                                                            <button type="submit">Go</button>
                                                            <!-- <a class="btn btn-danger" id="btn_click"> Go</a> -->
                                                        </li>

                                                    </ul>
                                                </form>
                                                <div id="test"></div>
                                                @push('js')
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#search').on('keyup', function() {
                                                                let x = $(this).val();
                                                                let data = {
                                                                    'search': x
                                                                };
                                                                let url = 'country-for-vacation';

                                                                $.ajax({
                                                                    url: url,
                                                                    data: data,
                                                                    type: 'GET',

                                                                    success: function(data) {
                                                                        res = data;
                                                                        console.log(data);
                                                                        $('#test').html(data);

                                                                    },
                                                                    error: function() {
                                                                        console.log('error');
                                                                    }

                                                                });
                                                            });
                                                        });

                                                        // In your Javascript (external .js resource or <script> tag)
                                                        $(document).ready(function() {
                                                            $('.js-example-basic-single').select2();
                                                        });
                                                    </script>
                                                @endpush
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="deals_you " id="panel">
                                <h3>Activites</h3>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12 custom">
                                        <div class="family">
                                            <label class="containerd">
                                                <img src="{{ asset('images/family_1.jpg') }}" class="img-fluid"
                                                    alt="">
                                                <small><a href="javascript:void(0)"> Visit geologic sites </a></small>
                                                <input type="checkbox" name="checkbox" id="check_id1">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 custom">
                                        <div class="family">
                                            <label class="containerd">
                                                <img src="{{ asset('images/family_2.jpg') }}" class="img-fluid"
                                                    alt="">
                                                <small><a href="javascript:void(0)"> museums</a></small>
                                                <input type="checkbox" name="checkbox" id="check_id2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 custom">
                                        <div class="family">
                                            <label class="containerd">
                                                <img src="{{ asset('images/family_3.jpg') }}" class="img-fluid"
                                                    alt="">
                                                <small><a href="javascript:void(0)"> Landmarks</a></small>
                                                <input type="checkbox" name="checkbox" id="check_id3">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 custom">
                                        <div class="family">
                                            <label class="containerd">
                                                <img src="{{ asset('images/family_4.jpg') }}" class="img-fluid"
                                                    alt="">
                                                <small><a href="javascript:void(0)"> Reservation tours</a></small>
                                                <input type="checkbox" name="checkbox" id="check_id4">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 custom">
                                        <div class="family">
                                            <label class="containerd">
                                                <img src="{{ asset('images/family_5.jpg') }}" class="img-fluid"
                                                    alt="">
                                                <small><a href="javascript:void(0)"> Renactments</a></small>
                                                <input type="checkbox" name="checkbox" id="check_id5">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="service_btn">
                                            <a id="ssd" class="btn btn-danger"
                                                href="{{ route('UI_personal_concierge_service') }}">shared service deal
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="deals_you " id="panel2">
                                <h3>Nature</h3>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="family">
                                            <label class="containerd">
                                                <img src="{{ asset('images/family_6.jpg') }}" class="img-fluid"
                                                    alt="">
                                                <small><a href="javascript:void(0)"> Geologic sites </a></small>
                                                <input type="checkbox" id="check_id11" name="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="family">
                                            <label class="containerd">
                                                <img src="{{ asset('images/family_7.jpg') }}" class="img-fluid"
                                                    alt="">
                                                <small><a href="javascript:void(0)"> conservation <br>easements </a></small>
                                                <input type="checkbox" id="check_id22" name="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="family">
                                            <label class="containerd">
                                                <img src="{{ asset('images/family_8.jpg') }}" class="img-fluid"
                                                    alt="">
                                                <small><a href="javascript:void(0)"> national parks</a></small>
                                                <input type="checkbox" id="check_id33" name="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="family">
                                            <label class="containerd">
                                                <img src="{{ asset('images/family_9.jpg') }}" class="img-fluid"
                                                    alt="">
                                                <small><a href="javascript:void(0)"> bird watching</a></small>
                                                <input type="checkbox" id="check_id44" name="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="service_btn">
                                            <a id="pcs" class="btn btn-danger"
                                                href="{{ route('UI_personal_concierge_service2') }}">personal concierge
                                                service
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- <div class="main_client">
                                                                                                                                                            <h3>What Our Client Says About Us</h3>
                                                                                                                                                            <div class="row">
                                                                                                                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                                                                                                    <div class="client">
                                                                                                                                                                        <h4>Lorem Ipsum</h4>
                                                                                                                                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                                                                                                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                                                                                                                                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                                                                                                                                                            facilisis. </p>
                                                                                                                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                                                                                                                            tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod et dolore
                                                                                                                                                                            magna aliqua. </p>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                                                                                                    <div class="vid_img">
                                                                                                                                                                        <img src="{{ asset('images/vid_img.png') }}" class="img-fluid" alt="">
                                                                                                                                                                        <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=-7aTH9G9ZaE"
                                                                                                                                                                            tabindex="0"><i class="fas fa-circle-play"></i></a>

                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div> -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Log In End -->
        </div>
    </section>
    <!-- about sec start  -->
    <section class="palm_sec">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="eight">
                        <video width="100%" preload="auto" loop="loop" muted="muted" id="videoBanner"
                            class="videoBanner" autoplay>
                            <source src="images/lorem.mp4" type="video/mp4">
                            <source src="images/lorem.mp4" type="video/ogg">
                        </video>
                        <h3>Guest</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="eight">
                        <video width="100%" preload="auto" loop="loop" muted="muted" id="videoBanner"
                            class="videoBanner" autoplay>
                            <source src="images/lorem.mp4" type="video/mp4">
                            <source src="images/lorem.mp4" type="video/ogg">
                        </video>
                        <h3>Host </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10 centerCol">
                    <div class="icon_border wow zoomIn" data-wow-duration="2s">
                        <div class="icon_div ">
                            <img src="{{ asset('images/ic_2.png') }}" class="img-fluid" alt="" />
                            <div class="sel">
                                <a href="{{ route('UI_build_package') }}">Group Travelers</a>
                            </div>
                            <!-- <div class="select">
                                                        <select name="" id="">
                                                          <option>Group Travellers</option>
                                                          <option>lorem</option>
                                                          <option>lorem</option>
                                                          <option>lorem</option>
                                                          <option>lorem</option>
                                                          <option>lorem</option>
                                                        </select>
                                                      </div> -->
                        </div>
                    </div>

                </div>
            </div>
            <div class="icons_3">
                <div class="icon_border next_icon  wow zoomIn" data-wow-duration="2s">
                    <div class="icon_div">
                        <img src="{{ asset('images/ic_1.png') }}" class="img-fluid" alt="" />
                        <!--<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Local Industry</a>-->
                        <div class="sel">
                            <a href="{{ route('UI_vacationer') }}">Individual Travelers</a>
                        </div>
                        <!-- <div class="select">
                                                      <select name="" id="">
                                                        <option>Individual Travellers</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                      </select>
                                                    </div> -->
                    </div>
                </div>
            </div>

            <div class="icons_3">
                <div class="icon_border next_icon1 wow zoomIn" data-wow-duration="2s">
                    <div class="icon_div">
                        <img src="{{ asset('images/ic_3.png') }}" class="img-fluid" alt="" />
                        <div class="sel">
                            <a href="{{ route('UI_for_guide') }}">Budget Travelers</a>
                        </div>
                        <!-- <div class="select">
                                                      <select name="" id="">
                                                        <option> Budget Travellers.</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                      </select>
                                                    </div> -->
                    </div>
                </div>
            </div>

            <div class="icons_3">
                <div class="icon_border next_icon2 wow zoomIn" data-wow-duration="2s">
                    <div class="icon_div">
                        <img src="{{ asset('images/ic_4.png') }}" class="img-fluid" alt="" />
                        <div class="sel">
                            <a href="{{ route('UI_build_package') }}">Build your package</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="icons_3">
                <div class="icon_border next_icon3 wow zoomIn" data-wow-duration="2s">
                    <div class="icon_div">
                        <img src="{{ asset('images/ic_5.png') }}" class="img-fluid" alt="" />
                        <div class="sel">
                            <a href="{{ route('UI_for_guide') }}">Your Concierge</a>
                        </div>
                        <!-- <div class="select">
                                                      <select name="" id="">
                                                        <option>Your Concierge</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                      </select>
                                                    </div> -->
                    </div>
                </div>
            </div>

            <div class="icons_3">
                <div class="icon_border next_icon4 wow zoomIn" data-wow-duration="2s">
                    <div class="icon_div">
                        <img src="{{ asset('images/ic_4.png') }}" class="img-fluid" alt="" />
                        <div class="sel">
                            <a href="{{ route('UI_articles') }}">Your Adventure</a>
                        </div>
                        <!-- <div class="select">
                                                      <select name="" id="">
                                                        <option> Your Adventure</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                        <option>lorem</option>
                                                      </select>
                                                    </div> -->
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection


@push('js')
    <script>
        $(document).ready(function() {

            $("#btn_click").click(function() {

                var wtg = $("#wtg").val();
                var fromdate = $("#fromdate").val();
                var todate = $("#todate").val();

                if (wtg == "" || fromdate == "" || todate == "") {

                    alert("Null Working");
                } else {

                    // alert("Data Filled");

                    $("#panel").css("display", "block");

                    $("#panel2").css("display", "block");
                }

            });

        });

        $(".about_slide").slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 500,
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    </script>
@endpush
