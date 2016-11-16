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
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
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
						echo "<h3>RTI Id:<b> ".$Id."</b></h3>";

						$_SESSION['database_access'] = true;
						include '../db/config_database.php';
						$_SESSION['database_access'] = false;

						$query=" SELECT * FROM info_about_reply WHERE id=".$Id.";";
						$r= mysqli_query($con, $query);
						$res=mysqli_fetch_assoc($r);
						if($res){
					?>
							<!--Processing of RTI application and response to the appellant-->
							<h4><b> Processing of RTI application and response to the appellant:</b></h4>
							<form action ="reply&section4.php" method ="post">
								<table class="table table-bordered">
									<tr>
										<td>Date of receipt of information by the CPIO from the holder(s) of information</td>
										<td><input type="text" style="height:32px" name="holder_receipt_date" value=<?php echo $res['holder_receipt_date']; ?> placeholder="YYYY-MM-DD"></td>
									</tr>
									<tr>
										<td>Date of reply to appellant/complaint by CPIO</td>
										<td><input type="text" style="height:32px" name="reply_date" value="<?php echo $res['reply_date']; ?>" placeholder="YYYY-MM-DD"></td></tr>
									</tr>
									<tr>
										<td>Mode of communicating reply </td>
										<td><input type="text" style="height:32px" name="reply_mode" value="<?php echo $res['reply_mode']; ?>"></td>
									</tr>
									<tr>
										<td>Whether name and address of FAA mentioned in the reply u/s 7(8)(give particulars)</td>
										<td><input type="text" style="height:32px" name="faa_info" value=<?php echo $res['faa_info']; ?> ></td>
									</tr>
								</table>
								<input type="submit" name="submitresponsenew" class=btn value="Save and Exit">
								<?php
									echo "&nbsp&nbsp&nbsp<a class=btn href='../ongoing_rti/ongoing_rti_option.php?id=".$Id.">Back".$Id."</a>" ;
							echo"</form>";
						}
						else
						{
								?>
							<h4><b> Processing of RTI application and response to the appellant :</b></h4>
							<form action ="reply&section4.php" method ="post">
								<table class="table table-bordered">
									<tr>
										<td>Date of receipt of information by the CPIO from the holder(s) of information</td>
										<td><input type="text" style="height:32px" name="holder_receipt_date" value="" placeholder="YYYY-MM-DD"></td>
									</tr>
									<tr>
										<td>Date of reply to appellant/complaint by CPIO</td>
										<td><input type="text" style="height:32px" name="reply_date" value="" placeholder="YYYY-MM-DD"></td></tr>
									</tr>
									<tr>
										<td>Mode of communicating reply </td>
										<td><input type="text" style="height:32px" name="reply_mode" maxlength="50"></td>
									</tr>
									<tr>
										<td>Whether name and address of FAA mentioned in the reply u/s 7(8)(give particulars)</td>
										<td><input type="text" style="height:32px" name="faa_info" value="" placeholder=""></td>
									</tr>
								</table>
								<input type="submit" name="submitresponse" class=btn value="Save and Exit">
								<?php
								echo "<a class=btn href='../ongoing_rti/ongoing_rti_option.php?id=".$Id."'>Back</a>";
						}
								?>
							</form>
				</div>
			</body>
		</html>
<?php 
	} 
?>