$("#login-button").click(function(){
    login();
});

function login(){
    $.ajax({
        type : 'POST',
        url : 'http://localhost:5000/auth/admin',
        data : {
            'username' : $("#username-form").val(),
            'password' : $("#password-form").val(),

        },
        success : function(data) {
            if(data.status){
                alert(data.message);
                token = data.token;
                login = true;
                window.location.replace("admin/dashboard");
            }else{
                alert(data.message);
                login = false;
            }

        }
    });
}
