<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(!isset($_SESSION['login_access'])){
		header("location: ../errors/no_file.php");
	}
	elseif ($_SESSION['login_access'] != 'Appellant') {
		header("location: ../errors/no_access.php");
	}
	else{
?>
		<html>
			<head>
				<title>Add Decision</title>
				<link rel="stylesheet" href="../css/background.css">
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<script src="../bootstrap/jQuery/jquery.min.js"></script>
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<meta charset="utf-8">
			</head>
			<body>
				<?php
					$id = $_GET['id'];
					$_SESSION['i'] = $id;

					$_SESSION['database_access'] = true;
					include '../db/config_database.php';
					$_SESSION['database_access'] = false;

					echo "<center><h3>Corresponding to Appeal for id ". $id." add decision</h3></center>";

					$sql = "SELECT * FROM add_rti where id=" . $id . ";";
					$res = mysqli_query ($con, $sql);
					$res1 = mysqli_fetch_array ($res);

					echo "</br></br>";
					echo "<center><h3>Name of appellant: " . $res1['name'] . "</h3></center> ";
					echo "</br>";
					echo "<form action='save_decision.php' method=POST>";
					echo "<center><textarea name=decision rows=10 cols=100></textarea><center>";
					echo "</br></br><center><input type=submit class=btn value=Save></center>";
					echo "</form>";
					echo "</br>" ;
					echo "<a class='btn' href='appellant_interface.php'>Back</a>" ;
				?>
			</body>
		</html>
<?php 
	} 
?>
