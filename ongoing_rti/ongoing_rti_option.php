<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['login_access'])){
	header("location: ../errors/no_file.php");
}
else {
	?>
	<html>
	<head>
		<title>Ongoing RTI</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<link rel=stylesheet href='../css/a.css'>
	</head>
	<body>
		<?php
		echo "<div class='container'>";
		if(isset($_GET['id'])) {
			$Id = $_GET['id'];
			$_SESSION['prev_rti_id']=$Id;
		}
		else {
			$Id=$_SESSION['prev_rti_id'];
		}
		$_SESSION['id']=$Id;
		$_SESSION['database_access'] = true;
		include '../db/config_database.php';
		$_SESSION['database_access'] = false;
		$var = 'test';
		echo "<h2> RTI Id: ".$Id."</h2>";
		echo "<h3><center> Select an option:</center></h3>";
		echo "<center><a href='modify_rti_details.php?id=".$Id."' class='btn btn-primary'>Modify Applicant Details</a>&nbsp";
		echo "<a href='../queries/addqueries.php?id=".$Id."' class='btn btn-primary'>Add Additional Queries</a>&nbsp" ;
		echo "<a href='../queries/reply/reply_queries.php?id=".$Id."' class='btn btn-primary'>Reply Of The Queries</a>&nbsp" ;
		echo "<a href='generate_reply.php?id=".$Id."' class='btn btn-primary'>Generate Reply</a>&nbsp" ;
		echo "<a href='section4.php?id=".$Id."' class='btn btn-primary'>Section 4</a>&nbsp" ;
		echo "<a href='../appellant_interface/reply_to_appelant.php?id=".$Id."' class='btn btn-primary'>Reply Information to Applicant</a><br><br>";
		echo "<a href='../completed_rti/compid.php?id=".$Id."' class='btn btn-secondary'>Details of RTI</a>&nbsp" ;
		echo "<a href='ongoing_rti.php' class='btn btn-log'>Back</a></center>" ;

		?>
	</div>
</body>
</html>
<?php
}
?>