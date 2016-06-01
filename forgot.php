<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
	<h1>Forgot Password<h1>
	<form action='#' method='post'>
		<table cellspacing='5' align='center'>
			<tr>
				<td>Email id:</td>
				<td><input type='text' name='mail'/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type='submit' name='submit' value='Submit'/></td>
			</tr>
		</table>
	</form>
<?php
if(isset($_POST['submit']))
{ 
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('rti') or die(mysql_error());
	$mail=$_POST['mail'];
	$q=mysql_query("select * from login where email='".$mail."' ") or die(mysql_error());
	$p=mysql_affected_rows();
	if($p!=0) 
	{
		$res=mysql_fetch_array($q);
		$to=$res['email'];
		$subject='Remind password';
		$message='Your password : '.$res['password']; 
		$headers='From:ugbakwaas@gmail.com';
		$m=mail($to,$subject,$message,$headers);
		if($m)
		{
			echo 'Check your inbox in mail';
		}
		else
		{
			echo 'mail is not send';
		}
	}
	else
	{
		echo'You entered mail id is not present';
	}
}
?>
</body>
</html>