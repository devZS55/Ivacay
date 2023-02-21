@extends('layouts.main')
@section('content')

<!-- banner start -->
<section class="main_slider">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="banner_text text-center">
            <h1>Ultimate <span>ivacay</span> Deals </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner end -->


  <section class="about_sec">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div class="about_text wow fadeInLeft" data-wow-duration="2s">
            <h4>We help tourists and guides find each other</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
              lacus vel facilisis. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. sed do eiusmod et dolore magna aliqua. </p>
            <a href="javascript:void(0)" class="btn btn_dashed"> Read More</a>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div class="about_img wow fadeInRight" data-wow-duration="2s">
            <div class="play_div">
              <img src="{{asset('images/ab_3.jpg')}}" class="img-fluid img1" alt="">
              <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=-7aTH9G9ZaE&list=RD-7aTH9G9ZaE&start_radio=1" tabindex="0">    <img src="{{asset('images/play.png')}}" class="img-fluid" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="palm_sec for_guide">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-10 centerCol">
          <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 long">
              <div class="icon_border wow zoomIn" data-wow-duration="2s">
                <div class="icon_div">
                  <img src="{{asset('images/ic_6.png')}}" class="img-fluid" alt="" />
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 long">
              <div class="icon_border wow zoomIn" data-wow-duration="2s">
                <div class="icon_div">
                  <img src="{{asset('images/ic_7.png')}}" class="img-fluid" alt="" />

                </div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <div class="icon_border wow zoomIn" data-wow-duration="2s">
                <div class="icon_div">
                  <img src="{{asset('images/ic_8.png')}}" class="img-fluid" alt="" />
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="service_sec">
    <div class="container">
      <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 centerCol">
          <div class="ser_head text-center">
            <h2>Our<span> Services</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 ">
          <div class="ser_list">
            <ul>
              <li><i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
              <li><i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
              </li>
              <li><i class="fa-solid fa-check"></i> Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
              <li><i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
              <li><i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
              <li><i class="fa-solid fa-check"></i> Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
            </ul>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 ">
          <div class="ser_list">
            <ul>
              <li><i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
              <li><i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
              </li>
              <li><i class="fa-solid fa-check"></i> Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
              <li><i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
              <li><i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
              <li><i class="fa-solid fa-check"></i> Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
