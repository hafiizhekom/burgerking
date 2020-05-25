$( document ).ready(function() {
    load_restaurant();
});

var longlat = []

function load_restaurant(){
    $.ajax({
        type : 'GET',
        url : 'http://localhost:5000/store',
        success : function(data) {
            $.each( data.data, function( key, value ) {

                longlat.push([value["latitude"], value["longitude"], value["name"]]);
                setMarker({lat: parseFloat(value["latitude"]), lng:  parseFloat(value["longitude"])}, value['name']);

            });

            getLocation();

        }
    });
}
