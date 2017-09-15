<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['login_access'])){
	header("location: ../errors/no_file.php");
}
else {
	?>
	<html>
	<head>
		<title>First Appeal Form</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="../bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<?php
			$Id = $_GET['id'];
			echo "<h2><center>Raise First Appeal</center></h2>";
			echo "<h3>Add First Appeal Details of RTI with Id: ".$Id."</h3>";
			$_SESSION['database_access'] = true;
			include '../db/config_database.php';
			$_SESSION['database_access'] = false;
			$query = " SELECT * FROM first_appeal WHERE id=".$Id.";";
			$r = mysqli_query($con, $query);
			$res = mysqli_fetch_assoc($r);
			if($res) {
				?>
				<form action = "../appellant_interface/appeal_query.php" method ="post">
					<table class="table table-bordered">
						<tr>
							<td> Name and designation of the officer before whom <br>the 1<sup>st</sup> appeal is filed u/s 19(1)</td>
							<td><input type="text" style="height:32px" name="appeal_info" id="Name" value=<?php echo $res['appeal_info']; ?>></td>
						</tr>
						<tr>
							<td>Date of transfer of appeal to FAA</td>
							<td><input type="text" style="height:32px" name="transfer_date" id="Name" value=<?php echo $res['transfer_date']; ?> placeholder="YYYY-MM-DD"></td>
						</tr>
					</table>
					<input type="submit" name="submitappeal" id="Save_appeal" class=btn value="Save and Exit" class="btnsaveappeal">
				</form>
				<?php
				echo "<a class=btn href='../ongoing_rti/ongoing_rti_option.php?id=".$Id."''>Back</a>" ;
			}
			else {
				?>
				<form action = "appeal_query.php" method ="post">
					<table class="table table-bordered">
						<tr>
							<td> Name and designation of the officer before whom <br>the 1<sup>st</sup> appeal is filed u/s 19(1)</td>
							<td><input type="text" style="height:32px" name="appeal_info" id="Name" value="" placeholder=""></td>
						</tr>

						<tr>
							<td>Date of transfer of appeal by the receiving officer to FAA</td>
							<td><input type="text" style="height:32px" name="transfer_date" id="Name" value="" placeholder="YYYY-MM-DD"></td>
						</tr>
					</table>
					<input type="submit" name="submitappeal" id="Save_appeal" class=btn value="Save " class="btnsaveappeal">
					<?php
					echo "<a class=btn href='../completed_rti/completed_rti.php'>Back</a>" ;
				}
				?>
			</form>
			
		</div>
	</body>
	</html>
	<?php 
} 
?>