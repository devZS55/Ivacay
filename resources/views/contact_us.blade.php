@extends('layouts.main')
@section('content')


<!-- banner start -->
<section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <h3> <strong>Contact</strong>Us</h3>
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
                <form action="{{route('UI_contact_us')}}" method="POST">
                    @csrf
                    <div class="col-xs-12 col-sm-4 col-md-4 centerCol">
                        <div class="log_input ">
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject*">
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="User Name*">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="E-mail*">
                            </div>
                            <div class="form-group">
                                <input type="text" name="comment" class="form-control" placeholder="Comment*">
                            </div>
                        </div>
                        <div class="sign_btn">
                        <button type="submit">Submit Response</button>
                        </div>
                    </div>
                </from>
            </div>

        </div>
        </div>
    </section>
    <!-- Log In End -->

@endsection
