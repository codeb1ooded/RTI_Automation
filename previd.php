<!--//On clicking previous rti id-->
<!DOCTYPE html>
<html>
<head>
	<title>ID:</title>
</head>
<body>
<?php

if(isset($_GET['id']))
	{
		$Id = $_GET['id'];
	}
	$conn=mysqli_connect("localhost","root","");
	$var = 'test';
	if(!$conn)
		echo " Connection to the server failed ";
	$db=mysqli_select_db($conn,'rti');
	if(!$db)
		echo " Connection to the database failed ";
	
	$query=" SELECT * FROM add_rti";
    $res=mysqli_query($conn,$query);
	echo "Your options for the RTI Id: ".$Id." are-";
	session_start();
		$_SESSION['prev_rti_id']=$Id;

?>
<?php 
	echo "<br><br>" ;
	echo "<a href='replyform.php?id=".$Id."'>Modify Details</a>" ;
	echo "<br><br>" ;
	echo "<a href='#'>Modify Queries</a>" ;
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
