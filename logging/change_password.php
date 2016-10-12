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
				<?php
					$_SESSION['database_access'] = true;
					include '../db/config_database.php';
					$_SESSION['database_access'] = false;
					echo "<div class=container>";
						echo "<h2>CHANGE PASSWORD</h2>" ;
						echo "<marquee><strong>SELECT THE USER WHOSE PASSWORD NEEDS TO BE MODIFIED: </strong></marquee><br><br>";
						$query = "SELECT * FROM login;";
						$res = mysqli_query($con, $query);
						echo "<table class='table table-bordered'>" ;
						echo "<tr>
								<th>ID</th>
								<th>User Name</th>
								<th>Options</th>
							</tr>";
						while ($r=mysqli_fetch_assoc($res)) {
							echo "<tr>";
							echo "<td>".$r['id']."</td>";
							echo "<td>".$r['name']."</td>";
							echo "<td><a href='forgot_password.php?id=".$r['id']."'>Select this User</a></td>";
							echo "</tr>";
						}
						echo "</table>";
				?>
						<br><a href="../select_option.php" class=btn>Back</a>
					</div>
			</body>
		</html>
<?php 
	}
?>