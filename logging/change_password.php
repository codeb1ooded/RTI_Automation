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
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<link rel = "stylesheet" type = "text/css" href = "../css/a.css" />
				<meta charset="utf-8">
			</head>
			<body>
				<?php
					$_SESSION['database_access'] = true;
					include '../db/config_database.php';
					$_SESSION['database_access'] = false;
						echo "<div class=container>";
						echo "<h2>Change Password</h2>" ;
						echo "<h3><center>List of Active Users :</center></h3>";
						$query = "SELECT * FROM login;";
						$res = mysqli_query($con, $query);
						echo "<table class='table table-bordered'>" ;
						echo "<tr class='tor'>
								<th>ID</th>
								<th>User Name</th>
								<th>Select</th>
							</tr>";
						while ($r=mysqli_fetch_assoc($res)) {
							echo "<tr>";
							echo "<td>".$r['id']."</td>";
							echo "<td>".$r['name']."</td>";
							echo "<td><a href='forgot_password.php?id=".$r['id']."' class='btn btn-primary'>Select this User</a></td>";
							echo "</tr>";
						}
						echo "</table>";
				?>
					<a href="../select_option.php" class='btn btn-log'>Back</a>
					</div>
			</body>
		</html>
<?php 
	}
?>