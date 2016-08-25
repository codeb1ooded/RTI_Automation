<?php
if(!isset($_SESSION) || !isset($_SESSION['Account_type'])) {
	// echo 'session not started';
    include 'index.php';
    echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Please login first"; document.getElementById("message").style.color = "#ff0000";</script>';
}
else{
?>
<html>
	<head>
		<link rel="stylesheet" href="css/background.css">
	</head>
<body>

	<?php
		include "select_option.php";
		$id=$_GET['id'];
		include 'config_database.php';
		$sql="UPDATE add_rti SET archive=1 WHERE id=".$id;
		mysqli_query($con,$sql);
	?>
	<h3><center>RTI Closed Succesfully</center></h3>
	<?php
	mysqli_close($con);
	?>
</body>
</html>
<?php } ?>
