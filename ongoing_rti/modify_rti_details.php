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
		<title>RTI Application Form</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<link rel=stylesheet href='../css/a.css'>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		echo "<div class='container'>";
		if(isset($_GET['id'])) {
			$Id = $_GET['id'];
			echo "<h2>RTI Id: ".$Id."</h2>";
		}
		$_SESSION['database_access'] = true;
		include '../db/config_database.php';
		$_SESSION['database_access'] = false;
		if(isset($_GET['id'])) {
			$Id = $_GET['id'];
			$data = "SELECT * FROM  add_rti WHERE id=".$Id.";";
			$query = mysqli_query($con, $data);
			$data2 = mysqli_fetch_array($query);
			?>
			<center><h4>Personal Details of RTI Applicant:</h4>
				<form action='../queries/modify_queries.php'  method='post' name="prev_rti">
					<input type="hidden" name="ID" value="<?php echo $Id ?>">
					<table class="table table-bordered table-hover">
						<tbody>
							<tr>
								<th>Name of Applicant*</th>
								<td><input type="text" name="name" id="name" maxlength="50" value="<?php echo $data2['name']?>" class="name" placeholder="" required></td>
							</tr>
							<tr>
								<th>Gender*</th>
								<td>
									<input type="radio" name="gender" id="gender" value="Male"<?php if(strcmp($data2['gender'], "Male") == 0){ echo "checked=\"checked\""; }?> required> Male &nbsp&nbsp
									<input type="radio" name="gender" id="gender" value="Female" <?php if(strcmp($data2['gender'], "Female") == 0){ echo "checked=\"checked\""; }?> required> Female &nbsp&nbsp
									<input type="radio" name="gender" id="gender" value="Third Gender" <?php if(strcmp($data2['gender'], "Third Gender") == 0){ echo "checked=\"checked\""; }?> required> Third Gender &nbsp&nbsp
								</td>
							</tr>
							<tr>
								<th>Address*</th>
								<td><textarea style="width:200px; resize:none" rows="3" type="text" name="address" id="address" maxlength="100" required><?php echo $data2['address']?></textarea></td>
							</tr>
							<tr>
								<th>Pin code*</th>
								<td><input type="text" name="pin_code" minlength="6" maxlength="6" onkeydown="return isNumeric(event.keyCode);" value="<?php echo $data2['pin_code']?>" required></td>
							</tr>
							<script src="date_validation_prev_rti.js"></script>
							<tr>
								<th>Country*</th>
								<td>
									<input type="radio" name="country" id="chkstate" <?php if(strcmp($data2['country'], "India") == 0){ echo "checked=\"checked\""; }?> value="India" onclick="test();" required> India &nbsp&nbsp
									<input type="radio" name="country" id="chkcountry" <?php if(strcmp($data2['country'], "other") == 0){ echo "checked=\"checked\""; }?> value="Other" onclick="test1();" required> Other
								</td>
							</tr>
							<tr>
								<th>State*</th>
								<td><input type="text" name="state" id="cngStateName" maxlength="18" value="<?php echo $data2['state']?>" required></td>
							</tr>

							<tr>
								<th>Phone Number<cite> (Provide STD code with zero eg.01123456789)</cite>*</th>
								<td><input type="text" name="phone_no" id="phone" maxlength="18" onkeydown="return isNumeric(event.keyCode);" class="numeric" value="<?php echo $data2['phone_no']?>" required></td>
							</tr>

							<tr>
								<th>Mobile Number<cite>(For receiving SMS alerts. Provide Country code eg. +910123456789)*</cite></th>
								<td><input type="text" name="mobile" id="cell" maxlength="15" class="numeric" onkeydown="return isNumeric(event.keyCode);" value="<?php echo $data2['mobile']?>" required></td>
							</tr>

							<tr>
								<th>Email-ID*</th>
								<td><input type="text" name="email" maxlength="70" value="<?php echo $data2['email']?>" id="Email" required></td>
							</tr>

							<tr>
								<th>Citizenship <cite>(Only Indian citizens can file RTI Request application)*</cite></th>
								<td>
									<select name="citizenship" id="Citizenship" class="btn" style="background:white; color:black" onchange="chkCitizenship(this);">
										<option value="Indian" <?php if(strcmp($data2['citizenship'], "Indian") == 0){ echo "selected"; }?>>Indian</option>
										<option value="Other" <?php if(strcmp($data2['citizenship'], "Other") == 0){ echo "selected"; }?>>Other</option>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
					<h4>Receipt of RTI Application (Section 7):</h4>

					<table class="table table-bordered table-hover">
						<tbody>
							<tr>
								<th>Date of receipt of RTI application by R & I section of public authority* </th>
								<td><input type="text" name="date_of_receipt" id="date_of_receipt" placeholder="DD-MM-YYYY" maxlength="50" value="<?php echo $data2['date_of_receipt']?>" class="name" placeholder="YYYY-MM-DD" required></td>
							</tr>

							<tr>
								<th>Date of its receipt by CPIO* </th>
								<td><input type="text" placeholder="DD-MM-YYYY" name="date_of_receipt_cio" id="date_of_receipt_cpio" maxlength="50" value="<?php echo $data2['date_of_receipt_cio']?>" class="name" placeholder="YYYY-MM-DD" required></td>
							</tr>

							<tr>
								<th>Time between (1) & (2) in days</th>
								<td><input type="text" name="time" id="time" maxlength="50" value="<?php echo $data2['timespan']?>" class="name" placeholder=""></td>
							</tr>
						</tbody>
					</table>
					<h4><strong>Fee Payment Details (Rule-3 of RTI regulation of fee and cost rules):</strong></h4>
					<table class="table table-bordered table-condensed">
						<tbody>
							<tr>
								<th>Whether fee is enclosed with RTI application*</th>
								<td>
									<input type="radio" value="yes" name="fee_enclosed" id="fee_enclosed" <?php if(strcmp($data2['fee_enclosed'], "yes") == 0){ echo "checked=\"checked\""; }?> required> Yes &nbsp&nbsp
									<input type="radio" value="no" name="fee_enclosed" id="fee_enclosed" <?php if(strcmp($data2['fee_enclosed'], "No") == 0 or strcmp($data2['fee_enclosed'], "no") == 0){ echo "checked=\"checked\""; }?> required> No
								</td>
							</tr>

							<tr>
								<th>Date of depositing fee* </th>
								<td><input type="text" id="fee_deposit_date" name="fee_deposit_date" maxlength="50" placeholder="DD-MM-YYYY" value="<?php echo $data2['fee_deposit_date']?>" required></td>
							</tr>

							<tr>
								<th>Mode of payment(cheque/DD,cash,IPO)* </th>
								<td><input type="text" id="pay_mode" name="pay_mode" maxlength="50" value="<?php echo $data2['pay_mode']?>" required></td>
							</tr>
						</tbody>
					</table>

					<!--<input type="submit" name="edit" value="Edit Queries" class="btn" onclick="return validateDate()"> -->
					<input type="submit" name="submit" value="Save and Exit" class="btn btn-primary" onclick="return validateDate()">
					<?php
				}
				echo "<a class='btn btn-log' href='ongoing_rti_option.php?id=".$Id."''>Back</center></a>" ;
				?>
			</form>
		</div>
	</body>
	</html>
	<?php
} 
?>