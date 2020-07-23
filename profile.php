<!DOCTYPE html>
<html lang="en">
<title>PROFILE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>

body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}

body {font-size:16px;}

.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}

.w3-half img:hover{opacity:1}

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
}
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
  

<!-- PROFILE -->
<div class="w3-container" id="services" style="margin-top:75px">
<h1 class="w3-xxxlarge w3-text-dark-grey"><b>PROFILE</b></h1>
<hr style="width:50px;border:5px solid black" class="w3-round">
<body bgcolor="#FFFFFF" text="#000000">
<ol>
<?php
session_start();
include("dbase.php");

$query = "SELECT * FROM customer";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while( $_SESSION = mysqli_fetch_assoc($result)){
    $CustomerID = $_SESSION["CustomerID"];
    $username =  $_SESSION["username"];
    $name  =  $_SESSION["name"];
    $email =  $_SESSION["email"];
    $phoneNo =  $_SESSION["phoneNo"];
    ?>
                <div>
                <label for="name"><h3><b>Name :</b></h3></label> 
                <h4><?php echo $name ?></h4><br>
                </div>

                <div>
                <label for="username"><h3><b>Username :</b></h3></label> 
                <h4><?php echo $username ?></h4><br>
                </div>

                <div>
                <label for="email"><h3><b>Email :</b></h3></label> 
                <h4><?php echo "$email" ?></h4><br>
                </div>

                <div>
                <label for="phoneNo"><h3><b>Phone Number :</b></h3></label> 
                <h4><?php echo "$phoneNo" ?></h4><br>
                </div>

    <a href="updateprofile.php?CustomerID=<?php echo $CustomerID; ?>" class="button">Update</a><br>
<?php
    }
} else {
    echo "0 results";

}
?>
  </div>
  
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
