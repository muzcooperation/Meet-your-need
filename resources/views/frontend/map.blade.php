<!doctype html>
<html>
    <head>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
          #map {
            height: 100%;
          }
          html, body {
            height: 100%;
            margin: 0;
            padding: 0;
          }
        </style>
    </head>
    <body>
        <div id="map"></div>
        <script>
            function showPosition(position) {
                console.log('====='); 

                console.log(position, '=====test'); 
            }
            

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                
            }
          var map;
          function initMap() {
            map = new google.maps.Map($('#map')[0], {
              center: {lat: -34.397, lng: 150.644},
              zoom: 8
            });
          }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUndIxC961aQetgyUcy9Aui-VlVoYs6q0&callback=initMap"
        async defer></script>
    </body>
</html>
