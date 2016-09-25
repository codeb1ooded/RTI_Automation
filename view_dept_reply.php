<?php
    session_start();
	$id=$_SESSION['prev_rti_id'];
		
?>
<html>
	<head>
		<title>Department Replies</title>
		<link rel="stylesheet" href="css/background.css">
		<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		</head>

	<body>
	<?php
			include 'config_database.php'; 
		$k = "SELECT * FROM dept_reply WHERE id=".$id.";";
		$query=mysqli_query($con,$k);
		$data2=mysqli_num_rows($query);	
		$a=$data2;
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
			</tr>
		<?php
		} ?>
	</body>
</html>