
$("input[name=title]").change(function(){
    var name = $(this).val();
    var sentence = name.replaceAll(" ", "-");

    $("#recommended-code").html("Recommendation: "+sentence);
});

$("#add-article").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.


    var formData = new FormData(this);

    $.ajaxSetup({
        headers: { 'Authorization': localStorage.getItem('token') }
    });


    $.ajax({
           type: "POST",
           url: api+"article/store",
           data: formData, // serializes the form's elements.
           processData: false,
           contentType: false,
           success: function(data)
           {
               if(data.status){
                    $("input[name=title]").val("");
                    $("input[name=code]").val("");
                    $("textarea[name=content]").val("");
                    $("input[name=image]").val("");
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
