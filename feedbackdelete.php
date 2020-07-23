<?php

include ("dbase.php");

$feebackIDURL = $_GET['feebackID'];

$query = "DELETE FROM feedback WHERE feebackID = '$feebackIDURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in ubah.php");

if($result){
echo "<script type= 'text/javascript'> window.location='feedbackview.php'</script>";
}
?>