<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['login_access'])){
	header("location: ../errors/no_file.php");
}
elseif ($_SESSION['login_access'] != 'Appellant') {
	header("location: ../errors/no_access.php");
}
else {
	$I = 0;
	$I = $_SESSION['i'];
	include 'appellant_interface.php';
	$_SESSION['database_access'] = true;
	include '../db/config_database.php';
	$_SESSION['database_access'] = true;
	$ans = $_POST['decision'];
	$sql = "INSERT INTO appeal_decision VALUES($I,'$ans');";
	$res = mysqli_query($con,$sql);
}
?>
