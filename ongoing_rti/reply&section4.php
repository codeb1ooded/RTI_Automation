<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['login_access'])){
	header("location: ../errors/no_file.php");
}
else{
	$id=$_SESSION['prev_rti_id'];

	if(isset($_POST['submitSection4'])){

		include 'ongoing_rti_option.php';
		$_SESSION['database_access'] = true;
		include '../db/config_database.php';
		$_SESSION['database_access'] = false;

		$d1=strtotime($_POST['fee_submit_date']);
		$d2=strtotime($_POST['given_info_date']);
		$d3=floor(abs($d2-$d1)/86400);

		$sql="INSERT INTO section4 (id, info_fee_date, info_fee, fee_submit_date, given_info_date, info_time)
		VALUES('$id','$_POST[info_fee_date]','$_POST[info_fee]','$_POST[fee_submit_date]','$_POST[given_info_date]','$d3')";
		mysqli_query($con,$sql);
		mysqli_close($con);
	}

	else if(isset($_POST['submitresponse'])){
		include 'ongoing_rti_option.php';
		$_SESSION['database_access'] = true;
		include '../db/config_database.php';
		$_SESSION['database_access'] = false;

		$d1=strtotime($_POST['reply_date']);
		$d2=strtotime($_POST['holder_receipt_date']);
		$d3=floor(abs($d2-$d1)/86400);

		$sql="INSERT INTO info_about_reply (id, holder_receipt_date, reply_date, reply_mode, reply_time, faa_info)
		VALUES('$id','$_POST[holder_receipt_date]','$_POST[reply_date]','$_POST[reply_mode]','$d3','$_POST[faa_info]')";
		mysqli_query($con,$sql);
		mysqli_close($con);
	}
	else if(isset($_POST['submitSection4new'])){
		include 'ongoing_rti_option.php';
		$_SESSION['database_access'] = true;
		include '../db/config_database.php';
		$_SESSION['database_access'] = false;

		$sql="DELETE FROM section4 WHERE id=".$id.";";
		mysqli_query($con,$sql);

		$d1=strtotime($_POST['fee_submit_date']);
		$d2=strtotime($_POST['given_info_date']);
		$d3=floor(abs($d2-$d1)/86400);

		$sql="INSERT INTO section4 (id, info_fee_date, info_fee, fee_submit_date, given_info_date, info_time)
		VALUES('$id','$_POST[info_fee_date]','$_POST[info_fee]','$_POST[fee_submit_date]','$_POST[given_info_date]','$d3')";
		mysqli_query($con,$sql);
		mysqli_close($con);
	}

	else if(isset($_POST['submitresponsenew'])){
	$_SESSION['database_access'] = true;
	include '../db/config_database.php';
	$_SESSION['database_access'] = false;

		$sql="DELETE FROM info_about_reply WHERE id=".$id.";";
		mysqli_query($con,$sql);

		$d1=strtotime($_POST['reply_date']);
		$d2=strtotime($_POST['holder_receipt_date']);
		$d3=floor(abs($d2-$d1)/86400);

		$sql="INSERT INTO info_about_reply (id, holder_receipt_date, reply_date, reply_mode, reply_time, faa_info)
		VALUES('$id','$_POST[holder_receipt_date]','$_POST[reply_date]','$_POST[reply_mode]','$d3','$_POST[faa_info]')";
		mysqli_query($con,$sql);
		mysqli_close($con);
		echo "<a href='close_rti.php?id=".$id."'>Close This RTI</a>";
		echo "&nbsp&nbsp<a class='btn' href='ongoing_rti_option.php?id=".$id."''>Back</a>" ;


	}
}
?>
