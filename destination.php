<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    
    <title>Destination</title>
</head>

<body style="background-image: url('assets/destination/background-destination-desktop.jpg');">

    <?php include('nav.php');?>


    <div class="container container-destination">
    <div class="row">
      <div class="col-sm-12 col-lg-6 mt-5">
        <h2 id="subheading-destination"class="subhead text-uppercase text-left fs-5 ms-5"><span class="me-3">01</span>PICK YOUR DESTINATION</h2>
        <div id="destination-image">
          <img src="assets/destination/image-moon.png" alt="">
        </div>
        
      </div>
      <!-- right column -->
      <div class=" right-col col-sm-12 col-lg-6 mt-5">
      <?php include('destination-navigation.php');?>
      <div class="planet-info">
        <h2 class="display-2 h2-moon">Moon</h2>
        <p class="p-moon">See our planet as you’ve never seen it before. A perfect relaxing trip away to help regain perspective and come back refreshed. 
          While you’re there, take in some history by visiting the Luna 2 and Apollo 11 landing sites.</p>
        <hr>
        <div class="d-flex">
          <div class="me-5">
            <span class="average-distance text-uppercase">
              avg distance
            </span>
            <h2 id="distance">384,000 km</h2>

          </div>
          <div>
            <span class="average-distance text-uppercase">
              est. travel time
            </span>
            <h2 id="distance">3 days</h2>

          </div>
        </div>


      </div>

      </div>

    </div>





</body>

</html>