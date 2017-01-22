<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(!isset($_SESSION['login_access'])){
		header("location: ../errors/no_file.php");
	}
	else {
		$d = $_SESSION['no_of_queries'];
		$b = $_SESSION['qu'];
		$id = $_SESSION['id'];
?>
		<html>
			<head>
				<title>PDF</title>
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<meta charset="utf-8">
			</head>
			<body>
				<?php
					echo "Start of queries ".$b;
					echo "</br>End of queries ".$d."</br></br></br>";
					$a = $b;

					while($a<=$d){
						echo "<li>";
						echo "<a href='gen_q.php?qno=".$a."' target=_blank><input type=submit name=query_btn class=btn value='Query number is ".$a."''></a>";
						echo "</li>";
						echo "<br><br>";
						$a = $a+1;
					}
				?>
					<br><a href='ongoing_rti.php'><input type=submit class=btn value=Exit></a>
			</body>
		</html>
<?php
	}
?>