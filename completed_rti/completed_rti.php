<?php
	if(!isset($_SESSION)) {
		session_start();
	}
	if(!isset($_SESSION['login_access'])){
		header("location: ../errors/no_file.php");
	}
	else {
		$account_type = $_SESSION['login_access'];
?>
		<html>
			<head>
				<title>Completed RTI</title>
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<link rel=stylesheet href='../css/a.css'>
				<meta charset="utf-8">
			</head>
			<body>
				<div class='container'>
					<?php
						$_SESSION['database_access'] = true;
						include '../db/config_database.php';
						$_SESSION['database_access'] = false;
						$query = " SELECT * FROM add_rti ORDER BY date_of_receipt_cio";
						$res = mysqli_query($conn, $query);
						echo "<h2><center>List of Completed RTI</center></h2>" ;
						echo "<h3>Select The RTI To Be Modified/Viewed:</h3>";
						echo "<br><table class='table table-bordered '>";
							echo"<tr class='tor'>
								<th>ID</th>
								<th>Applicant Name</th>
								<th>Phone Number</th>
								<th>View Details</th>
								<th>First Appeal</th>
							</tr>";	
							while ($r = mysqli_fetch_assoc($res)){
								if ($r['archive'] == 1) {
									$query1 = "SELECT COUNT(*) AS total FROM info_about_reply where id=" . $r['id'] . ";";
									$res1 = mysqli_query($conn, $query1);
									$values = mysqli_fetch_assoc($res1);
									$num_rows = $values['total'];
									if ($num_rows > 0) {
										$query1 = "SELECT * FROM info_about_reply where id=" . $r['id'] . ";";
										$res1 = mysqli_query ($conn, $query1);
										$s = mysqli_fetch_assoc ($res1);
										$now = time();
										$your_date = strtotime ("$s[reply_date]");
										$datediff = $now - $your_date;
										$d4 = floor ($datediff/(60*60*24));
										if ($d4 <= 30) {
											echo "<tr>
													<td>".$r['id']."</td>
													<td>".$r['name']."</td>
													<td>".$r['phone_no']."</td>
													<td><a href='compid.php?id=".$r['id']."'>View</a></td>
													<td><a href='appeal.php?id=".$r['id']."'>Raise Appeal</a></td>
												</tr>";
										}
										else {
											$sql="UPDATE add_rti SET closed=1 WHERE id=".$r['id'];
											mysqli_query($conn,$sql);
										}
									}
								}
							}
							echo "</table>";
						if($account_type != 'Admin'){
							$dept = $_SESSION['department'];
							$i=0;
							$m='';
							if($dept == 'Admin')
								$m='Ad';
							if($dept == 'Examination')
								$m='Ex';
							if($dept == 'Human Resource')
								$m='HR';
							if($dept == 'Academics')
								$m='Ac';
							$query=" SELECT * FROM t2 WHERE map='".$m."' order by id;";
							$data=mysqli_query($con,$query);
							$data2=mysqli_num_rows($data);
							echo "<table class='table table-bordered>" ;
							echo "<tr class='tor'>
									<th>ID</th>
									<th>Applicant Name</th>
									<th>Date of Receipt</th>
									<th>Last date</th>
									<th>Days left</th>
									<th>Mark as completed</th>
								</tr>";
							while ($data2 != 0) {
								$data3 = mysqli_fetch_array($data);
								$i = $data3['id'];
								$quer = "SELECT * FROM add_rti WHERE id=".$i." order by date_of_receipt_cio;";
								$res = mysqli_query($con,$quer);
								$v = mysqli_num_rows($res);
								while($v!=0) {
									$r = mysqli_fetch_array($res);
									if ($r['archive'] == 1) {
										$query1= "SELECT COUNT(*) AS total FROM info_about_reply where id=".$r['id'].";";
										$res1 = mysqli_query($conn, $query1);
										$values = mysqli_fetch_assoc($res1);
										$num_rows = $values['total'];
										if($num_rows>0) {
											$query1 = "SELECT * FROM info_about_reply where id=".$r['id'].";";
											$res1 = mysqli_query( $conn, $query1);
											$s = mysqli_fetch_assoc($res1);
											$now = time();
											$your_date = strtotime ("$s[reply_date]");
											$datediff = $now - $your_date;
											$d4 = floor($datediff/(60*60*24));
											if ($d4 <= 30) {
												echo "<tr>
												<td>".$r['id']."</td>
												<td>".$r['name']."</td>
												<td>".$r['phone_no']."</td>
												<td><a href='compid.php?id=".$r['id']."'>View</a></td> </tr>";
											}
											else {
												$sql = "UPDATE add_rti SET closed=1 WHERE id=".$r['id'];
												mysqli_query($conn,$sql);
											}
										}
									}
									$v--;
								}
								$data2--;
							}	
							echo "</table>";
						}
				?>
				<a href="../select_option.php" class='btn btn-log' >Back</a>
			</div>
		</body>
	</html>
<?php 
	} 
?>