@extends('layouts.main')
@section('content')

<!-- banner start -->
<section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <h3> <strong> Service </strong> Provider</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    

    <section class="service_provider">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-12 centerCol">
                    <div class="service text-center">
                        <h3>Where are you going</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra
                            maecenas accumsan lacus vel facilisis.
                        </p>
                        <!-- -------------------------------------------------------------------------- -->
                        <!-- <form method="POST" action=""> -->
                            <!-- @csrf -->
                            <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
                        <!-- -------------------------------------------------------------------------- -->
                        <div class="form-group">
                            <input type="text" aria-describedby="emailHelp" id="search" name="country" placeholder="Search Country" autocomplete="off">
                            <!-- <input type="search" class="searchable" placeholder="Search by Part#" id="search" name="part" required> -->
                            <button type="button" class="btn btn-primary"><i
                                    class="fas fa-magnifying-glass"></i></button>
                                    <p>search for countries list or click a map location* and find your next private guide!</p>
                        </div>
                        <!-- -------------------------------------------------------------------------- -->
                    <!-- </form> -->
                    <div id="test"></div>
                    @push('js')
                        <script>        
                        $(document).ready(function(){
                        $('#search').on('keyup', function(){
                                let x = $(this).val();
                                let data = {'search': x};
                                let url = 'country-search';
                                
                                $.ajax({
                                    url: url,
                                    data: data,
                                    type: 'GET',
                                
                                    success: function(data) {
                                        res = data;
                                        $('#test').html(data);
                        
                                    },
                                    error: function() {
                                        console.log('error');
                                    }
                        
                                });
                            });
                        });
                        
                        </script>
                        @endpush
                    <!-- -------------------------------------------------------------------------- -->
                    </div>
                    <div class="service_map">
                        <!--<img src="images/service_map.png" class="img-fluid" alt="">-->
                        <div id="chartdiv"></div>
                    </div>
                </div>
                <div class="register">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="resgis_text">
                                <h3>Register as a <span>Guide !</span></h3>
                                <a href="javascript:void(0)">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@push('js')
    <script>
                               // Create map instance
        var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Exclude Antartica
polygonSeries.exclude = ["AQ"];

// Make map load polygon (like country names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.fill = am4core.color("#7f7f7f");

// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = am4core.color("#7e70a8");

// Add hit events
polygonSeries.mapPolygons.template.events.on("hit", function(ev) {
    
         let country_name = ev.target.dataItem.dataContext.name;
//   alert("Clicked on " + country_name);
         
           let data = {'country_name': country_name};
           var url = "{{route('UI_country_specific_packages_map')}}"+ "/" + country_name;
        //    let url = 'country-specific-packages';
           let response = AjaxRequest_get(url, data);
           window.location = response.route;
           console.log(response.route);
   
});
    </script>
@endpush
