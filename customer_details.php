<?php

session_start();

    $time1 = $_SESSION['d2'];
    $time2 = $_SESSION['d3'];
    
    $duration = (int) $time2 - (int) $time1;

    include("customer_lib.php");

    $detail = new Customer();
    $detail->setName($_POST['name']);
    $detail->setEmail($_POST['email']);
    $detail->setContact($_POST['contact']);

    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Venue Reservation | Invoice</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="header"><br>
        <h1>Venue Reservation System</h1>
    </div>

    <div class="topnav">
        <a href="home.php">Home</a>
        <a href="reservation.php">Reservation</a>
        <!-- <a href="customer_form.php">Form</a>     -->
    </div>

    <div class="container">

    <h2>RESERVED <i class="far fa-check-circle"></i></h2>
    <p>Your reservation is now complete.<br>Please show the confirmation slip upon check in.<br>Thank you</p>


        <table id="cus_detail">
            <tr><th colspan="3"><i class="fas fa-barcode fa-3x"><br>Customer Confirmation Slip<br></i></th></tr><br>
            <tr><td colspan="3"></td></tr>
            <tr><td>Date:</td><td></td><td><?php echo $_SESSION['d1'] ?></td></tr>
            <tr><td>Time Start:</td><td></td><td><?php echo $_SESSION['d2'] ?></td></tr>
            <tr><td>Time End:</td><td></td><td><?php echo $_SESSION['d3'] ?></td></tr>
            <tr><td>Duration:</td><td></td><td><?php echo $duration .' hour(s)' ?></td></tr>
            <tr><td>Venue:</td><td></td><td><?php echo $_SESSION['d4'] ?></td></tr>
            <tr><td>Name:</td><td></td><td><?php echo $detail->getName(); ?></td></tr>
            <tr><td>Email:</td><td></td><td><?php echo $detail->getEmail(); ?></td></tr>
            <tr><td>Contact No:</td><td></td><td><?php echo $detail->getContact(); ?></td></tr>
            <tr><td colspan="3"></td></tr>
        </table>    
    </div>

    <br><hr class="fade">
    <footer class="footer">
        <p>Khadijah</p>
        <p>Amalina | Ainna</p> 
    </footer>
</body>
</html>