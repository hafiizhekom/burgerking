var currLong;
var currLat;

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        $("#nearby-tab").html("Geolocation is not supported by this browser.");
    }
}

function showPosition(position) {
    currLat = position.coords.latitude;
    currLong = position.coords.longitude;
    nearby();
}

// var $input = $("#address-search-form");
// var typingTimer;                //timer identifier
// var doneTypingInterval = 2000;

// $input.on('keyup', function () {
//     clearTimeout(typingTimer);
//     typingTimer = setTimeout(doneTyping, doneTypingInterval);
// });

// $input.on('keydown', function () {
//     clearTimeout(typingTimer);
// });

// function doneTyping () {
//     searchmap();
// }

function nearby(){
    console.log("nearby");
    var point = [];

    $.each(longlat, function( index, loc ) {
        point[index] = [loc[3], loc[2], Math.abs(loc[0]-currLat) + Math.abs(loc[1]-currLong)];
    });

    point.sort(function(a, b) {
        return a[1] - b[1];
    });

    $("#list-nearby").html("");


    $.each(point, function( name, value ) {
        $("#list-nearby").append('<li class="list-group-item" onclick="selectstore(\''+value[0]+'\')" > '+value[1]+' - ('+Math.round(parseFloat(value[2]))+')</li>');
    });

}
function selectstore(store){
    localStorage.setItem("order", "restaurant");
    localStorage.setItem("location", store);
    if(localStorage.hasOwnProperty('cart')){
        alert("Processing order");
        window.location.replace("order");
    }else{
        alert("Please pick a offer");
        window.location.replace("cart");
    }
}
