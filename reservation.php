<?php
    // start a session
    session_start();   

    // 
    if(isset($_GET['hid'])){
        $check = true; 

        // to Get the detail from reservation form
        $tarikh = $_GET['dte'];
        $masa1 = $_GET['tme1']; 
        $masa2 = $_GET['tme2'];        
        $tempat = $_GET['venue']; 
        $new = $tarikh."".$masa1."".$masa2."".$tempat; 

        // to check the availability of venue 
        if(isset($_SESSION['stat']) ){

            $myArray = $_SESSION['stat'];

            // if the details already inside the array, means that the venue is not available
            // if the details is empty, so the details will be stored in the array and yes the venue is available
            if(in_array($new,$myArray) ){
                $book_stat = "Not Available";
            }else{
                array_push($myArray,$new);
                $_SESSION['stat']=$myArray;
                $book_stat = "Available";                
            }
        
        // if the details is empty, so the details will be stored in the array and yes the venue is available
        }else{
            $myArray = array();
            array_push($myArray,$new);
            $_SESSION['stat']=$myArray;
            $book_stat = "Available";
        }

    }else{
        $check = false; 
    }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Venue Reservation | Reservation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header"><br>
        <h1>Venue Reservation System</h1>
    </div>

    <!-- navigation -->
    <div class="topnav">
        <a href="home.php">Home</a>
        <a href="#" class="active">Reservation</a>
        <!-- <a href="customer_form.php" >Form</a>      -->
    </div>

    <!-- container contain form to check the avalability of the venue  -->
    <div class="container">
        <h3>Check venue availability for your event</h3>

        <div class="formcontainer">
            <form>
            <input type="hidden" name="hid" value="000">
            <div class="row">
                <div class="col-25">
                    <i class="far fa-calendar-alt"></i>&nbsp<label for="dte">Date :</label>
                </div>
                <div class="col-75">
                    <input type="date" class="" name="dte" > 
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <i class="far fa-clock"></i>&nbsp<label for="tme1" style="">Time Start:</label>
                </div>
                <div class="col-75">
                    <!-- <input type="time" class="" name="tme" > -->
                    <select name="tme1">
                        <option value="">Select Start Time . . .</option>
                        <option value="08:00 am">08:00 am</option>
                        <option value="09:00 am">09:00 am</option>
                        <option value="10:00 am">10:00 am</option>
                        <option value="11:00 am">11:00 am</option>
                        <option value="12:00 noon">12:00 noon</option>
                        <option value="01:00 pm">01:00 pm</option>
                        <option value="02:00 pm">02:00 pm</option>
                        <option value="03:00 pm">03:00 pm</option>
                        <option value="04:00 pm">04:00 pm</option>
                        <option value="05:00 pm">05:00 pm</option>
                        <option value="06:00 pm">06:00 pm</option>
                        <option value="07:00 pm">07:00 pm</option>
                        <option value="08:00 pm">08:00 pm</option>
                        <option value="09:00 pm">09:00 pm</option>
                        <option value="10:00 pm">10:00 pm</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <i class="far fa-clock"></i>&nbsp<label for="tme2" style="">Time End:</label>
                </div>
                <div class="col-75">
                    <!-- <input type="time" class="" name="tme" > -->
                    <select name="tme2">
                        <option value="">Select End Time . . .</option>                        
                        <option value="09:00 am">09:00 am</option>
                        <option value="10:00 am">10:00 am</option>
                        <option value="11:00 am">11:00 am</option>
                        <option value="12:00 noon">12:00 noon</option>
                        <option value="01:00 pm">01:00 pm</option>
                        <option value="02:00 pm">02:00 pm</option>
                        <option value="03:00 pm">03:00 pm</option>
                        <option value="04:00 pm">04:00 pm</option>
                        <option value="05:00 pm">05:00 pm</option>
                        <option value="06:00 pm">06:00 pm</option>
                        <option value="07:00 pm">07:00 pm</option>
                        <option value="08:00 pm">08:00 pm</option>
                        <option value="09:00 pm">09:00 pm</option>
                        <option value="10:00 pm">10:00 pm</option>
                        <option value="11:00 pm">11:00 pm</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-25">
                    <i class="fas fa-building"></i>&nbsp<label for="tme" style="">Venue :</label>
                </div>
                <div class="col-75">
                    <select name="venue">
                        <option value="">select venue . . .</option>
                        <option value="Grand Ballroom 1">Grand Ballroom 1</option>
                        <option value="Grand Ballroom 2">Grand Ballroom 2</option>
                        <option value="Executive Meeting hall A">Executive Meeting hall A</option>
                        <option value="Executive Meeting hall B">Executive Meeting hall B</option>
                        <option value="Platinum Meeting hall A">Platinum Meeting hall A</option>
                        <option value="Platinum Meeting hall B">Platinum Meeting hall B</option>
                        <option value="Luxury hall">Luxury hall</option>
                        <option value="Premium hall">Premium hall</option>
                        <option value="Deluxe hall">Deluxe hall</option>
                        <option value="Function hall">Function hall</option>
                        <option value="Meeting hall A">Meeting hall A</option>
                        <option value="Meeting hall B">Meeting hall B</option>
                        <option value="Auditorium A">Auditorium A</option>
                        <option value="Auditorium B">Auditorium B</option>
                        <option value="Training Centre 1">Training Centre 1</option>
                        <option value="Training Centre 2">Training Centre 2</option>
                        <option value="Training Centre 3">Training Centre 3</option>
                        <option value="Training Centre 4">Training Centre 4</option>
                        <option value="Meeting room 1">Meeting room 1</option>
                        <option value="Meeting room 2">Meeting room 2</option>
                        <option value="Meeting room 3">Meeting room 3</option>
                        <option value="Meeting room 4">Meeting room 4</option>
                        <option value="Conference room 1">Conference room 1</option>
                        <option value="Conference room 2">Conference room 2</option>
                        <option value="Conference room 3">Conference room 3</option>
                        <option value="Conference room 4">Conference room 4</option>
                        <option value="Private room 1">Private room 1</option>
                        <option value="Private room 2">Private room 2</option>
                        <option value="Theatre room 1">theatre room 1</option>
                        <option value="Theatre room 2">Theatre room 2</option>
                    </select>
                </div>
            </div><br>

            <div class="row">
                <button id="check" type="check" >Check Availabillity</button>
            </div>
            </form>
        </div><br>

        <!-- start if($check) function  -->
        <?php
            if($check){
        ?>
                
                <div id="status">
                    <table id="customers">
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Venue</th>
                            <th>Status</th>
                            <th></th>                    
                        </tr>
                        <tr>
                            <td><?php echo $tarikh ?></td>
                            <td><?php echo $masa1 ?></td>
                            <td><?php echo $tempat ?></td>
                            <td><?php echo $book_stat ?></td>
                            <td>
                                <?php 
                                    if($book_stat == 'Available'){

                                        $_SESSION['d1'] = $tarikh;
                                        $_SESSION['d2'] = $masa1;
                                        $_SESSION['d3'] = $masa2;
                                        $_SESSION['d4'] = $tempat;

                                        ?>
                                        <button type="proceed" onclick="proceed()">Proceed</button>
                                        <?php
                                    }else{
                                        ?>
                                        <p><b>Choose another venue</b></p>
                                        <?php
                                    }                        
                                ?>                        
                            </td>

                        </tr>              
                    </table>            
                </div><br>
         <!-- close if($check) function  -->
        <?php
            }
        ?>

    </div>

    <!-- footer -->
    <br><hr class="fade">
    <footer class="footer">
        <p>Khadijah</p>
        <p>Amalina | Ainna</p> 
    </footer>

    <!-- function to send the details from availability form to customer form -->
    <script>
        function proceed(){
            window.location.replace("customer_form.php");
        }
    </script>
</body>
</html>