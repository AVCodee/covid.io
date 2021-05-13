<!DOCTYPE html>
<html>
  <head>
    <title>Hiding Map Features With Styling</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      .map-control {
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        font-family: "Roboto", "sans-serif";
        margin: 10px;
        padding-right: 5px;
        /* Hide the control initially, to prevent it from appearing
           before the map loads. */
        display: none;
      }

      /* Display the control once it is inside the map. */
      #map .map-control {
        display: block;
      }

      .selector-control {
        font-size: 14px;
        line-height: 30px;
        vertical-align: baseline;
      }
    </style>
    <script>
      

      function initMap() {
        market32 = { lat: 44.6955, lng: -73.49252 };
        cvs = {lat: 44.5746187, lng: -73.4252178};
        walmart = {lat: 44.6923866,lng: -73.4890508};

        map = new google.maps.Map(document.getElementById("map"), {
          center: {lat: 44.6955, lng: -73.49252},
          zoom: 15,
          mapTypeControl: false,
          
        });

        marker = new google.maps.Marker({
          position: market32,
          map: map,
          label: { color: '#00aaff', fontWeight: 'bold', fontSize: '14px', text: 'Market32 Vaccine Site' }
        });
        marker = new google.maps.Marker({
          position: cvs,
          map: map,
          label: { color: '#00aaff', fontWeight: 'bold', fontSize: '14px', text: 'CVS Vaccine Site' }
        });
        marker = new google.maps.Marker({
          position: walmart,
          map: map,
          label: { color: '#00aaff', fontWeight: 'bold', fontSize: '14px', text: 'Walmart Vaccine Site' }
        });
        // Add controls to the map, allowing users to hide/show features.
        
        const styleControl = document.getElementById("style-selector-control");
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(styleControl);
        // Apply new JSON when the user chooses to hide/show features.
        document.getElementById("hide-poi").addEventListener("click", () => {
          map.setOptions({ styles: styles["hide"] });
        });
        document.getElementById("show-poi").addEventListener("click", () => {
          map.setOptions({ styles: styles["default"] });
        });
      }
      const styles = {
        default: [],
        hide: [
          {
            featureType: "poi.business",
            stylers: [{ visibility: "off" }],
          },
          {
            featureType: "transit",
            elementType: "labels.icon",
            stylers: [{ visibility: "off" }],
          },
        ],
      };
    </script>
  </head>
  <body>
    <div id="style-selector-control" class="map-control">
      <input
        type="radio"
        name="show-hide"
        id="hide-poi"
        class="selector-control"
      />
      <label for="hide-poi">Hide</label>
      <input
        type="radio"
        name="show-hide"
        id="show-poi"
        class="selector-control"
        checked="checked"
      />
      <label for="show-poi">Show</label>
    </div>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgihiQwljxcmNmzv8kJ_m6WaHK8ARy84c&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html>