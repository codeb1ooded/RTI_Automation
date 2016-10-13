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
				<link rel="stylesheet" href="../css/background.css">
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
				<script src="../bootstrap/jQuery/jquery.min.js"></script>
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<meta charset="utf-8">
			</head>
			<body>
				<?php
					echo "<br>
					<div class='container'>";
						if(isset($_GET['id'])) {
							$Id = $_GET['id'];
							echo "<h4>Modify Details of RTI with Id: ".$Id."</h4>";
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
							<h4><strong>Personal Details of RTI Applicant:</strong></h4>
							<form action='../queries/modify_queries.php'  method='post' name="prev_rti">
								<input type="hidden" name="ID" value="<?php echo $Id ?>">
								<table class="table table-bordered table-condensed">
									<tbody>
										<tr>
											<th>Name of Applicant*</th>
											<th><input type="text" name="name" id="name" maxlength="50" value="<?php echo $data2['name']?>" class="name" placeholder="" required></th>
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
											<th><textarea style="width:200px; resize:none" rows="3" type="text" name="address" id="address" maxlength="100" required><?php echo $data2['address']?></textarea></th>
										</tr>
										<tr>
											<th>Pin code*</th>
											<th><input type="text" name="pin_code" minlength="6" maxlength="6" onkeydown="return isNumeric(event.keyCode);" value="<?php echo $data2['pin_code']?>" required></th>
										</tr>
										<script src="date_validation_prev_rti.js"></script>
										<tr>
											<th>Country*</th>
											<th>
												<input type="radio" name="country" id="chkstate" <?php if(strcmp($data2['country'], "India") == 0){ echo "checked=\"checked\""; }?> value="India" onclick="test();" required> India &nbsp&nbsp
												<input type="radio" name="country" id="chkcountry" <?php if(strcmp($data2['country'], "other") == 0){ echo "checked=\"checked\""; }?> value="Other" onclick="test1();" required> Other
											</th>
										</tr>
										<tr>
											<th>State*</th>
											<th><input type="text" name="state" id="cngStateName" maxlength="18" value="<?php echo $data2['state']?>" required></th>
										</tr>

										<tr>
											<th>Phone Number<cite> (Provide STD code with zero eg.01123456789)</cite>*</th>
											<th><input type="text" name="phone_no" id="phone" maxlength="18" onkeydown="return isNumeric(event.keyCode);" class="numeric" value="<?php echo $data2['phone_no']?>" required></th>
										</tr>

										<tr>
											<th>Mobile Number<cite>(For receiving SMS alerts. Provide Country code eg. +910123456789)*</cite></th>
											<th><input type="text" name="mobile" id="cell" maxlength="15" class="numeric" onkeydown="return isNumeric(event.keyCode);" value="<?php echo $data2['mobile']?>" required></th>
										</tr>

										<tr>
											<th>Email-ID*</th>
											<th><input type="text" name="email" maxlength="70" value="<?php echo $data2['email']?>" id="Email" required></th>
										</tr>

										<tr>
											<th>Citizenship <cite>(Only Indian citizens can file RTI Request application)*</cite></th>
											<th>
												<select name="citizenship" id="Citizenship" class="btn" style="background:white; color:black" onchange="chkCitizenship(this);">
													<option value="Indian" <?php if(strcmp($data2['citizenship'], "Indian") == 0){ echo "selected"; }?>>Indian</option>
													<option value="Other" <?php if(strcmp($data2['citizenship'], "Other") == 0){ echo "selected"; }?>>Other</option>
												</select>
											</th>
										</tr>
									</tbody>
								</table>
								<h4><strong>Receipt of RTI Application (Section 7):</strong></h4>
								
								<table class="table table-bordered table-condensed">
									<tbody>
										<tr>
											<th>Date of receipt of RTI application by R & I section of public authority* </th>
											<th><input type="text" name="date_of_receipt" id="date_of_receipt" placeholder="DD-MM-YYYY" maxlength="50" value="<?php echo $data2['date_of_receipt']?>" class="name" placeholder="YYYY-MM-DD" required></th>
										</tr>

										<tr>
											<th>Date of its receipt by CPIO* </th>
											<th><input type="text" placeholder="DD-MM-YYYY" name="date_of_receipt_cio" id="date_of_receipt_cpio" maxlength="50" value="<?php echo $data2['date_of_receipt_cio']?>" class="name" placeholder="YYYY-MM-DD" required></th>
										</tr>

										<tr>
											<th>Time between (1) & (2) in days</th>
											<th><input type="text" name="time" id="time" maxlength="50" value="<?php echo $data2['timespan']?>" class="name" placeholder=""></th>
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
											<th><input type="text" id="fee_deposit_date" name="fee_deposit_date" maxlength="50" placeholder="DD-MM-YYYY" value="<?php echo $data2['fee_deposit_date']?>" required></th>
										</tr>

										<tr>
											<th>Mode of payment(cheque/DD,cash,IPO)* </th>
											<th><input type="text" id="pay_mode" name="pay_mode" maxlength="50" value="<?php echo $data2['pay_mode']?>" required></th>
										</tr>
									</tbody>
								</table>

								<input type="submit" name="edit" value="Edit Queries" class="btn" onclick="return validateDate()">
								<input type="submit" name="submit" value="Save and Exit" class="btn" onclick="return validateDate()">
							<?php
						}
						echo "<a class='btn' href='ongoing_rti_option.php?id=".$Id."''>Back</a>" ;
							?>
						</form>
					</div>
			</body>
		</html>
<?php
	} 
?>