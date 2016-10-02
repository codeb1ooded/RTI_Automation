<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['login_access'])){
	header("location: ../errors/no_file.php");
}
elseif ($_SESSION['login_access'] != 'Admin') {
	header("location: ../errors/no_access.php");
}
else {
	$id=$_SESSION['id'];
	$b=$_SESSION['no_of_queries'];

	$_SESSION['database_access'] = true;
	include '../db/config_database.php';
	$_SESSION['database_access'] = false;

	$data1="SELECT * FROM t2 WHERE id=".$id.";";
	$query=mysqli_query($con,$data1);
	$data2=mysqli_num_rows($query);
	$a=$data2;
	$c=$a;
	while($b!=0)
	{
		$ques="ques".$b;
		$map="map".$b;
		$date_s="date_s".$b;

		$ques1=$_POST[$ques];
		$map1=$_POST[$map];
		$date_s1=$_POST[$date_s];

		$a++;
		$sql="INSERT INTO t2(id,q_no,ques,map,date_sent)
			VALUES('$id','$a','$ques1','$map1','$date_s1')";

		mysqli_query($con,$sql);
		$b--;
	}
	mysqli_close($con);
	if ($c)
		header('location: ../ongoing_rti/ongoing_rti_option.php');
	else
		header("location: ../select_option.php");

	if(isset($_POST['gen_pdf']))
		header("location: ../gen_query_pdf.php");
}
?>
