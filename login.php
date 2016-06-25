<?php
session_start();
if(isset($_POST['submit'])){
	
	$con = mysqli_connect("localhost","root",""); 
	if (!$con) { 
		die('Could not connect: ' . mysqli_error()); 
	} 
	mysqli_select_db($con, "rti");
	
	$name=$_POST['name'];
	$pwd=$_POST['pswd'];
	if($name!='' && $pwd!=''){		
		
		$query=mysqli_query($con, "select * from login where name='".$name."' and password='".$pwd."'");
		$res=mysqli_fetch_row($query);
		
		if($res){
			$_SESSION['name']=$name;
			header('location:new_prev.php');
		} else{
			echo'You entered username or password is incorrect';
			header("Location: content.php");
		}
	} else{
		echo'Enter both username and password';
		header("Location: content.php");
	}
	
}
?>