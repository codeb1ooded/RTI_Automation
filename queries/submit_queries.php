<?php
	if(!isset($_SESSION)) {
		session_start();
	}
	if(!isset($_SESSION['login_access'])){
		header("location: ../errors/no_file.php");
	}
	elseif ($_SESSION['login_access'] != 'Admin') {
		header("location: ../errors/no_access.php");
	}
	else {
		$id=$_SESSION['id'];
		$_SESSION['no_of_queries']=$_POST['ques'];
?>
		<html>
			<head>
				<title>Queries</title>
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<link rel=stylesheet href='../css/a.css'>
				<meta charset="utf-8">
			</head>	
			<body>
				<div class=container>
					<?php
						$_SESSION['database_access'] = true;
						include '../db/config_database.php';
						$_SESSION['database_access'] = false;
						$a=$_POST['ques'];
						echo "<br><h4>Enter queries for RTI ID:".$id."</h4>";
						echo "<table class='table table-bordered'>
								<tr>
									<th><center>Query No</center></th>
									<th><center>Query</center></th>
									<th><center>Map To</center></th>
									<th><center>Date Sent</center></th>
								</tr>";
						echo "<form action=../queries/save_queries.php method=post>";
					?>

	`				<script type="text/javascript">
						function mailTo (a) {
							var map = document.getElementById("dropdown"+a);
							var no_select = "no_selection"+a;
							var selected = map.options[map.selectedIndex].value;
							if(no_select != selected){
								var mailid;
								if(selected == "Ac"){
									mailid = "academics@igdtuw.com";
								}
								else if(selected == "Ex"){
									mailid = "examination@igdtuw.com";
								}
								else if(selected == "Ad"){
									mailid = "administrative@igdtuw.com";
								}
								else {
									mailid = "humaresource@igdtuw.com";
								}
								var subject="Please Send reply to the query of RTI Id: "+ <?php echo $id; ?>;
								var ques = "ques"+a;
								var body="Query: " + document.getElementById(ques).value + " \ndated on:" + document.getElementById("date_s"+a).value;
								window.open('mailto:'+mailid+'?subject='+subject+'&body='+body);
							}
							else {
								alert("Please select a department first");
							}
						}
					</script>
					<?php
						$c = 1;
						while($a != 0) {
							$ques = "ques".$a;
							$map = "map".$a;
							$date_s = "date_s".$a;
							$no_selection = "no_selection".$a;
							$dropdown = "dropdown".$a;
					?>
							<tr>
								<td><br><input type=text name=<?php echo $c; ?> value=<?php echo $c; ?> hidden><center><?php echo $c; ?></center></td>
								<td><textarea rows="3" style="width:570px; resize:none" type=text name=<?php echo $ques; ?> id=<?php echo $ques; ?>></textarea></td>
								<td><br>
									<select name=<?php echo $map;?> id=<?php echo $dropdown;?>
										<span>
											<option value=<?php echo $no_selection; ?>>--Select--</option>
											<option value=Ac>Academics</option>
											<option value=Ex>Examination Division</option>
											<option value=Ad>Administrative</option>
											<option value=HR>Human Resource</option>
										</span>
									</select>
								</td>
								<td><br><input type=date name=<?php echo $date_s; ?> id=<?php echo $date_s; ?> placeholder=YYYY-MM-DD>&nbsp&nbsp&nbsp&nbsp
								<button name="mail_button" class='btn btn-secondary' onclick="mailTo(<?php echo $a; ?>);">Mail</button></td>
							</tr>
							<?php
								$a--;
								$c++;
						}?>
					</table>
					<?php
						echo "<input type=submit name=save class='btn btn-primary' value='Save and Exit'>";
						echo "</form>";
						echo "&nbsp<a href='../ongoing_rti/ongoing_rti_option.php' class='btn btn-log'>Exit</a>";
						mysqli_close($con);
					?>
				</div>
			</body>
		</html>
<?php 
	} 
?>
