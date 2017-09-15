<?php
if(!isset($_SESSION)) {
	session_start();
}
$_SESSION['database_access'] = true;
include 'db/config_database.php';
$_SESSION['database_access'] = false;
$result = 'No';

// Php code to check validation of entered username and password
if(isset($_POST['submit'])){
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$myusername = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$mypassword = hash('sha256', $password);

// If username or password is empty tell user,
		if($myusername == '' || $mypassword == ''){
			$result = 'empty';
		}
		else {
// Access database to check if entered login username and password exist
			$sql = "SELECT Account_type, DEPARTMENT FROM login WHERE name = '$myusername' and password = '$mypassword'";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
			if($count == 1) {
				$_SESSION['user_name'] = $myusername;
				$_SESSION['login_access'] = $row['Account_type'];
				$_SESSION['department'] = $row['DEPARTMENT'];
				$result = 'Yes';
// Redirect to select_option page
				header("location: select_option.php");
			}
			else {
// Username & password are incorrect
				$result = 'incorrect';
			}
		}
	}
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title> Login </title>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/a.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function fpassoverlay(){
			alert("Please Contact Admin");
		}
// Reset message in html if user click either username or password element
window.onload = function(){
	document.getElementById('username').onclick = function(){
		document.getElementById("message").innerHTML="";
	}
	document.getElementById('password').onclick = function(){
		document.getElementById("message").innerHTML="";
	}
}
</script>
</head>
<body>
	<div class="container">
		<br>
		<h2>RTI APPLICATION SYSTEM</h2><br>
		<div class="form">
			<form method="post" action="">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Username " id="username" name="username">
					<i class="fa fa-user"></i>
				</div>

				<!-- Html to show login form -->
				<div class="form-group log-status">
					<input type="password" class="form-control" placeholder="Password" id="password" name="password">
					<i class="fa fa-lock"></i>
				</div>

				<input class="btn btn-log" type='submit' name ='submit' value='Log in' />
			</form>
			<input class="btn btn-log" id="fpass" onclick="fpassoverlay()" value='Forgot Password?' />
		</div>
	</div>
	<?php
// Set message as per mistake in username & password
	if($result == 'incorrect'){
		echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Wrong Username or Password"; document.getElementById("message").style.color = "#ff0000";</script>';
	}
	if($result == 'empty'){
		echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Empty Username & Password"; document.getElementById("message").style.color = "#ff0000";</script>';
	}
	?>
</body>
</html>
