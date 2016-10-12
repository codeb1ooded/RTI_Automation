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
				<title>Change Password</title>
				<link rel="stylesheet" href="../css/background.css">
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
				<script src="../bootstrap/jQuery/jquery.min.js"></script>
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<meta charset="utf-8">
			</head>
			<body>
				<div class="container">
					<?php
						$_SESSION['database_access'] = true;
						include '../db/config_database.php';
						$_SESSION['database_access'] = false;
						$id=$_GET['id'];
						if (!isset($_POST['submit']) && !isset($_POST['change'])) {
							echo "<h2>CHANGE PASSWORD</h2><br>" ;
							echo "<form method=post class='form-horizontal' action=forgot_password.php?id=".$id.">
									<h4>&nbspEnter Administrator password to proceed:</h4><br>
									&nbsp<input type=password placeholder=Password id=Passwod name=pswd>
									&nbsp<input class=btn type='submit' name ='submit' value='Enter' />";
							echo "&nbsp&nbsp<a href=change_password.php class=btn>Back</a>
							</form>";
						}
						if(isset($_POST['submit'])) {
							echo "<h2>CHANGE PASSWORD</h2><br>" ;
							$query = " SELECT * FROM login where name='". $_SESSION['user_name']."';";
							$res = mysqli_query($con, $query);
							$r = mysqli_fetch_assoc($res);
							$p = $r['password'];
							$id = $_GET['id'];
							$mypassword = hash('sha256', $_POST['pswd']);
							if($mypassword == $p) {
								echo "<form method=post class='form-horizontal' action=forgot_password.php?id=".$id.">
									<h4>Enter the new password:</h4>
									<input type=password placeholder='new password' id=Password name=pwd>
									<input class=btn type='submit' name ='change' value='Enter' />&nbsp&nbsp";
							}
							else {
								echo '<script type="text/javascript"> alert("Wrong Admin Password"); </script>';
								header('Location: change_password.php');
							}
							echo "<a href=change_password.php class=btn>Back</a>";
							echo "</form>";
						}
						if (isset($_POST['change'])) {
							$id = $_GET['id'];
							$new_password = hash('sha256', $_POST['pwd']);
							$query = "UPDATE login SET password='" . $new_password . "' WHERE id=".$id;
							mysqli_query ($con, $query);
							echo "<br><h4> Password changed successfully!</h4>";
							include 'change_password.php';
						}		
					?>
				</div>
			</body>
		</html>
<?php 
	} 
?>