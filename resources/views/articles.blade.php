@extends('layouts.main')
@section('content')


    <!-- banner start -->
    <section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center ">
                        <h3>Articles</h3>
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
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="article_form">
                        <div class="form-group">
                            <input type="email" aria-describedby="emailHelp" placeholder="E-mail*">
                            <button type="submit" class="btn btn-primary"><i
                                    class="fas fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                    <div class="article_ul">
                        <h3>Categories</h3>
                        <ul>
                            <li><i class="far fa-circle-check"></i>Adventure tour</li>
                            <li><i class="far fa-circle-check"></i>Arts and Crafts tour</li>
                            <li><i class="far fa-circle-check"></i>Bird watching tours</li>
                            <li><i class="far fa-circle-check"></i>Children's tour</li>
                            <li><i class="far fa-circle-check"></i>Culture and History tour</li>
                            <li><i class="far fa-circle-check"></i>Diving & snorkeling tour</li>
                            <li><i class="far fa-circle-check"></i>Eco and Wildlife tour</li>
                            <li><i class="far fa-circle-check"></i>Excursion Fishing tour</li>
                            <li><i class="far fa-circle-check"></i>Gourmet & Cooking tour</li>
                            <li><i class="far fa-circle-check"></i>Hiking/Trekking tour</li>
                            <li><i class="far fa-circle-check"></i>Jeep tour</li>
                            <li><i class="far fa-circle-check"></i>Private tour</li>
                            <li><i class="far fa-circle-check"></i>Railway trip</li>
                            <li><i class="far fa-circle-check"></i>Safari Shopping tour</li>
                            <li><i class="far fa-circle-check"></i>Sightseeing Nature tour</li>
                            <li><i class="far fa-circle-check"></i>Walking tour</li>
                            <li><i class="far fa-circle-check"></i>Wine tasting tour</li>
                            <li><i class="far fa-circle-check"></i>Tips for tour guides</li>
                            <li><i class="far fa-circle-check"></i>Phototour</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="article_imgs ">
                        <img src="{{asset('images/article_img1.png')}}" class="img-fluid" alt="">
                        <h6>15 February 2022</h6>
                        <h4>Article Title Here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua sed do eiusmod et dolore magna aliqua. Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. </p>
                        <a href="javascript:void(0)" class="btn btn_dashed">Read More</a>
                    </div>
                    <div class="article_imgs mar_article">
                        <img src="{{asset('images/article_img2.png')}}" class="img-fluid" alt="">
                        <h6>15 February 2022</h6>
                        <h4>Article Title Here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua sed do eiusmod et dolore magna aliqua. Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. </p>
                        <a href="javascript:void(0)" class="btn btn_dashed">Read More</a>
                    </div>
                    <div class="article_imgs mar_article">
                        <img src="{{asset('images/article_img3.png')}}" class="img-fluid" alt="">
                        <h6>15 February 2022</h6>
                        <h4>Article Title Here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua sed do eiusmod et dolore magna aliqua. Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. </p>
                        <a href="javascript:void(0)" class="btn btn_dashed">Read More</a>
                    </div>
                    <div class="article_imgs mar_article">
                        <img src="{{asset('images/article_img4.png')}}" class="img-fluid" alt="">
                        <h6>15 February 2022</h6>
                        <h4>Article Title Here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua sed do eiusmod et dolore magna aliqua. Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. </p>
                        <a href="javascript:void(0)" class="btn btn_dashed">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page_int">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination text-center">
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">...</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">15</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Log In End -->

@endsection

