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
				<title>Reply Queries</title>
				<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
				<link rel="stylesheet" href="../../css/background.css">
				<meta charset="utf-8">
				<script src="../../bootstrap/jQuery/jquery.min.js"></script>
				<script src="../../bootstrap/js/bootstrap.min.js"></script>
			</head>
			<body>
				<div class="container">
					<?php
						$_SESSION['database_access'] = true;
						include '../../db/config_database.php';
						$_SESSION['database_access'] = false;
						$id=$_GET['id'];
						$k = "SELECT * FROM t2 WHERE id=".$id.";";
						$query=mysqli_query($con,$k);
						$data2=mysqli_num_rows($query);

						$_SESSION['quer']=$data2;

						$a=$data2;
						echo "<br><h3>RTI ID: ".$id."</h3><br>";
						echo "<table class='table table-bordered'>
								<tr>
									<th><center>Query No</center></th>
									<th><center>Query</center></th>
									<th><center>Reply</center></th>
									<th><center>Section</center></th>
									<th><center>Sub-Section</center></th>
									<th><center>Date Received</center></th>
								</tr>";
						echo "<form action=save_replies.php method=post>";
						while( $a!=0) {
							$data3=mysqli_fetch_array($query);
							$qno="q_no".$a;
							$ques="ques".$a;
							$ans="ans".$a;
							$sec="sec".$a;
							$subsec="subsec".$a;
							$date_rec="date_rec".$a;

							$sql = "SELECT * from article_section";
							$result = $con->query($sql);

							$sqlFramework = "SELECT * FROM article_sub_section";
							$resultFramework = $con->query($sqlFramework);
							$rowFrameworkResult = array();
							if ($resultFramework->num_rows > 0) {
								while($rowFramework = mysqli_fetch_assoc($resultFramework)) {
									$rowFrameworkResult[] = $rowFramework;
								}
							}
					?>
						<tr>
							<td><br><?php echo $data3['q_no']?> </td>
							<td><br><?php echo $data3['ques']?></td>
							<td><textarea style="width:400px; resize:none" rows="3" type=text name=<?php echo $ans; ?>></textarea></td>
							
							<!-- select menu for section -->
							<td><br>
								<select class="btn" style="background:white; color:black" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value, this.name);" name=<?php echo $sec; ?>>
									<option value="">Select Section</option>
									<?php 
										if ($result->num_rows > 0) 
										{ 
									?>
									<?php
											while($row = mysqli_fetch_assoc($result)) 
											{ 
									?>
												<option value="<?php echo $row['Id']; ?>"><?php echo $row['No']; ?></option>
									<?php 
											} 
									?>
									<?php 
										} 
									?>
								</select>
							</td>

							<!-- select menu for sub-section -->
							<td><br>
								<div>
									<select class="btn" style="background:white; color:black" id=<?php echo $subsec; ?> name=<?php echo $subsec; ?>>
											<option value="">Please select sub-section</option>
									</select>
								</div>

								<script language="javascript" type="text/javascript">
									var rowFrameworkResultInJs =<?php echo json_encode($rowFrameworkResult);?> ;
								</script>
				
								<script language="javascript" type="text/javascript">
									function dynamicdropdown(listindex,name) {
										var x=0;
										for(var i=3;i<name.length;i++) {
											var b=name.charAt(i);
											x=x*10+parseInt(b);
										}
										var y="subsec"+x;
										var ele = document.getElementById(y);
										ele.length = 0;
										ele.options[0]=new Option("Please select sub-section","");
										if (listindex) {
											var lookup = {};
											var j = 1;
											for (var i = 0, len = rowFrameworkResultInJs.length; i < len; i++)
												if (rowFrameworkResultInJs[i].sec_id == listindex)
													ele.options[j++]=new Option(rowFrameworkResultInJs[i].No,rowFrameworkResultInJs[i].Id);
										}
										return true;
									}
								</script>
							</td>
							<td><br><input style="height:32px" type=date name=<?php echo $date_rec;?> placeholder=YYYY-MM-DD required></td>
						</tr>
						<?php
							$a--;
					}
					echo "</table>" ;
					echo "<a href='section_db.php' target='_blank' class=btn>View Section Information</a>&nbsp&nbsp";
					echo "<a href='view_dept_reply.php' target='_blank' class=btn>View Department Replies</a>";
					echo "<br><br><input type=submit name=save class=btn value='Save and Exit' >&nbsp&nbsp";
					echo "</form>" ;
					echo "<a href='../../ongoing_rti/ongoing_rti_option.php?id=".$id."' class=btn>Back</a>";
						?>
				</div>
			</body>
		</html>
<?php 
	} 
?>