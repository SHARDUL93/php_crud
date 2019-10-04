<?php
  
  $conn = mysqli_connect('localhost','root','','contacts'); //hostname,username,password,dbname

  if (!$conn) {
  		die("Failed to connect.");
  }


?>