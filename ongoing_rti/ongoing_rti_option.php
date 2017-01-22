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
						echo "<h4><center> Select an option:</center></h4><br>";
						echo "<div style='position: relative;
										background: #f2f2e0;
										max-width: 280px;
										margin: 0 auto 10px;
										padding: 30px;
										box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);'>";
						echo "<center><a href='modify_rti_details.php?id=".$Id."'>Modify Applicant Details</a></center>" ;
						echo "<br><br>" ;
						echo "<center><a href='../queries/addqueries.php?id=".$Id."'>Add Additional Queries</a></center>" ;
						echo "<br><br>" ;
						echo "<center><a href='../queries/reply/reply_queries.php?id=".$Id."'>Reply Of The Queries</a></center>" ;
						echo "<br><br>" ;
						echo "<center><a href='generate_reply.php?id=".$Id."'>Generate Reply</a></center>" ;
						echo "<br><br>" ;
						echo "<center><a href='section4.php?id=".$Id."'>Section 4</a></center>" ;
						echo "<br><br>" ;
						echo "<center><a href='../appellant_interface/reply_to_appelant.php?id=".$Id."'>Reply Information to Applicant</a></center>" ;
						echo "<br><br>" ;
						echo "<center><a href='../completed_rti/compid.php?id=".$Id."'>Details of RTI</a></center>" ;
						echo "</div>";
						echo "<center><br><a class=btn href='ongoing_rti.php'>Back</a></center>" ;

				?>
					</div>
			</body>
		</html>
<?php
	}
?>