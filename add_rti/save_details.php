<?php
	if(!isset ($_SESSION)) {
		session_start();
	}
	if(!isset ($_SESSION['login_access'])) {
		header("location: ../errors/no_file.php");
	}
	elseif ($_SESSION['login_access'] != 'Admin') {
		header("location: ../errors/no_access.php");
	}
	else {
?>
		<html>
			<head>
				<title>Save Details|Add Queries</title>
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<script src="../bootstrap/jQuery/jquery.min.js"></script>
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<meta charset="utf-8">
			</head>

			<body>
				<div class="container">
					<?php
						$_SESSION['database_access'] = true;
						include '../db/config_database.php';
						$_SESSION['database_access'] = false;

						$d1 = strtotime($_POST['date_of_receipt']);
						$d2 = strtotime($_POST['date_of_receipt_cio']);
						$d3 = floor(abs($d2-$d1)/86400);

						$sql = "INSERT INTO add_rti (name, gender, address, pin_code, state, country, phone_no, mobile, email, citizenship,
								date_of_receipt, date_of_receipt_cio, timespan, fee_enclosed, fee_deposit_date, pay_mode,post)
								VALUES(' $_POST[name]', '$_POST[gender]', '$_POST[address]', '$_POST[pc]', '$_POST[state]', '$_POST[country]',
								'$_POST[phone]', '$_POST[mobile]', '$_POST[email]', '$_POST[citizenship]', '$_POST[date_of_receipt]',
								'$_POST[date_of_receipt_cio]', '$d3', '$_POST[fee]', '$_POST[fee_deposit_date]', '$_POST[pay_mode]', '$_POST[post]')";

						echo "<h3>RTI Saved Successfully!!</h3><br>";
						mysqli_query($con, $sql);

						$a = 0;
						$k = "SELECT * FROM add_rti";
						$v = mysqli_query($con,$k);
						while ($r = mysqli_fetch_assoc($v)) {
							$a = $r['id'];
						}
						$_SESSION['id'] = $a;

						if (isset($_POST['add'])) {
							echo "<h3>RTI ID: ".$a."</h3>";
							echo "<form action=../queries/submit_queries.php method=post>";
							echo "	<h4>Please enter the number of Queries:</h4>
									<input type=text name=ques>
									<input type=submit name=enter class=btn value='Enter'>";
						}
						else
							header("location: ../select_option.php");
						mysqli_close ($con);
					?>
				</div>
			</body>
		</html>
<?php 
	} 
?>