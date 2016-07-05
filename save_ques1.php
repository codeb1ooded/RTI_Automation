<?php
	include 'config_database.php'; 
	session_start();
	$c=$_SESSION['oid'];
	$b=$_SESSION['q'];
	
	$qno=$_SESSION['qno']+1;
	while($b!=0)
	{				
		$ques="ques".$b;
		$map="map".$b;
		$date_s="date_s".$b;
		
		$ques1=$_POST[$ques];
		$map1=$_POST[$map];
		$date_s1=$_POST[$date_s];

		$sql="INSERT INTO t2(id,q_no,ques,map,date_sent) 
			VALUES( '$c' , '$qno' , '$ques1', '$map1' , '$date_s1')".";";
		mysqli_query($con,$sql);
		$qno=$qno+1;
		$b--;
	}
	mysqli_close($con);
	if(isset($_POST['save']))
	include 'new_prev.php';
	if(isset($_POST['gen_pdf']))
		include 'gen_query_pdf.php';

?>
