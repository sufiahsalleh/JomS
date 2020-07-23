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

table{
	margin-top:10px;
	border-collapse: collapse;
}

th, td {
  border:1px solid black;
  text-align:center;
  width: 10%;
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
  <div class="w3-container" style="margin-top:50px" id="showcase">
    <h1 class="w3-jumbo"><b>JOMSewa</b></h1>
  </div>
  
 <!-- CONTENT -->
  <div class="w3-container" id="services" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-dark-black"><b>REPORT</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form action="ReportMenu.php" method="POST">
    <select name="standards" width=200px>
      
      <option disabled="" selected="">Select</option>
      <option value="driver">DRIVER</option>
      <option value="vehicle">VEHICLE</option>
      <option value="customer">CUSTOMER</option>
	  <option value="service">SERVICE</option>
	  <option value="income">INCOME</option>
    </select>

    <button class="button" type="submit"> SUBMIT</button>
	</form>
  </div>
   
  <?php
	if (isset($_POST['standards'])&&$_POST['standards']=="driver") {
		include ("dbase.php");
		$query = "SELECT driverID, name, age, address, Date FROM driveraccount";
		$query_num = "SELECT COUNT(driverID) as total FROM driveraccount";
		
		$result = mysqli_query($conn, $query);
		$result_num = mysqli_query($conn, $query_num);
		
		echo "<table style= 'border-collapse: collapse'>";
		echo "<tr><th>Driver ID</th> <th>Driver Name</th> <th>Age</th> <th>Address</th> <th>Date Registered</th></tr>";
		while ($row1=mysqli_fetch_assoc($result)){
			echo "<tr>
				  <td> ". $row1['driverID']. " </td>
				  <td> ". $row1['name']." </td>
				  <td> ". $row1['age']." </td> 
				  <td> ". $row1['address']." </td> 
				  <td> ". $row1['Date']." </td></tr> ";
		}
		echo "</table>";
		echo "\r\n";
		echo "<br>";
		
		$row2=mysqli_fetch_assoc($result_num);
		echo "<p> Total number of driver:  " . $row2['total']. "</p>";
		
	} else if (isset($_POST['standards'])&&$_POST['standards']=="vehicle"){
		include ("dbase.php");
		$query = "SELECT vehicleID, driverID, name, model, colour FROM vehicle";
		$query_num = "SELECT COUNT(vehicleID) as total FROM vehicle";
		
		$result = mysqli_query($conn, $query);
		$result_num = mysqli_query($conn, $query_num);
		
		echo "<table style= 'border-collapse: collapse'>";
		echo "<tr><th>Vehicle ID</th> <th>Driver ID</th> <th>Driver Name</th> <th>Car Model</th> <th>Colour</th></tr>";
		while ($row1=mysqli_fetch_assoc($result)){
			echo "<tr>
				  <td>" . $row1['vehicleID']. " </td>
				  <td> ". $row1['driverID']." </td>
				  <td> ". $row1['name']." </td> 
				  <td> ". $row1['model']." </td> 
				  <td> ". $row1['colour']." </td></tr> ";
		}
		echo "</table>";
		echo "\r\n";
		echo "<br>";
		
		$row2=mysqli_fetch_assoc($result_num);
		echo "<p> Total number of vehicle:  " . $row2['total']. "</p>";
		
	} else if (isset($_POST['standards'])&&$_POST['standards']=="customer"){
		include ("dbase.php");
		$query = "SELECT CustomerID, name, email, Cust_Date FROM customer";
		$query_num = "SELECT COUNT(CustomerID) as total FROM customer";
		
		$result = mysqli_query($conn, $query);
		$result_num = mysqli_query($conn, $query_num);
		
		echo "<table style= 'border-collapse: collapse'>";
		echo "<tr><th>Customer ID</th> <th>name</th> <th>email</th> <th>Date Registered</th></tr>";
		while ($row1=mysqli_fetch_assoc($result)){
			echo "<tr>
				  <td>" . $row1['CustomerID']. " </td>
				  <td> ". $row1['name']." </td> 
				  <td> ". $row1['email']." </td> 
				  <td> ". $row1['Cust_Date']." </td></tr> ";
		}
		echo "</table>";
		echo "\r\n";
		echo "<br>";
		
		$row2=mysqli_fetch_assoc($result_num);
		echo "<p> Total number of vehicle:  " . $row2['total']. "</p>";
		
	} else if (isset($_POST['standards'])&&$_POST['standards']=="service"){
		include ("dbase.php");
		$query = "SELECT rentalbookingID, bookingDate, 	driverName, carModel, CustomerID FROM rentalbooking";
		$query_taxi = "SELECT taxibookingID, bookingDate, 	driverName, carModel, CustomerID FROM taxibooking";
		
		$query_num = "SELECT COUNT(rentalbookingID) as total FROM rentalbooking";
		$query_num1 = "SELECT COUNT(taxibookingID) as total FROM taxibooking";
		
		$result = mysqli_query($conn, $query);
		$result_taxi = mysqli_query($conn, $query_taxi);
		
		$result_num = mysqli_query($conn, $query_num);
		$result_num1 = mysqli_query($conn, $query_num1);
		
		echo "<table style= 'border-collapse: collapse'>";
		echo "<p> <Strong> Rental Services </Strong></p>";
		echo "<tr><th>Rental Booking ID</th><th>Booking Date</th> <th>Driver Name</th> <th>Car Model</th> <th>Customer ID</th></tr>";
		while ($row1=mysqli_fetch_assoc($result)){
			echo "<tr>
				  <td>" . $row1['rentalbookingID']. " </td>
				  <td> ". $row1['bookingDate']." </td> 
				  <td> ". $row1['driverName']." </td> 
				  <td> ". $row1['carModel']." </td>
				  <td> ". $row1['CustomerID']." </td></tr> ";
		}
		echo "</table>";
		echo "\r\n";
		echo "<br>";
		
		$row2=mysqli_fetch_assoc($result_num);
		echo "<p> Total number of rental services:  " . $row2['total']. "</p>";
		
		echo "\r\n";
		echo "<br>";
		
		echo "<table style= 'border-collapse: collapse'>";
		echo "<p> <Strong> Taxi Services </Strong></p>";
		echo "<tr><th>Taxi Booking ID</th> <th>Booking Date</th> <th>Driver Name</th> <th>Car Model</th> <th>Customer ID</th></tr>";
		while ($row1=mysqli_fetch_assoc($result_taxi)){
			echo "<tr>
				  <td>" . $row1['taxibookingID']. " </td>
				  <td> ". $row1['bookingDate']." </td> 
				  <td> ". $row1['driverName']." </td> 
				  <td> ". $row1['carModel']." </td>
				  <td> ". $row1['CustomerID']." </td></tr> ";
		}
		echo "</table>";
		echo "\r\n";
		echo "<br>";
		
		$row2=mysqli_fetch_assoc($result_num1);
		echo "<p> Total number of taxi services:  " . $row2['total']. "</p>";
		
	} else if (isset($_POST['standards'])&&$_POST['standards']=="income"){
		$con = mysqli_connect("127.0.0.1", "root", "") or die(mysqli_connect_error());
		// to select the targeted database
		mysqli_select_db($con, "project") or die(mysqli_error());
		$query = "SELECT payment_rentalID, amount, driverID FROM payment_rental";
		$query_num = "SELECT SUM(amount) as total FROM payment_rental";
		
		$result = mysqli_query($con, $query);
		$result_num = mysqli_query($con, $query_num);
		
		echo "<table style= 'border-collapse: collapse'>";
		echo "<tr><th>Payment ID</th> <th>Amount</th> <th>Driver ID</th></tr>";
		while ($row1=mysqli_fetch_assoc($result)){
			echo "<tr>
				  <td>" . $row1['payment_rentalID']. " </td>
				  <td> ". $row1['amount']." </td> 
				  <td> ". $row1['driverID']." </td></tr> ";
		}
		echo "</table>";
		echo "\r\n";
		echo "<br>";
		
		$row2=mysqli_fetch_assoc($result_num);
		echo "<p> Total earning (RM):  " . $row2['total']. "</p>";
	} else {
		
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
