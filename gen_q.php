<?php
	$con= mysqli_connect("localhost","root","","rti");
	$qno=$_GET['qno'];
	
	session_start();
	//$qno=$_SESSION['cc'];
	$id=$_SESSION['id'];
	
	echo"</br>";
	echo"</br>";
	
	
	echo" For id :".$id;
	echo"</br>";
	echo"</br>";
	
	echo "Corresponding to query:".$qno;
	echo"</br>";
	$data1="SELECT * FROM t2 WHERE id=".$id." AND q_no=".$qno.";";
	//echo $data1;
	$query=mysqli_query($con,$data1);
	$data2=mysqli_fetch_assoc($query);
	echo"</br>";
	
	echo" As per the RTI sent to the institute the following information is requested from: ".$data2['map']." department";
	echo"</br>";
	echo $data2['ques'];
	echo"</br>";
	echo"</br>";
	
	echo"<a href='new_prev.php'><input type=submit value=Exit></a>";
	
	?>