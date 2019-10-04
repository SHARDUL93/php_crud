
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
	<title>Edit</title>
</head>
<body>
	<h1>Edit</h1>
	<hr>
	<!--Create Contact Edit form -->
		<fieldset>
			<legend>Contacts</legend>

			<form method="POST" action="update.php?q=<?php echo $contact -> id ; ?> ">
			<table>
				<tr>
					<td>Name :</td>
					<td><input type="text" name="name" required="" value="<?php echo $contact -> name; ?>"></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="text" name="email" required="" value="<?php echo $contact -> email; ?>"></td>
				</tr>
				<tr>
					<td>Phone :</td>
					<td><input type="text" name="phone" required="" value="<?php echo $contact -> phone; ?>"></td>
				</tr>
				<tr>
					<td colspan ="2">
						<hr>
						<button type = "submit" name="submit">Update</button> 
					</td> 
				</tr>
			</table>
			</form>

		</fieldset>

</body>
</html>