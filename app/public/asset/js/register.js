$("#register-user").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.


    var formData = new FormData(this);



    $.ajax({
        type : 'POST',
        url : api+'auth/register/user',
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
            alert(xhr.responseText);
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
