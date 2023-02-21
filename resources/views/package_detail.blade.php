@extends('layouts.main')
@section('content')


    <section class="main_page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12  col-xs-12">
                            <!-- <div class="pro_service">
                                <h6>You’re viewing a verified Pro service</h6>
                                <p>Pro services are offered by professionals we vetted for quality and service.</p>
                                <a href="javascript:void">Learn more</a>
                            </div> -->

                            <div class="fiverr_pro">
                                <!-- <ul>
                                    <li><a href="javascript:void(0)">Fiverr Pro</a><i class="fas fa-chevron-right"></i>
                                    </li>
                                    <li><a href="javascript:void(0)">Graphics & Desig</a><i
                                            class="fas fa-chevron-right"></i></li>
                                    <li><a href="javascript:void(0)">Logo Design</a>
                                    </li>
                                </ul> -->
                                <h3>{{$package_detail->title}}</h3>
                            </div>

                            <!-- <div class="evelinaro">
                                <ul>
                                    <li><img src="{{asset('images/new_awatar.jpg')}}" class="img_fluid" alt=""></li>
                                    <li><a href="javascript:void(0)">evelinaro</a></li>
                                    <li>Level 2 Seller</li>
                                    <li>
                                        <ul>
                                            <li><a href="javascript:void(0)"> <i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-star"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="slider_products">
                                <div class=" slider-for1">
                                @foreach($package_detail->getImages as $img)
                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('packages/'.$img->title)}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('packages/'.$img->title)}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach

                                    <!-- <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_2.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_2.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_3.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_3.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_4.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_4.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_5.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_5.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_6.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_6.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_7.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_7.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_8.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_8.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_9.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_9.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div> -->

                                </div>
                                <div class=" slider-nav1">
                                @foreach($package_detail->getImages as $img)
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"> <img src="{{asset('packages/'.$img->title)}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    @endforeach
                                <!--<div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('images/slick_2.jpg')}}" class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_3.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_4.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_5.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_6.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_7.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_8.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_9.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div> -->

                                </div>


                            </div>

                            <!-- <div class="this_seller">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <div class="seller_head">
                                            <h5>What people loved about this seller</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 col-xs-12">
                                        <div class="revi">
                                            <a href="javascript:voif(0)">See all reviews</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="second_slider">
                                            <div>
                                                <div class="first_order">
                                                    <div class="row">
                                                        <div class="col-md-1 col-sm-1 col-xs-12"> <span>a</span></div>
                                                        <div class="col-md-11 col-sm-11 col-xs-12">
                                                            <h6>alexandermsllc</h6>
                                                            <img src="{{asset('images/us_flag.png')}}" class="img-fluid" alt="">
                                                            <h5>United States</h5>

                                                            <ul>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li>5</li>
                                                            </ul>
                                                            <p>This was my first order from Fiverr and my first time
                                                                working
                                                                with Evelina. I could not recommend her enough! She was
                                                                incredibly knowledgeable and kind through out the
                                                                process,
                                                                provided extra support and advised the how and why of
                                                                her
                                                                decisions while allowing me choices. She also delivered
                                                                8 days
                                                                early!</p>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div>
                                                <div class="first_order">
                                                    <div class="row">
                                                        <div class="col-md-1 col-sm-1 col-xs-12"> <span>a</span></div>
                                                        <div class="col-md-11 col-sm-11 col-xs-12">
                                                            <h6>alexandermsllc</h6>
                                                            <img src="{{asset('images/us_flag.png')}}" class="img-fluid" alt="">
                                                            <h5>United States</h5>

                                                            <ul>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li>5</li>
                                                            </ul>
                                                            <p>This was my first order from Fiverr and my first time
                                                                working
                                                                with Evelina. I could not recommend her enough! She was
                                                                incredibly knowledgeable and kind through out the
                                                                process,
                                                                provided extra support and advised the how and why of
                                                                her
                                                                decisions while allowing me choices. She also delivered
                                                                8 days
                                                                early!</p>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="this_gig">
                                <h6>About This Package</h6>
                                <p>Title:   {{$package_detail->title}}</p>
                                <p>Description:     {{$package_detail->description}}</p>
                                <p>Price:   ${{$package_detail->price}}</p>
                                <p>Guider:  {{$package_detail->getUser->username}}</p>
                                <p>Is your brand a Modern Day Parisienne or do you go for Powerful Elegance? Artistic
                                    Souls and Sophisticated Minimalists will find something for themselves too.</p>
                                <p>You can choose 1 of 5 logo styles and then mix and match your preferred color palette
                                    (or submit your own) and pick one of the icons. I will add a recommended selection
                                    of fonts and create brand identity guidelines to "get your business out there"
                                    effortlessly and in style.</p>
                                <p>The aesthetic of this offer will suit well for Lifestyle Brands - fashion, beauty,
                                    wellness, property, hospitality sectors but also solopreneurs such as coaches and
                                    creatives who want to look modern, elegant but also professional. </p>
                                <p><span>To see all the mix and match options, send me a message LOGO GUIDE to receive a
                                        full pdf presentation. You can also see it at bit.ly/bsp_guide</span></p>
                                <p>Premium Option includes editable brand guidelines together with video instructions on
                                    how to change logo colors, brand fonts, and export social media graphics.</p>
                                <p>Let me know if you have any questions, always happy to chat!</p>
                                <hr>
                                <h5>Style</h5>
                                <strong>Minimalist</strong>
                    <a href="{{route('Vacationer_stripe_form', $package_detail->id)}}" >Book Now</a>

                            </div>

                            <!-- <div class="your_options">
                                <h3>How it works</h3>
                                <p>Here are the steps to complete your <span>Basic package</span> project: <i
                                        class="fa-solid fa-circle-info"></i></p>

                                <div class="logo_stylesheet">
                                    <small>01</small>
                                    <h4>1. Choose your options</h4>
                                    <p>Message me "Logo Guide" or go to bit.ly/bsp_guide to see all the
                                        logo/color/brand
                                        icon options you can choose from. </p>
                                </div>
                                <div class="logo_stylesheet">
                                    <small>02</small>
                                    <h4>1. Choose your options</h4>
                                    <p>Message me "Logo Guide" or go to bit.ly/bsp_guide to see all the
                                        logo/color/brand
                                        icon options you can choose from. </p>
                                    <a href="javascript:void">See More</a>
                                </div>




                            </div>

                            <div class="cus_eight1">
                                <h2>Exceptional service, vetted by our team</h2>
                                <p>We verify each of our Pro sellers to make sure they put all their talent, expertise,
                                    and passion into your project, and that you get what you expected and beyond.</p>
                                <p>As a Pro customer, you get 24/7 VIP support and 1h response time for any query for
                                    100% satisfaction.</p>
                                <a href="javascriptvoid:(0)">Learn more</a>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="cus_eight2">
                                        <h3>About The Seller</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cus_eight3">
                                        <img src="{{asset('images/women_1.jpg')}}" class="img-fluid">
                                        <a href="javascriptvoid:(0)"></a>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-12">
                                    <div class="cus_eight3">
                                        <a href="javascriptvoid:(0)">evelinaro</a>
                                        <h6>Modern and Elevated Design for Premium Lifestyle Brands</h6>
                                        <ul>
                                            <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="">5</a></li>
                                            <li>(68)</li>

                                        </ul>
                                        <button>Contact Me</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12"></div>
                            </div>
                            <div class="cus_eight6">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Logo Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Book Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Presentation Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Flyer Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Business Cards & Stationery</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Social Media Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Website Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cus_eight7">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="cus_eight5">
                                            <h6>From</h6>
                                            <h5>United Kingdom</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="cus_eight5">
                                            <h6>Member since</h6>
                                            <h5>Jun 2017</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="cus_eight8">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="cus_eight5">
                                                <h6>Avg. response time</h6>
                                                <h5>4 hours</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="cus_eight5">
                                                <h6> Last delivery</h6>
                                                <h5>about 23 hours</h5>
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="cus_eight9">
                                                <p>Hi, I am Evelina, • I work with passionate entrepreneurs who strive
                                                    to build meaningful businesses and provide exceptional, premium
                                                    experiences for their customers. I help them to create a brand image
                                                    that evokes trust and truly reflects the high value of what they do.
                                                    •• My design style tends to be clean and minimalistic yet elevated
                                                    by intentionally crafted detail. ••• Originally from Poland, my
                                                    design sense and branding knowledge were shaped in London where I
                                                    first worked full time with boutique branding agencies and
                                                    contracted as an independent designer for established global brands.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cus_nine1">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="cus_nine2">
                                            <h4>My Portfolio <span>NEW</span></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="cus_nine2">
                                            <a href="javascriptvoid:(0)">View My Portfolio</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="cus_nine3">
                                            <img src="{{asset('images/HOVER_1.png')}}" class="img-fluid" class="image">
                                            <div class="overlay">
                                                <div class="text">View My Portfolio</div>
                                                <i class="fa-solid fa-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="main_table">
                                <h2>Compare Packages</h2>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Package</th>
                                            <th>
                                                <h5>PKR 104,669</h5>
                                                <h6>Basic</h6>
                                                <h4>BRAND IDENTITY</h4>
                                                <p> Logo Brand Icon Color Palette Fonts Selection Brand Guidelines
                                                    Social Media Logo</p>
                                            </th>
                                            <th>
                                                <h5>PKR 133,215</h5>
                                                <h6>Standard</h6>
                                                <h4>BRAND IDENTITY + 5 OPTIONS</h4>
                                                <p> Brand Identity+Start with preview of 5 logo options and choose one
                                                    to receive final files</p>
                                            </th>
                                            <th>
                                                <h5>PKR 169,374</h5>
                                                <h6>Premium</h6>
                                                <h4>BRAND IDENTITY PRO</h4>
                                                <p> Brand Identity Standard + Editable Brand Guidelines</p>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Logo transparency</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Vector file</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Printable file</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3D mockup</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Source file</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Social media kit</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">No. of concepts included</th>
                                            <td class="text-center">1</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">5</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Revisions</th>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Delivery Time</th>
                                            <td>
                                                <div class="last_table">
                                                    <label class="tabel_text">7 days
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="last_table">
                                                    <label class="tabel_text">3 days<br>
                                                        (+PKR 47,577)
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="last_table">
                                                    <label class="tabel_text">7 days
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="last_table">
                                                    <label class="tabel_text">3 days<br>
                                                        (+PKR 47,577)
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="last_table">
                                                    <label class="tabel_text">7 days
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="last_table">
                                                    <label class="tabel_text">3 days<br>
                                                        (+PKR 47,577)
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row">Total</th>
                                            <td class="text-center">
                                                <div class="me_total">
                                                    <h5>PKR 104,669</h5>
                                                    <a href="javascript:void(0)">Select</a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="me_total">
                                                    <h5>PKR 133,215</h5>
                                                    <a href="javascript:void(0)">Select</a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="me_total">
                                                    <h5>PKR 169,374</h5>
                                                    <a href="javascript:void(0)">Select</a>
                                                </div>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="cus_nine4">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="cus_nine5">
                                            <h3>Why work with a Pro? Watch Now</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="cus_nine6">
                                            <div class="video-wrapper"><video controls="" autoplay="" loading="lazy">
                                                    <source
                                                        src="https://fiverr-res.cloudinary.com/video/upload/t_direct_hd/v1566729480/static_videos/Fiverr_PRO_2019_promo.mp4.mov"
                                                        type="video/mp4">
                                                </video></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->


                            <!-- Reviews -->
                            <!-- <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="cusone_1">
                                        <ul>
                                            <li><span>8 Reviews</span></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li>5</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="cusone_2">
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By most recent
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">Most recent</a></li>

                                                <li><a class="dropdown-item" href="#">Most relevant</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="custen_1">
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="breakdown-wrapper grid-12">
                                            <table class="stars-counters">
                                                <tbody>
                                                    <tr class="">
                                                        <td><span class="stars-filter-wrapper"><button
                                                                    class="ORLWF8p P+CfLmI L9EM07f co-pro-700 stars-filter"
                                                                    data-impression-collected="true">5
                                                                    Stars</button></span></td>
                                                        <td class="progress-bar-container">
                                                            <div class="T2t2hZx star-progress-bar">
                                                                <div class="+8ZeAtI"><span
                                                                        class="EwNCrd9 star-progress-shape"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="star-num"><a href="javascript:void(0)">(8)</a> </td>
                                                    </tr>
                                                    <tr class="no-rating">
                                                        <td><span class="stars-filter-wrapper"><button
                                                                    class="ORLWF8p _5K4hKRK L9EM07f co-grey-500 stars-filter JiQ7F53"
                                                                    disabled="" data-impression-collected="true">4
                                                                    Stars</button></span></td>
                                                        <td class="progress-bar-container">
                                                            <div class="T2t2hZx star-progress-bar">
                                                                <div class="+8ZeAtI"><span
                                                                        class="EwNCrd9 star-progress-shape"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="star-num">(0)</td>
                                                    </tr>
                                                    <tr class="no-rating">
                                                        <td><span class="stars-filter-wrapper"><button
                                                                    class="ORLWF8p _5K4hKRK L9EM07f co-grey-500 stars-filter JiQ7F53"
                                                                    disabled="" data-impression-collected="true">3
                                                                    Stars</button></span></td>
                                                        <td class="progress-bar-container">
                                                            <div class="T2t2hZx star-progress-bar">
                                                                <div class="+8ZeAtI"><span
                                                                        class="EwNCrd9 star-progress-shape"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="star-num">(0)</td>
                                                    </tr>
                                                    <tr class="no-rating">
                                                        <td><span class="stars-filter-wrapper"><button
                                                                    class="ORLWF8p _5K4hKRK L9EM07f co-grey-500 stars-filter JiQ7F53"
                                                                    disabled="" data-impression-collected="true">2
                                                                    Stars</button></span></td>
                                                        <td class="progress-bar-container">
                                                            <div class="T2t2hZx star-progress-bar">
                                                                <div class="+8ZeAtI"><span
                                                                        class="EwNCrd9 star-progress-shape"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="star-num">(0)</td>
                                                    </tr>
                                                    <tr class="no-rating">
                                                        <td><span class="stars-filter-wrapper"><button
                                                                    class="ORLWF8p _5K4hKRK L9EM07f co-grey-500 stars-filter JiQ7F53"
                                                                    disabled="" data-impression-collected="true">1
                                                                    Star</button></span></td>
                                                        <td class="progress-bar-container">
                                                            <div class="T2t2hZx star-progress-bar">
                                                                <div class="+8ZeAtI"><span
                                                                        class="EwNCrd9 star-progress-shape"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="star-num">(0)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="ranking">
                                            <h6 class="text-display-7">Rating Breakdown</h6>
                                            <ul>
                                                <li>Seller communication level<span>5<span
                                                            class="review-star rate-10 show-one"></span></span>
                                                </li>
                                                <li>Recommend to a friend<span>5<span
                                                            class="review-star rate-10 show-one"></span></span>
                                                </li>
                                                <li>Service as described<span>5<span
                                                            class="review-star rate-10 show-one"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Reviews -->
                        </div>

                    </div>


                    <!-- <div class="filter">
                        <h1>Filters</h1>
                        <form action="/action_page.php">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">Show only reviews with delivery images (5)</label>
                        </form>
                    </div>
                    <div class="cus_nine9">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="cus_nine8">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="cus_nine10">
                                    <ul>
                                        <li>alexandermsllc</li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span>5</span></li>
                                    </ul>
                                    <ul class="nine_1">
                                        <li><img src="{{asset('images/us_flag.png')}}" class="img-fluid">United States
                                        </li>
                                    </ul>
                                    <p>This was my first order from Fiverr and my first time working with
                                        Evelina. I could not recommend her enough! She was incredibly
                                        knowledgeable and kind through out the process, provided extra support
                                        and advised the how and why of her decisions while allowing me choices.
                                        She also delivered 8 days early! I am very happy and proud to use the
                                        logo/branding she designed. I can not wait to get started. I would very
                                        much recommend working with Evelina.</p>
                                    <span>Published 1 month ago</span>
                                    <div class="helpful">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i>
                                                    Helpful</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-thumbs-down"></i> Not
                                                    Helpful</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="cus_nine11">
                                    <img src="{{asset('images/04_Alxander1.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cus_nine9">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="cus_nine8">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="cus_nine10">
                                    <ul>
                                        <li>adrapergs</li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span>5</span></li>
                                    </ul>
                                    <ul class="nine_1">
                                        <li><img src="{{asset('images/canada.png')}}" class="img-fluid">Canada
                                        </li>
                                    </ul>
                                    <p>Evelina was awesome to work with. She was able to complete the project
                                        prior to the delivery date and was willing to make changes at no
                                        additional cost. The quality of the work is excellent and definitely
                                        exceeded my expectations.</p>
                                    <span>Published 1 month ago</span>
                                    <div class="helpful">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i>
                                                    Helpful</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-thumbs-down"></i> Not
                                                    Helpful</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="cus_nine11">
                                    <img src="{{asset('images/thumbnil.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cus_nine9">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="cus_nine8">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="cus_nine10">
                                    <ul>
                                        <li>gabrielasiran</li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span>5</span></li>
                                    </ul>
                                    <ul class="nine_1">
                                        <li><img src="{{asset('images/romania.png')}}" class="img-fluid">Romania
                                        </li>
                                    </ul>
                                    <p>Stellar communication, proactive engagement, Evelina came up with great
                                        suggestions and ideas, very prompt, professional. Delivered exactly what
                                        I was looking for, highly recommend.</p>
                                    <span>Published 1 month ago</span>
                                    <div class="helpful">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i>
                                                    Helpful</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-thumbs-down"></i> Not
                                                    Helpful</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="cus_nine11">
                                    <img src="{{asset('images/thumbnil1.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cus_nine9">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="cus_nine8">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="col-md-11 col-sm-11 col-xs-12">
                                <div class="cus_nine10">
                                    <ul>
                                        <li>pandora2210</li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span>5</span></li>
                                    </ul>
                                    <ul class="nine_1">
                                        <li><img src="{{asset('images/australia.png')}}" class="img-fluid">Australia
                                        </li>
                                    </ul>
                                    <p>Supper experience withEvelina! I look forward to working with her i the
                                        future!</p>
                                    <span>Published 1 month ago</span>
                                    <div class="helpful">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i>
                                                    Helpful</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-thumbs-down"></i> Not
                                                    Helpful</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cus_nine9">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="cus_nine8">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="col-md-11 col-sm-11 col-xs-12">
                                <div class="cus_nine10">
                                    <ul>
                                        <li>
                                            townsquareprop</li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span>5</span></li>
                                    </ul>
                                    <ul class="nine_1">
                                        <li><img src="{{asset('images/us_flag.png')}}" class="img-fluid">United States
                                        </li>
                                    </ul>
                                    <p>Evelina is an absolute GEM. Always helpful and always thorough. You could
                                        not ask for me. Thank you so much!</p>
                                    <span>Published 1 month ago</span>
                                    <div class="helpful">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i>
                                                    Helpful</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-thumbs-down"></i> Not
                                                    Helpful</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="see_more">
                                <a href="javascript:void(0)"><i class="fa-solid fa-plus"></i> see more</a>
                            </div>
                            <div class="related_tags">
                                <h3>Related Tags</h3>
                                <ul>
                                    <li><a href="javascript:void(0)"> elegant logo </a></li>
                                    <li><a href="javascript:void(0)"> fashion</a></li>
                                    <li><a href="javascript:void(0)"> minimalist logo </a></li>
                                    <li><a href="javascript:void(0)"> beauty </a></li>
                                    <li><a href="javascript:void(0)"> logo maker</a></li>


                                </ul>
                            </div>
                        </div>
                    </div> -->

                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mb-10">
                    <div class="main_scroll">
                        @foreach($guider_packages as $guider_package)
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 m-20">
                            <div class="my_revie">
                                <div class="pro_main">
                                    @foreach($guider_package->getImages as $key => $img)
                                        @if($key == 0)
                                    <div class="pro_img">
                                                <img src="{{asset('packages/'.$img->title)}}"
                                                    class="img-fluid" alt="">
                                                </div>
                                                @endif
                                            @endforeach

                                    <div class="pro_text">
                                        <div class="webster">
                                            <h4><img src="{{asset('https://fiverr')}}-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/6b705596713956936f7dd1c9176d9cee-1533547927922/7ba0d351-04b3-4826-8a55-7779ec09157c.png"
                                                    class="img-fluid" alt="">{{$guider_package->getUser->username}}</h4>
                                        </div>
                                        <div class="draw">
                                            <a href="{{route('Vacationer_package_detail', $guider_package->id)}}">{{$guider_package->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                        <!-- <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="my_revie">
                                    <div class="pro_main">
                                        <div class="pro_img">
                                            <img src="{{asset('https://fiverr')}}-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/122531603/original/9fae4dd5ff1d22b7247a70538ea51e33458b0dc1.jpg"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="pro_text">
                                            <div class="webster">
                                                <h4><img src="{{asset('https://fiverr')}}-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/6b705596713956936f7dd1c9176d9cee-1533547927922/7ba0d351-04b3-4826-8a55-7779ec09157c.png"
                                                        class="img-fluid" alt="">websutra</h4>
                                            </div>
                                            <div class="draw">
                                                <a href="javascript:void(0)">I will draw a unique logo for your
                                                    enterprise</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="my_revie">
                                    <div class="pro_main">
                                        <div class="pro_img">
                                            <img src="{{asset('https://fiverr')}}-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/122531603/original/9fae4dd5ff1d22b7247a70538ea51e33458b0dc1.jpg"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="pro_text">
                                            <div class="webster">
                                                <h4><img src="{{asset('https://fiverr')}}-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/6b705596713956936f7dd1c9176d9cee-1533547927922/7ba0d351-04b3-4826-8a55-7779ec09157c.png"
                                                        class="img-fluid" alt="">websutra</h4>
                                            </div>
                                            <div class="draw">
                                                <a href="javascript:void(0)">I will draw a unique logo for your
                                                    enterprise</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                </div>



                </div>
            </div>



    </section>


@endsection


@push('css')
    <style type="text/css">
        /* Main Page Css Start */
        .main_page {
            position: relative;
            padding-top: 21%;
        }

        .pro_service {
            background: #000;
            width: 80%;
            position: relative;
            padding: 2%;
        }

        .pro_service::after {
            position: absolute;
            content: '';
            background: url(../images/pro_service_bg.png);
            width: 35%;
            height: 110px;
            right: 0px;
            bottom: -20px;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .pro_service h6 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 16px;
            line-height: 23px;
            color: #fff;
            font-weight: 600;
            margin: 0;
        }

        .pro_service p {
            font-weight: 500;
            color: #ffffff;
            font-size: 14px;
            line-height: 27px;
            margin: 0;
            z-index: 1;
            position: relative;
        }

        .fiverr_pro {
            padding: 5% 0 0;
        }

        .fiverr_pro li {
            display: inline-block;
            padding: 0 10px;
        }

        .fiverr_pro li i {
            padding: 0 0px 0 10px;
            color: #fff;
            font-size: 12px;
        }

        .fiverr_pro li a {
            text-decoration: none;
            color: #fff;
            white-space: initial;
        }

        .fiverr_pro li a:hover,
        a:focus {
            color: #f8c22c;
            text-decoration: underline;
        }

        .fiverr_pro h3 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 27px;
            line-height: 26px;
            color: #ffffff;
            font-weight: 500;
            margin: 0 0 20px;
        }

        .evelinaro li {
            display: inline;
            float: left;
            padding: 0 10px;
        }

        .evelinaro li img {
            width: 100%;
            border-radius: 100%;
        }

        .evelinaro ul {
            margin: 0 0 20px;
            padding: 0;
            list-style-type: none;
            display: flex;
            height: 100%;
            align-items: baseline;
        }

        .evelinaro li a {
            color: #fff;
        }

        .evelinaro li ul li {
            display: inline;
            float: left;
            padding: 0 3px;
        }

        .evelinaro li a:hover {
            color: #f8c22c;
        }

        .evelinaro li ul li a {
            color: #393939;
            font-size: 14px;
        }

        .productlistBox img {
            width: 90%;
            height: 70px;
            object-fit: scale-down;
            margin: 10px auto;
        }

        .slider-nav1 .slick-slide {
            margin: 0px 10px;
        }

        .productMainDetail a img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .productMainDetail a img:hover {
            transform: scale(1.1);
            transition: ease-in-out 0.6s;
        }

        .slider_products .slick-prev:before {
            content: '';
            background: url(../images/left.png) no-repeat;
            display: block;
            height: 40px;
            width: 40px;
            z-index: 5;
        }

        .slider_products .slick-prev {
            left: 30px;
            z-index: 9;
        }

        .slider_products .slick-next:before {
            content: '';
            background: url(../images/right.png) no-repeat;
            display: block;
            height: 40px;
            width: 40px;
        }

        .slider_products .slick-next {
            right: 30px;
            z-index: 9;
        }

        .this_seller {
            padding: 5% 0 0;
        }

        .seller_head h5 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 20px;
            line-height: 25px;
            color: #fff;
            font-weight: 400;
            margin: 0;
        }

        /* //////////////////////////////////////////////////// */
        .second_slider {
            padding: 1% 0;
        }

        .first_order span {
            background-color: #878789;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            float: left;
            margin: 0;
        }

        .first_order h6 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 16px;
            line-height: 23px;
            color: #fff;
            font-weight: 500;
            float: left;
            margin: 0;
        }

        .first_order img {
            width: 3%;
            float: left;
            margin: 0 10px;
        }

        .first_order h5 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 16px;
            line-height: 25px;
            color: #7e7a7a;
            font-weight: 500;
            float: left;
            margin: 0;
        }

        .first_order li {
            float: left;
            margin: 0 0 0 10px;
            color: #f8c22c;
        }

        .first_order p {
            font-weight: 500;
            color: #ffffff;
            font-size: 13px;
            line-height: 20px;
            float: right;
            margin: 13px 0 0;
        }

        .first_order {
            padding: 2%;
            border: 1px solid #343434;
        }

        .this_gig {
            padding: 5% 0;
        }

        .this_gig h6 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 20px;
            line-height: 23px;
            color: #fff;
            font-weight: 500;
            margin: 0 0 22px;
        }

        .this_gig p {
            font-weight: 400;
            color: #ffffff;
            font-size: 14px;
            line-height: 26px;
        }

        .this_gig p span {
            font-weight: 700;
            color: #b1b3b9;
        }

        .this_gig hr:not([size]) {
            height: 1px;
            background: #fff;
        }

        .this_gig h5 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 18px;
            line-height: 15px;
            color: #565656;
            font-weight: 500;
            margin: 0 0 9px;
        }

        .this_gig strong {
            color: #fff;
            font-weight: 400;
        }

        .your_options {
            padding: 6% 0 0;
            position: relative;
        }

        .your_options li h4 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 21px;
            line-height: 29px;
            color: #fff;
            font-weight: 400;
            margin: 0;
        }

        .your_options li p {
            font-weight: 500;
            color: #ffffff;
            font-size: 13px;
            line-height: 37px;
        }

        .your_options h3 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 30px;
            line-height: 34px;
            color: #ffffff;
            font-weight: 500;
            margin: 0 0 10px;
        }

        .logo_stylesheet {
            padding: 3% 0;
        }

        .logo_stylesheet small {
            font-size: 16px;
            color: #000;
            border: 1px solid #fff;
            border-radius: 100%;
            padding: 1%;
            position: absolute;
            background: #fff;
        }

        .logo_stylesheet h4 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 17px;
            line-height: 29px;
            color: #fff;
            font-weight: 400;
            margin: 0 0 0 50px;
        }

        .logo_stylesheet p {
            font-weight: 500;
            color: #ffffff;
            font-size: 13px;
            line-height: 27px;
            margin: 0 0 0 50px;
        }

        .your_options:before {
            position: absolute;
            content: '';
            width: 2px;
            background: #ffffff26;
            height: 50%;
            left: 17px;
            z-index: -1;
            bottom: 20px;
        }

        .your_options:before {
            position: absolute;
            content: '';
            width: 2px;
            background: #ffffff26;
            height: 41%;
            left: 17px;
            z-index: -1;
            bottom: 63px;
        }

        .logo_stylesheet a {
            margin-left: 50px;
            font-size: 16px;
            line-height: 60px;
        }

        /* Qasim Css Start */

        .cus_eight1 {
            background-image: url("./images/bigCerticifate_1.png");
            width: 100%;
            height: 420px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-flow: column;
            margin: 0px 0 50px;
        }

        .eight {
            padding: 5% 0;
        }

        .cus_eight1 h2 {
            color: #fff;
            width: 90%;
            text-align: center;
            font-size: 32px;
            line-height: 42px;
            margin: 0 0px 19px;
        }

        .cus_eight1 p {
            color: #fff;
            text-align: center;
            width: 90%;
            font-size: 16px;
            font-weight: 400;
            margin: 2px 0px 0;
        }

        .cus_eight1 a {
            text-decoration: none;
            color: #f8c22c;
            font-size: 19px;
            margin: 13px 0 0;
            font-weight: 400;
        }

        .cus_eight1 a:hover {
            text-decoration: underline;
        }

        .cus_eight2 h3 {
            color: #fff;
            font-family: Macan, Helvetica Neue, Helvetica, Arial, sans-serif;
            font-weight: 600;
            font-size: 25px;
            line-height: 30px;
            margin: 40px 0;
        }

        .cus_eight3 ul {
            padding: 0;
            list-style: none;
        }

        .cus_eight3 li {
            display: inline-block;
        }

        .cus_eight3 img {
            width: 100%;
            height: 100%;
            border-radius: 100px;
        }

        .cus_eight3 h6 {
            color: #fff;
            font-weight: 500;
            font-size: 18px;
            line-height: 20px;
            margin: 0 0 10px;
        }

        .cus_eight3 a {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
            font-size: 20px;
            line-height: 37px;
        }

        .cus_eight3 li a i {
            color: #f8c22c;
            font-size: 15px;
            margin: 1px;
        }

        .cus_eight3 li a {
            color: #f8c22c;
            font-size: 17px;
            font-weight: 700;
        }

        .cus_eight3 li {
            color: #404145;
            font-weight: 400;
            font-size: 18px;
        }

        .cus_eight3 button {
            background: #0000;
            width: 22%;
            height: 42px;
            color: #404145;
            border: 2px solid #404145;
            border-radius: 6px;
            font-weight: 700;
            font-size: 16px;
        }

        .cus_eight3 button:hover {
            background: #404145;
            color: white;
        }

        .cus_eight6 {
            padding: 5%;
            border: 1px solid #ffffff2b;
            margin: 5% 0 0;
        }

        .cus_eight4 ul {
            list-style: none;
            margin: 0 0 10px;
            padding: 0;
        }

        .cus_eight4 li i {
            color: #fff;
            background: #404145;
            border-radius: 36px;
            height: 18px;
            width: 20px;
            padding: 4px 5px 0;
            font-size: 10px;
            margin-right: 11px;
            text-align: center;
        }

        .cus_eight4 li {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
        }

        .cus_eight7 {
            padding: 3%;
            border: 1px solid #ffffff2b;
        }

        .cus_eight5 h6 {
            color: #fff;
            font-size: 16px;
            font-weight: 400;
            line-height: 23px;
            margin: 0 0 10px;
        }

        .cus_eight5 h5 {
            color: #919191;
            font-size: 14px;
            font-weight: bold;
            line-height: 20px;
            margin: 0;
        }

        .cus_eight8 {
            padding: 2% 0 0;
        }

        .cus_eight8 hr:not([size]) {
            height: 2px;
            color: #ffffff73;
            margin: 19px 11px;
            width: 96%;
        }

        .cus_eight9 p {
            color: #fff;
            font-size: 16px;
            font-weight: 400;
            line-height: 30px;
            width: 96%;
        }

        .cus_nine1 {
            padding: 6% 0;
        }

        .cus_nine2 a {
            text-decoration: none;
            color: #7e7a7a;
            font-size: 17px;
            font-weight: 600;
            float: right;
        }

        .cus_nine2 h4 {
            color: #fff;
            font-size: 21px;
            font-weight: 700;
        }

        .cus_nine2 span {
            background-color: #ff62ad;
            color: #fff;
            font-size: 12px;
            padding: 2px 5px;
            border-radius: 4px;
            font-weight: 700;
        }

        /* hover img  */
        .cus_nine3 {
            position: relative;
        }

        .cus_nine3 img {
            width: 100%;
            height: 120px;
            margin: 10px 0 0;
            border-radius: 9px;
            position: relative;
            object-fit: cover;
        }

        .cus_nine3 i {
            position: absolute;
            right: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            left: 500px;
            top: 50px;
            font-size: 25px;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: 0.5s ease;
            background-color: #00000094;
        }

        .cus_nine3:hover .overlay {
            opacity: 1;
        }

        .text {
            color: #fff;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
            font-weight: 600;
            font-size: 19px;
        }

        .cus_nine2 a:hover {
            color: #f8c22c;
        }

        /* hover end  */
        .main_table h2 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 20px;
            line-height: 40px;
            color: #fff;
            font-weight: 500;
            margin: 0px 0 20px;
        }

        .main_table thead th h5 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 20px;
            line-height: 25px;
            color: #fff;
            font-weight: 500;
            margin: 0 0 10px;
        }

        .main_table thead th {
            width: 25%;
        }

        .main_table thead th h6 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 18px;
            line-height: 23px;
            color: #fff;
            font-weight: 600;
            margin: 20px 0;
        }

        .main_table thead th h4 {
            font-size: 13px;
            font-weight: 700;
            color: #393939;
            line-height: 22px;
        }

        .main_table thead th p {
            font-weight: 500;
            color: #ffffff;
            font-size: 13px;
            line-height: 19px;
        }

        .main_table .table>thead {
            vertical-align: top;
        }

        .main_table .table {
            color: #fff;
            border-color: #dee2e647;
        }

        .main_table tbody tr td i {
            color: #f8c22c;
        }

        .tabel_text {
            display: block;
            position: relative;
            padding-left: 27px;
            margin-bottom: 7px;
            cursor: pointer;
            font-size: 14px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .tabel_text input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkmark {
            position: absolute;
            top: 5px;
            left: 0;
            height: 18px;
            width: 17px;
            background-color: #eee;
            border-radius: 50%;
        }

        .tabel_text:hover input~.checkmark {
            background-color: #ccc;
        }

        .tabel_text input:checked~.checkmark {
            background-color: #2196F3;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .tabel_text input:checked~.checkmark:after {
            display: block;
        }

        .tabel_text .checkmark:after {
            top: 28%;
            left: 0;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
            right: 0;
            margin: 0 auto;
        }

        .main_table tr td .me_total h5 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 17px;
            line-height: 25px;
            color: #fff;
            font-weight: 500;
            margin: 0 0 10px;
        }

        .main_table tr td .me_total a {
            background: #000;
            padding: 6px 50px;
            border: 1px solid #000;
            border-radius: 6px;
            color: #fff;
        }

        .main_table tr td .me_total a:hover {
            color: #f8c22c;
            background: transparent;
        }

        .main_table tbody tr th {
            font-size: 13px;
            font-weight: 500;
        }

        /* New Qasim */
        .cus_nine5 h3 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 20px;
            line-height: 24px;
            color: #ffffff;
            font-weight: 500;
            margin: 40px 0;
        }

        .cus_nine6 video {
            width: 100%;
            height: 401px;
            background: black;
        }

        .faq_sec h3 {
            font-size: 20px;
            line-height: 24px;
            color: #fff;
            font-weight: 600;
            margin: 20px 0;
        }

        .cus_nine8 {
            padding: 7% 0;
        }

        .cus_nine7 .accordion-button:focus {
            color: #000;
            background-color: #fff;
            box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
            font-size: 18px;
            font-weight: 500;
        }

        .cus_nine7 .accordion-button:not(.collapsed) {
            color: #000;
            background-color: #fff;
            box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
            font-size: 18px;
            font-weight: 500;
        }

        .cus_nine7 .accordion-body {
            font-size: 16px;
            width: 100%;
            font-weight: 400;
            color: #000;
        }

        .cus_nine7 .accordion-button {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: 1rem 1.25rem;
            font-size: 18px;
            color: #000;
            text-align: left;
            background-color: #fff;
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
                border-radius 0.15s ease;
            font-weight: 600;
        }

        .cus_nine7 .accordion-header {
            height: 57px;

        }

        .cus_nine7 h3 {
            margin: 0 0 20px;
            color: #fff;
            font-size: 24px;
            font-weight: 600;
        }

        .cus_nine8 span {
            background: #878789;
            border-radius: 53px;
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cus_nine9 {
            padding: 3% 0;
            border-top: 1px solid #ffffff2e;
            border-bottom: 1px solid #ffffff2e;
        }

        .filter h1 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 25px;
            line-height: 60px;
            color: #fff;
            font-weight: 500;
            margin: 0;
        }

        .cus_nine10 ul {
            padding: 0;
            list-style: none;
            margin: 0 0 10px;
        }

        .cus_nine10 li {
            display: inline-block;
        }

        .cus_nine10 li:nth-child(1) {
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            margin-right: 10px;
        }

        .cus_nine10 li i {
            color: #f8c22c;
            font-size: 18px;
            font-weight: 700;
            margin-right: 10px;
        }

        .cus_nine10 li span {
            color: #f8c22c;
            font-size: 19px;
            font-weight: 700;
            margin-left: -6px;
        }

        .cus_nine10 li img {
            width: 15%;
            height: auto;
            margin-right: 11px;
        }

        ul.nine_1 li {
            color: #62646a;
            font-size: 14px;
            font-weight: 600;
        }

        .cus_nine11 img {
            width: 50%;
            height: 54px;
            float: right;
        }

        .cus_nine10 p {
            line-height: 26px;
            color: #fff;
            width: 100%;
            margin: 20px 0 0px;
            font-size: 14px;
            font-weight: 400;
        }

        .helpful li a {
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            margin: 0 10px;
        }

        .helpful li a i {
            margin: 0;
        }

        .cus_nine10 span {
            font-size: 15px;
            line-height: 50px;
        }

        .see_more {
            padding: 3% 0 5%;
        }

        .see_more a i {
            font-size: 11px;
        }

        .see_more a:hover {
            color: #f8c22c;
        }

        .related_tags h3 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 30px;
            line-height: 34px;
            color: #ffffff;
            font-weight: 500;
            margin: 0 0 30px;
        }

        .related_tags li {
            display: inline-block;
        }

        .related_tags li a {
            color: #000;
            background: #fff;
            font-size: 13px;
            font-weight: 500;
            display: table;
            width: 130px;
            text-align: center;
            height: 40px;
            line-height: 39px;
            text-transform: capitalize;
            border-radius: 7px;
            border: 1px solid #fff;
        }

        .related_tags li a:hover {
            background: transparent;
            color: #f8c22c;
            border: 1px solid #f8c22c;
            text-decoration: underline;
        }

        /* /./////////////////////// */

        .stars-counters {
            width: 100%;
        }

        .stars-counters tr {
            white-space: nowrap;
        }

        .stars-counters tr .stars-filter {
            padding: 6px;
            border: none;
            text-align: left;
        }

        .stars-counters .ORLWF8p.L9EM07f {
            background: none;
            border-color: currentColor;
        }

        .stars-counters tr .progress-bar-container {
            width: 79%;
            padding: 0px 10px 0 0px;
            margin: auto;
        }

        .stars-counters .T2t2hZx {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .T2t2hZx .\+8ZeAtI {
            position: relative;
            height: 8px;
            background: #e4e5e7;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            border-radius: 999px;
        }

        .T2t2hZx .EwNCrd9 {
            background: #1dbf73;
            height: 100%;
            position: absolute;
            left: 0;
            z-index: 1;
            border-radius: 999px;
        }

        .is-pro .stars-counters tr .star-progress-bar .star-progress-shape {
            background-color: #02c2a9;
        }

        .cusone_1 li {
            display: inline-block;
            color: #f8c22c;
            font-size: 17px;
            font-weight: 700;
        }

        .cusone_1 li i {
            color: #f8c22c;
            font-size: 17px;
            font-weight: 700;
        }

        .cusone_1 ul {
            padding: 0;
            list-style: none;
        }

        .cusone_1 li span {
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            margin-right: 8px;
        }

        .cusone_2 .dropdown {
            float: right;
        }

        .cusone_2 .btn-secondary {
            color: #fff;
            background-color: #0000;
            border-color: #0000;
            font-size: 20px;
            font-weight: 400;
        }

        .revi a {
            font-size: 14px;
        }

        .product_sec {
            padding: 20% 0 5%;
        }

        .pro_main {
            border: 1px solid #fff;
            transition: all 0.5s ease-in-out;
        }

        .pro_main:hover {
            box-shadow: 0px 0px 9px #ffb000;
            border: 1px solid #ffb000;
        }

        .webster h4 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 18px;
            line-height: 29px;
            color: #ffffff;
            font-weight: 500;
            margin: 0 0 10px;
        }

        .webster h4 img {
            border-radius: 50%;
            width: 30px;
            margin-right: 10px;
        }

        .webster {
            padding: 10px 0px;
        }

        .draw a {
            cursor: pointer;
            color: #f8c22c;
            line-height: 22px;
            font-weight: 400;
            height: 43px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            overflow: hidden;
            padding: 0px 0 10px;
            transition: all 0.5s ease-in-out;
            display: table;
        }

        .draw a:hover {
            color: #ffffff;
        }

        .star a {
            color: #ffb000;
            font-size: 12px;
        }

        .star a span {
            color: #fff;
        }

        .tooll a {
            color: #fff;
            font-size: 12px;
        }

        .heart a {
            color: #fff;
            font-size: 12px;
        }

        .pro_text {
            padding: 10px;
        }

        .borderrr {
            padding: 10px 0;
            border-bottom: 1px solid #fff;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
            opacity: 1;
            color: #ffffff;
            transition: all 0.5s ease-in-out;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 200px;
            background-color: #616161;
            color: #ffb000;
            text-align: center;
            border-radius: 6px;
            padding: 5px 10px;
            position: absolute;
            z-index: 1;
            top: -60px;
            left: 110%;
            transition: all 0.5s ease-in-out;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 150px;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 100%;
            margin-top: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent #605b5b transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }

        .tooll h4 {
            color: #ffffff;
            font-size: 14px;
            text-align: right;
            margin: 0 0 10px;
            line-height: 20px;
        }

        .tooll h5 {
            font-family: 'Poppins', Sans-Serif;
            font-size: 20px;
            line-height: 25px;
            color: #ffffff;
            font-weight: 500;
            margin: 0 0;
            text-align: right;
        }

        .last {
            padding: 20px 0;
        }

        .my_revie {
            margin: 0 0 20px;
        }
    </style>

@endpush

@push('js')
<script>
    // product slider
$(".slider-for1").slick({
    autoplay: true,
    autoplaySpeed: 20000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    asNavFor: ".slider-nav1",
  });
  $(".slider-nav1").slick({
    autoplay: true,
    autoplaySpeed: 20000,
    infinite: true,
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: ".slider-for1",
    dots: false,
    arrows: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          vertical: false,
        },
      },
    ],
  });
</script>
@endpush