<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(!isset($_SESSION['login_access'])){
		header("location: ../errors/no_file.php");
	}
	else {
?>
		<html>
			<head>
				<title>Section 4</title>
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
				<meta charset="utf-8">
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<script src="../bootstrap/jQuery/jquery.min.js"></script>
				<script src="../bootstrap/js/bootstrap.min.js"></script>
			</head>
			<body>
				<div class="container">
					<?php
						$Id = $_GET['id'];
						echo "<h2>RTI Id: ".$Id."</h2>";

						$_SESSION['database_access'] = true;
						include '../db/config_database.php';
						$_SESSION['database_access'] = true;

						$query=" SELECT * FROM section4 WHERE id=".$Id.";";
						$r= mysqli_query($con, $query);
						$res=mysqli_fetch_assoc($r);
						if($res) {
					?>
							<h4><b>Reference u/s 7 of RTI Act (where applicable):</b></h4>
							<form action='../appellant_interface/reply&section4.php' method=post>
								<table class="table table-bordered">
									<tr>
										<td> Date of intimation given to appelant regarding fee u/s</br> 7(1) chargeable  and his right to review</td>
										<td><input type="text" style="height:32px" name="info_fee_date" id="Name" value=<?php echo $res['info_fee_date']; ?> placeholder="YYYY-MM-DD"></td>
									</tr>
									<tr>
										<td>Quantum of (a) Fee & (b) Further fee indicated to be charged</td>
										<td><input type="text" style="height:32px" name="info_fee" id="Name" value=<?php echo $res['info_fee']; ?> placeholder=""></td>
									</tr>
									<tr>
										<td>Date of depositing fees by petitioner as demanded by CPIO </br>(indicate mode of depositing fee too)</td>
										<td><input type="text" style="height:32px" name="fee_submit_date" id="Name" value=<?php echo $res['fee_submit_date']; ?> placeholder="YYYY-MM-DD"></td>
									</tr>
									<tr>
										<td>Date of furnishing information </td>
										<td><input type="text" style="height:32px" name="given_info_date" id="Name" value=<?php echo $res['given_info_date']; ?> placeholder="YYYY-MM-DD"></td>
									</tr>
								</table>
								<?php
								echo "<input type='submit' value ='Save and Exit' class=btn name='submitSection4new'>
							</form>" ;
							echo "&nbsp&nbsp<a class='btn' href='ongoing_rti_option.php?id=".$Id."''>Back</a>" ;
						}
						else {
								?>
							<h4><b>Reference u/s 7 of RTI Act (where applicable):</b></h4>
							<form action='../appellant_interface/reply&section4.php' method=post>
								<table class="table table-bordered">
									<tr>
										<td> Date of intimation given to appelant regarding fee u/s</br> 7(1) chargeable  and his right to review</td>
										<td><input type="text" style="height:32px" name="info_fee_date" id="Name" value="" placeholder="YYYY-MM-DD"></td>
									</tr>
									<tr>
										<td>Quantum of (a) Fee & (b) Further fee indicated to be charged</td>
										<td><input type="text" style="height:32px" name="info_fee" id="Name" value="" class="name" placeholder=""></td>
									</tr>
									<tr>
										<td>Date of depositing fees by petitioner as demanded by CPIO </br>(indicate mode of depositing fee too)</td>
										<td><input type="text" style="height:32px" name="fee_submit_date" id="Name" value="" class="name" placeholder="YYYY-MM-DD"></td>
									</tr>
									<tr>
										<td>Date of furnishing information </td>
										<td><input type="text" style="height:32px" name="given_info_date" id="Name" value="" class="name" placeholder="YYYY-MM-DD"></td>
									</tr>
								</table>
								<?php
								echo "<input type='submit' value ='Save and Exit' class=btn name='submitSection4'>" ;
								echo "&nbsp&nbsp<a class='btn' href='ongoing_rti_option.php?id=".$Id."''>Back</a>" ;
						}
								?>
							</form>
					</div>
			</body>
		</html>
<?php 
	} 
?>