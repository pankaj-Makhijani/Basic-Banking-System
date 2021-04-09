<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--stylesheet-->
  <link rel="stylesheet" href="./css/style.css">

  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Basic Banking System</title>
  <style>
    * {
      font-family: Poppins;
    }

    a:link {
      color: white;
    }

    a:hover {
      color: white;
      text-decoration: none;
    }

    
    footer{
      position: absolute;
      bottom: 0;
    }
  </style>
</head>

<body>
  <nav>
    <div class="container-fluid nav-wrapper #00838f blue darken-3 z-depth-1">
      <a href="index.php" class="brand-logo"><img src="./images/logo_small.png" style="height:70px;width:60px" /><span class="m-2 title">Spark Bank</span></a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./php/transfermoney.php">Perform Transaction</a></li>
        <li><a href="./php/transactionhistory.php">Transaction History</a></li>
        <li><a href="./aboutus.php">About us</a></li>
        <li><a href="./contactus.php">Contact Us</a></li>
      </ul>
    </div>
  </nav>

  <!--heading / title -->
  <div class="center head mt-0">
    <h2 class="mb-3"><b><span><img src="./images/logo_small.png" style="height:70px;width:60px" /></span>Spark Bank</b></h2>
    <h5 class="text-black mt-2">Transfering money made easier</h5>

    <!---3 col start-->
    <div class="row center sect pt-3 pb-4 mb-0">


      <!--end of card 1-->

      <!--second col-->
      <div class="col s4">
        <!-- Promo Content 2 goes here -->
        <div class="row">
          <div class="col s12 m6">
            <div class="card small">
              <div class="card-image">
                <img class="cust" src="./images/1.png" height="210px" width="300px">
              </div>
              <button onclick="location.href='./php/transfermoney.php'" style="color:black" class="waves-effect waves-light red btn-large"><b  class="text-white">Perform Transactions</b><i class="material-icons right" style="filter: invert(1);">add_circle</i></button>
            </div>
          </div>
        </div>
      </div>
      <!--end of card 2-->

      <div class="col s4">
        <!-- Promo Content 3 goes here -->
        <div class="row">
          <div class="col s12 m6">
            <div class="card small">
              <div class="card-image">
                <img class="cust" src="./images/2.jpg" height="210px">
              </div>
              <button type="button" onclick="location.href='./php/transactionhistory.php'" style="color:black" class="waves-effect waves-light blue darken-3 btn-large"><b  class="text-white"> Transaction History</b><i class="material-icons right" style="filter: invert(1);">send</i></button>
            </div>
          </div>
        </div>
      </div>
      <!--end of card 1-->

      <div class="col s4">
        <!-- Promo Content 3 goes here -->
        <div class="row">
          <div class="col s12 m6">
            <div class="card small">
              <div class="card-image">
                <img class="cust" src="./images/3.jpg" height="200px">
              </div>
              <button type="button" onclick="location.href='tel:123-456-7890'" style="color:black" class="waves-effect waves-light green btn-large"><b class="text-white"> Customer Support</b><i class="material-icons right" style="filter: invert(1);">help</i></button>
            </div>
          </div>
        </div>
      </div>



    </div>
    <!--sectio-->

  </div>


  <footer class="center container-fluid blue darken-4 text-white pb-1 ">
    <h6 class="text-white mt-0 pt-2">2021 &copy; Made by <a href="https://www.linkedin.com/in/pankaj-makhijani-1a993414a/" class="text-white">Pankaj Makhijani</a></h6>
    The Sparks Foundation
  </footer>

  <script src="./js/main.js"></script>
  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>