<!-- After reply-->
<!doctype html>
<html>
<head>
	<head>
		<title>Before Reply Form</title>
		<link rel="stylesheet" href="css/background.css">
		<meta charset="utf-8">
	</head>
</head>
<body>
<?php
	$Id = $_GET['id'];
	echo "Add Details of RTI with Id: ".$Id;
?>
	<!--Information providing,fee details--><table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
			<tbody>
				<tr><th colspan="2">(IV) Reference u/s 7 of RTI Act:- (where applicable)</th></tr>
			</tbody>
			</table>
			<form action='replysection4.php' method=post>
			<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
	<tr>
		<th> Date of intimation given to appelant regarding fee u/s</br> 7(1) chargeable  and his right to review</th>
		<th><input type="text" name="info_fee_date" id="Name" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>Quantum of<br>(a) Fee & (b) Further fee indicated to be charged</th>
		<th><input type="text" name="info_fee" id="Name" maxlength="50" value="" class="name" placeholder=""></th>
	</tr>
	<tr>
		<th>(vi)Date of depositing fees by petitioner as demanded by CPIO </br>(indicate mode of depositing fee too)</th>
		<th><input type="text" name="fee_submit_date" id="Name" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>(vii)Date of furnishing information </th>
		<th><input type="text" name="given_info_date" id="Name" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	
	</table>
	<input type='submit' value ='Save and Exit' class=btn name='submitSection4'>
<?php
	echo "<br><br><a href='previd.php?id=".$Id."''>Back</a>" ;
?>
</body>
</html>