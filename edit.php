<?php require_once 'library/dbConnect.php';
if($_GET['id']) {
$id = $_GET['id'];
$sql = "SELECT * FROM announcement WHERE id = {$id}";
$result = $connect->query($sql);
					 
$data = $result->fetch_assoc();	
					 
$connect->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
</head>
<body>

<h1 align="center">Please fill in the following information:</h1>
<form name="Student details" action="action/update.php" method="POST" enctype="multipart/form-data">
	<table align="center" style="width: 80%">

		<tr>
			<td width="15%">Admin's Name</td>
			<td><input type="text" id="Name" name="Name" value="<?php echo $data['AdminName'] ?>" style="width: 80%"> </td>
		</tr>
		<tr>
			<td width="15%">ID</td>
			<td><input type="text" id="idstaf" name="idstaf" value="<?php echo $data['StaffID'] ?>" style="width: 30%"></td>
		</tr>
		<tr>
			<td>Select image:</td>
      		<td><input type="file" name="image" id="image"></td>
		</tr>
		<tr>
			<td width="15%">Desription</td>
			<td><textarea type="text" name="desc" id="desc"  rows="5" cols="100"><?php echo $data['Description'] ?></textarea>  </td>
		</tr>

		
		 <tr>
      <td> </td>
      
    </tr>
	</table>

	<br><br><div align="center">
        <input type="hidden" name="user_ID" value="<?php echo $data['id']?>" />
		<input type="submit" value="SUBMIT"></div>
</form>

<?php
}
?>

</body>
</html>