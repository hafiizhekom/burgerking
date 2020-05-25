// Initialize and add the map
function initMap() {
    // The location of Uluru
    var myLatLong = {lat: -6.2008406, lng: 106.7987143};
    // The map, centered at Uluru
    var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: myLatLong});

    var mapedit = new google.maps.Map(
        document.getElementById('map-edit'), {zoom: 4, center: myLatLong});

    // Create the initial InfoWindow.
    var infoWindow = new google.maps.InfoWindow(
        {content: 'Click the map to get Lat/Lng!', position: myLatLong});
    infoWindow.open(map);

    var infoWindowedit = new google.maps.InfoWindow(
        {content: 'Click the map to get Lat/Lng!', position: myLatLong});
    infoWindow.open(mapedit);

    // Configure the click listener.
    map.addListener('click', function(mapsMouseEvent) {
    // Close the current InfoWindow.
    infoWindow.close();

    // Create a new InfoWindow.
    infoWindow = new google.maps.InfoWindow({position: mapsMouseEvent.latLng});
    infoWindow.setContent(mapsMouseEvent.latLng.toString());
    infoWindow.open(map);
    document.getElementById('longitude').value = mapsMouseEvent.latLng.toString().split(",")[1].replace(")", "");
    document.getElementById('latitude').value = mapsMouseEvent.latLng.toString().split(",")[0].replace("(", "");
    });

    mapedit.addListener('click', function(mapsMouseEvent) {
        // Close the current InfoWindow.
        infoWindowedit.close();

        // Create a new InfoWindow.
        infoWindowedit = new google.maps.InfoWindow({position: mapsMouseEvent.latLng});
        infoWindowedit.setContent(mapsMouseEvent.latLng.toString());
        infoWindowedit.open(mapedit);
        document.getElementById('longitude-edit').value = mapsMouseEvent.latLng.toString().split(",")[1].replace(")", "");
        document.getElementById('latitude-edit').value = mapsMouseEvent.latLng.toString().split(",")[0].replace("(", "");
    });


}

// Initialize and add the map
function initMapEdit() {
    // The location of Uluru
    var myLatLong = {lat: -6.2008406, lng: 106.7987143};
    // The map, centered at Uluru
    var map = new google.maps.Map(
      document.getElementById('map-edit'), {zoom: 4, center: myLatLong});

    // Create the initial InfoWindow.
    var infoWindow = new google.maps.InfoWindow(
        {content: 'Click the map to get Lat/Lng!', position: myLatLong});
    infoWindow.open(map);

    // Configure the click listener.
    map.addListener('click', function(mapsMouseEvent) {
    // Close the current InfoWindow.
    infoWindow.close();

    // Create a new InfoWindow.
    infoWindow = new google.maps.InfoWindow({position: mapsMouseEvent.latLng});
    infoWindow.setContent(mapsMouseEvent.latLng.toString());
    infoWindow.open(map);
    document.getElementById('longitude').value = mapsMouseEvent.latLng.toString().split(",")[1].replace(")", "");
    document.getElementById('latitude').value = mapsMouseEvent.latLng.toString().split(",")[0].replace("(", "");
    });


}


