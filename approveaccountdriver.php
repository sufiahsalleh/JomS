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
    <h3 class="w3-padding-64"><b>SYSTEM<br>ADMINISTRATOR</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="AdminInterface.php" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="approveaccountdriver.php" class="w3-bar-item w3-button w3-hover-white">Driver Approval</a> 
    <a href="form.php" class="w3-bar-item w3-button w3-hover-white">Announcement</a>
    <a href="ReportMenu.php" class="w3-bar-item w3-button w3-hover-white">Report</a> 
    <a href="monitormaintenance.php" class="w3-bar-item w3-button w3-hover-white">Maintenance Report</a> 
    <a href="AdminLogout.php" class="w3-bar-item w3-button w3-hover-white">Logout</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-grey w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-margin-right" onclick="w3_open()">☰</a>
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
  

  <!-- CONTENT -->
  <div class="w3-container" id="section-driver" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-dark-grey"><b>DRIVER APPROVAL</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
    
<?php
include("dbase.php");

$query = "SELECT * FROM driver";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
  $driverID = $row["driverID"];
  $username = $row["username"];
  $name = $row["name"];
  $password = $row["password"];
  $email = $row["email"];
  $phoneNo = $row["phoneNo"];
  $age = $row["age"];
  $ic = $row["ic"];
  $address = $row["address"];
  $Date = $row["Date"];
  $services = $row["services"];
  $status = $row["status"];
  ?>

  <form action="insertapproveaccountdatabase.php" method="post">
  <hr>
  <h3><b>New Account </b></h3>
  
  <div>
  <label for="driverID"><b>Driver ID</b></label><br>
  <input type="text" value="<?php echo $driverID; ?>" name="driverID" required>
  </div><br>
  <div>
  <label for="username"><b>Username</b></label><br>
  <input type="text" value="<?php echo $username; ?>" name="username" required>
  </div><br>
  <div>
  <label for="name"><b>Name</b></label><br>
  <input type="text" value="<?php echo $name; ?>" name="name" required>
  </div><br>
  <div>
  <label for="password"><b>Password</b></label><br>
  <input type="password" value="<?php echo $password; ?>" name="password" required>
  </div><br>
  <div>
  <label for="email"><b>Email</b></label><br>
  <input type="text" value="<?php echo $email; ?>" name="email" required>
  </div><br>
  <div>
  <label for="phoneNo"><b>Phone Number</b></label><br>
  <input type="text" value="<?php echo $phoneNo; ?>" name="phoneNo" required>
  </div><br>
  <div>
  <label for="age"><b>Age</b></label><br>
  <input type="text" value="<?php echo $age; ?>" name="age" required>
  </div><br>
  <div>
  <label for="ic"><b>IC Number</b></label><br>
  <input type="text" value="<?php echo $ic; ?>" name="ic" required>
  </div><br>
  <div>
  <label for="address"><b>Address</b></label><br>
  <input type="text" value="<?php echo $address; ?>" name="address" required>
  </div><br>
  <div>
  <label for="Date"><b>Date</b></label><br>
  <input type="date" value="<?php echo $Date; ?>" name="Date" required>
  </div><br>
  <div>
  <label for="services"><b>Services</b></label><br>
  <input type="text" value="<?php echo $services; ?>" name="services" required>
  </div><br>
  <div>
  <label for="status"><b>Status</b></label><br>
  <input type="text" value="<?php echo $status; ?>" name="status" required>
  </div><br>
  
  <label><b>Account status ?</b></label>
        <p>
        <label class="radio-inline">
        <input type="radio" name="accstatus" id="radio_experience" value="Approved" >
         Approve 
        </label>
        <label class="radio-inline">
        <input type="radio" name="accstatus" id="radio_experience" value="Unapproved" >
         Unapprove 
        </label>

<br><br>
        
    <button class="button" type="submit">DONE</button>
   
  <br> <br>
  </div>
<?php
    }
} else {
    echo "0 results";

}
?>
</ol>
</form>
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
