<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$Id = $_GET['id'];
	echo "Add Details of RTI with Id: ".$Id;
?>
<form action = "replysection4.php" method ="post">
<table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
			<tbody>
				<tr>
					<th>(VI) I<sup>st</sup> Appeal:- (where applicable)</th>
				</tr>
			</tbody>
			</table>
			<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
	<tr>
		<th> Name and designation of the officer before whom <br>the 1<sup>st</sup> appeal is filed u/s 19(1)</th>
		<th><input type="text" name="appeal_info" id="Name" maxlength="50" value="" class="name" placeholder=""></th>
	</tr>
	<tr>
		<th>Date of transfer of appeal by the receiving officer to FAA</th>
		<th><input type="text" name="transfer_date" id="Name" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>Date of receipt of appeal by FAA(mention name of FAA)</th>
		<th><input type="text" name="faa_receipt_date" id="Name" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>Date of communicating decision to appelant </th>
		<th><input type="text" name="meet_date" id="Name" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
</table>
<th colspan="15"></th><th><input type="submit" name="submitappeal" id="Save_appeal" value="Save and Exit" class="btnsaveappeal"></th>
<?php
	echo "<br><br><a href='previd.php?id=".$Id."''>Back</a>" ;
?>
</body>
</form>
</html>