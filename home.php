<!DOCTYPE html>
<html lang="en">
<head>
  <title>Venue Reservation | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="header"><br>
        <h1>Venue Reservation System</h1>
  </div>

  <!-- Navigation -->
  <div class="topnav">
    <a href="#" class="active">Home</a>
    <a href="reservation.php">Reservation</a>
    <!-- <a href="customer_form.php">Form</a>      -->
  </div>

  <!-- Container contain Table of Venue List -->
  <div class="container">
  <h2>Looking for a place for a conference or seminar?</h2>
    <img src="bg.jpg" alt="contohje" style="width:80%;">    
    <p>We provide a wide selection of halls that suits with your occasion</p>

  <!-- button for display Venue List -->
  <button id="btn-list" type="listType" onclick="venueList()">Click here for venue list</button>
    <div id="list"><br> 

       <!-- table Venue LIst  -->
      <table id="customers">
      <tr> <th>No.</th> <th>Venue</th>                    <th>Size (LWH) (sq m)</th>    <th>Number of Pax</th>  </tr>
          <tr> <td>1</td>   <td>Grand Ballroom 1</td>         <td>53.21 x 40.97 x 9.15</td> <td>3000 - 3500</td>    </tr>
          <tr> <td>2</td>   <td>Grand Ballroom 2</td>         <td>50.44 x 37.65 x 9.15</td> <td>2000 - 3000</td>    </tr>
          <tr> <td>3</td>   <td>Executive Meeting hall A</td> <td>47.67 x 35.78 x 8.99</td> <td>1000 - 1500</td>    </tr>
          <tr> <td>4</td>   <td>Executive Meeting hal B</td>  <td>40.11 x 33.31 x 8.99</td> <td>500  - 850</td>     </tr>
          <tr> <td>5</td>   <td>Platinum Meeting hall A</td>  <td>23.20 x 27.66 x 8.99</td> <td>250  - 450</td>     </tr>
          <tr> <td>6</td>   <td>Platinum Meeting hall B</td>  <td>27.30 x 32.73 x 8.99</td> <td>1000 - 1250</td>    </tr>
          <tr> <td>7</td>   <td>Luxury hall</td>              <td>30.44 x 35.79 x 8.99</td> <td>750  - 1000</td>    </tr>
          <tr> <td>8</td>   <td>Premium hall</td>             <td>45.21 x 37.98 x 8.99</td> <td>1000 - 1500</td>    </tr>
          <tr> <td>9</td>   <td>Deluxe hall</td>              <td>47.56 x 40.16 x 8.99</td> <td>1500 - 2000</td>    </tr> 
          <tr> <td>10</td>  <td>Function hall</td>            <td>47.79 x 43.79 x 8.99</td> <td>750  - 1000</td>    </tr>        
          <tr> <td>11</td>  <td>Meeting hall A</td>           <td>45.13 x 37.97 x 8.99</td> <td>1000 - 1225</td>    </tr> 
          <tr> <td>12</td>  <td>Meeting hall B</td>           <td>43.21 x 40.97 x 8.99</td> <td>1250 - 2000</td>    </tr> 
          <tr> <td>13</td>  <td>Auditorium A</td>             <td>35.51 x 33.53 x 7.32</td> <td>500  - 750</td>     </tr> 
          <tr> <td>14</td>  <td>Auditorium B</td>             <td>39.12 x 35.01 x 7.32</td> <td>800  - 1000</td>    </tr> 
          <tr> <td>15</td>  <td>Training Centre 1</td>        <td>17.67 x 20.11 x 8.21</td> <td>100  -  250</td>    </tr>
          <tr> <td>16</td>  <td>Training Centre 2</td>        <td>20.93 x 23.66 x 8.21</td> <td>300  -  500</td>    </tr>
          <tr> <td>17</td>  <td>Training Centre 3</td>        <td>25.48 x 27.09 x 8.21</td> <td>600  -  800</td>    </tr>
          <tr> <td>18</td>  <td>Training Centre 4</td>        <td>27.23 x 30.76 x 8.21</td> <td>900  -  1000</td>   </tr>
          <tr> <td>19</td>  <td>Meeting room 1</td>           <td>13.53 x 10.55 x 8.21</td> <td>50   -  75</td>     </tr>
          <tr> <td>20</td>  <td>Meeting room 2</td>           <td>22.15 x 22.89 x 8.21</td> <td>100  -  150</td>    </tr>
          <tr> <td>21</td>  <td>Meeting room 3</td>           <td>23.54 x 24.97 x 8.21</td> <td>200  -  250</td>    </tr>
          <tr> <td>22</td>  <td>Meeting room 4</td>           <td>25.01 x 27.34 x 8.21</td> <td>300  -  350</td>    </tr>
          <tr> <td>23</td>  <td>Conference room 1</td>        <td>37.97 x 32.65 x 7.32</td> <td>400  -  550</td>    </tr>
          <tr> <td>24</td>  <td>Conference room 2</td>        <td>39.74 x 34.11 x 7.32</td> <td>600  -  750</td>    </tr>
          <tr> <td>25</td>  <td>Conference room 3</td>        <td>41.22 x 35.99 x 7.32</td> <td>800  -  950</td>    </tr>
          <tr> <td>26</td>  <td>Conference room 4</td>        <td>45.44 x 37.78 x 7.32</td> <td>1000 -  1500</td>   </tr>
          <tr> <td>27</td>  <td>Private room 1</td>           <td>5.71  x 4.26  x 7.32</td> <td>10   - 25</td>      </tr>
          <tr> <td>28</td>  <td>Private room 2</td>           <td>10.33 x 6.97  x 7.32</td> <td>25   - 50</td>      </tr>
          <tr> <td>29</td>  <td>Theater room 1</td>           <td>15.45 x 21.74 x 8.21</td> <td>150  - 300</td>     </tr>
          <tr> <td>30</td>  <td>Theater room 2</td>           <td>23.63 x 25.99 x 8.21</td> <td>350  - 500</td>     </tr>
      </table>
    </div>
  
  </div>

<!-- footer -->
  <br><hr class="fade">
    <footer class="footer">
       <p>Khadijah</p>
        <p>Amalina | Ainna</p> 
    </footer>

<!-- script to show/hide the table of Venue List -->
<script>
  document.getElementById("list").style.display="none";
  function venueList(){                
      var x = document.getElementById("list");                
      if (x.style.display == "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }
  }
</script>

</body>
</html>
