<!DOCTYPE html>
<html>
<head>
	<title>Student Detail</title>
</head>
<body>
	<h2 align="center">Student Detail</h2>
<form method="post">
	<table align="center" border="1">
		<tr>
			<th>First Name</th>
			<td><input type="text" name="f_name"></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" name="l_name"></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<th>Gender</th>
			<td><input type="radio" name="gender" value="male" >Male
				<input type="radio" name="gender" value="female" >Female</td>
		</tr>
		<tr>
			<th>Hobbies</th>
			<td>
				<input type="checkbox" name="hobby[]" value="cricket"/>Cricket
      			<input type="checkbox" name="hobby[]"  value="hockey"/>Hockey
      			<input type="checkbox" name="hobby[]"value="football"/>Football
			</td>
		</tr>
		<tr>
			<th>Status</th>
			<td><input type="radio" name="status" value="1"/>Active
			<input type="radio" name="status" value="0"/>Inactive</td> 
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="Reset" value="reset">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
