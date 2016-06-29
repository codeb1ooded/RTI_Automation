<?php
	$con = mysqli_connect("localhost","root","toor"); 
	if (!$con) { 
		die('Could not connect: ' . mysqli_error()); 
	} 
	$db = mysqli_select_db($con, "rti");
	if(!$db)
		echo " Connection to the database failed ";
?>