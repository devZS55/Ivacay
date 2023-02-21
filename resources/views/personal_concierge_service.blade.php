@extends('layouts.main')
@section('content')


<!-- banner start -->
<section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center ">
                        <h3> shared service deal</h3>
                        <div class="pack_price">
                        <h5>Package Price <small>$150</small></h5>
                      </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    
    <!-- Log In Start -->
    <section class="activities">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="acti_img"> 
              <h3>Activity 1 </h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, modi temporibus doloremque earum iure incidunt minima magni quae delectus reprehenderit et qui maxime quibusdam fugit cumque consequatur deleniti ut quos.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, modi temporibus doloremque earum iure incidunt minima magni quae delectus reprehenderit et qui maxime quibusdam fugit cumque consequatur deleniti ut quos.</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="acti_img"> 
              <img src="{{asset('images/gl1.jpg')}}" class="img-fluid" alt="">
            </div>
          </div> 
        </div>        
        <div class="row revrt">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="acti_img"> 
              <h3>Activity 2 </h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, modi temporibus doloremque earum iure incidunt minima magni quae delectus reprehenderit et qui maxime quibusdam fugit cumque consequatur deleniti ut quos.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, modi temporibus doloremque earum iure incidunt minima magni quae delectus reprehenderit et qui maxime quibusdam fugit cumque consequatur deleniti ut quos.</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="acti_img"> 
              <img src="{{asset('images/gl2.png')}}" class="img-fluid" alt="">
            </div>
          </div> 
        </div>        
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="acti_img"> 
              <h3>Activity 3 </h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, modi temporibus doloremque earum iure incidunt minima magni quae delectus reprehenderit et qui maxime quibusdam fugit cumque consequatur deleniti ut quos.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, modi temporibus doloremque earum iure incidunt minima magni quae delectus reprehenderit et qui maxime quibusdam fugit cumque consequatur deleniti ut quos.</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="acti_img"> 
              <img src="{{asset('images/gl3.jpg')}}" class="img-fluid" alt="">
            </div>
          </div> 
        </div> 
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

          </div>
        </div>       
      </div>
    </section>
    <!-- Log In End -->


@endsection
