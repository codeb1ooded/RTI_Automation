<?php
session_start();

if(isset($_POST['submit'])){
	
	include 'config_database.php'; 
	
	$name=$_POST['name'];
	$pwd=$_POST['pswd'];
	
	$_SESSION['name']=$name;
			
	if($name!='' && $pwd!=''){		
		
		$query=mysqli_query($con, "select * from login where name='".$name."' and password='".$pwd."'");
		$res=mysqli_fetch_row($query);
		
		if($res){
			header('location:new_prev.php');
		} else{
			echo'You entered username or password is incorrect';  #NO effect
			header("Location: 1.php");
		}
	} else{
		echo'Enter both username and password';  #NO effect
		header("Location: 1.php");
	}
}
?>