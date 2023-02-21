@extends('layouts.main')
@section('content')

<!-- banner start -->
<section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <h3> <strong> Log</strong> In</h3>
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
                <div class="col-xs-12 col-sm-4 col-md-4 centerCol">
                    <div class="face">
                        
                        <a href="{{ route('facebook.login') }}">Log in with Facebook</a>
                    </div>
                    <div class="twi">
                        <a href="javascript:void(0)">Log in with Twitter</a>
                    </div>
                    <div class="line">
                        <hr>
                        <strong>or</strong>
                    </div>
                    <div class="log_input">
                        <form action="{{route('UI_loggedin')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="E-mail*">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="password*">
                                <span> <a href="javascript:void(0)" type="button" onclick="showPass()"><i class="fa-regular fa-eye"></i></a></span>
                            </div>
                            <div class="form-group">
                            <button type="submit">Login</button>
                        </form>

                        </div>
                        <h5>Forgot Password</h5>
                        <h6>Don’t have an account? <small><a href="{{route('UI_sign_up')}}"> Sign Up</a></small></h6>

                    </div>
                </div>

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

