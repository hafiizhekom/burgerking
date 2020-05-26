$(".open-modal-order").click(function(){
    if(localStorage.hasOwnProperty('order') && localStorage.hasOwnProperty('cart') ){
        alert("Processing order");
        window.location.replace("order");
    }else if( localStorage.hasOwnProperty('order')  ){
        alert("Please pick a offer");
        window.location.replace("offers");
    }else if( !localStorage.hasOwnProperty('cart') ){
        $("#order-modal").modal("show")
    }
})

function numOnly(selector){
    selector.value = selector.value.replace(/[^0-9]/g,'');
}

$("#order-nav-button").click(function(){
    $("#order-modal").modal("show")
})

$("#delivery-button-modal").click(function() {
    $("#delivery-modal").modal("show");
})

$("#address-modal").on('keyup', function(){
    if($("#address-modal").val() && $("#phone-modal").val() && $("#instruction-modal").val()){
        $("#delivery-here-button-modal").prop("disabled",false);
    }else{
        $("#delivery-here-button-modal").prop("disabled",true);
    }
})

$("#phone-modal").on('keyup', function(){
    if($("#address-modal").val() && $("#phone-modal").val() && $("#instruction-modal").val()){
        $("#delivery-here-button-modal").prop("disabled",false);
    }else{
        $("#delivery-here-button-modal").prop("disabled",true);
    }
})

$("#instruction-modal").on('keyup', function(){
    if($("#address-modal").val() && $("#phone-modal").val() && $("#instruction-modal").val()){
        $("#delivery-here-button-modal").prop("disabled",false);
    }else{
        $("#delivery-here-button-modal").prop("disabled",true);
    }
})

$("#delivery-here-button-modal").click(function(){
    localStorage.setItem("order","delivery")
    localStorage.setItem("location-address",$("#address-modal").val())
    localStorage.setItem("location-phone",$("#phone-modal").val())
    localStorage.setItem("location-instruction",$("#instruction-modal").val())
    window.location.replace("order");
})
