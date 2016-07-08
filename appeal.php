<html>
<head>
	<title>First Appeal Form</title>
	<link rel="stylesheet" href="css/background.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/jQuery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
	<?php
		$Id = $_GET['id'];
		echo "<br><h3>Add Details of RTI with Id: ".$Id."</h3>";
		include 'config_database.php';
		$query = " SELECT * FROM first_appeal WHERE id=".$Id.";";
		$r = mysqli_query($con, $query);
		$res = mysqli_fetch_assoc($r);
		if($res) {
	?>
			<h4><strong>(VI) I<sup>st</sup> Appeal (where applicable):</strong></h4>
			<form action = "replysection4.php" method ="post">
				<table class="table table-bordered">
					<tr>
						<th> Name and designation of the officer before whom <br>the 1<sup>st</sup> appeal is filed u/s 19(1)</th>
						<th><input type="text" style="height:32px" name="appeal_info" id="Name" value=<?php echo $res['appeal_info']; ?>></th>
					</tr>

					<tr>
						<th>Date of transfer of appeal by the receiving officer to FAA</th>
						<th><input type="text" style="height:32px" name="transfer_date" id="Name" value=<?php echo $res['transfer_date']; ?> placeholder="YYYY-MM-DD"></th>
					</tr>

					<tr>
						<th>Date of receipt of appeal by FAA(mention name of FAA)</th>
						<th><input type="text" style="height:32px" name="faa_receipt_date" id="Name" value=<?php echo $res['faa_receipt_date']; ?> placeholder="YYYY-MM-DD"></th>
					</tr>

					<tr>
						<th>Date of communicating decision to appelant </th>
						<th><input type="text" style="height:32px" name="meet_date" id="Name" value=<?php echo $res['meet_date']; ?> placeholder="YYYY-MM-DD"></th>
					</tr>
				</table>
				<input type="submit" name="submitappealnew" id="Save_appeal" class=btn value="Save and Exit" class="btnsaveappeal"></th>
			</form>
	<?php
			echo "<br><a class=btn href='previd.php?id=".$Id."''>Back</a>" ;
		} else {
	?>	
			<h4><strong>(VI) I<sup>st</sup> Appeal (where applicable):</strong></h4>
			<form action = "replysection4.php" method ="post">
				<table class="table table-bordered">
					<tr>
						<th> Name and designation of the officer before whom <br>the 1<sup>st</sup> appeal is filed u/s 19(1)</th>
						<th><input type="text" style="height:32px" name="appeal_info" id="Name" value="" placeholder=""></th>
					</tr>

					<tr>
						<th>Date of transfer of appeal by the receiving officer to FAA</th>
						<th><input type="text" style="height:32px" name="transfer_date" id="Name" value="" placeholder="YYYY-MM-DD"></th>
					</tr>

					<tr>
						<th>Date of receipt of appeal by FAA(mention name of FAA)</th>
						<th><input type="text" style="height:32px" name="faa_receipt_date" id="Name" value="" placeholder="YYYY-MM-DD"></th>
					</tr>

					<tr>
						<th>Date of communicating decision to appelant </th>
						<th><input type="text" style="height:32px" name="meet_date" id="Name" value="" placeholder="YYYY-MM-DD"></th>
					</tr>
				</table>
				<input type="submit" name="submitappeal" id="Save_appeal" class=btn value="Save and Exit" class="btnsaveappeal"></th>
			</form>
			<?php
			echo "&nbsp&nbsp<a class='btn' href='previd.php?id=".$Id."''>Back</a>" ;
		}
		?>
	</div>
</body>
</html>