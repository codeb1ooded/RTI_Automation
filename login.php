<?php
session_start();
if(isset($_POST['submit'])){
	
	include 'config_database.php'; 
	
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