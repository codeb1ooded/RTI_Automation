<?php	
	if(isset($_POST['submitSection4'])){
	include 'prev_rti.php';
	include 'config_database.php';
	$d1=strtotime($_POST['fee_submit_date']);
	$d2=strtotime($_POST['given_info_date']);
	$d3=floor(abs($d2-$d1)/86400);
	session_start();
	$c=$_SESSION['prev_rti_id'];
	
	$sql="INSERT INTO section4 (id, info_fee_date, info_fee, fee_submit_date, given_info_date, info_time) 
	VALUES('$c','$_POST[info_fee_date]','$_POST[info_fee]','$_POST[fee_submit_date]','$_POST[given_info_date]','$d3')";
	mysqli_query($con,$sql);
	mysqli_close($con);
	}
	
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