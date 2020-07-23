<!--update.php-->
<!--To update data of updateprofile.php into database.-->
<?php
include ("dbase.php");

extract ($_POST);


$query = "UPDATE customer SET name = '$name', username = '$username', email = '$email', phoneNo = '$phoneNo' WHERE CustomerID = '$CustomerID'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in updateprofile.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='profile.php' </script>";
}
?>