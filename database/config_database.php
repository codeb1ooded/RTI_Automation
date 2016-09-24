<?php
if(isset($_SESSION) && isset($_SESSION['database_access']) && $_SESSION['database_access'] == true){
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
				die('Could not connect: ' . mysqli_error());
		}
		$db = mysqli_select_db($con, "rti");
		if(!$db)
				echo " Connection to the database failed ";
		$conn = mysqli_connect("localhost","root","");
		if (!$conn) {
				die('Could not connect: ' . mysqli_error());
		}
		$db = mysqli_select_db($conn, "rti");
		if(!$db)
				echo " Connection to the database failed ";
}
else {
		include '../error/Error404.html';
}
?>
