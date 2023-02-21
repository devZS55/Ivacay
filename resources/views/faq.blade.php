@extends('layouts.main')
@section('content')

<!-- banner start -->
<section class="main_slider">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="banner_text text-center">
            <h1>Faq's</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner end -->

  <section class="faq_sec">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 centerCol">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Traveling can have a lot of questions involved. Luckily, we can answer them for you.
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Traveling can have a lot of questions involved. Luckily, we can answer them for you..</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Can I bring my family on an ivacay trip?
?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Yes! We offer a lot of booking options, family trips included.</p>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Do you take wire transfers?
?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>No. Unfortunately, ivacay only accepts payments in Credit/Debit cards and crypto.</p>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                  aria-expanded="true" aria-controls="collapseOne1">
                  What services do you offer?
                </button>
              </h2>
              <div id="collapseOne1" class="accordion-collapse collapse " aria-labelledby="headingOne1"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p> We offer entertainment, lodging and tour-guiding services in partnership with local
guides and renowned companies.
</p>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                  Can I travel with ivacay if I’m disabled?
?
                </button>
              </h2>
              <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Yes. ivacay is a place of equity and equality. If you reach out to our team with the
specific details of your condition, we can help you make the best out of your trip.</p>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                  Is it okay if I travel alone?

                </button>
              </h2>
              <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p> Yes! We offer solo trips as part of our travel packages. You can get more details on them
                    by clicking here.
                    </p>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour4" aria-expanded="false" aria-controls="collapseThree3">
                  Do You Offer Group Packages?
                </button>
              </h2>
              <div id="collapseFour4" class="accordion-collapse collapse" aria-labelledby="headingThree3"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p> Yes! You and your group can book a trip through ivacay.
                    </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
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
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0)" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div> -->
    </div>
  </section>

@endsection
