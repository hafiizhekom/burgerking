$("#login-button").click(function(){
    login();
});

function login(){
    $.ajax({
        type : 'POST',
        url : api+'auth/user',
        data : {
            'email' : $("#email-form").val(),
            'password' : $("#password-form").val(),
        },
        success : function(data) {
            if(data.status){
                alert(data.message);
                localStorage.setItem('token', data.token);
                window.location.replace("/");
            }else{
                alert(data.message);
            }

        }
    });
}
