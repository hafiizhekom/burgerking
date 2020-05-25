$( document ).ready(function() {
    $("#back-button").hide();
    load_article();
});

function load_article(){
    $.ajax({
        type : 'GET',
        url : 'http://localhost:5000/article/all',
        success : function(data) {
            $("#back-button").hide();
            $.each( data.data, function( key, value ) {
                $("#title-trending").html(" TRENDING ");
                $("#trending-list").html("");
                $("#trending-list").append("<div class='col-lg-4 col-md-6 col-sm-12 mt-4 '>"+
                        "<div class='card thumbnail-trending' data-trending='"+value['code']+"'>"+
                            "<img class='card-img-top' src='"+value['image']+"' alt='Card image cap'>"+
                            "<div class='card-body'>"+
                            "<h5 class='card-title'>"+value['title']+"</h5>"+
                            "<p class='card-text'>"+value['description']+"</p>"+
                            "</div>" +
                        "</div>" +
                    "</div>");
            });
        }
    });
}

$('#trending-list').on('click', '.thumbnail-trending', function() {
    var code = $(this).data('trending');
    alert($(this).data('trending'));
    $.ajax({
        type : 'GET',
        url : 'http://localhost:5000/article/'+code,
        success : function(data) {
            $("#back-button").show();
            $.each( data.data, function( key, value ) {
                $("#title-trending").html(value['title']);

                $("#trending-list").html("<div class='col-lg-12 col-md-12 col-sm-12 mt-4 '>"+
                                "<img class='d-block mx-auto' width='50%' src='"+value['image']+"' alt='Card image cap'>"+
                                "<div>"+value['content']+"</div>"+
                            "</div>");
            });
        }
    });
});


$("#back-button").click(function(){
    load_article();
});




