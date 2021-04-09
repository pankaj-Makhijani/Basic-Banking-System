<!DOCTYPE html>
<html lang="en">

<head>
    <title>TSF Bank </title>
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
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

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

        a:link {
            color: white;
        }

        a:hover {
            color: white;
            text-decoration: none;
        }
        .footer {
            margin-top: 40px;
        }

        footer {
            position: absolute;
            margin-bottom: 0px;
            background-color: #1565C0 !important;
            bottom: auto;
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
        <h5 class=" mt-2">Choose the account to whom you want to send money and enter your amount</h5>
    </div>

    <?php
    include './connection.php';
    if (isset($_REQUEST['c_id'])) {
        $sid = $_GET['c_id'];
        $sql = "SELECT * FROM  clients where c_id=$sid";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        }
        $rows = mysqli_fetch_assoc($result);
    }
    ?>
    <form method="post" name="tcredit" class="tabletext"><br>

        <div class="container-fluid">
            <table class="table table-sm table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Client Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">E-mail</th>
                    <th class="text-center">Bank Balance(In Rs)</th>
                </tr>
                <tr>
                    <td class="center py-2"><?php echo (isset($rows['c_id']) ? $rows['c_id'] : ''); ?></td>
                    <td class="center py-2"><?php echo (isset($rows['c_name']) ? $rows['c_name'] : ''); ?></td>
                    <td class="center py-2"><?php echo (isset($rows['c_mail']) ? $rows['c_mail'] : ''); ?></td>
                    <td class="center py-2">Rs. <?php echo (isset($rows['c_balance']) ? $rows['c_balance'] : ''); ?></td>
                </tr>
            </table>
        </div>

        <div class="container">
            <br><br><br>
            <label for="to">Transfer To:</label>
            <select id="to" name="to" class="form-control" required>
                <option value="" disabled selected>Choose</option>
                <?php
                include 'config.php';
                $sid = $_REQUEST['c_id'];
                $sql = "SELECT * FROM clients where c_id!=$sid";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error " . $sql . "<br>" . mysqli_error($conn);
                }
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['c_id']; ?>">

                        <?php echo $rows['c_name']; ?> (Balance: Rs.
                        <?php echo $rows['c_balance']; ?> )

                    </option>
                <?php
                }
                ?>
        </div>
        </select>
        <br>
        <label for="amount">Amount:</label>
        <input type="number" class="form-control" name="amount" id="amount" required>
        <div class="text-center">
            <button class="btn mt-3 green" name="submit" type="submit" id="myBtn">Transfer</button>
        </div>
        <br>
    </form>
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
<?php
include './connection.php';

if (isset($_POST['submit'])) {

    $from = $_GET['c_id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from clients where c_id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query); // returns array from which the amount is to be transferred.

    // check input of negative value by user
    if (($amount) < 0) {
        echo '<script>';
        echo ' alert("Please enter correct amount.")';  // showing an alert box.
        echo '</script>';
    }

    // check insufficient balance.
    else if ($amount > $sql1['c_balance']) {
        echo '<script>';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {
        $sql = "SELECT * from clients where c_id=$to";
        $query = mysqli_query($conn, $sql);
        $sql2 = mysqli_fetch_array($query);

        $sender = $sql1['c_name'];
        $receiver = $sql2['c_name'];

        // deducting amount from sender's account
        $newbalance = $sql1['c_balance'] - $amount;
        $sql = "UPDATE clients set c_balance=$newbalance where c_id=$from";
        mysqli_query($conn, $sql);

        // adding amount to reciever's account
        $newbalance = $sql2['c_balance'] + $amount;
        $sql = "UPDATE clients set c_balance=$newbalance where c_id=$to";
        mysqli_query($conn, $sql);


        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful !!');
                                     window.location='transactionhistory.php';
                           </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>