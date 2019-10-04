<?php 
	/*Inserting data */
	include('conn.php');
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		//echo $name.' '.$email.' '.$phone;
		
		$query ="insert into contacts(name,email,phone) values
			('$name','$email','$phone'); ";
		if(mysqli_query($conn,$query)) //connection,query
		{
			echo '<strong style= "color: green">Contact has been added.</strong>';
		}
		
		
	}

	/**Showing data **/
	$query ="select * from contacts;";
	$run_query = mysqli_query($conn,$query);
	//print_r(mysqli_fetch_object($run));

?>



<!DOCTYPE html>
<html>
<head>
	<title>Contacts</title>
</head>
	<body>

		<h1>Contacts</h1>
		<hr>

		<!--Create Contact form -->
		<fieldset>
			<legend>Contacts</legend>

			<form method="POST" action="index.php">
			<table>
				<tr>
					<td>Name :</td>
					<td><input type="text" name="name" required=""></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="text" name="email" required=""></td>
				</tr>
				<tr>
					<td>Phone :</td>
					<td><input type="text" name="phone" required=""></td>
				</tr>
				<tr>
					<td colspan ="2">
						<hr>
						<button type = "submit" name="submit">Add Contact</button> 
					</td> 
				</tr>
			</table>
			</form>

		</fieldset>

		<!--Create Contact List -->

		<h1>Contact List</h1>
		<hr>

			<?php
			if($run_query -> num_rows == 0)
			{
				echo "<strong style='color: orange'>No data found.</strong>";
			} else
			{
		?>
		<fieldset>
			<legend>Contact List</legend>
		<table border="1" width="50%" cellpadding="5" cellspacing="5">
			<tr>
				<th>#ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>

			<?php while($contact = mysqli_fetch_object($run_query)):?>
			<tr>
				<td><?php echo $contact -> id ?></td>
				<td><?php echo $contact -> name ?></td>
				<td><?php echo $contact -> email ?></td>
				<td><?php echo $contact -> phone ?></td>
				<td colspan="4" width="70%">
					<a href = "delete.php?q=<?php echo $contact -> id;?>" onclick = "return confirm('Are you sure you want to delete ?')"><button>Delete</button></a>
					<a href="details.php?q=<?php echo $contact -> id;?>"><button>Details</button></a>
					<a href="edit.php?q=<?php echo $contact -> id;?>"><button>Update</button></a>
				</td>
			</tr>
			<?php endwhile; ?>
		
		</table>
		</fieldset>

	<?php } ?>

	</body>
</html>