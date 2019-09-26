<!DOCTYPE html>
<html>
<head>
	<title>Student Detail</title>
</head>
<body>
	<h2 align="center">Update Student Detail</h2>
<form method="post">
	<table align="center" border="1">
		<?php
		
		// base_url("student/update/{$students->stu_id}");

		?>
		<tr>
			<th>First Name</th>
			<td><input type="text" name="f_name" value="<?php echo $students->f_name; ?>"></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" name="l_name" value="<?php echo $students->l_name;?>"></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="email" name="email" value="<?php echo $students->email;?>"></td>
		</tr>
		<tr>
			<th>Gender</th>
			<td><input type="radio" name="gender" value="male" <?php if($students->gender == "male"){echo "checked";} ?> >Male

				<input type="radio" name="gender" value="female" <?php if($students->gender == "female"){echo "checked";} ?> >Female</td>
		</tr>
		
		<tr>
			<th>Hobbies</th>
			<?php 
				$chkbox=$students->hobby;
				$hob=explode(",",$chkbox);
			?>
			<td>
				<input type="checkbox" name="hobby[]" value="cricket" <?php if(in_array("cricket",$hob)){echo "checked";} ?> />Cricket
      			<input type="checkbox" name="hobby[]" value="hockey"  <?php if(in_array("hockey",$hob))	{echo "checked";} ?>/>Hockey
      			<input type="checkbox" name="hobby[]"value="football" <?php if(in_array("football",$hob)){echo "checked";} ?> />Football
			</td>
		</tr>

		<tr>
			<th>Status</th>
			<td><input type="radio" name="status" value="1" <?php if($students->status == "1"){echo "checked";} ?> />Active
			<input type="radio" name="status" value="0" 	<?php if($students->status == "0"){echo "checked";} ?> />Inactive</td> 
		</tr>

		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="Update" value="Update">
				<input type="reset" name="Reset" value="reset">
				<button><a href="<?php echo base_url('student/index/')?>">List</a></button>
			</td>
		</tr>
	</table>
</form>
</body>
</html>
