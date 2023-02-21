@extends('layouts.main')
@section('content')

<!-- banner start -->
<section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center ">
                        <h3>Destination Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    

    <!-- Log In Start -->
    <section class="detail_sec">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
            <div class="ditail_head">
              <h2>New York</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, cum commodi obcaecati veritatis sit in ut labore, beatae earum odit harum? Pariatur veritatis velit perspiciatis, totam deleniti quia! Sed, ea!Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, cum commodi obcaecati veritatis sit in ut labore, beatae earum odit harum? Pariatur veritatis velit perspiciatis, totam deleniti quia! Sed, ea!</p>
              <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pd0">
                  <div class="gallrey_div">
                    <a href="images/gl1.jpg" tabindex="0" data-fancybox="gallery">
                      <img src="{{asset('images/gl1.jpg')}}" class="img-fluid" alt="">
                    </a>
                  </div>
                </div>                
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pd0">
                  <div class="gallrey_div">
                    <a href="images/gl2.png" tabindex="0" data-fancybox="gallery">
                      <img src="{{asset('images/gl2.png')}}" class="img-fluid" alt="">
                    </a>
                  </div>
                </div>                
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pd0">
                  <div class="gallrey_div">
                    <a href="images/gl3.jpg" tabindex="0" data-fancybox="gallery">
                      <img src="{{asset('images/gl3.jpg')}}" class="img-fluid" alt="">
                    </a>
                  </div>
                </div>
              </div>              
              <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pd0">
                  <div class="gallrey_div">
                    <a href="images/gl4.jpg" tabindex="0" data-fancybox="gallery">
                      <img src="{{asset('images/gl4.jpg')}}" class="img-fluid" alt="">
                    </a>
                  </div>
                </div>                
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pd0">
                  <div class="gallrey_div">
                    <a href="images/gl5.jpg" tabindex="0" data-fancybox="gallery">
                      <img src="{{asset('images/gl5.jpg')}}" class="img-fluid" alt="">
                    </a>
                  </div>
                </div>                
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pd0">
                  <div class="gallrey_div">
                    <a href="images/gl6.jpg" tabindex="0" data-fancybox="gallery">
                      <img src="{{asset('images/gl6.jpg')}}" class="img-fluid" alt="">
                    </a>
                  </div>
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, cum commodi obcaecati veritatis sit in ut labore, beatae earum odit harum? Pariatur veritatis velit perspiciatis, totam deleniti quia! Sed, ea!Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, cum commodi obcaecati veritatis sit in ut labore, beatae earum odit harum? Pariatur veritatis velit perspiciatis, totam deleniti quia! Sed, ea!Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, cum commodi obcaecati veritatis sit in ut labore, beatae earum odit harum? Pariatur veritatis velit perspiciatis, totam deleniti quia! Sed, ea!</p>
              <div class="text-center big_text">
                <h2>"Read the basic info and also some fun facts about Australia! Here you will find everything you should know about the ‘’Land of Plenty’’! "</h2>
              </div>

            </div>  
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="form_col">
              <div class="form_main">
                <h3>Newsletter</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae rem, itaque minima, repudiandae in officia,</p>
                <form action="">
                  <div class="form-group">
                    <input type="text" placeholder="">
                  </div>                  
                  <div class="form-group">
                    <input type="text" placeholder="">
                  </div>                  
                  <div class="form-group">
                    <input type="submit" placeholder="">
                  </div>
                </form>
              </div>
            </div> 
            <div class="lattest_div">
              <h4>Latest Posts</h4>
              <div class="post">
                <a href="javascript:void(0)">
                  <img src="{{asset('images/sd_1.jpg')}}" class="img-fluid" alt="">
                  <p>Pellentesque eleifend leo</p>
                  <a href="javascript:void(0)" class="bt">March 13, 2021 Summer</a>
                </a>
              </div>              
              <div class="post">
                <a href="javascript:void(0)">
                  <img src="{{asset('images/sd_2.jpg')}}" class="img-fluid" alt="">
                  <p>Pellentesque eleifend leo</p>
                  <a href="javascript:void(0)" class="bt">March 13, 2021 Summer</a>
                </a>
              </div>              
              <div class="post">
                <a href="javascript:void(0)">
                  <img src="{{asset('images/sd_3.jpg')}}" class="img-fluid" alt="">
                  <p>Pellentesque eleifend leo</p>
                  <a href="javascript:void(0)" class="bt">March 13, 2021 Summer</a>
                </a>
              </div>              
              <div class="post">
                <a href="javascript:void(0)">
                  <img src="{{asset('images/sd_4.jpg')}}" class="img-fluid" alt="">
                  <p>Pellentesque eleifend leo</p>
                  <a href="javascript:void(0)" class="bt">March 13, 2021 Summer</a>
                </a>
              </div>              
            </div>
            <div class="clearfix"></div>
            <div class="scoial_icon">
              <h4>Follow Me</h4>
              <ul>
                <li><a href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa-brands fa-pinterest-p"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Log In End -->


@endsection
