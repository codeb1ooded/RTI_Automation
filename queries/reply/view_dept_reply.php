<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['login_access'])){
	header("location: ../../errors/no_file.php");
}
else {
	$id=$_SESSION['prev_rti_id'];
	?>
	<html>
	<head>
		<title>Department Replies</title>
		<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
		<script src="../../bootstrap/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
	</head>
	<body>
		<div class=container>
			<?php
			$_SESSION['database_access'] = true;
			include '../../db/config_database.php';
			$_SESSION['database_access'] = false;

			$k = "SELECT * FROM dept_reply WHERE id=".$id.";";
			$query = mysqli_query($con,$k);
			$data2 = mysqli_num_rows($query);
			$a = $data2;
			echo "<h2> Received Department Replies</h2>";
			echo "<table class='table table-bordered'>
			<tbody>
				<tr>
					<th>Query No</th>
					<th>Department</th>
					<th>Reply</th>
				</tr>";
				while( $a!=0){
					$a--;
					$data3=mysqli_fetch_array($query);
					?>
					<tr>
						<td> <?php echo $data3['query_no']?> </td>
						<td> <?php echo $data3['map']?> </td>
						<td> <?php echo $data3['answer']?> </td>
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
