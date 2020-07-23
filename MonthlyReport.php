<!DOCTYPE html>
<html>

<style>

table.center {
	align="center"
}

h1 {
	margin-top: 60px;
	font-size: 40pt;
}
</style>

<body>
<h1 align="center"> Monthly Report </h1>
<table class="center" style="margin-left:auto; margin-right:auto; margin-top:60px;">
<form action="monthDriverReport.php" method="post">
	<tr>
	<td><input type="text" placeholder="Enter Month" name="MyMonth"> </td> </tr>
	<tr>
	<td><input type="text" placeholder="Enter Driver ID" name="MyDriverID"> </td> </tr>
	<tr>
	<td colspan ="2"><input id="submit_button" type ="submit" value="Submit" > </td> </tr>
</form>
</table>

</body>
</html>