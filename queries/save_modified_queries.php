<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['login_access'])){
	header("location: ../errors/no_file.php");
}
else {
	$c = $_SESSION['prev_rti_id'];
	$b = $_SESSION['qu'];

	$_SESSION['database_access'] = true;
	include '../db/config_database.php';
	$_SESSION['database_access'] = false;

	$data1 = "SELECT * FROM t2 WHERE id=".$c.";";
	$query = mysqli_query($con, $data1);
	while( $b!=0) {
		$qno = "q_no".$b;
		$ques = "ques".$b;
		$map = "map".$b;
		$date_s = "date_s".$b;

		$qno1 = $_POST[$qno];
		$ques1 = $_POST[$ques];
		$map1 = $_POST[$map];
		$date_s1 = $_POST[$date_s];
		$d1 = strtotime($_POST[$date_s]);

		$sql = "INSERT INTO t2 (id, q_no, ques, map, date_sent) VALUES ('$c','$qno1','$ques1','$map1','$date_s1')";
		mysqli_query($con, $sql);
		$b--;
	}
	mysqli_close($con);
	if (isset($_POST['save'])) {
		header('location: ../ongoing_rti/ongoing_rti_option.php');
	}
	if (isset($_POST['reply'])) {
		header ('location: ../ongoing_rti/gen_query_pdf.php');
	}
}
?>
