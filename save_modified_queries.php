<?php
if(!isset($_SESSION) || !isset($_SESSION['Account_type'])) {
	// echo 'session not started';
		include 'index.php';
		echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Please login first"; document.getElementById("message").style.color = "#ff0000";</script>';
}
else{
	$c=$_SESSION['prev_rti_id'];
	$b=$_SESSION['qu'];

	include 'config_database.php';

	$data1="SELECT * FROM t2 WHERE id=".$c.";";
	$query=mysqli_query($con, $data1);

	while( $b!=0)
	{
		$qno="q_no".$b;
		$ques="ques".$b;
		$map="map".$b;
		$date_s="date_s".$b;

		$qno1=$_POST[$qno];
		$ques1=$_POST[$ques];
		$map1=$_POST[$map];
		$date_s1=$_POST[$date_s];
		$d1=strtotime($_POST[$date_s]);

		$sql="INSERT INTO t2 (id,q_no,ques,map,date_sent)
		  VALUES('$c','$qno1','$ques1','$map1','$date_s1')";
		mysqli_query($con,$sql);
		$b--;
	}
	mysqli_close($con);
if(isset($_POST['save']))
{
	include 'ongoing_rti_option.php';
}
if(isset($_POST['reply']))
{
	include 'gen_query_pdf.php';
}
}
?>
