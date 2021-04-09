<!DOCTYPE html>
<html lang="en">

<head>
    <title>Transaction History</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--stylesheet-->
    <link rel="stylesheet" href="../css/style.css">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .mt-0 {
            padding: 10px;
            top: 0;
        }

        * {
            font-family: Poppins;
        }

        footer {
            position: absolute;
            bottom: 0;

        }
        a:link {
      color: white;
    }

    a:hover {
      color: white;
      text-decoration: none;
    }

    </style>
</head>

<body>

    <nav>
        <div class="container-fluid nav-wrapper #00838f blue darken-3 z-depth-1">
            <a href="../index.php" class="brand-logo"><img src="../images/logo_small.png" style="height:70px;width:60px" /><span class="m-2 title">Spark Bank</span></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="../index.php">Home</a></li>
                <li><a href="./transfermoney.php">Perform Transaction</a></li>
                <li><a href="./transactionhistory.php">Transaction History</a></li>
                <li><a href="../aboutus.php">About us</a></li>
                <li><a href="../contactus.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <div class="center head mt-0">
        <h2 class="mb-3"><b><span><img src="../images/logo_small.png" style="height:70px;width:60px" /></span>Spark Bank</b></h2>
        <h5 class=" mt-2">History of the transaction details</h5>
    </div>
    <div class="container">
        <br>
        <div class="container-fluid table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Sr No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Recipient</th>
                        <th class="text-center">Amount(In Rs.)</th>
                        <th class="text-center">Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include './connection.php';

                    $sql = "SELECT * from transaction";

                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {
                    ?>

                        <tr>
                            <td class="center py-2"><?php echo $rows['sr_no']; ?></td>
                            <td class="center py-2"><?php echo $rows['sender']; ?></td>
                            <td class="center py-2"><?php echo $rows['receiver']; ?></td>
                            <td class="center py-2">Rs. <?php echo $rows['balance']; ?> </td>
                            <td class="center py-2"><?php echo $rows['date_time']; ?> </td>

                        <?php
                    }
                    mysqli_close($conn);
                        ?>
                </tbody>
            </table>

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