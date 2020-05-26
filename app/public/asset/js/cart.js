$('#offers-list').on('click', '.thumbnail-product', function() {
    $("input[name=product-modal]").val($(this).data("product"));
    $("input[name=price-modal]").val($(this).data("price"));
    $("input[name=nameproduct-modal]").val($(this).data("name"));
    $("#buy-modal").modal("show");
});

$("#add-to-cart-button-modal").click(function() {
    addtocart($("input[name=product-modal]").val(), $("input[name=price-modal]").val(), $("input[name=nameproduct-modal]").val());
    $("input[product-modal]").val("");
    $("input[price-modal]").val("");
    $("input[nameproduct-modal]").val("");
});

function addtocart(value, price, name){

    if(localStorage.hasOwnProperty('cart')){
        var storedProduct = JSON.parse(localStorage.getItem("cart"));
    }else{
        var storedProduct = []
    }


    storedProduct.push([value, price, name]);

    console.log(storedProduct);

    localStorage.setItem("cart", JSON.stringify(storedProduct));
    alert("Succes add to cart");
    $("#buy-modal").modal("hide");
}

$(window ).ready(function(){
    load_cart();
});

function load_cart(){
    var totalprice = 0;
    $("#cart-list").html("");
    if(localStorage.hasOwnProperty('cart')){

        cart_list = JSON.parse(localStorage.getItem("cart"));
        $.each(cart_list, function( name, value ) {
            totalprice = totalprice + parseInt(value[1]);
            $("#cart-list").append("<l class='list-group-item d-flex justify-content-between'>"+value[2]+" - $"+value[1]+"<span class='fas fa-times' onclick='delete_cart(\""+value[0]+"\")'></span></li>");
        })

        $(".price-tag").html(totalprice);
    }else{
        $(".price-tag").html("0");
    }
}

function delete_cart(code){
    cart_list = JSON.parse(localStorage.getItem("cart"));

    if(cart_list.length <= 1){
        localStorage.removeItem("cart");
    }else{
        $.each(cart_list, function( index, value ) {
            if(value[0]==code){
                alert("Delete"+index);
                cart_list.splice(index+1,1);
                return false;
            }
        })
        localStorage.setItem("cart", JSON.stringify(cart_list));
    }
    load_cart();
}







