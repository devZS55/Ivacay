@extends('guider.layouts.main')
@section('content')


<div class="price_main">
            <div class="container">
              <div class="row">
                @foreach($plans as $plan)
                <div class="col-sm-3 col-md-3">
                  <div class="packagesbox wow fadeInUp {{ $plan->id == $current_plan ? 'my_color' : ''}}" style="{{ $plan->id == $current_plan ? 'background: #101954; color: #fff;' : ''}}" data-wow-duration="0.6s" data-wow-delay="0.6s"> 
                    <small>{{$plan->title}}</small>                            
                      <!-- <h5><del>$500.00</del> 60% off !</h5> -->
                      <span>${{$plan->price}}</span>
                    <div class="scrollbar" id="style-3">
                    <ul class="my_colr">
                      <li>Duration {{$plan->duration}} days</li>
                      <li>Packages limit {{$plan->no_of_packages < 10 ? $plan->no_of_packages : 'infinity'}}</li>
                      <li> 1 jQuery Slider Banner</li>
                      <li> Contact/Query Form</li>
                      <li> 48 to 72 hours TAT</li>
                      <li> Complete Deployment</li>
                      <li> 100% Satisfaction Guarantee</li>
                      <li> 100% Unique Design Guarantee</li>
                      <li> 100% Money Back Guarantee *</li>              
                    </ul>
                    </div>
                    @if($plan->id > $current_plan)
                      <a href="{{route('Guider_stripe_form', $plan->id)}}" class="btn btn-primary">GET STARTED</a>
                      @else
                      <span> _ </span>
                    @endif
                  </div>
                </div>
                @endforeach
                <div class="col-sm-3 col-md-3">
                  <div class="packagesbox wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s"> 
                    <small>Alternative</small>                            
                      <!-- <h5><del>$19.99 - $199</del> 60% off !</h5> -->
                      <span>$19.99-$199</span>
                    <div class="scrollbar" id="style-3">
                    <ul>
                      <li> 5 Page Website</li>
                      <li> 5 Stock Photos</li>
                      <li> 3 Banner Design</li>
                      <li> 1 jQuery Slider Banner</li>
                      <li> FREE Google Friendly Sitemap</li>
                      <li> 48 to 72 hours TAT</li>
                      <li> Complete Deployment</li>
                      <li> 100% Satisfaction Guarantee</li>
                      <li> 100% Unique Design Guarantee</li>
                      <li> 100% Money Back Guarantee *</li>
                      <li> CMS will be Additional $250*</li>
                    </ul>
                    </div>
                    <a href="{{route('Guider_alternate_membership_plan')}}" class="btn btn-primary">GET STARTED</a>
                  </div>
                </div>
                <!-- <div class="col-sm-3 col-md-3">
                  <div class="packagesbox wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s"> 
                    <small>Corporate</small>                            
                      <h5><del>$1750.00</del> 60% off !</h5>
                      <span>$699.00</span>
                    <div class="scrollbar" id="style-3">
                    <ul>
                      <li> 10 Unique Pages Website</li>
                      <li> CMS Integration</li>
                      <li> Custom WordPress Backend</li>
                      <li> 8 Stock images</li>
                      <li> 5 Banner Design</li>
                      <li> 1 jQuery Slider Banner</li>
                      <li> FREE Google Friendly Sitemap</li>
                      <li> 48 to 72 hours TAT</li>
                      <li> Complete Deployment</li>
                      <li> 100% Satisfaction Guarantee</li>
                      <li> 100% Unique Design Guarantee</li>
                      <li> 100% Money Back Guarantee *</li>
                    </ul>
                    </div>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">GET STARTED</a>
                  </div>
                </div> 
                <div class="col-sm-3 col-md-3">
                  <div class="packagesbox wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s"> 
                    <small>Corporate</small>                            
                      <h5><del>$1750.00</del> 60% off !</h5>
                      <span>$699.00</span>
                    <div class="scrollbar" id="style-3">
                    <ul>
                      <li> 10 Unique Pages Website</li>
                      <li> CMS Integration</li>
                      <li> Custom WordPress Backend</li>
                      <li> 8 Stock images</li>
                      <li> 5 Banner Design</li>
                      <li> 1 jQuery Slider Banner</li>
                      <li> FREE Google Friendly Sitemap</li>
                      <li> 48 to 72 hours TAT</li>
                      <li> Complete Deployment</li>
                      <li> 100% Satisfaction Guarantee</li>
                      <li> 100% Unique Design Guarantee</li>
                      <li> 100% Money Back Guarantee *</li>
                    </ul>
                    </div>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">GET STARTED</a>
                  </div>
                </div>                      -->
              </div>
            </div>  
          </div>
        </div>

 
@endsection


@push('css')

<style>

/*packages page css start */
.my_color ul li {
    color: #fff !important;
}
.packagesbox:hover, .hoverpackage {
  transition: all .5s ease;
  background: #101954;
}
.packagesbox {
    box-shadow: rgb(0 0 0 / 46%) 1px 1px 10px;
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    transition: all 0.5s ease-in-out;
    min-height: 540px;
}


.packagesbox small {
  color: #32004a;
  display: block;
  text-align: center;
  font-size: 24px;
  font-weight: 600;
}

.packagesbox:hover small {
  color: #fff;
}

.packagesbox:hover h5 {
  color: #fff;
}

.packagesbox span {
  color: #f8c22c;
  display: block;
  text-align: center;
  font-size: 35px;
  font-weight: 600;
}

.packagesbox:hover ul li {
  color: #fff;
}

.packagesbox ul li {
  color: #32004a;
  font-size: 14px;
  font-weight: 500;
  margin: 0 0 10px;
}

.btn-primary:hover {
  color: #fff;
  background: #3d0657;
  border-color: #3d0657;
}

.scrollbar {
  float: left;
  height: 290px;
  overflow-y: scroll;
  width: 100%;
  overflow-x: hidden;
  background: 0 0;
  margin: 10px 0 40px;
}

.packagesbox a {
  display: table;
  margin: 0 auto;
}

.btn-primary {
  color: #fff;
  border-color: #c653ff;
  padding: 13px 30px;
  background-image: linear-gradient(to right, #32004a, #c653ff);
  background-color: #c653ff;
}

.btn-primary:hover {
  color: #fff;
  background: #f8c22c;
  border-color: #f8c22c;
}

.packagesbox:hover h5 {
  color: #fff;
}.packagesbox:hover .btn-primary {
      border-color: #f8c22c;      background-color: #f8c22c;

}

.packagesbox h5 {
  text-align: center;
  margin: 10px 0 10px 0;
}

#style-3::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
background: #3d0657
}

#style-3::-webkit-scrollbar {
width: 4px;
background: #0a021d
}

#style-3::-webkit-scrollbar-thumb {
background: #f8c22c;
}

.btn-primary {
  color: #fff;
  border-color: #0a021d;
  padding: 13px 30px;
  background: #0a021d;
}

.price_main {
  padding: 2% 0;
}
</style>
@endpush