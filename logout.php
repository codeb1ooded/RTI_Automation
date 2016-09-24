<?php
if(!isset($_SESSION) || !isset($_SESSION['login_access'])) {
	// echo 'session not started';
		include 'index.php';
		echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Please login first"; document.getElementById("message").style.color = "#ff0000";</script>';
}
else{
	session_destroy();
	header('Location: index.php');
	exit;
}
?>
