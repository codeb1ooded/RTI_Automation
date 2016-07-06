<?php

	include 'new_prev.php';
	include 'config_database.php'; 
	session_start();
	$c=$_SESSION['oid'];
	$b=$_SESSION['quer'];
	$data1="SELECT * FROM t2 WHERE id=".$c.";";
	$query=mysqli_query($con,$data1);
	while($b!=0)
	{	
		$data3=mysqli_fetch_array($query);
		$qno=$data3['q_no'];
		$ans="ans".$b;
		$sec="sec".$b;
		$subsec="subsec".$b;
		$date_rec="date_rec".$b;
		
		$ans1=$_POST[$ans];
		$subsec1=$_POST[$subsec];
		$date_rec1=$_POST[$date_rec];

		$sql1="SELECT * FROM article_sub_section WHERE Id=".$subsec1.";";
		$row=mysqli_query($con,$sql1);
		if($row)
		{
			$desc1=mysqli_fetch_assoc($row);
			$desc=$desc1['Description'];
			if(!$desc)
				$desc="NULL";
		}
		
		$sql="INSERT INTO reply_queries VALUES('$c','$qno','$ans1','$desc','$date_rec1');";
	
		mysqli_query($con,$sql);
		$b--;
		$qno++;
	}
	mysqli_close($con);
?>