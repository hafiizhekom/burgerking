$( document ).ready(function() {
    load_product();
    load_article();
});

function load_product(){
    $.ajax({
        type : 'GET',
        url : 'http://localhost:5000/product',
        success : function(data) {
            $.each( data.data, function( key, value ) {
                console.log( key + ": " + value['code'] );
                $("#offers-list").append("<div class='col-lg-4 col-md-4 col-sm-6 mt-4'>"+
                        "<div class='card' >"+
                            "<img class='card-img-top' src='asset/image/product/"+value['image']+"' alt='Card image cap'>"+
                            "<div class='card-body'>"+
                            "<h5 class='card-title'>$"+value['price']+" "+value['name']+"</h5>"+
                            "<p class='card-text'>"+value['description']+"</p>"+
                            "<a href='#' class='btn btn-link'>SIGN IN TO REDEEM</a>" +
                            "</div>" +
                        "</div>" +
                    "</div>");
            });
        }
    });
}

function load_article(){
    $.ajax({
        type : 'GET',
        url : 'http://localhost:5000/article',
        success : function(data) {
            $.each( data.data, function( key, value ) {
                console.log( key + ": " + value['code'] );
                $("#trending-list").append("<div class='col-lg-4 col-md-6 col-sm-12 mt-4'>"+
                        "<div class='card' >"+
                            "<img class='card-img-top' src='asset/image/article/"+value['image']+"' alt='Card image cap'>"+
                            "<div class='card-body'>"+
                            "<h5 class='card-title'>"+value['title']+"</h5>"+
                            "<p class='card-text'>"+value['content']+"</p>"+
                            "</div>" +
                        "</div>" +
                    "</div>");
            });
        }
    });
}




