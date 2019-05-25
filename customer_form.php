<?php
 session_start();

 $time1 = $_SESSION['d2'];
 $time2 = $_SESSION['d3'];
 
 $duration = (int) $time2 - (int) $time1;
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Venue Reservation | Customer Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header"><br>
    <h1>Venue Reservation System</h1>
    </div>

    <div class="topnav">
        <a href="home.php">Home</a>
        <a href="reservation.php">Reservation</a>
        <!-- <a href="#" class="active">Form</a>     -->
    </div>

    <div class="container">
        <h2>Customer Details</h2>
        <p>Please fill in your details before proceed to reserve a venue.</p>
        <p></p>

        <div class="formcontainer">
            <form method="post" action="customer_details.php">

            <!-- The details of DATE, TIME & VENUE is auto filled from the reservation page, customer cannot change  -->
            <div class="row">
                <div class="col-25">
                <label>Date :</label>
                </div>
                <div class="col-75">                
                <input type="text" name="trkh" value="<?php echo $_SESSION['d1'] ?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label>Time Start :</label>
                </div>
                <div class="col-75">                
                <input type="text" name="mse" value="<?php echo $_SESSION['d2'] ?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label>Time End:</label>
                </div>
                <div class="col-75">                
                <input type="text" name="mse" value="<?php echo $_SESSION['d3'] ?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label>Duration:</label>
                </div>
                <div class="col-75">                
                <input type="text" name="dur" value="<?php echo $duration.' hour(s)' ?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label>Venue :</label>
                </div>
                <div class="col-75">                
                <input type="text" name="tmpt" value="<?php echo $_SESSION['d4'] ?>" disabled>
                </div>
            </div>

            <!-- customer have to fill NAME, EMAIL, PHONE NO themselves -->
            <div class="row">
                <div class="col-25">
                <label for="fname">First Name :</label>
                </div>
                <div class="col-75">
                <input type="text" id="fname" name="name" placeholder="Your name.." required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                <label for="lname">Email :</label>
                </div>
                <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Your email.." required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                <label for="subject">Contact No :</label>
                </div>
                <div class="col-75">
                <input type="text" id="contact" name="contact" placeholder="Your contact no.." required>
                </div>
            </div><br>

            <div class="row">
                <button type="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>

    <!-- footer -->
    <br><hr class="fade">
    <footer class="footer">
        <p>Khadijah</p>
        <p>Amalina | Ainna</p> 
    </footer>
</body>
</html>