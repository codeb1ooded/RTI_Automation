<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" href="css/background.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>
<?php
	include 'config_database.php'; 
	echo "<div class='container'>";
	$id=$_GET['id'];
if(!isset($_POST['submit']) && !isset($_POST['change']))
{
	echo "<h2>CHANGE PASSWORD</h2><br><br>" ;
	echo "<form  method=post action=forgot_password.php?id=".$id.">
  			<h4>Enter the admin password again to change the password:</h4> <input type=password placeholder=Password id=Passwod name=pswd>
			<input class=btn type='submit' name ='submit' value='Enter' />
			</form>";
	echo "<br><a href=change_password.php class=btn>Back</a>";
}
if(isset($_POST['submit']))
{
	echo "<h2>CHANGE PASSWORD</h2><br><br>" ;
	$query=" SELECT * FROM login where id=1;";
	$res= mysqli_query($con, $query);
	$r=mysqli_fetch_assoc($res);
	$p=$r['password'];
	$id=$_GET['id'];
	if($_POST['pswd']==$p)
	{	
		echo "<form method=post action=forgot_password.php?id=".$id.">
  				<h4>Enter the new password:</h4> <input type=password placeholder=New_Password id=Password name=pwd>
				<input class=btn type='submit' name ='change' value='Enter' />
			</form>";
	}
	else
	{
		echo "Wrong Admin Password";
		header('Location: change_password.php');
	}
	echo "<br><a href=change_password.php class=btn>Back</a>";
}
if(isset($_POST['change']))
{
	$id=$_GET['id'];
	$query="UPDATE login SET password='".$_POST['pwd']."' WHERE id=".$id;
	mysqli_query($con, $query);
	echo "<br><h4>Password changed successfully!</h4>";
	include 'change_password.php';
}
echo "</div>";
?>
</body>
</html>