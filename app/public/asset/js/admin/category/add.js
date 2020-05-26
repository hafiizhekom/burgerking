
$("input[name=name]").change(function(){
    var name = $("input[name=name]").val();
    var sentence = name.split(" ");
    var code = "";
    $.each( sentence, function( key, value ) {
        code = code + value.substr(0, 1).toLowerCase();
    });

    $("#recommended-code").html("Recommendation: "+code);
});

$("#add-product").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.


    var formData = new FormData(this);

    $.ajaxSetup({
        headers: { 'Authorization': localStorage.getItem('token') }
    });


    $.ajax({
           type: "POST",
           url: api+"category/store",
           data: formData, // serializes the form's elements.
           processData: false,
           contentType: false,
           success: function(data)
           {
               if(data.status){
                    $("input[name=name]").val("");
                    $("input[name=code]").val("");
                    load_data();
                    alert(data.message);
               }else{
                   alert(data.message);
               }
           },
           error: function(xhr, status, error) {
            alert(xhr.responseText);
           }
         });


});
