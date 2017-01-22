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
		$Id=$_GET['id'];
?>
		<html>
			<head>
				<title>Appealed RTI</title>
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<meta charset="utf-8">
			</head>
			<body>
				<?php
					echo "<div class='container'>";
					echo "<center><h3> RTI Id: ".$Id."</h3></center>";
					echo "<h4> Select an option:</h4>";
					echo "<a class='btn' href='appeal_query.php?id=".$Id."'>Add Description</a>&nbsp&nbsp" ;
					echo "<a class='btn' href='appellant_login_query.php?id=".$Id."'>View Details</a>&nbsp&nbsp" ;
					echo "<a class='btn' href='appellant_fix_meet.php?id=".$Id."'>Fix Meeting</a>&nbsp&nbsp" ;
					echo "<a class='btn' href='appellant_add_description.php?id=".$Id."'>Add Descision</a>&nbsp&nbsp" ;
					echo "<a class=btn href='../select_option.php'>Back</a><br><br>";
				?>
			</body>
		</html>
<?php 
	} 
?>