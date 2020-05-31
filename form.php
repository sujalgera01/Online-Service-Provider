<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
<h1>Fill all the details correctly</h1>
<hr>

	<form method="post">
	<table>
		<tr>
			<td>First Name: </td>
			<td><input type="text" name="fname" required placeholder="Enter Name"></td>
		</tr>
		<tr>
			<td>Last Name: </td>
			<td><input type="text" name="lname" required placeholder="Enter Last Name"></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="Email" name="mail" required placeholder="something@abc.com"></td>
		</tr>
		<tr>
			<td>Mobile No: </td>
			<td><input type="Mobile" name="mobile" required placeholder="**********"></td>
		</tr>
		<tr>
			<td>Pick-Up Location: </td>
			<td><input type="Location" name="location1" required placeholder="Where to Pick"></td>
		</tr>
		<tr>
			<td>Drop Location: </td>
			<td><input type="Location" name="location2" required placeholder="Where to Drop"></td>
		</tr>
		<tr>
			<td>Time Duration <small>within</small>: </td>
			<td><input type="Time" name="time" required placeholder="00:00"></td>
		</tr>
	</table>
	<button name="submit" class="btn1">SUBMIT</button>
</form>

</body>
</html>