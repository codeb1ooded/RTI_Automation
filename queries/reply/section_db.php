<?php
	if(!isset($_SESSION)) {
		session_start();
	}
	if(!isset($_SESSION['login_access'])){
		header("location: ../../errors/no_file.php");
	}
	else {
?>
		<html>
			<head>
				<title>Section Information</title>	
				<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
				<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
				<script src="../../bootstrap/jQuery/jquery.min.js"></script>
				<script src="../../bootstrap/js/bootstrap.min.js"></script>
				<meta charset="utf-8">
			</head>
			<body>
				<div class=container>
					<?php
						$_SESSION['database_access'] = true;
						include '../../db/config_database.php';
						$_SESSION['database_access'] = false;

						$k = "SELECT * FROM article_sub_section;";
						$query = mysqli_query($con,$k);
						$data2 = mysqli_num_rows($query);
						$a = $data2;
						echo "<h2> Section Database</h2>";
						echo "<table class='table table-bordered'>
								<tbody>
									<tr>
										<th>S.No.</th>
										<th>Section-Subsection</th>
										<th>Description</th>
									</tr>";
						while( $a!=0){
							$a--;
							$data3=mysqli_fetch_array($query);
					?>
							<tr>
								<td> <?php echo $data3['Id']?> </td>
								<td> <?php echo $data3['No']?> </td>
								<td> <?php echo $data3['Description']?> </td>
					<?php
						} 
					?>
								</tr>
						</tbody>
					</table>
				
				</div>
			</body>
		</html>
<?php
	}
?>
