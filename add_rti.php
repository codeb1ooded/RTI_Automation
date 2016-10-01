<?php
  if(!isset($_SESSION)) {
	  session_start();
  }
	if(!isset($_SESSION['login_access'])){
		header("location: errors/no_file.php");
	}
	elseif ($_SESSION['login_access'] != 'Admin') {
		header("location: errors/no_access.php");
	}
	else {
?>
<html>
<head>
	<title>RTI Application Form</title>
	<link rel="stylesheet" href="css/background.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/jQuery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<h2><strong>New RTI</strong></h2>
		<h4><strong>Personal Details of RTI Applicant:</strong></h4>
		<form action="save_details.php" method="post" class="form-horizontal" name="add_rti" role="form">
			<table class="table table-bordered table-condensed">
				<tbody>
					<tr>
						<th>Name of Applicant</th>
						<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
					</tr>

					<tr>
						<th>Gender </th>
						<td>
							<input type="radio" name="gender" id="gender" checked="checked" value="Male"> Male &nbsp&nbsp
							<input type="radio" name="gender" id="gender" value="Female"> Female &nbsp&nbsp
							<input type="radio" name="gender" id="gender" value="Third Gender"> Third Gender
						</td>
					</tr>

					<tr>
						<th> Address</th>
						<td><input type="text" name="address" id="address1" class="address" required></td>
					</tr>

					<tr>
						<th>Pin code</th>
						<td><input type="text" pattern="^\d{6}$" name="pc" minlength="6" maxlength="6" required></td>
					</tr>

<!-- Script to change state/country as per user line in India or Other
	And to block user editing if user is not Indian -->
	<script type="text/javascript">
	function test(){
		if(document.getElementById('chkstate').value=='India'){
			document.getElementById('cngStateName').innerHTML='State';
		}
	}
	function test1(){
		if(document.getElementById('chkcountry').value=='Other'){
			document.getElementById('cngStateName').innerHTML='Country Name';
		}
	}
	function chkCitizenship(citizenship){
		var strCitizenship = citizenship.options[citizenship.selectedIndex].value;
		if(strCitizenship == 'Indian'){
			document.getElementById('date_of_receipt').disabled=false;
			document.getElementById('date_of_receipt_cpio').disabled=false;
			document.getElementById('fee_paid').disabled=false;
			document.getElementById('fee_not_paid').disabled=false;
			document.getElementById('fee_deposit_date').disabled=false;
			document.getElementById('pay_mode').disabled=false;
		}
		else if(strCitizenship == 'Other'){
			document.getElementById('date_of_receipt').disabled=true;
			document.getElementById('date_of_receipt_cpio').disabled=true;
			document.getElementById('fee_paid').disabled=true;
			document.getElementById('fee_not_paid').disabled=true;
			document.getElementById('fee_deposit_date').disabled=true;
			document.getElementById('pay_mode').disabled=true;
		}
	}
	</script>
	<tr>
		<th>Country</th>
		<td>
			<input type="radio" name="country" id="chkstate" checked="checked" value="India" onclick="test();"> India &nbsp&nbsp
			<input type="radio" name="country" id="chkcountry" value="Other" onclick="test1();"> Other
		</td>
	</tr>

	<tr>
		<th><span id="cngStateName">State</span>
			<td><span><input type="text" name="state" id="txtCountry" required></span></td>
		</tr>

		<tr>
			<th>Phone Number</th>
			<td>
				<input type="text" name="phone" id="phone" maxlength="18" pattern="^\d{8}$" class="numeric" value="" required>
				<cite>Do not provide STD code eg.23456789</cite>
			</td>
		</tr>

		<tr>
			<th>Mobile Number </th>
			<td><input type="text" name="mobile" id="cell" maxlength="15" pattern="^\d{10}$" value="" required>
				<cite>Provide a 10-digit no.</cite>
			</td>
		</tr>

		<tr>
			<th>Email-ID</th>
			<td><input type="email" name="email" maxlength="70" value="" id="Email" required></td>
		</tr>

		<tr>
			<th>Citizenship (Only Indian citizens can file RTI Request application)</th>
			<td>
				<select class="btn" style="background:white; color:black" name="citizenship" id="citizenship" onchange="chkCitizenship(this);" required>
					<option value="Indian" id="IndianCitizenship">Indian</option>
					<option value="Other" id="OtherCitizenship">Other</option>
				</select></td>
			</tr>
		</tbody>
	</table>

	<h4><strong>Receipt of RTI Application (Section 7):</strong></h4>
	<table class="table table-bordered table-condensed">
		<tbody>
			<tr>
				<th>Application Submission Date</th>
				<th><input name="date_of_receipt" id="date_of_receipt" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD" 	required></th>
			</tr>

			<tr>
				<th>Date of its receipt by PIO</th><th><input id="date_of_receipt_cpio" name="date_of_receipt_cio" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD" required></th>
			</tr>
		</tbody>
	</table>

	<h4><strong>Fee Payment Details :</strong></h4>

	<table class="table table-bordered table-condensed">
		<tbody>
			<tr>
				<th>Is Fee enclosed with RTI application</th>
				<th>
					<input type="radio" value="yes" checked="checked" name="fee" id="fee_paid" required> Yes&nbsp&nbsp
					<input type="radio" value="no" name="fee" id="fee_not_paid" required> No
				</th>
			</tr>

			<tr>
				<th>Date of depositing fee</th>
				<th><input id="fee_deposit_date" name="fee_deposit_date" maxlength="50" placeholder="YYYY-MM-DD" required></th>
			</tr>

			<tr>
				<th>Mode of payment(cheque/DD/cash/IPO)</th>
				<th><input type="text" id="pay_mode" name="pay_mode" maxlength="50" required></th>
			</tr>

			<tr>
				<th>Whether the applicant wishes to receive the information by post</th>
				<th>
					<input type="radio" value="yes" checked="checked" name="post" id="post_yes" required> Yes&nbsp&nbsp
					<input type="radio" value="no" name="post" id="post_no" required> No
				</th>
			</tr>

		</tbody>
	</table>


	<input type="submit" name="add" value="Add Queries" class="btn" onclick="return validateDate()">&nbsp&nbsp
	<input type="submit" name="submit" value="Save and Exit" class="btn" onclick="return validateDate()">

	<!-- Script to validate dates in form id user have entered them correctly -->
	<script type="text/javascript">
	function validateDate(){
		var bool1 = validatedate1(document.add_rti.date_of_receipt);
		var bool2, bool3;
		if(bool1 == true){
			bool2 = validatedate2(document.add_rti.date_of_receipt_cio);
			if(bool2 == true){
				bool3 = validatedate3(document.add_rti.fee_deposit_date);
			}
		}
		if(bool1 == false || bool2 == false || bool3 == false){
			return false;
		}
	}
	</script>

	<script src="date_validation_add_rti.js"></script>
</form>
</div>
</body>
</html>
<?php
	}
?>
