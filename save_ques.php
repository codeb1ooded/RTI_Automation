<?php
	session_start();
	$id=$_SESSION['id'];
	$c=$_SESSION['no_of_queries'];
	
	$b=$c;
	
	include 'config_database.php';
	
	$data1="SELECT * FROM t2 WHERE id=".$id.";";
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
			VALUES('$id','$a','$ques1','$map1','$date_s1')";
		
		mysqli_query($con,$sql);
		$b--;
	}
	$b=$b+1;
	
	$_SESSION['q']=$b;
	
	mysqli_close($con);
	include 'select_option.php';
?>
