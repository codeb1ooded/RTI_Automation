<?php	
	if(isset($_POST['submitresponse'])){
	include 'prev_rti.php';
	$con= mysqli_connect("localhost","root","","rti");
	
	if(!$con){
			die("Can not connect:" . mysql_error());
	}
	$d1=strtotime($_POST['reply_date']);
	$d2=strtotime($_POST['holder_receipt_date']);
	$d3=floor(abs($d2-$d1)/86400);
	session_start();
	$c=$_SESSION['prev_rti_id'];
	
	$sql="INSERT INTO info_about_reply (id, holder_receipt_date, reply_date, reply_mode, reply_time, faa_info) 
	VALUES('$c','$_POST[holder_receipt_date]','$_POST[reply_date]','$_POST[reply_mode]','$d3','$_POST[faa_info]')";
	mysqli_query($con,$sql);
	mysqli_close($con);
	}
?>