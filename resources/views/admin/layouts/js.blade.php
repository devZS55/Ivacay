<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(".alert").delay(3000).slideUp(200, function() {
        $(this).alert('close');
    });
</script>
<!-- Core -->
<script src="{{asset('admin/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Vendor JS -->
<script src="{{asset('admin/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>

<!-- Slider -->
<script src="{{asset('admin/vendor/nouislider/distribute/nouislider.min.js')}}"></script>

<!-- Jarallax -->
<script src="{{asset('admin/vendor/jarallax/dist/jarallax.min.js')}}"></script>

<!-- Smooth scroll -->
<script src="{{asset('admin/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

<!-- Count up -->
<script src="{{asset('admin/vendor/countup.js/dist/countUp.umd.js')}}"></script>

<!-- Notyf -->
<script src="{{asset('admin/vendor/notyf/notyf.min.js')}}"></script>

<!-- Charts -->
<script src="{{asset('admin/vendor/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('admin/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

<!-- Datepicker -->
<script src="{{asset('admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

<!-- Simplebar -->
<script src="{{asset('admin/vendor/simplebar/dist/simplebar.min.js')}}"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="{{asset('admin/assets/js/volt.js')}}"></script>

<!-- Data Tables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>
<script>
    /*image preview starts */
    var loadFile = function(aug) {
        $("#imagediv").children().remove();

        for (var i=0; i<aug.files.length; i++)
        {
            var reader = new FileReader();
            reader.onload = function(event)
            {
                $($.parseHTML('<img class="img-fluid image-preview" width="200" height="200">')).attr('src', event.target.result).appendTo('#imagediv');
            }
            reader.readAsDataURL(aug.files[i]);
        }
    };
    /*image preview ends */


    /*for hiding div product page */
        $( document ).ready(function() {
            if($("#dis_percentage").val() < 1){
                $("#dis_div").hide();
            }

            $(function () {
                $("#dis").click(function () {
                    if ($(this).is(":checked")) {
                        $("#dis_div").show();
                    } else {
                        $("#dis_div").hide();
                    }
                });
            });
        })
    /*for hide and show div product page */


</script>

<!-- //For google chart ion dashboard -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

@stack('js')
