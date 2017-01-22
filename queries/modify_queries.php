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
				<title>Modified</title>
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<meta charset="utf-8">
			</head>

			<body>
				<div class=container>
					<?php
						$_SESSION['database_access'] = true;
						include '../db/config_database.php';
						$_SESSION['database_access'] = false;
						$id = $_POST['ID'];
						$d1 = strtotime($_POST['date_of_receipt']);
						$d2 = strtotime($_POST['date_of_receipt_cio']);
						$d3 = floor(abs($d2-$d1)/86400);

						$data = "UPDATE add_rti SET
							name = '$_POST[name]',
							gender = '$_POST[gender]',
							address = '$_POST[address]',
							pin_code = '$_POST[pin_code]',
							state = '$_POST[state]',
							country = '$_POST[country]',
							phone_no = '$_POST[phone_no]',
							mobile = '$_POST[mobile]',
							email = '$_POST[email]',
							citizenship = '$_POST[citizenship]',
							date_of_receipt = '$_POST[date_of_receipt]',
							date_of_receipt_cio = '$_POST[date_of_receipt_cio]',
							timespan = '$d3',
							fee_enclosed = '$_POST[fee_enclosed]',
							fee_deposit_date = '$_POST[fee_deposit_date]',
							pay_mode = '$_POST[pay_mode]'
							WHERE id=".$id;

							if ($con->query($data) === TRUE) {
								echo "<br><h3>Details of record updated successfully</h3><br>";
							}
							else {
								echo "Error updating record: " . $con->error;
							}
							
							if(isset($_POST['edit'])) {
								$data1 = "SELECT * FROM t2 WHERE id=".$id.";";
								$query = mysqli_query($con, $data1);
								$data2 = mysqli_num_rows($query);
								$_SESSION['qu']= $data2;
								$a=$data2;
								echo "<form action=save_modified_queries.php method=post>";
									echo "<table class='table table-bordered table-condensed'>
										<tr>
											<th><center>Query No</center></th>
											<th><center>Query</center></th>
											<th><center>Map To</center></th>
											<th><center>Date Sent</center></th>
										</tr>";
					?>
										<script type="text/javascript">
											function mailTo (q_no) {
												var a = "q_no"+q_no;
												var map = document.getElementById("map"+a);
												var no_select = "no_selection"+a;
												var selected = map.options[map.selectedIndex].value;
												if(no_select != selected){
													var mailid;
													if(selected == "Ac"){
														mailid = "academics@igdtuw.com";
													} else if(selected == "Ex"){
														mailid = "examination@igdtuw.com";
													} else if(selected == "Ad"){
														mailid = "administrative@igdtuw.com";
													} else{
														mailid = "humaresource@igdtuw.com";
													}
													var subject="Please Send reply to the query of RTI Id: "+ <?php echo $id; ?>;
													var ques = "ques"+a;
													var body="Query: " + document.getElementById(ques).value + " \ndated on:" + document.getElementById("date_s"+a).value;
													window.open('mailto:'+mailid+'?subject='+subject+'&body='+body);
												}
												else {
													alert("Please select department first");
												}
											}
										</script>
										<?php
										while ($a!=0) {
											$data3 = mysqli_fetch_array($query);
											$qno = "q_no".$a;
											$ques = "ques".$a;
											$no_selection = "no_selectio".$qno;
											$map = "map".$a;
											$date_s = "date_s".$a;
											$ques_id = "ques".$qno;
											$map_id = "map".$qno;
											$date_s_id = "date_s".$qno;
										?>
											<tr>
												<td><br><center><input value="<?php echo $data3['q_no']?>" type=text name=<?php echo $qno; ?> hidden><?php echo $qno; ?></center></td>
												<td><textarea rows="3" style="width:570px; resize:none" type=text name=<?php echo $ques; ?> id=<?php echo $ques_id; ?>><?php echo $data3['ques'];?></textarea></td>
												<td><br>
													<select name=<?php echo $map; ?> id=<?php echo $map_id; ?> >
														<span>
															<option value=<?php echo $no_selection; ?> <?php if(strcmp($data3['map'], "") == 0){ echo "selected=\"selected\""; }?> >--Select--</option>
															<option value=Ac <?php if(strcmp($data3['map'], "Ac") == 0){ echo "selected=\"selected\""; }?>>Academics</option>
															<option value=Ex <?php if(strcmp($data3['map'], "Ex") == 0){ echo "selected=\"selected\""; }?>>Examination Division</option>
															<option value=Ad <?php if(strcmp($data3['map'], "Ad") == 0){ echo "selected=\"selected\""; }?>>Administrative</option>
															<option value=HR <?php if(strcmp($data3['map'], "HR") == 0){ echo "selected=\"selected\""; }?>>Human Resource</option>
														</span>
													</select>
												</td>
												<td><br><input type=date name=<?php echo $date_s; ?> value="<?php echo $data3['date_sent'] ?>" id=<?php echo $date_s_id; ?> placeholder=YYYY-MM-DD>
												<button class=btn type="button" name="mail_button" onclick="mailTo(<?php echo $a; ?>);">Mail</button> </td>
											</tr>
									<?php
										$sql = "DELETE FROM t2 WHERE id=".$id.";";
										mysqli_query($con,$sql);
										$a--;
								}
								?>
								</table>
								<?php
								echo "<br><input type=submit name=save class=btn value='Save and Exit' >";
								echo "&nbsp<a class=btn href='../ongoing_rti/ongoing_rti_option.php'>Exit</a>";
								echo "</form>";
							}
							else {
								echo "<a href='../ongoing_rti/ongoing_rti_option.php' class=btn> Back </a>";
							}
							$con->close();
									?>
				</div>
			</body>
		</html>
<?php 
	}
?>