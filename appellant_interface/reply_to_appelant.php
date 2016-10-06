<?php
	if(!isset($_SESSION)){
		session_start();
	}
	$account_type = $_SESSION['login_access'];
	if(!isset($_SESSION['login_access'])){
		header("location: ../errors/no_file.php");
	}
	else {
?>
<html>
	<head>
		<title>Reply To Appellant Form</title>
		<link rel="stylesheet" href="../css/background.css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="../bootstrap/jQuery/jquery.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
	</head>

	<body>
		<div class="container">
<?php
		$Id = $_GET['id'];
		$_SESSION['prev_rti_id'] = $Id;
		echo "<br><h3>Reply Information for RTI with Id: ".$Id."</h3>";

		$_SESSION['database_access'] = true;
		include '../db/config_database.php';
		$_SESSION['database_access'] = false;

		$query=" SELECT * FROM info_about_reply WHERE id=".$Id.";";
    $r= mysqli_query($con, $query);
    $res=mysqli_fetch_assoc($r);
    if($res){
?>
<!--Processing of RTI application and response to the appellant-->
<h4><strong>(III) Processing of RTI application and response to the appellant-</strong></h4>
	<form action ="reply&section4.php" method ="post">
		<table class="table table-bordered">
			<tr>
				<th>Date of receipt of information by the CPIO from the holder(s) of information</th>
				<th><input type="text" style="height:32px" name="holder_receipt_date" value=<?php echo $res['holder_receipt_date']; ?> placeholder="YYYY-MM-DD"></th>
			</tr>

			<tr>
				<th>Date of reply to appellant/complaint by CPIO</th>
				<th><input type="text" style="height:32px" name="reply_date" value="<?php echo $res['reply_date']; ?>" placeholder="YYYY-MM-DD"></th></tr>
			</tr>

			<tr>
				<th>Mode of communicating reply </th>
				<th><input type="text" style="height:32px" name="reply_mode" value="<?php echo $res['reply_mode']; ?>"></th>
			</tr>

			<tr>
				<th>Whether name and address of FAA mentioned in the reply u/s 7(8)(give particulars)</th>
				<th><input type="text" style="height:32px" name="faa_info" value=<?php echo $res['faa_info']; ?> ></th>
			</tr>
		</table>
		<input type="submit" name="submitresponsenew" class=btn value="Save and Exit">
		</form>
<?php
		echo "<br><a class=btn href='../ongoing_rti/ongoing_rti_option.php?id=".$Id."''>Back</a>" ;
	}
	else
	{
?>
<h4><strong> Processing of RTI application and response to the appellant-</strong></h4>
	<form action ="reply&section4.php" method ="post">
		<table class="table table-bordered">
			<tr>
				<th>Date of receipt of information by the CPIO from the holder(s) of information</th>
				<th><input type="text" style="height:32px" name="holder_receipt_date" value="" placeholder="YYYY-MM-DD"></th>
			</tr>

			<tr>
				<th>Date of reply to appellant/complaint by CPIO</th>
				<th><input type="text" style="height:32px" name="reply_date" value="" placeholder="YYYY-MM-DD"></th></tr>
			</tr>

			<tr>
				<th>Mode of communicating reply </th>
				<th><input type="text" style="height:32px" name="reply_mode" maxlength="50"></th>
			</tr>

			<tr>
				<th>Whether name and address of FAA mentioned in the reply u/s 7(8)(give particulars)</th>
				<th><input type="text" style="height:32px" name="faa_info" value="" placeholder=""></th>
			</tr>
		</table>
		<input type="submit" name="submitresponse" class=btn value="Save and Exit">
	</form>
<?php
	echo "&nbsp&nbsp<a class='btn' href='../ongoing_rti/ongoing_rti_option.php?id=".$Id."''>Back</a>";
	}
?>
</div>
</body>
</html>
<?php } ?>
