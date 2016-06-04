<?php

	include 'new_prev.php';
	$con= mysqli_connect("localhost","root","","rti");
	if(!$con)
	{
		die("Can not connect:" . mysql_error());
	}
	session_start();
	$c=$_SESSION['id'];
	$b=$_SESSION['q'];
	$data1="SELECT * FROM t2 WHERE id=".$c.";";
	$query=mysqli_query($con,$data1);
	$data2=mysqli_num_rows($query);
	$a=$data2;
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
			VALUES('$c','$a','$ques1','$map1','$date_s1')";
		
		mysqli_query($con,$sql);
		$b--;
	}
	mysqli_close($con);
?>