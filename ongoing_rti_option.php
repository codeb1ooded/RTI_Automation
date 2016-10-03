<?php
if(!isset($_SESSION)){
	session_start();
}
?>
<html>
<head>
	<title>Ongoing RTI</title>
	<link rel="stylesheet" href="css/background.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>
<?php
echo "<div class='container'>";
if(isset($_GET['id']))
	{
		$Id = $_GET['id'];
	}
else{
	$Id=$_SESSION['prev_rti_id'];}

	$_SESSION['id']=$Id;

	include 'config_database.php';
	$var = 'test';
	echo "<center><h3> RTI Id: ".$Id."</h3></center>";
	echo "<h4> Select an option:</h4>";

	echo "<br>" ;
	echo "<a class='btn' href='ongoing_rti/modify_rti_details.php?id=".$Id."'>Modify Details and Queries</a>" ;
	echo "<br><br>" ;
	echo "<a class='btn' href='queries/addqueries.php?id=".$Id."'>Add Additional Queries</a>" ;
	echo "<br><br>" ;
	echo "<a class='btn' href='queries/reply/reply_queries.php?id=".$Id."'>Reply Of The Queries</a>" ;
	echo "<br><br>" ;
	echo "<a class='btn' href='ongoing_rti/generate_reply.php?id=".$Id."'>Generate Reply</a>" ;
	echo "<br><br>" ;
	echo "<a class='btn' href='ongoing_rti/section4.php?id=".$Id."'>Section 4</a>" ;
	echo "<br><br>" ;
	echo "<a class='btn' href='ongoing_rti/reply_to_appelant.php?id=".$Id."'>Reply Information to Applicant</a>" ;
	echo "<br><br>" ;
	echo "<a class='btn' href='completed_rti/compid.php?id=".$Id."'>Details of RTI</a>" ;
	echo "<br><br>" ;
	echo "<a class='btn' href='ongoing_rti.php'>Back</a>" ;

?>
</div>
</body>
</html>
