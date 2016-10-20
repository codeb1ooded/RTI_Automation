<?php
	if(!isset($_SESSION)) {
		session_start();
	}
	if (!isset($_SESSION['login_access'])){
		header("location: no_file.php");
	}
	else {
?>
		<html>
			<head>
				<title>Home</title>
				<script src="bootstrap/jQuery/jquery.min.js"></script>
				<script src="bootstrap/js/bootstrap.min.js"></script>
				<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
				<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
				</head>

			<?php
				// Variable $login_access defines which type of user is logged in and then give response of the page as per that
				$login_access = $_SESSION['login_access'];
				if($login_access == 'Appellant'){
					header("location: appellant_interface/appellant_interface.php");
				}
				else {
					if ($login_access == 'Admin') {
						echo "<br><marquee scrollamount=5><h4>PLEASE SELECT AN OPTION:</h4></marquee><br><br>";
						echo "<div style='position: relative;
									z-index: 1;
									background: #f2f2e0;
									max-width: 360px;
									margin: 0 auto 20px;
									padding: 45px;
									text-align: center;
									box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);'>";
							echo "<a href='./add_rti/add_rti.php'>Add New RTI</a><br><br><br>
								<a href='./report/report.php'>Generate Report</a><br><br><br>
								<a href='./backup/backup_ask_user.php'>Create Backup</a><br><br><br>
								<a href='./logging/change_password.php'>Change Password</a><br><br><br>
								<a href='./completed_rti/completed_rti.php'>Completed RTIs</a><br><br><br>
								<a href='./completed_rti/view_closed_rti.php'>Closed RTIs</a><br><br><br>
								<a href='./ongoing_rti/ongoing_rti.php'>Ongoing RTIs</a>
							</div>";
					}
					else {
						header("location: ongoing_rti/ongoing_rti.php");
					}
					echo"<center><a class=btn href='logout.php'>Logout</a></center>";
				}
	}
			?>