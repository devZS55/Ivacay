@extends('layouts.main')
@section('content')

<!-- banner start -->
<section class="main_slider">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="banner_text my_strip text-center">
            <h1>Payment Information (Credit, Debit and Gift Card)</h1>
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
        <form role="form" action="{{route('package_stripe_post')}}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
         @csrf
           <input type="text" name="package_id" hidden value="{{$package_id}}">
         <div class='form-row row'>
            <input type="text" id="finaltotal" name="finaltotal"  value="0" hidden  />
            <div class='col-md-12 col-sm-12 col-xs-12 form-group required'>
                <div class="my_re">
                    <label class='control-label'>Name on Card</label>
                    <input class='form-control' size='4' type='text' id="name">
                </div>
            </div>
           </div>  
            <div class='form-row row'>
                <div class='col-md-12 col-sm-12 col-xs-12 form-group '>
                    <div class="my_re">
                        <label class='control-label'>Card Number</label>
                        <input autocomplete='off' class='form-control card-number' maxlength="16" size='20' type='text' id="cart_no">
                    </div>
                </div>
            </div>

            <div class="my_re">
              <div class='form-row row'>
                <div class='col-xs-12 col-md-4 form-group cvc required'>
                    <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' maxlength="3" type='password' id="cvc">
                </div>
                <div class='col-xs-12 col-md-4 form-group expiration required'>
                    <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month' maxlength="2" placeholder='MM' size='2' type='text' id="e_month">
                </div>
                <div class='col-xs-12 col-md-4 form-group expiration required'>
                    <label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year' maxlength="4" placeholder='YYYY' size='4' type='text' id="e_year">
                </div>
                 </div>
            </div>

            <div class='form-row row'>
                <div class='col-md-12 error form-group d-none'>
                    <div class='alert-danger alert'>Please correct the errors and try
                        again.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="agreedcheck">
                        <label class="form-check-label" for="agreedcheck">
                            I Agreed to the Terms.
                        </label>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 sign_btn">

                    <button id="paynow" class="btn  btn-lg btn-block" type="submit" onClick="myFunction()">Pay
                        Now</button>
                </div>
            </div>

        @push('js')
        <script type="text/javascript">
            $(function() {
                var $form = $(".require-validation");
                $('form.require-validation').bind('submit', function(e) {
                    var $form = $(".require-validation"),
                        inputSelector = ['input[type=email]',
                            'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'
                        ].join(', '),
                        $inputs = $form.find('.required').find(
                            inputSelector),
                        $errorMessage = $form.find('div.error'),
                        valid = true;
                    $errorMessage.addClass('hide');

                    $('.has-error').removeClass('has-error');
                    $inputs.each(function(i, el) {
                        var $input = $(el);
                        if ($input.val() === '') {
                            $input.parent().addClass('has-error');
                            $errorMessage.removeClass('hide');
                            e.preventDefault();
                        }
                    });

                    if (!$form.data('cc-on-file')) {
                        e.preventDefault();
                        Stripe.setPublishableKey($form.data(
                            'stripe-publishable-key'));
                        Stripe.createToken({
                            number: $('.card-number').val(),
                            cvc: $('.card-cvc').val(),
                            exp_month: $('.card-expiry-month')
                                .val(),
                            exp_year: $('.card-expiry-year').val()
                        }, stripeResponseHandler);
                    }
                });
                $('#paynow').prop('disabled', true);
                $('#agreedcheck').click(function() {
                    let checkvalues = false;
                    if ($('#name').val() == '' ||
                        $('#cart_no').val() == '' ||
                        $('#cvc').val() == '' ||
                        $('#e_month').val() == '' ||
                        $('#e_year').val() == ''
                    ) {
                        checkvalues = false;
                        $('#agreedcheck').prop('checked', false);
                    } else {
                        checkvalues = true;
                    }
                    if (checkvalues == true) {
                        if ($(this).is(':checked')) {
                            $('#paynow').prop('disabled', false);
                        } else {
                            $('#paynow').prop('disabled', true);
                        }
                    } else {
                        alert('Fill all input fields');
                    }
                });


                function stripeResponseHandler(status, response) {
                    if (response.error) {
                        $('.error').removeClass('d-none').find('.alert').text(response.error.message);
                        $('.preloader').removeClass('block').addClass('d-none');
                    } else {
                        // token contains id, last4, and card type
                        var token = response['id'];
                        // insert the token into the form so it gets submitted to the server
                        $form.find('input[type=text]').empty();
                        $form.append(
                            "<input type='hidden' name='stripeToken' value='" +
                            token + "'/>");
                        $form.get(0).submit();
                    }
                }

            });
        </script>
        @endpush

    </form>
        </div>
      </div>

    </div>
  </section>

  @push('css')
  <style>

  .my_strip h1 {
    font-family: "Poppins", Sans-Serif;
    font-size: 50px;
    line-height: 65px;
    color: #fff;
    font-weight: 600;
    margin: 0 0 0px;
    text-transform: uppercase;
    text-align: center;
    width: 80%;
    margin: 0 auto;
}
section.faq_sec {
    position: relative;
    z-index: 9;
}
.my_re label.control-label {
    color: #fff;
    font-size: 15px;
    line-height: 40px;
}
.my_re input {
    border: 1px solid #fff;
    background: transparent;
}
.light-mode .my_re input {
    border: 1px solid #000;
    color: #000;
}
.light-mode .my_re label.control-label {
    color: #000;
}















</style>

@endpush

@endsection






