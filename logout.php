<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
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
