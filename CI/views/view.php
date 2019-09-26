<!DOCTYPE html>
<html>
<head>
	<title> Student Detail</title>
</head>
<body>
	<h2 align="center">Get Student Detail</h2>
<form method="post">
	<table align="center" border="1">
		<tr>
			<th>FirstName</th>
			<th>LastName</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Hobbies</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		</tr>
		<tbody>
			<?php if (count($students) ); ?>
			<?php foreach( $students as $getdata) { ?>
				<tr>
					<td><?php echo $getdata->f_name; ?></td>
					<td><?php echo $getdata->l_name; ?></td>
					<td><?php echo $getdata->email; ?></td>
					<td><?php echo $getdata->gender; ?></td>
					<td><?php echo $getdata->hobby; ?></td>
					<td><?php echo $getdata->status; ?></td>
<td><a href="<?php echo base_url('student/Delete').'/'.$getdata->stu_id; ?>" onclick="return confirm('Are You Sure?')">Delete</a>
	<a href="<?php echo base_url('student/UpdateUser').'/'.$getdata->stu_id; ?>">Update</a>
</td>
				</tr>	
			<?php } ?>

		<tr><td colspan="8" align="center"><button><a href="<?php echo base_url('student/addNewUser'); ?>"/>Add New Student</button></td>
		</tr>
		</tbody>
	</table>
</form>

</body>
</html>