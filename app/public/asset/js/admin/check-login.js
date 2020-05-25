$(window).ready(function() {
    checkLogin();
});

function checkLogin(){


    if(!localStorage.hasOwnProperty('token')){
        alert("Belum Login");
        window.location.replace("/admin");
    }
    // $.ajaxSetup({
    //     headers: { 'Authorization': localStorage.getItem('token') }
    // })


    // $.ajax({
    //     type: "GET",
    //     url: "http://localhost:5000/admin/me",
    //     data:{},
    //     contentType:"application/json",
    //     success: function(data)
    //     {
    //         if(data.status){
    //             load_data();
    //         }else{
    //             alert("Belum Login");
    //             window.location.replace("/admin");
    //         }
    //     },
    //     error: function(xhr, status, error) {
    //         // alert(xhr.responseText);
    //         alert("Belum Login");
    //         // window.location.replace("/admin");

    //     }
    // });
}

