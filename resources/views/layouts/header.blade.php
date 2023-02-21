<!-- header strat -->
<header>
    <div class="topSec">
      <div class="container">
                  <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="light_theme">
              <div class="switch">
                <input type="checkbox" id="myCheck" onclick="myFunction()">
                <label for="myCheck"></label>
              </div>
            </div> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12 ">
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 ">
            <ul class="">
              <li><a href="#"> </a></li>
              <li><a href="#"></a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          </div>
        </div>
      </div>
    </div>
    <div class="menuSec">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6">
            <a href="{{route('UI_index')}}"><img src="{{asset('images/logo.png')}}" alt="img"></a>
          </div>
          <div class="col-md-9 d-none d-md-block">
            <ul id="menu">
              <li><a href="{{route('UI_index')}}">Home</a></li>
              <li><a href="{{route('UI_about_us')}}">About Us</a></li>
              <li><a href="{{route('UI_for_guide')}}">Ultimate Ivacay Deals</a></li>
              <li><a href="{{route('UI_share_experience')}}">Share your ultimate experiences</a></li>
              <!-- <li><a href="{{route('UI_articles')}}">Articles</a></li> -->
              <!-- <li><a href="{{route('UI_faq')}}">FAQ</a></li> -->
              <li><a href="{{route('UI_service_provider')}}">Service Provider</a></li>
              <li><a href="{{route('UI_vacationer')}}">Plan your Vacation</a></li>
              @if(!Auth::check())
                <li><a href="{{route('UI_sign_up')}}"> Sign Up </a></li>
                <!-- <li><a href="{{route('UI_login')}}"> Log In</a></li> -->
              @else
                <li><a href="{{route('UI_logout')}}"> Log Out</a></li>
              @endif
              <!-- <li><a href="{{route('UI_plan_journey')}}" class="btn btn_dashed">Plan Your Journey
                  <i class="fa-solid fa-arrow-right-long"></i></a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header strat -->


    
  