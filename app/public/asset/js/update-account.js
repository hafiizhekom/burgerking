$(window).ready(function(){
    $("#view-user").submit();
});
$("#view-user").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.


    var formData = new FormData(this);

    $.ajaxSetup({
        headers: { 'Authorization': localStorage.getItem('token') }
    });


    $.ajax({
           type: "GET",
           url: api+"user/current",
           data: formData, // serializes the form's elements.
           processData: false,
           contentType: false,
           success: function(data)
           {
               if(data.status){
                    $("#email-account-info").val(data.data.email);
                    $("input[name=name]").val(data.data.name);
                    $("input[name=phone]").val(data.data.phone);
                    $("#birthday-account-info").val(data.data.birthday);
                    $("input[name=id]").val(data.data.id);


               }else{
                   alert(data.message);
               }
           },
           error: function(xhr, status, error) {

            if(error==="Unauthorized"){
                alert(JSON.parse(xhr.responseText).error);
                logout();
            }
           }
         });


});


$("#update-user").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.


    var formData = new FormData(this);



    $.ajax({
        type : 'POST',
        url : api+'user/change',
        data: formData, // serializes the form's elements.
        processData: false,
        contentType: false,
        success : function(data) {
            if(data.status){
                alert(data.message);
            }else{
                alert(data.message);
            }

        },
        error: function(xhr, status, error) {
            alert(JSON.parse(xhr.responseText).error);
            alert(error);
        }
    });
});

function numOnly(selector){
    selector.value = selector.value.replace(/[^0-9]/g,'');
}


function checkPassword(){
    if($("input[name=password]").val() === $("input[name=repassword]").val()){
        $("#register-button").prop("disabled",false);
    }else{
        $("#register-button").prop("disabled",true);
    }
}
