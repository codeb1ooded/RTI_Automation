<html>
<head>
	<title>Add Decision</title>
	<link rel="stylesheet" href="css/background.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>
<?php
$id=$_GET['id'];

session_start();
$_SESSION['i']=$id;

include 'config_database.php';

echo"<center><h3>Corresponding to Appeal for id ". $id." add decision</h3></center>";

$sql="SELECT * FROM add_rti where id=".$id.";";
$res= mysqli_query($con,$sql);
$res1=mysqli_fetch_array($res);

echo "</br></br>";
echo" <center><h3>Name of appellant: ".$res1['name']."</h3></center> ";
echo "</br>";
echo"<form action='save_decision.php' method=POST>";
echo"<center><textarea name=decision rows=10 cols=100></textarea><center>";
echo"</br></br><center><input type=submit class=btn value=Save></center>";
echo"</form>";
		echo "</br>" ;
		echo "<a class='btn' href='appellant_interface.php'>Back</a>" ;

?>
</body>
</html>