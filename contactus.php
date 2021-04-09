<!DOCTYPE html>
<html lang="en">

<head>
    <title>Money Transfer </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--stylesheet-->
    <link rel="stylesheet" href="../css/style.css">

    <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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

        h5 {
            color: teal
        }

        .mt-0 {
            padding: 10px;
            top: 0;

        }

        * {
            font-family: Poppins;
        }

        footer {
            position: absolute;
            margin-bottom: 0px;
            background-color: #1565C0 !important;
            bottom: auto;
        }


        .head {
            top: 0;
            padding: 0.5px;
            font-family: Alegreya Sans SC;
            background: lightgray;
        }
    </style>
</head>

<body>
    <?php
    include './php/connection.php';
    $sql = "SELECT * FROM clients";
    $result = mysqli_query($conn, $sql);
    ?>
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
    <div class="center head mt-0">
        <h2 class="mb-3"><b>Contact US</b></h2>
        <div class="row container">
            <div class="col red text-white">
                <h5 class="text-white">Important notice</h5>
                <ul>
                    <li>
                        All Internship/GRIP related queries are answered only on our LinkedIn Network
                        JOIN TSF NETWORK HERE (https://www.linkedin.com/groups/10379184/)
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center container-fluid">
            <div class="col-4 blue">
                <h5 class="text-white">Address</h5>
                <ul>
                <li class="text-white">
                THE HANGAR, NUS ENTERPRISE
                21 HENG MUI KENG TERRACE, SINGAPORE, 119613
                </ul>
                </li>
            </div>
            <div class="col-4 green">
                <h5 class="text-white">Contact</h5>
                <ul>
                <li class="text-white">
                (for Non-Internship/GRIP Queries Only)
                +65-8402-8590, info@thesparksfoundation.sg
                </li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="center container-fluid blue darken-3 text-white pb-1">
        <h6 class="info">2021 &copy; Made by <a href="https://www.linkedin.com/in/pankaj-makhijani-1a993414a/" class="text-white">Pankaj Makhijani</a></h6>
        The Sparks Foundation
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>