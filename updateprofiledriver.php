<?php
session_start();
include("dbase.php");

$driverIDURL = $_GET['driverID'];

$query = "SELECT * FROM driver WHERE driverID = '$driverIDURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in updateprofiledriver.php");
$row = mysqli_fetch_assoc($result);

$username = $row['username'];
$name = $row['name'];
$password = $row['password'];
$email = $row['email'];
$phoneNo = $row['phoneNo'];
$age = $row['age'];
$ic = $row['ic'];
$address = $row['address'];
$Date = $row['Date'];
$services = $row['services'];
$status = $row['status'];
//@mysql_free_result($result);
?>
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
    <h3 class="w3-padding-64"><b>Driver</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="DriverInterface.php" class="w3-bar-item w3-button w3-hover-white">HOME</a>
    <a href="DriverAllReport.php" class="w3-bar-item w3-button w3-hover-white">EARNING</a> 
    <a href="viewaccountdriver.php" class="w3-bar-item w3-button w3-hover-white">ACCOUNT</a> 
  <a href="displaydaily.php" class="w3-bar-item w3-button w3-hover-white">REPORT</a> 
  <a href="DriverLogout.php" class="w3-bar-item w3-button w3-hover-white">LOGOUT</a> 
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
  

<!-- PROFILE UPDATE -->
<div class="w3-container" id="services" style="margin-top:75px">
<h1 class="w3-xxxlarge w3-text-dark-grey"><b>PROFILE</b></h1>
<hr style="width:50px;border:5px solid black" class="w3-round">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<form method="post" action="updatedriver.php">

<div>
<label for="username"><h3><b>Username :</b></h3></label>
<input type ="text" name="username" size="40" value="<?php echo $username; ?>">
</div>
<div>
<label for="name"><h3><b>Name :</b></h3></label>
<input type ="text" name="name" size="40" value="<?php echo $name; ?>">
</div>
<br>
<div>
<label for="password"><h3><b>Password :</b></h3></label>
<input type ="text" name="password" size="40" value="<?php echo $password; ?>">
</div>
<br>
<div>
<label for="text"><h3><b>Email :</b></h3></label>
<input type ="text" name="email" size="50" value="<?php echo $email; ?>">
</div>
<br>
<div>
<label for="text"><h3><b>Phone Number :</b></h3></label> 
<input type ="text" name="phoneNo" size="15" value="<?php echo $phoneNo; ?>">
</div>
<div>
<label for="text"><h3><b>Age:</b></h3></label> 
<input type ="text" name="age" size="15" value="<?php echo $age; ?>">
</div>
<div>
<label for="text"><h3><b>Ic :</b></h3></label> 
<input type ="text" name="ic" size="15" value="<?php echo $ic; ?>">
</div>
<div>
<label for="text"><h3><b>address :</b></h3></label> 
<input type ="text" name="address" size="40" value="<?php echo $address; ?>">
</div>
<div>
<label for="Date"><h3><b>Date :</b></h3></label> 
<input type ="Date" name="Date" size="15" value="<?php echo $Date; ?>">
</div>
<br>
<div>
<label><h3><b>Services</b></h3></label>
        <p>
        <label class="radio-inline">
        <input type="radio" name="services" id="radio_experience" value="grab" >
        Grab 
        </label>
        <label class="radio-inline">
        <input type="radio" name="services" id="radio_experience" value="rent" >
        Rent 
        </label>
</div>
<div>
<label><h3><b>Status</b></h3></label>
        <p>
        <label class="radio-inline">
        <input type="radio" name="status" id="radio_experience" value="available" >
        Available 
        </label>
        <label class="radio-inline">
        <input type="radio" name="status" id="radio_experience" value="unavailable" >
        Unavailable 
        </label>
</div>
<br><br>
	
	<input type ="hidden" name="driverID" value="<?php echo $driverIDURL; ?>">
    <input class="button" type ="submit" value="Update">
    <a href="viewaccountdriver.php" class="button">Cancel</a>
   <br>
</form>
</form>
  


<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

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
