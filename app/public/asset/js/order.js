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

    $("input[name=type]").val(localStorage.getItem("order"));
    if(localStorage.getItem("order")=="delivery"){
        $("#restaurant-form").hide();
        $("input[name=address]").val(localStorage.getItem("location-address"));
        $("input[name=phone]").val(localStorage.getItem("location-phone"));
        $("input[name=note]").val(localStorage.getItem("location-instruction"));
    }else if(localStorage.getItem("order")=="restaurant"){
        $("#delivery-form").hide();
        $("input[name=location]").val(localStorage.getItem("location"));
    }
})


$("#restaurant-form").submit(function(e){
    e.preventDefault(); // avoid to execute the actual submit of the form.


    var formData = new FormData(this);

    $.ajaxSetup({
        headers: { 'Authorization': localStorage.getItem('token') }
    });


    $.ajax({
           type: "POST",
           url: api+"order/store",
           data: formData, // serializes the form's elements.
           processData: false,
           contentType: false,
           success: function(data)
           {
               if(data.status){
                    localStorage.removeItem("order");
                    localStorage.removeItem("location");
                    localStorage.removeItem("location-address");
                    localStorage.removeItem("location-phone");
                    localStorage.removeItem("location-instruction");
                    window.location.replace("/");
                    alert(data.message);
               }else{
                   alert(data.message);
               }
           },
           error: function(xhr, status, error) {
            alert(xhr.responseText);
           }
         });
})

$("#delivery-form").submit(function(e){
    e.preventDefault(); // avoid to execute the actual submit of the form.


    var formData = new FormData(this);

    $.ajaxSetup({
        headers: { 'Authorization': localStorage.getItem('token') }
    });


    $.ajax({
           type: "POST",
           url: api+"order/store",
           data: formData, // serializes the form's elements.
           processData: false,
           contentType: false,
           success: function(data)
           {
               if(data.status){
                    localStorage.removeItem("order");
                    localStorage.removeItem("location");
                    localStorage.removeItem("location-address");
                    localStorage.removeItem("location-phone");
                    localStorage.removeItem("location-instruction");
                    window.location.replace("/");
                    alert(data.message);
               }else{
                   alert(data.message);
               }
           },
           error: function(xhr, status, error) {
            alert(xhr.responseText);
           }
         });
})
