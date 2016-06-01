<?php
session_start();
if(isset($_POST['submit']))
{
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('rti') or die(mysql_error());
	$name=$_POST['name'];
	$pwd=$_POST['pswd'];
	if($name!=''&&$pwd!='')
	{
		$query=mysql_query("select * from login where name='".$name."' and password='".$pwd."'") or die(mysql_error());
		$res=mysql_fetch_row($query);
		if($res)
		{
			$_SESSION['name']=$name;
			header('location: 1.php');
		}
		else
		{
			echo'You entered username or password is incorrect';
			header("Location: content.php");
		}
	}
	else
	{
		echo'Enter both username and password';
		header("Location: content.php");
	}
}
?>