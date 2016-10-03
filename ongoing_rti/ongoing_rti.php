<?php
if(!isset($_SESSION)){
	session_start();
}
$account_type = $_SESSION['login_access'];
if(!isset($_SESSION['login_access'])){
	header("location: ../errors/no_file.php");
}
else {
?>
<html>
<head>
	<title>Ongoing RTI</title>
	<link rel="stylesheet" href="../css/prev_rti.css">
	<link rel="stylesheet" href="../css/background.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>
	<?php
	$_SESSION['database_access'] = true;
	include '../db/config_database.php';
	$_SESSION['database_access'] = false;
	echo "<div class='container'>";
	echo "<h2>ONGOING RTIs</h2>" ;
	echo "<marquee><strong>SELECT THE RTI TO BE MODIFIED/VIEWED: </strong></marquee><br><br>";

	if($account_type == 'Admin'){
		$query = " SELECT * FROM add_rti order by date_of_receipt";
		$res = mysqli_query($con, $query);
		echo "<table class=table table-bordered table-condensed>" ;
		echo "<tr>
		<th>ID</th>
		<th>Applicant Name</th>
		<th>Date of Receipt</th>
		<th>Last date</th>
		<th>Days left</th>
		<th>Options</th>
		</tr>";

		while ($r = mysqli_fetch_assoc($res)) {
			if ($r['archive'] == 0) {
				$d1 = strtotime("$r[date_of_receipt]");
				$mth = 0;
				$day = 30;
				$yr = 0;
				$d2 = date('Y-m-d h:i:s',mktime(date('h',$d1),date('i',$d1),date('s',$d1),date('m',$d1)+$mth,date('d',$d1)+$day,date('Y',$d1)+$yr));
				$a = strtotime($d2);
				$b = strtotime(date('Y-m-d h:i:s'));
				$d3 = floor(($a-$b)/86400);

				echo "<tr>";
				echo "<td>".$r['id']."</td>";
				echo "<td>".$r['name']."</td>";
				echo "<td>".$r['date_of_receipt']."</td>";
				echo "<td>".date("Y-m-d",strtotime($d2))."</td>";
				echo "<td>".$d3."</td>";
				echo "<td><a href='ongoing_rti_option.php?id=".$r['id']."'>Select this RTI</a></td>";
				echo "</tr>";
			}
		}
		echo "</table>";
		echo "<a href='select_option.php' class=btn >Back</a>";
	}
	else
		{
		$dept = $_SESSION['department'];
		$i = 0;
		$m = '';
		if($dept == 'Examination')
			$m = 'Ex';
		if($dept == 'Human Resource')
			$m = 'HR';
		if($dept == 'Academics')
			$m = 'Ac';

		$_SESSION['map']=$m;

		$query = " SELECT * FROM t2 WHERE map='".$m."' order by id;";
		$data = mysqli_query ($con, $query);
		$data2 = mysqli_num_rows ($data);

		echo "<table class='table table-bordered'>" ;
		echo "<tr>
		<th>ID</th>
		<th>Applicant Name</th>
		<th>Date of Receipt</th>
		<th>Last date</th>
		<th>Days left</th>
		<th>Options</th>
		</tr>";

		$ido = -1;

		while ($data2 != 0){
			$data3 = mysqli_fetch_array ($data);
			$i = $data3['id'];
			$flag = $data3['flag'];
			if ($i != $ido && $flag != 1) {
				$quer = "SELECT * FROM add_rti WHERE id=".$i." order by date_of_receipt;";
				$res = mysqli_query ($con, $quer);
				$v = mysqli_num_rows ($res);

				while ($v != 0) {
					$r = mysqli_fetch_array ($res);
					if ($r['archive'] == 0) {
						$d1 = strtotime("$r[date_of_receipt]");
						$mth = 0;
						$day = 30;
						$yr = 0;
						$d2 = date('Y-m-d h:i:s',mktime(date('h',$d1),date('i',$d1),date('s',$d1),date('m',$d1)+$mth,date('d',$d1)+$day,date('Y',$d1)+$yr));
						$a = strtotime($d2);
						$b = strtotime(date('Y-m-d h:i:s'));
						$d3 = floor(($a-$b)/86400);
						echo "<tr>";
						echo "<th>".$r['id']."</th>";
						echo "<th>".$r['name']."</th>";
						echo "<th>".$r['date_of_receipt']."</th>";
						echo "<th>".date("Y-m-d",strtotime($d2))."</th>";
						echo "<th>".$d3."</th>";
						echo "<td><a href='diff_dep.php?id=".$r['id']."'>View Queries for this RTI</a></td>";
						echo "</tr>";
					}
					$v--;
				}
				$ido = $i;
			}
			$data2--;
		}
		echo "</table>";
	}
	?>

	<?php include '../logging/logoff.html';?>
</div>
</body>
</html>
<?php } ?>
