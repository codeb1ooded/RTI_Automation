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
			header('location:select_option.php');
		} else{
			header("Location: index.html");
			echo 'Entered username or password is incorrect';  #NO effect
		}
	} else{
		echo 'Enter both username and password';  #NO effect
		header("Location: index.html");
	}
}
?>