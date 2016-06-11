<?php

	include 'new_prev.php';
	$con= mysqli_connect("localhost","root","","rti");
	if(!$con)
	{
		die("Can not connect:" . mysql_error());
	}
	session_start();
	$c=$_SESSION['oid'];
	$b=$_SESSION['quer'];
	$data1="SELECT * FROM replyquery WHERE id=".$c.";";
	$query=mysqli_query($con,$data1);
	$data2=mysqli_num_rows($query);
	$a=$data2;
	while($b!=0)
	{	
		$ans="$ans".$b;
		$qno="$qno".$b;
		$date_rec="$date_rec".$b;
		$qno1=$_POST[$qno];
		$ans1=$_POST[$ans];
		$date_rec1=$_POST[$date_rec];
		$a++;
		$sql="INSERT INTO replyquery(id,query_no,ans,datereceived) 
			VALUES('$c','$qno1','$ans1','$date_rec1')";
		
		mysqli_query($con,$sql);
		$b--;
	}
	mysqli_close($con);
	?>