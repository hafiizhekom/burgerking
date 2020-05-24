window.addEventListener("scroll", function() {
    var scrollTop = $(window).scrollTop();
    if(scrollTop>714){
        $(".navbar").css("-webkit-transform","translateY(0px) scale(1)");
    }else{
        $(".navbar").css("-webkit-transform","translateY(45px) scale(0.95)");
    }
});
