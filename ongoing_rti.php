<?php
if(!isset($_SESSION)){
session_start();
$uname=$_SESSION['name'];
}	
?>
<html>
<head>
	<title>Ongoing RTI</title>
	<link rel="stylesheet" href="css/prev_rti.css">
	<link rel="stylesheet" href="css/background.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>
	<?php
	include 'config_database.php'; 
	echo "<div class='container'>";
	echo "<h2>ONGOING RTIs</h2>" ;
	echo "<marquee><strong>SELECT THE RTI TO BE MODIFIED/VIEWED: </strong></marquee><br><br>";
	
	if($uname=='ut'||$uname=='pc'){
		$query=" SELECT * FROM add_rti order by date_of_receipt_cio";
		$res= mysqli_query($con, $query);
		echo "<table  class=table table-bordered table-condensed width=100% border=2>" ;
		echo "<table  width=100% border=2>" ;
		echo "<tr>
		<th>ID</th>
		<th>Applicant Name</th>
		<th>Date of Receipt</th>
		<th>Last date</th>
		<th>Days left</th>
		<th>Options</th>
		<th>Close RTI</th>
		</tr>";  

		while($r=mysqli_fetch_assoc($res))
		{
			if($r['archieve']==0)
			{			
				$d1=strtotime("$r[date_of_receipt_cio]");
				$mth=0;
				$day=30;
				$yr=0;
				$d2=date('Y-m-d h:i:s',mktime(date('h',$d1),date('i',$d1),date('s',$d1),date('m',$d1)+$mth,date('d',$d1)+$day,date('Y',$d1)+$yr));
				$a=strtotime($d2);
				$b=strtotime(date('Y-m-d h:i:s'));
				$d3=floor(($a-$b)/86400);

				echo "<tr>";
				echo "<td>".$r['id']."</td>";
				echo "<td>".$r['name']."</td>"; 
				echo "<td>".$r['date_of_receipt_cio']."</td>"; 		
				echo "<td>".date("Y-m-d",strtotime($d2))."</td>"; 
				echo "<td>".$d3."</td>";
				echo "<td><a href='ongoing_rti_option.php?id=".$r['id']."'>Select this RTI</a></td>";
				echo "<td><a href='close_rti.php?id=".$r['id']."'>Close This RTI</a></td>";
				echo "</tr>";
			}
		}
		echo "</table>";
	}
	else if($uname!='ut'||$uname!='pc')
		{	$i=0;
			$m='';
			if($uname=='admin')
				$m='Ad';
			if($uname=='examination')
				$m='Ex';
			if($uname=='Human Resource')
				$m='HR';
			if($uname=='Academics')
				$m='Ac';
			
	$_SESSION['map']=$m;
	
	$query=" SELECT * FROM t2 WHERE map='".$m."' order by id;";// order by id";
    $data=mysqli_query($con,$query);
	$data2=mysqli_num_rows($data);
	echo "<table class='table table-bordered'>" ;
	echo "<tr>
	<th>ID</th>
	<th>Applicant Name</th>
	<th>Date of Receipt</th>
	<th>Last date</th>
	<th>Days left</th>
	<th>Mark as completed</th>
	</tr>";  
	$ido = -1;
	while($data2!=0)
		{	$data3=mysqli_fetch_array($data);
			$i=$data3['id'];
			if($i!=$ido)
			{
				$quer="SELECT * FROM add_rti WHERE id=".$i." order by date_of_receipt_cio;";
				$res=mysqli_query($con,$quer);
				$v=mysqli_num_rows($res);

				while($v!=0)
				{
					$r=mysqli_fetch_array($res);
					if($r['archieve']==0)
					{			
						$d1=strtotime("$r[date_of_receipt_cio]");
						$mth=0;
						$day=30;
						$yr=0;
						$d2=date('Y-m-d h:i:s',mktime(date('h',$d1),date('i',$d1),date('s',$d1),date('m',$d1)+$mth,date('d',$d1)+$day,date('Y',$d1)+$yr));
						$a=strtotime($d2);
						$b=strtotime(date('Y-m-d h:i:s'));
						$d3=floor(($a-$b)/86400);
						echo "<table class='table table-bordered'>" ;	
						echo "<tr>";
						echo "<th><a href='diff_dep.php?id=".$r['id']."'>".$r['id']." </a></th>";
						echo "<th><a href='diff_dep.php?id=".$r['id']."'>".$r['name']."</a></th>"; 
						echo "<th><a href='diff_dep.php?id=".$r['id']."'>".$r['date_of_receipt_cio']."</a></th>"; 		
						echo "<th><a href='diff_dep.php?id=".$r['id']."'>".date("Y-m-d",strtotime($d2))."</a></th>"; 
						echo "<th><a href='diff_dep.php?id=".$r['id']."'>".$d3."</a></th>";
						echo "</tr>";
						echo"<table>";	
					}
					$v--;
					echo "</table>";
				}
				$ido=$i;
			}
			echo "</table>";
			$data2--;
		}

	}
	?>
	<br><a href="select_option.php" class=btn>Back</a>
</div>
</body>
</html>
