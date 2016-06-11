<?php
	$con= mysqli_connect("localhost","root","","rti");
	$qno=$_GET['qno'];
	session_start();
	$id=$_SESSION['id'];
	echo $qno;
	$data1="SELECT * FROM t2 WHERE id=".$id.";";
	$query=mysqli_query($con,$data1);
	$data2=mysqli_num_rows($query);
	$ac=$data2;
	//$a=$data2;
	
	$data3=mysqli_fetch_array($query);
	echo" As per the RTI sent to the institute the following information is requested from: ".$data3['map'];
	echo"</br>";
	echo $data3['ques'];
	//"AND q_no=".$qno.
	
	?>