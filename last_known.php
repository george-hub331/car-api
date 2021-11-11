<?php
require 'class.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <script>
     var data = JSON.parse('<?php
      
      $a = new car($_GET['id']);/*this is the unique id */

      echo mysqli_real_escape_string($my,$a->fetch(isset($_GET['num']) ? $_GET['num'] : 5 /*this is the number of last known location that should be loaded*/));

    ?>');
    </script>
  </head>
  <body>
    <h2>Last <span>X Locations</span></h2>
    <style>
      h2{
        text-align:center;
      }
html,
body,
#map {
  height: calc(100% - 27px);
    width: 100%;
margin: 0px;
  padding: 0px
  }
  </style>
 
  <div id="map"></div>
  <script>
    //number of last known location given
    document.querySelector('h2 span').innerHTML = data.length+' Location'+(data.length > 1 ? 's':'');

    function initMap() {

        if(data['error'] !== undefined){
            document.write(data['error']);
            return;
        }

      /*initialization*/
  let map = new google.maps.Map(document.getElementById('map'), {
  zoom: 10,
  center: {
    lat: 9.0765,
    lng: 7.3986
    }
}), object = [];
  
  /*markers*/
    for(index in data){
     let cont = data[index][0];//content - containing dates

    let info = new google.maps.InfoWindow({
    content: cont
  });

    let marker = new google.maps.Marker({
    position: {
  lat: parseFloat(data[index][1]),//latitude
  lng: parseFloat(data[index][2])//longitude
  },
  map: map//main map object
});

  //adds click event to each marker
    marker.addListener('click', function() {
    info.open(map, marker);
  });

}
}

    </script>
    <!--google api-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTAGN27NvqcdGroezGzmTeVZW7_ypjZG8&callback=initMap"></script>
    
  </body>
</html>