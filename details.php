<?php

	include('conn.php');

	$id =  $_GET['q'];
	$query = "select id,name,phone,email from contacts where id = '$id' ";
	$run_query = mysqli_query($conn,$query);
	$contact = mysqli_fetch_object($run_query);
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
	<h2>Contact Detail</h2>
	<hr>
	<a href="index.php">
		<button>Back</button>
	</a>

	<fieldset>
		<legend>Contact</legend>
	<table border="1" cellspacing="5" cellpadding="3" width="50%" height="300px">
		<tr>
			<th>#ID</th>
			<td><?php echo $contact -> id; ?></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><?php echo $contact -> name; ?></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><?php echo $contact -> email; ?></td>
		</tr>
		<tr>
			<th>Phone</th>
			<td><?php echo $contact -> phone; ?></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<a href = "delete.php?q=<?php echo $contact -> id;?>" onclick = "return confirm('Are you sure you want to delete ?')"><button>Delete</button></a>
			</td>
		</tr>
	</table>
	</fieldset>

</body>
</html>