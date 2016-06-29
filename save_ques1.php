<?php
	include 'config_database.php'; 
	session_start();
	$c=$_SESSION['oid'];
	$b=$_SESSION['q'];
	$_SESSION['q']=$b;
	$data1="SELECT * FROM t2 WHERE id=".$c.";";
	$query=mysqli_query($con,$data1);
	$data2=mysqli_num_rows($query);
	$ac=$data2;
	$qno=0;
	while( $ac!=0)
	{
		$data3=mysqli_fetch_array($query);
		$qno=$data3['q_no'];
		$ac--;
	}
	
	$qno=$qno+1;
	$_SESSION['q']=$qno;
	while($b!=0)
	{				
		$ques="ques".$b;
		$map="map".$b;
		$date_s="date_s".$b;

		//$qno1=$_POST[$qno];		
		$ques1=$_POST[$ques];
		$map1=$_POST[$map];
		$date_s1=$_POST[$date_s];

		$sql="INSERT INTO t2(id,q_no,ques,map,date_sent) 
			VALUES( '$c' , '$qno' , '$ques1', '$map1' , '$date_s1')".";";
		mysqli_query($con,$sql);
		$qno=$qno+1;
		$b--;
	}
	$_SESSION['v']=$qno-1;
	mysqli_close($con);
	if(isset($_POST['save']))
	include 'new_prev.php';
	if(isset($_POST['gen_pdf']))
		include 'gen_query_pdf.php';

?>
