<!DOCTYPE html>
<html lang="en">
<title>JOMSEWA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
td{
  padding: 15px;
  text-align: left;
}

th{
  padding: 15px;
  text-align: center;
}

table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}

th {
  background-color: #00264d;
  color: white;
}

.button {
  background-color: #ccccb3;
  color: black;
  padding: 10px 18px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
}

a:link {
  text-decoration: none;
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-grey w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>CUSTOMER</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="customerhome.php" class="w3-bar-item w3-button w3-hover-white">HOME</a> 
    <a href="profile.php" class="w3-bar-item w3-button w3-hover-white">PROFILE</a> 
    <a href="bookingMenu.php" class="w3-bar-item w3-button w3-hover-white">BOOKING</a>
    <a href="customerhistory.php" class="w3-bar-item w3-button w3-hover-white">BOOKING HISTORY</a> 
    <a href="customerpoint.php" class="w3-bar-item w3-button w3-hover-white">POINT & REWARD</a> 
    <a href="feedback.php" class="w3-bar-item w3-button w3-hover-white">FEEDBACK</a> 
    <a href="custlogout.php" class="w3-bar-item w3-button w3-hover-white">LOGOUT</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-grey w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-grey w3-margin-right" onclick="w3_open()">☰</a>
  <span>JOMS</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>JOMSewa</b></h1>
  </div>
  

<!-- History Booking -->
<div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-dark-grey"><b>BOOKING HISTORY</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">  

<h3>Rental</h3>
<?php
session_start();
include("dbase.php");

$query = "SELECT * FROM rentalBooking";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $bookingDate = $row["bookingDate"];
    $driverName = $row["driverName"];
    $carModel = $row["carModel"];
    $platNo = $row["platNo"];
    ?>
                <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <table style="width:100%">
                  <tr>
                    <th><b>Booking Date</b></th>
                    <th><b>Driver Name</b></th>
                    <th><b>Car Model</b></th>
                    <th><b>Plate No</b></th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($result as $res) { ?>
                  <tr>
                    <tr>
                      <td><?php echo $res['bookingDate']; ?></td>
                      <td><?php echo $res['driverName']; ?></td>
                      <td><?php echo $res['carModel']; ?></td>
                      <td><?php echo $res['platNo']; ?></td>
                    </tr>
                  </tr><?php } ?>
                </tbody>

              </table>
            </div>

<?php
    }
} else {
    echo "YOU HAVE NOT DONE ANY BOOKING YET!";

}
?>
<br><br>

<h3>Taxi</h3>
<?php

$query = "SELECT * FROM taxibooking";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $bookingDate = $row["bookingDate"];
    $destination = $row["destination"];
    $driverName = $row["driverName"];
    $price = $row["price"];
    ?>
                <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <table style="width:100%">
                  <tr>
                    <th><b>Booking Date</b></th>
                    <th><b>Destination</b></th>
                    <th><b>Driver Name</b></th>
                    <th><b>Price</b></th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($result as $res) { ?>
                  <tr>
                    <tr>
                      <td><?php echo $res['bookingDate']; ?></td>
                      <td><?php echo $res['destination']; ?></td>
                      <td><?php echo $res['driverName']; ?></td>
                      <td><?php echo $res['price']; ?></td>
                    </tr>
                  </tr><?php } ?>
                </tbody>

              </table>
            </div>

<?php
    }
} else {
    echo "YOU HAVE NOT DONE ANY BOOKING YET!";

}
?>


<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
