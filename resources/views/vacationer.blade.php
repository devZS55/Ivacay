@extends('layouts.main')
@section('content')
    <!-- banner start -->
    <section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center ">
                        <h3> Plan your Vacation</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

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
                                        Planning can make or break your holiday, so it’s best to proceed carefully. We’ve
                                        gathered a
                                        bunch of steps for those of you who need a roadmap to plan travels! Let’s get
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
                                                        <option selected="" hidden="" value="" disabled="">Select Country
                                                        </option>
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}
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
                                                        <option value="Ancient Architecture">Ancient Architecture</option>
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
                                                        <option value="Tropical Rain forests">Tropical Rain forests</option>
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
                                        <img src="{{ asset('images/family_1.jpg') }}" class="img-fluid" alt="">
                                        <small><a href="javascript:void(0)"> Visit geologic sites </a></small>
                                        <input type="checkbox" name="checkbox" id="check_id1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 custom">
                                <div class="family">
                                    <label class="containerd">
                                        <img src="{{ asset('images/family_2.jpg') }}" class="img-fluid" alt="">
                                        <small><a href="javascript:void(0)"> museums</a></small>
                                        <input type="checkbox" name="checkbox" id="check_id2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 custom">
                                <div class="family">
                                    <label class="containerd">
                                        <img src="{{ asset('images/family_3.jpg') }}" class="img-fluid" alt="">
                                        <small><a href="javascript:void(0)"> Landmarks</a></small>
                                        <input type="checkbox" name="checkbox" id="check_id3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 custom">
                                <div class="family">
                                    <label class="containerd">
                                        <img src="{{ asset('images/family_4.jpg') }}" class="img-fluid" alt="">
                                        <small><a href="javascript:void(0)"> Reservation tours</a></small>
                                        <input type="checkbox" name="checkbox" id="check_id4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 custom">
                                <div class="family">
                                    <label class="containerd">
                                        <img src="{{ asset('images/family_5.jpg') }}" class="img-fluid" alt="">
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
                                        <img src="{{ asset('images/family_6.jpg') }}" class="img-fluid" alt="">
                                        <small><a href="javascript:void(0)"> Geologic sites </a></small>
                                        <input type="checkbox" id="check_id11" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="family">
                                    <label class="containerd">
                                        <img src="{{ asset('images/family_7.jpg') }}" class="img-fluid" alt="">
                                        <small><a href="javascript:void(0)"> conservation <br>easements </a></small>
                                        <input type="checkbox" id="check_id22" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="family">
                                    <label class="containerd">
                                        <img src="{{ asset('images/family_8.jpg') }}" class="img-fluid" alt="">
                                        <small><a href="javascript:void(0)"> national parks</a></small>
                                        <input type="checkbox" id="check_id33" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="family">
                                    <label class="containerd">
                                        <img src="{{ asset('images/family_9.jpg') }}" class="img-fluid" alt="">
                                        <small><a href="javascript:void(0)"> bird watching</a></small>
                                        <input type="checkbox" id="check_id44" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="service_btn">
                                    <a id="pcs" class="btn btn-danger"
                                        href="{{ route('UI_personal_concierge_service2') }}">personal concierge service
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
    <section class="main_about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10 centerCol">
                    <div class="about_con">
                        <h2>Step 1: Pick Your Destination</h2>
                        <p>You can’t plan a vacation if you don’t know where you’re headed. Luckily, the ivacay team
                            could give you some ideas about that. Our app and website both have some great destinations
                            listed on them. If you need inspiration, you can provide them with a look. You can also read
                            through our blog to learn more about a destination.
                        </p>




                        <h2>Step 2: Style of Travel</h2>
                        <p>If you haven’t thought about what kind of a trip you’re having, now’s the time. Pick a style of
                            travel and go from there. Some of the most common ones are:</p>
                        <ul>
                            <li><strong>Independent</strong> </li>
                            <li><strong>Self-Drive</strong> </li>
                            <li><strong>Escorted Tours</strong> </li>
                            <li><strong>Backpacker</strong> </li>

                        </ul>












                        <h2>Step 3: Sightseeing</h2>
                        <p>Decide on what you plan on seeing preemptively; that way, you can have an organized itinerary to
                            go through later when you’re on vacation.</p>

                        <h2>Step 4: Activities</h2>
                        <p>Make a list of exciting activities you enjoy: shopping, wine-tasting, bird-watching, diving,
                            resting/relaxing, cycling, walking, skiing, etc.</p>
                        <h2>Step 5: Set Vacation Travel Dates</h2>
                        <p>Depending on your schedule and plans, you might have to arrange for specific traveling windows.
                            Things to consider when selecting dates are:</p>
                        <ul>
                            <li><strong>Climate & Seasons</strong> </li>
                            <li><strong>Public & School Holidays</strong> </li>
                            <li><strong>Airfare Pricing</strong> </li>

                        </ul>

                        <h2>Step 6: Places to Visit</h2>
                        <p>Finding places to visit in a foreign area could be challenging. Luckily, ivacay matches
                            vacationers with <strong> local tour guides </strong> who know every nook and cranny in their
                            respective areas. With our services, your trip becomes much more memorable.</p>


                        <h2>Step 7: Accommodation</h2>
                        <p>Next, you need to find the most suitable accommodation at your destination. ivacay offers many
                            different accommodation options to help create a memorable vacation.</p>


                        <h2>Step 8: Logistics & Routing</h2>
                        <p>Logistics play a crucial part in planning your vacation.ivacay partners up with many companies
                            that offer logistics and routing; be sure to check our directory here.</p>


                        <h2>Step 9: Vacation Design & Price</h2>
                        <p>After deciding on the specifics of your vacation, you can give us a call for price inquiries.
                            We’ll put everything together and draft up a price for you. Then, you can pay via your credit
                            card, debit card, or crypto of your choice</p>
                        <h2>Step 10: Booking
                        </h2>
                        <p>Once you make sure that you’ve planned everything thoroughly, you can get in touch
                            with us to book your trip, lodgings, and more. <br>Happy Travels!
                        </p>

                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- Log In End -->
@endsection
