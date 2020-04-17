<!doctype html>
<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name = "csrf-token" content = "{{csrf_token()}}">
    <title>🌏 Track the Driver</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/styles.css"> 
  </head>
  <body>
    <main class="container">
      <div id="map" class="map"></div>
      <p id="info" class="info"></p> 
    </main>
    <script src="js/script.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1PK6pfLyjI_61ODDmiuRdqMPBvNxS5bQ&callback=init"></script>
  </body>
</html>