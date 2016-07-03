<!--//On clicking previous rti id-->
<!DOCTYPE HTML>
<head>
	<title>Ongoing RTI</title>
	<link rel="stylesheet" href="css/background.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>
<?php

if(isset($_GET['id']))
	{
		$Id = $_GET['id'];
	}
	include 'config_database.php'; 
	$var = 'test';
	
	$query=" SELECT * FROM add_rti";
    $res=mysqli_query($con, $query);
	echo "Your options for the RTI Id: ".$Id." are-";
	session_start();
		$_SESSION['prev_rti_id']=$Id;

?>
<?php 
	echo "<br><br>" ;
	echo "<a href='replyform.php?id=".$Id."'>Modify Details and Queries</a>" ;
	echo "<br><br>" ;
	echo "<a href='addqueries.php?id=".$Id."'>Add Additional Queries</a>" ; 
	echo "<br><br>" ;
	echo "<a href='reply_queries.php?id=".$Id."'>Reply Of The Queries</a>" ;
	echo "<br><br>" ;
	echo "<a href='generate_reply.php?id=".$Id."'>Generate Reply</a>" ;
	echo "<br><br>" ;
	echo "<a href='b4reply.php?id=".$Id."'>Section 4</a>" ;
	echo "<br><br>" ;
	echo "<a href='responsetoappelant3.php?id=".$Id."'>Information About Reply</a>" ;
	echo "<br><br>" ;
	echo "<a href='appeal.php?id=".$Id."'>First Appeal</li></a>" ;
	echo "<br><br>" ;
	echo "<a href='compid.php?id=".$Id."'>Details of RTI</a>" ;
	echo "<br><br>" ;
	echo "<a href='prev_rti.php'>Back</a>" ;

	include 'logoff.html';
?>
</body>
</html>
