<html>
	<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/jQuery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	</head>
	<body>
<?php
	session_start();
	session_destroy();
	header('Location: index.php');
	exit;
?> 
	</body>
</html>
