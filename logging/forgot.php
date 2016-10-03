<?php
  if(!isset($_SESSION)) {
	  session_start();
  }
	if(!isset($_SESSION['login_access'])){
		header("location: ../errors/no_file.php");
	}
	elseif ($_SESSION['login_access'] != 'Admin') {
		header("location: ../errors/no_access.php");
	}
	else {
?>
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
    if (isset($_POST['submit'])) {
      $_SESSION['database_access'] = true;
    	include '../db/config_database.php';
    	$_SESSION['database_access'] = false;

	    $mail = $_POST['mail'];
	    $q = mysql_query("select * from login where email='".$mail."' ") or die(mysql_error());
      $p = mysql_affected_rows();
	    if ($p != 0) {
		    $res = mysql_fetch_array($q);
		    $to = $res['email'];
		    $subject = 'Remind password';
		    $message = 'Your password : '.$res['password'];
		    $headers = 'From:ugbakwaas@gmail.com';
		    $m = mail($to,$subject,$message,$headers);
		    if($m){
			    echo 'Check your inbox in mail';
		    }
		    else{
    			echo 'mail is not send';
    		}
    	}
      else {
        echo'You entered mail id is not present';
      }
    }
?>
</body>
</html>
<?php } ?>
