<?php
	session_start();
	$id=$_SESSION['id'];
	$b=$_SESSION['no_of_queries'];
	
	include 'config_database.php';
	
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
		include 'ongoing_rti_option.php';
	else
	include 'select_option.php';

	if(isset($_POST['gen_pdf']))
		include 'gen_query_pdf.php';
?>
