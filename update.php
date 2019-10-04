<?php

	include('conn.php');

		$id =  $_GET['q'];

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		
		$query ="update contacts set name = '$name',email='$email',phone= '$phone' where id='$id'; ";
		if(mysqli_query($conn,$query)) //connection,query
		{
			echo '<strong style= "color: blue">Contact has been updated.</strong>';
			header("location: index.php");
		} 
		else
		{
		echo 'Failed to Update.';
		}
		
		
	

?>