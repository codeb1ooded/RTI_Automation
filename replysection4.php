<?php	
	if(isset($_POST['submitSection4'])){
	include 'new_prev.php';
	$con= mysqli_connect("localhost","root","","rti");
	
	if(!$con){
			die("Can not connect:" . mysql_error());
	}
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
?>