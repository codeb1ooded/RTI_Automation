<?php
if(!isset($_SESSION) || !isset($_SESSION['Account_type'])) {
	// echo 'session not started';
		include 'index.php';
		echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Please login first"; document.getElementById("message").style.color = "#ff0000";</script>';
}
else{
?>
<!Doctype html>
<html>
	<head>
		<title>Transfer of authority</title>
	</head>
	<body>
	<!--Reference to another CPIO-->
		<table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
				<tbody>
					<tr><th colspan="2">(V) Reference u/s 6(3) of RTI Act:- (where applicable)</th></tr>
				</tbody>
				</table>
				<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
		<tr>
			<th>(iv)Date of transfer to another Public Authority</th>
			<th><input type="text" name="Asent_date" id="Name" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th>
		</tr>
		<tr>
			<th>To whom was it transferred</br> (mention name,designation and address)</th>
			<th><input type="text" name="Ainfo" id="Name" maxlength="50" value="" class="name" placeholder=""></th>
		</tr>
		<tr>
			<th>(v)Date of receipt by another Public Authority</th>
			<th><input type="text" name="Areceived_date" id="Name" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th>
		</tr>
		</table>
	</body>
</html>
<?php } ?>
