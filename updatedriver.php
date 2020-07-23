<!--update.php-->
<!--To update data of updateprofiledriver.php into database.-->
<?php
include ("dbase.php");

extract ($_POST);


$query = "UPDATE driver SET username = '$username', name = '$name', password = '$password', email = '$email', phoneNo = '$phoneNo', age = '$age' , ic = '$ic', address = '$address', Date = '$Date', services = '$services', status = '$status' WHERE driverID = '$driverID'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in updateprofile.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='viewaccountdriver.php' </script>";
}
?>