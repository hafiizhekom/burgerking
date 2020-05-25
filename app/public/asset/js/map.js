       // Initialize and add the map
       var map;
       function initMap() {

           // The location of Uluru
           var myLatLong = {lat: -6.2008406, lng: 106.7987143};
           // The map, centered at Uluru
           map = new google.maps.Map(
             document.getElementById('map'), {zoom: 4, center: myLatLong});

           // Create the initial InfoWindow.
           var infoWindow = new google.maps.InfoWindow(
               {content: 'Click the map to get Lat/Lng!', position: myLatLong});
           infoWindow.open(map);

           var input = document.getElementById('address-search-form');
           var searchBox = new google.maps.places.SearchBox(input);


           // Bias the SearchBox results towards current map's viewport.
           map.addListener('bounds_changed', function() {
               searchBox.setBounds(map.getBounds());
           });

           var markers = [];
               // Listen for the event fired when the user selects a prediction and retrieve
               // more details for that place.
               searchBox.addListener('places_changed', function() {
                 var places = searchBox.getPlaces();

                 if (places.length == 0) {
                   return;
                 }

                 // Clear out the old markers.
                 markers.forEach(function(marker) {
                   marker.setMap(null);
                 });
                 markers = [];

                 // For each place, get the icon, name and location.
                 var bounds = new google.maps.LatLngBounds();
                 places.forEach(function(place) {
                   if (!place.geometry) {
                     console.log("Returned place contains no geometry");
                     return;
                   }
                   var icon = {
                     url: place.icon,
                     size: new google.maps.Size(71, 71),
                     origin: new google.maps.Point(0, 0),
                     anchor: new google.maps.Point(17, 34),
                     scaledSize: new google.maps.Size(25, 25)
                   };

                   // Create a marker for each place.
                   markers.push(new google.maps.Marker({
                     map: map,
                     icon: icon,
                     title: place.name,
                     position: place.geometry.location
                   }));

                   if (place.geometry.viewport) {
                     // Only geocodes have viewport.
                     bounds.union(place.geometry.viewport);
                   } else {
                     bounds.extend(place.geometry.location);
                   }
                 });
                 map.fitBounds(bounds);
               });



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


       function setMarker(location, label){
           var marker = new google.maps.Marker({
               position: location,
               label: label,
               map: map
           });
       }
