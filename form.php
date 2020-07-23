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
  

  <!-- CONTENT -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-dark-black"><b>ANNOUNCEMENT FORM</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
  </div>
  
<?php require_once 'library/dbConnect.php';?>
<h1 align="center">Please fill in the following information</h1>
<form name="Student details" action="action/add.php" method="POST" enctype="multipart/form-data">

  <table align="center" style="width: 80%">

    <tr>
      <td width="15%">Admin's Name</td>
      <td><input type="text" id="Name" name="Name" style="width: 50%" required=""> </td>
    </tr>
    <tr>
      <td width="15%">ID</td>
      <td><input type="text" id="id" name="id" style="width:10%" required=""></td>
    </tr>
    <tr> 
      <td>Select image:</td>
      <td><input type="file" name="image" id="image"></td>
    
    </tr>
    <tr>
      <td width="15%">Desription</td>
      <td><textarea type="text" name="desc" id="desc" rows="5" cols="100"></textarea>  </td>
    </tr>
    
     <tr>
      <td> </td>
      
    </tr>
  </table>

  <br><br><div align="center"><input type="submit" class="button" value="SUBMIT" ></div>
  
</form>

</body>
</html>

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