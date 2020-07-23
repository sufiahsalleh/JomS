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
    <h3 class="w3-padding-64"><b>JOM Sewa</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="DriverInterface.php" class="w3-bar-item w3-button w3-hover-white">HOME</a>
    <a href="DriverAllReport.php" class="w3-bar-item w3-button w3-hover-white">EARNING</a> 
    <a href="viewaccountdriver.php" class="w3-bar-item w3-button w3-hover-white">ACCOUNT</a> 
    <a href="displaydaily.php" class="w3-bar-item w3-button w3-hover-white">REPORT</a>
    <a href="updatemaintenance.php" class="w3-bar-item w3-button w3-hover-white">UPDATE MAINTENANCE</a>  
   <a href="driverviewfeedback.php" class="w3-bar-item w3-button w3-hover-white">FEEDBACK</a>
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
  

  <!-- feedback -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-dark-grey"><b>feedback</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
    <body bgcolor="#FFFFFF" text="#000000">
<ol>
<?php
include("dbase.php");

$query = "SELECT * FROM feedback";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $feebackID = $row["feebackID"];
    $name = $row["name"];
    $date = $row["date"];
	$rating = $row["rating"];
	$comment = $row["comment"];
    ?>
                
                <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <table style="width:80%">
                  <tr>
                    <th><b>Feedback Id</b></th>
                    <th><b>Name</b></th>
                    <th><b>Date</b></th>
					<th><b>Rating</b></th>
					<th><b>Comment</b></th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($result as $res) { ?>
                  <tr>
                    <tr>
                      <td><?php echo $res['feebackID']; ?></td>
                      <td><?php echo $res['name']; ?></td>
                      <td><?php echo $res['date']; ?></td>
					  <td><?php echo $res['rating']; ?></td>
					  <td><?php echo $res['comment']; ?></td>
					  
                    </tr>
                  </tr><?php } ?>
                </tbody>

              </table>
            </div>


<?php
    }
} else {
    echo "NO FEEDBACK HAVE BEEN MADE!";

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
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</form>
</body>
</html>
