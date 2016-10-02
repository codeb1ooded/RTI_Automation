<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['login_access'])){
	header("location: ../errors/no_file.php");
}
else{
?>
<html>
	<head>
		<link rel="stylesheet" href="css/background.css">
	</head>
<body>

	<?php
		$id = $_GET['id'];

		$_SESSION['database_access'] = true;
		include '../db/config_database.php';
		$_SESSION['database_access'] = false;

		$sql = "UPDATE add_rti SET archive=1 WHERE id=".$id;
		mysqli_query($con,$sql);
	?>
	<h3><center>RTI Closed Succesfully</center></h3>
	<?php
	mysqli_close($con);
	header ("location: ../select_option.php");
	?>
</body>
</html>
<?php } ?>
