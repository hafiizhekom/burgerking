$("#login-button").click(function(){
    login();
});

function login(){
    $.ajax({
        type : 'POST',
        url : api+'auth/admin',
        data : {
            'username' : $("#username-form").val(),
            'password' : $("#password-form").val(),

        },
        success : function(data) {
            if(data.status){
                alert(data.message);
                localStorage.setItem('token', data.token);
                window.location.replace("admin/dashboard");
            }else{
                alert(data.message);
            }

        }
    });
}
