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
		<title>Add Queries</title>
		<link rel="stylesheet" href="css/background.css">
		<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/jQuery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
<body>
	<div class="container">
		<?php
			include 'config_database.php';
			$id = $_GET['id'];

			echo "<form action=submit_queries.php method=post class='form-horizontal' role='form'>";
			echo "<br><h3>The id of this RTI is: ".$id."</h3>";
			echo "<h4>Enter the number of queries to be added:</h4>
					<input style='height:32px' type=text name=ques>
					<input type=submit name=enter class='btn' value='Enter'>
				</form>";
			$con->close();
		?>
	</div>
</body>
</html>
<?php } ?>
