$(window).ready(function(){

    $("#type-order").html(localStorage.getItem("order").toUpperCase())


    if(localStorage.getItem("order")=="delivery"){
        $("#list-location-order").hide();
        $("#location-address").html(localStorage.getItem("location-address").toUpperCase())
        $("#location-phone").html(localStorage.getItem("location-phone").toUpperCase())
        $("#location-instruction").html(localStorage.getItem("location-instruction").toUpperCase())
    }else if(localStorage.getItem("order")=="restaurant"){
        $("#list-address-order").hide();
        $("#list-phone-order").hide();
        $("#list-instruction-order").hide()
        $("#location").html(localStorage.getItem("location").toUpperCase())
    }
})
