var sort="";
var category = "all";
var typingTimer;                //timer identifier
var doneTypingInterval = 2000;  //time in ms, 5 second for example
var $input = $('#search-form');
var $inputlowestprice = $('#lowest-price-form');
var $inputhighestprice = $('#highest-price-form');


$( document ).ready(function() {
    $("#search-form").prop("disabled", true);
    load_category();
    search();
});


$input.on('keyup', function () {
    $("#offers-list").html("<div class='text-center mt-3 mx-auto'><h3>Searching...</h3></div>");
    clearTimeout(typingTimer);
    typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

$inputlowestprice.on('keyup', function () {
    $("#offers-list").html("<div class='text-center mt-3 mx-auto'><h3>Searching...</h3></div>");
    clearTimeout(typingTimer);
    typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

$inputhighestprice.on('keyup', function () {
    $("#offers-list").html("<div class='text-center mt-3 mx-auto my-auto'><h3>Searching...</h3></div>");
    clearTimeout(typingTimer);
    typingTimer = setTimeout(doneTyping, doneTypingInterval);
});


$input.on('keydown', function () {
    clearTimeout(typingTimer);
});
$inputlowestprice.on('keydown', function () {
    clearTimeout(typingTimer);
});
$inputhighestprice.on('keydown', function () {
    clearTimeout(typingTimer);
});


function doneTyping () {
    search();
}

function change_sort(newvalue){
    sort = newvalue;
    search();
}

function change_category(newvalue){
    category = newvalue;
    search();
}

function load_category(){
    $.ajax({
        type : 'GET',
        url : 'http://localhost:5000/category',
        success : function(data) {
            $.each( data.data, function( key, value ) {
                console.log( key + ": " + value['code'] );
                $("#category-list").append("<li class='list-group-item' onclick=change_category('"+value['code']+"')>"+value['name']+"</li>");
            });
        }
    });
}

function search(){
    var keyword = $input.val();
    var lowest_price = $("#lowest-price-form").val();
    var highest_price = $("#highest-price-form").val();
    var datasubmit = {};

    if(keyword){
        datasubmit['keyword'] = keyword;
    }

    if(lowest_price){
        datasubmit['lowest_price'] = lowest_price;
    }

    if(highest_price){
        datasubmit['highest_price'] = highest_price;
    }

    if(sort){
        datasubmit['sort'] = sort;
    }




    $.ajax({
        type : 'GET',
        url : 'http://localhost:5000/product/search/'+category,
        data : datasubmit,
        success : function(data) {
            console.log(data.data);
            if(data.data.length){
                $("#offers-list").html("");
                $.each( data.data, function( key, value ) {
                    console.log( key + ": " + value['code'] );
                    $("#offers-list").append("<div class='col-lg-4 col-md-4 col-sm-6 mt-4'>"+
                            "<div class='card thumbnail-product' data-product='"+value['code']+"' data-price='"+value['price']+"' data-name='"+value['name']+"'>"+
                                "<img class='card-img-top' src='"+value['image']+"' alt='Card image cap'>"+
                                "<div class='card-body'>"+
                                "<h5 class='card-title'>$"+value['price']+" "+value['name']+"</h5>"+
                                "<p class='card-text'>"+value['description']+"</p>"+
                                "</div>" +
                            "</div>" +
                        "</div>");
                });
            }else{
                $("#offers-list").html("<div class='text-center mt-3 mx-auto'><h3>Not Found</h3></div>");
            }

            $input.prop("disabled",false);
        }
    });
}

