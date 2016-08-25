<?php
<?php
if(!isset($_SESSION) || !isset($_SESSION['Account_type'])) {
	// echo 'session not started';
		include 'index.php';
		echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Please login first"; document.getElementById("message").style.color = "#ff0000";</script>';
}
else{
$account_type = $_SESSION['login_access'];
?>
<html>
<head>
	<title>Completed RTI</title>
	<link rel="stylesheet" href="css/prev_rti.css">
	<link rel="stylesheet" href="css/background.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/jQuery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<div class='container'>

		<?php
		include 'config_database.php';

		$query=" SELECT * FROM add_rti order by date_of_receipt_cio;";
		$res=mysqli_query($conn,$query);
		echo "<br><h2>CLOSED RTIs</h2><br>" ;
		if($account_type == 'Admin'){
			echo "<table class='table table-bordered'><tr>
			<th>ID</th>
			<th>Applicant Name</th>
			<th>Phone Number</th>
			<th>View Details</th></tr>";
			while($r=mysqli_fetch_assoc($res)){
				if($r['closed']==1) {
					echo "<tr>
					<td>".$r['id']."</td>
					<td>".$r['name']."</td>
					<td>".$r['phone_no']."</td>
					<td><a href='compid.php?id=".$r['id']."'>View</a></td> </tr>";
				}
				else if($r['archive']==1) {
					$query1= "SELECT COUNT(*) AS total FROM info_about_reply where id=".$r['id'].";";
					$res1 = mysqli_query($conn, $query1);
					$values = mysqli_fetch_assoc($res1);
					$num_rows = $values['total'];
					if($num_rows>0){
						$query1="SELECT * FROM info_about_reply where id=".$r['id'].";";
						$res1=mysqli_query($conn,$query1);
						$s=mysqli_fetch_assoc($res1);
						$now = time();
						$your_date = strtotime("$s[reply_date]");
						$datediff = $now - $your_date;
						$d4=floor($datediff/(60*60*24));
						if($d4>=30){
							echo "<tr>
							<td>".$r['id']."</td>
							<td>".$r['name']."</td>
							<td>".$r['phone_no']."</td>
							<td><a href='compid.php?id=".$r['id']."'>View</a></td> </tr>";
							$sql="UPDATE add_rti SET closed=1 WHERE id=".$r['id'];
							mysqli_query($conn,$sql);
						}
					}
				}
			}
			echo "</table>";
		}
		else if($account_type != 'Admin'){
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
			$data=mysqli_query($con, $query);
			$data2=mysqli_num_rows($data);
			echo "<table class='table table-bordered'>" ;
			echo "<tr>
			<th>ID</th>
			<th>Applicant Name</th>
			<th>Date of Receipt</th>
			<th>Last date</th>
			<th>Days left</th>
			<th>Mark as completed</th></tr>";
			while($data2!=0) {
				$data3=mysqli_fetch_array($data);
				$i=$data3['id'];
				$quer="SELECT * FROM add_rti WHERE id=".$i." order by date_of_receipt_cio;";
				$res=mysqli_query($con,$quer);
				$v=mysqli_num_rows($res);
				while($v!=0) {
					$r=mysqli_fetch_array($res);
					if($r['closed']==1) {
						echo "<tr>
						<td>".$r['id']."</td>
						<td>".$r['name']."</td>
						<td>".$r['phone_no']."</td>
						<td><a href='compid.php?id=".$r['id']."'>View</a></td> </tr>";
					}
					else if($r['archive']==1) {
						$query1= "SELECT COUNT(*) AS total FROM info_about_reply where id=".$r['id'].";";
						$res1 = mysqli_query($conn, $query1);
						$values = mysqli_fetch_assoc($res1);
						$num_rows = $values['total'];
						if($num_rows>0) {
							$query1="SELECT * FROM info_about_reply where id=".$r['id'].";";
							$res1=mysqli_query($conn,$query1);
							$s=mysqli_fetch_assoc($res1);
							$now = time();
							$your_date = strtotime("$s[reply_date]");
							$datediff = $now - $your_date;
							$d4=floor($datediff/(60*60*24));
							if($d4>=30) {
								echo "<tr>
								<td>".$r['id']."</td>
								<td>".$r['name']."</td>
								<td>".$r['phone_no']."</td>
								<td><a href='compid.php?id=".$r['id']."'>View</a></td> </tr>";
								$sql="UPDATE add_rti SET closed=1 WHERE id=".$r['id'];
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
		<br><a href="select_option.php" class=btn >Back</a>
	</div>
</body>
</html>
<?php } ?>
