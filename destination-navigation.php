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
  
 
 
  <title>Nav</title>
</head>

<body>
  <!--navbar-->
  <div class="nav-container container-fluid">
    <nav class="navbar navbar-expand-lg">

      <div class="container nav-container">
        <button class="navbar-toggler nav-toggler-destination" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <img src="assets/home/hamburger.svg" alt="">
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav destination-nav ">
            <a class="nav-link me-3 navlink-moon" aria-current="page" href="index.php">Moon</a>
            <a class="nav-link me-3" href="destination.php">Mars</a>
            <a class="nav-link me-3" href="#">Europa</a>
            <a class="nav-link me-3" href="#">Titan</a>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>