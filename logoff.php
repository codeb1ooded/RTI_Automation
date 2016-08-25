<?php
if(!isset($_SESSION) || !isset($_SESSION['Account_type'])) {
	// echo 'session not started';
		include 'index.php';
		echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Please login first"; document.getElementById("message").style.color = "#ff0000";</script>';
}
else{
?>
<html>
	<body>
		<center>
			<a class="btn" href="logout.php">Logout</a>
		</center>
	</body>
</html>
<?php } ?>
