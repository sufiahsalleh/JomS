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
<h1 align="center"> Daily Report </h1>
<table class="center" style="margin-left:auto; margin-right:auto; margin-top:60px;">
<form action="dailyDriverReport.php" method="post">
	<tr>
	<td><input type="date" placeholder="Enter Date" name="myDate"></td></tr>
	<tr>
	<td><input type="text" placeholder="Enter Driver ID" name="myDriverID"></td></tr>
	<tr>
	<td colspan ="2"><input id="submit_button" type ="submit" value="Submit" > </td></tr>
</form>
</table>

</body>
</html>