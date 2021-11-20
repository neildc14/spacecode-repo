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
 
 
 
  
  <title>Nav</title>
</head>

<body>
  <!--navbar-->
  <header class="nav-container container-fluid d-flex">
    <img src="assets/home/group.svg" class="logo ms-5 mt-5 p-3">
    <span class="horizontal-line mt-5"></span>
    <nav class="navigation-bar navbar navbar-expand-lg mt-5 p-3 navbar-light ">

      <div class="container nav-container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <img src="assets/home/hamburger.svg" alt="">
        </button>
        <div class="collapse navbar-collapse navbar-backdrop" id="navbarNavAltMarkup">
          <div class="navbar-nav ">
            <a class="nav-link me-3 nav-link-index transition" aria-current="page" href="index.php"><span class="number-link">00</span> Home</a>
            <a class="nav-link me-3 nav-link-index transition" href="destination.php"><span class="number-link">01</span> Destination</a>
            <a class="nav-link me-3 nav-link-index transition" href="#"><span class="number-link">02</span> Crew</a>
            <a class="nav-link me-3 nav-link-index transition" href="#"><span class="number-link">03</span> Technology</a>
          </div>
        </div>
      </div>
    </nav>
  </header>


  
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>