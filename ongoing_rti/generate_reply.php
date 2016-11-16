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
				<title>Generate Reply</title>
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
				<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
				<script src="../bootstrap/jQuery/jquery.min.js"></script>
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<meta charset="utf-8">
			</head>
			<body>
				<?php
					$id=$_GET['id'];
					$_SESSION['database_access'] = true;
					include '../db/config_database.php';
					$_SESSION['database_access'] = false;

					$data1 = "SELECT * FROM t2 WHERE id=".$id.";";
					$query = mysqli_query($con, $data1);
					$data2 = mysqli_num_rows($query);
					$a = $data2;

					$data3 = "SELECT * FROM add_rti WHERE id=".$id.";";
					$query2 = mysqli_query($con, $data3);
					$data4 = mysqli_num_rows($query2);
					$b = $data4;
					$add_rtirows = mysqli_fetch_array($query2);

					$data5 = "SELECT * FROM reply_queries WHERE id=".$id.";";
					$query3 = mysqli_query($con, $data5);
					$data6 = mysqli_num_rows($query3);

					$data7= "SELECT q_no, ques, map FROM t2 WHERE id=".$id.";";
					$query4 = mysqli_query($con, $data7);
					

					if($data2 == $data6){
					echo"<table class='table table-bordered table-condensed'>
						<tbody>
						<tr><td>Ref.: CPIO/</td>	 						<td>Dated:</td></tr>
						</tbody>
					</table>
					</br>
					</br>
					<table class='table table-bordered table-condensed'style='align:center'>
						<tbody>
						<tr >
						<td>
						To <br><br> Name: ".$add_rtirows['name']."<br><br>Address: ".$add_rtirows['address']."<br><br><br>
					Subject:-	Information required under Section 6(1) of the Right to Information Act, 2005.
					<br><br><br>
					Sir/Madam,
					<br><br>
					Please refer to your application dated  ".$add_rtirows['date_of_receipt'].", on the subject mentioned above.
					<br><br>
					2.	The information sought by you is enclosed.
					<br><br>
					3.	You are requested to acknowledge the receipt of this letter.
					<br><br>
					Yours faithfully,
					</td>
					</tr>
					</tbody>
					</table>";
					echo "<div class='container'>";
					echo"<table >";
					echo"<tr>
						<th>Query no:</th>
						<th>Query</th>
						<th>Reply</th>
						</tr>";
					while( $a!=0) {
						$t2_result = mysqli_fetch_array($query4);

						$data8 = "SELECT ans FROM reply_queries WHERE id=".$id." AND q_no =".$t2_result['q_no'].";";
						$query5 = mysqli_query($con, $data8);
						$ans_result = mysqli_fetch_array($query5);

						$ans="ans".$a;
				?>
						<tr>
							<td>"<?php echo $t2_result['q_no']?></td>
							<td><?php echo $t2_result['ques']?></td>
							<td><?php echo $ans_result['ans']?></td>
						</tr>
						<?php
							$a--;
					}
					echo"Name :</br></br>
					Designation/CPIO
		
					Encl.: As above.";
	
					echo"</table><br></div>";
					
						echo "<button class='btn' onclick='myFuction()'>Print the reply</button>";
						?>
					<script>
						function myFuction(){
							window.print();
						}
					</script>
					<?php 
					} 
					else {
						echo "<h3> First reply all queries </h3>";
					}
					echo "<a class='btn' href='ongoing_rti_option.php?id=".$id."''>Back</a>";
					?>
			</body>
		</html>
<?php 
	} 
?>