<?php	
	if(isset($_POST['submitappeal'])){
	include 'prev_rti.php';
	$con= mysqli_connect("localhost","root","","rti");
	
	if(!$con){
			die("Can not connect:" . mysql_error());
	}
	session_start();
	$c=$_SESSION['prev_rti_id'];
	
	$sql="INSERT INTO first_appeal (id, appeal_info, transfer_date, faa_receipt_date, meet_date) 
	VALUES('$c','$_POST[appeal_info]','$_POST[transfer_date]','$_POST[faa_receipt_date]','$_POST[meet_date]')";
	mysqli_query($con,$sql);
	mysqli_close($con);
	}
	?>
