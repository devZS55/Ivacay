@extends('layouts.main')
@section('content')


<!-- banner start -->
<section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <h3> <strong>Sign</strong>Up</h3>
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
                <form action="{{route('UI_create_account')}}" method="POST">
                    @csrf
                    <div class="col-xs-12 col-sm-4 col-md-4 centerCol">
                        <div class="row">
                            <div class="col-md-6 col-md-6">
                                <div class="first_check">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="0" name="user_role"
                                        id="flexRadioDefault1"
                                        >
                                        <label class="form-check-label" for="flexRadioDefault1">I’m a Tourist</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-6">
                                <div class="first_check">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="1" name="user_role"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2"> I’m a Guide</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="log_input ">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="User Name*" required>
                            </div>
                            <div class="form-group log_input cust">
                                <select class="sel" name="country_id" required>
                                    <option selected="" hidden="" value="" disabled="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="number" name="phone" class="form-control" placeholder="Phone No*" required>
                            </div>
                            <!-- <div class="form-group">
                                <input type="name" class="form-control" placeholder="Last  Name*">
                            </div> -->
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="password*" required>
                                <span> <a href="javascript:void(0)" type="button" onclick="showPass()"><i class="fa-regular fa-eye"></i></a></span>
                            </div>
                            <div class="second_check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        I accept the <a href="javascript:void(0)">term of use</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="sign_btn">
                        <button type="submit">Creat Account</button>
                            <!-- <a href="{{route('UI_create_account')}}">Creat Account</a> -->
                        </div>
                        <div class="sing_btn2">
                            <a href="javascript:void(0)">Sign up with Social Network</a>
                        </div>
                        <div class="line">
                            <hr>
                            <strong>or</strong>
                            <h6>Already have an account? <a href="{{route('UI_login')}}">Log In</a> </h6>
                        </div>

                    </div>
                </from>
            </div>

        </div>
        </div>
    </section>
    <!-- Log In End -->

@endsection


@push('js')
<script>
    function showPass() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
@endpush