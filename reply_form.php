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
	$data1="SELECT * FROM t2 WHERE id=".$c.";";
	$query=mysqli_query($con,$data1);
	$data2=mysqli_num_rows($query);
	$a=$data2;
	//$ans='';
	//mysqli_select_db($con, "rti");
	while($b!=0)
	{	
		$data3=mysqli_fetch_array($query);
		$date_sent1=$data3['date_sent'];
		$map=$data3['map'];
		$qno=$data3['q_no'];
		$ques=$data3['ques'];
		$ans="ans".$b;
		$date_rec="date_rec".$b;
		
		$ans1=$_POST[$ans];
		$date_rec1=$_POST[$date_rec];
		$a++;
		$sql= "UPDATE t2 SET
				ques='$ques',
				map='$map',
				ans='$ans1',
				date_sent='$date_sent1',
				date_rec='$date_rec1' WHERE id=".$c." AND q_no=".$qno.";";
	
		//$con->query($sql);
		$test=mysqli_query($con,$sql);
		//echo $test;
		$b--;
		$qno++;
	}
	mysqli_close($con);
	?>