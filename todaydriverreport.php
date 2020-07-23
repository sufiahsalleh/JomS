<!DOCTYPE html>
<html>
<style>
th, td {
  border:1px solid black;
}

h1 {
	margin-top: 60px;
	font-size: 40pt;
}

table.center {
	align="center"
}
</style>

<body>
<h1 align='center' style = "font size: 10pt">Today Report  </h1>
<?php
$con = mysqli_connect("127.0.0.1", "root", "") or die(mysqli_connect_error());
// to select the targeted database
mysqli_select_db($con, "project") or die(mysqli_error());
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		// to create a query to be executed in sql
		$date = $_POST['myDate'];
		$id = $_POST['myDriverID'];
		
		$query_payment_rental = "SELECT paymentDate as date, amount as price, customerID as customerID FROM payment_rental WHERE driverID = $id AND paymentDate LIKE '%$date%'";
		$query_earning_rental = "SELECT SUM(amount) as total FROM payment_rental WHERE driverID = $id AND paymentDate LIKE '%$date%'";
		
		$query_payment_taxi = "SELECT taxibooking.destination as destination,taxibooking.distance as distance,taxibooking.customerID as customerID, payment_taxi.amount as price FROM payment_taxi INNER JOIN taxibooking ON payment_taxi.taxibookingID = taxibooking.taxibookingID WHERE payment_taxi.driverID = $id AND payment_taxi.paymentDate LIKE '%$date%'";
		$query_earning_taxi = "SELECT SUM(amount) as total FROM payment_taxi WHERE driverID = $id AND paymentDate LIKE '%$date%'";
		
		
		// to run sql query in database
		$result_rental = mysqli_query($con, $query_payment_rental);
		$result_earning_rental = mysqli_query($con, $query_earning_rental);
		
		$result_taxi = mysqli_query($con, $query_payment_taxi);
		$result_earning_taxi = mysqli_query($con, $query_earning_taxi);
				
		echo "<table>";
		echo "\r\n";
		echo "<br>";
						
		echo "<table style= 'border-collapse: collapse'>";
		echo "<font size=5pt><strong> Rental Service </strong> </font>";
		echo "<tr><th>Date</th> <th>Total Charges (RM)</th><th>customer ID</th> </th></tr>";
		while ($row1=mysqli_fetch_assoc($result_rental)){
			
			echo "<tr><td>" . $row1['date']. " </td><td> ". $row1['price']." </td><td> ". $row1['customerID']." </td></tr> ";
		}
		echo "</table>";
		echo "\r\n";
		echo "<br>";
		
		$row2=mysqli_fetch_array($result_earning_rental);

		echo "<font size=5pt><strong> The Total  Earnings </strong> </font>";
		echo "<table>";
		echo "<table style= 'border-collapse: collapse'>";
		echo "<tr><th>Total Earnings (RM)</th></tr>";
		echo "<tr><td>" .$row2['total']. "</td></tr>";	
		echo "</table>";
		
		
		echo "<table>";
		echo "\r\n";
		echo "<br>";
						
		echo "<table style= 'border-collapse: collapse'>";
		echo "<font size=5pt><strong> Taxi Service </strong> </font>";
		echo "<tr><th>Destination</th><th>Distance</th><th>customerID</th><th>Total Charges (RM)</th> </th></tr>";
		while ($row3=mysqli_fetch_assoc($result_taxi)){
			
			echo "<tr><td>" . $row3['destination']. " </td><td> ". $row3['distance']. " </td><td> ". $row3['customerID']. " </td><td> ". $row3['price']." </td></tr> ";
		}
		echo "</table>";
		echo "\r\n";
		echo "<br>";
		
		$row4=mysqli_fetch_array($result_earning_taxi);

		echo "<font size=5pt><strong> The Total  Earnings </strong> </font>";
		echo "<table>";
		echo "<table style= 'border-collapse: collapse'>";
		echo "<tr><th>Total Earnings (RM)</th></tr>";
		echo "<tr><td>" .$row4['total']. "</td></tr>";	
		echo "</table>";
		
	}
	
mysqli_close($con);
?>



</body>
</html>