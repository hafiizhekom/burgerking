
@extends('layout.app')

<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");

?>

@section('content')
                <section class="offers pt-5 mb-3">
                    <div class="container-fluid">
                        <div class="btn btn-small btn-primary" id="toggle-section-button" style="position:absolute;right:30px;">MAP</div>
                        <h3 class="text-center mb-5" id="title-trending"> RESTAURANT </h3>

                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3" id="list-section">
                                <div class="w-50 mx-auto" id="address-search-container">
                                    <input type="text" id="address-search-form" class="form-control">
                                </div>

                                <div class="mt-4">
                                    <ul class="nav nav-tabs nav-fill mx-auto w-50" id="nav-store">
                                        <li class="nav-item">
                                          <a class="nav-link active" href="#">Nearby</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="#">Favourites</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="#">Delivery</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link disabled" href="#">Recent</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-5 w-50 mx-auto" id="nearby-tab">
                                    <ul class="list-group" id="list-nearby">
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-8 col-lg-8" id="map-section">
                                <div id="map" style="width:100%;height:400px;"></div>
                            </div>
                        </div>




                    </div>
                </section>
@endsection

@section('script')
    <script src="<?=asset("asset/js/fetching-store.js");?>"></script>
    <script src="<?=asset("asset/js/search-store.js");?>"></script>
    <script src="<?=asset("asset/js/map.js");?>"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv3KB4lwr4gTaDuAkeFFGO11tHDGv8vz8&libraries=places&callback=initMap"
    type="text/javascript"></script>
    <script>
        var mapToggle = false;
        $(window).ready(function(){
            closeMapSection();
        });

        $("#toggle-section-button").click(function(){

            mapToggle = !(mapToggle);
            alert(mapToggle);
            if(mapToggle){
                openMapSection();
            }else{
                closeMapSection();
            }
        });

        function openMapSection(){
            $("#toggle-section-button").html("List");
            $("#map-section").show();
            $("#address-search-container").removeClass("w-50");
            $("#nav-store").removeClass("w-50");
            $("#nearby-tab").removeClass("w-50");
            $("#list-section").removeClass("col-md-12");
            $("#list-section").removeClass("col-lg-12");
            $("#list-section").addClass("col-md-4");
            $("#list-section").addClass("col-lg-4")
        }

        function closeMapSection() {
            $("#toggle-section-button").html("Map");
            $("#map-section").hide();
            $("#address-search-container").addClass("w-50");
            $("#nav-store").addClass("w-50");
            $("#nearby-tab").addClass("w-50");
            $("#list-section").addClass("col-md-12");
            $("#list-section").addClass("col-lg-12");
            $("#list-section").removeClass("col-md-4");
            $("#list-section").removeClass("col-lg-4");
        }
    </script>
@endsection
