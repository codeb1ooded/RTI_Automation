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
				<link rel="stylesheet" href="css/new_prev.css">
				<link rel="stylesheet" href="css/background.css">	
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<script src="../bootstrap/jQuery/jquery.min.js"></script>
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
				</head>

			<?php
				// Variable $login_access defines which type of user is logged in and then give response of the page as per that
				$login_access = $_SESSION['login_access'];
				if($login_access == 'Appellant'){
					header("location: appellant_interface/appellant_interface.php");
				}
				else {
					if ($login_access == 'Admin') {
						echo "<div class=new-prev>";
							echo "<marquee scrollamount=5><strong>PLEASE SELECT AN OPTION:</strong></marquee> <br><br><br>";
							echo "<div class=options>";
								echo "<a href='./add_rti/add_rti.php'>Add New RTI</a><br><br><br>
									<a href='./report/report.php'>Generate Report</a><br><br><br>
									<a href='./backup/backup_ask_user.php'>Create Backup</a><br><br><br>
									<a href='./logging/change_password.php'>Change Password</a><br><br><br>
									<a href='./completed_rti/completed_rti.php'>Completed RTIs</a><br><br><br>
									<a href='./completed_rti/view_closed_rti.php'>Closed RTIs</a><br><br><br>
									<a href='./ongoing_rti/ongoing_rti.php'>Ongoing RTIs</a>
							</div>
						</div>";
						include 'logging/logoff.html';
					}
					else {
						header("location: ongoing_rti/ongoing_rti.php");
					}
				}
	}
			?>