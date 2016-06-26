<!DOCTYPE html>
<html>
	<head>
		<title>Previous RTI</title>
		<link rel="stylesheet" href="css/prev_rti.css">
	</head>
<body>
<?php
	$conn=mysqli_connect("localhost","root","");
	if(!$conn)
		echo " Connection to the server failed ";
	$db=mysqli_select_db($conn,'rti');
	if(!$db)
		echo " Connection to the database failed ";
	
	$query=" SELECT * FROM add_rti order by date_of_receipt_cio";
    $res= mysqli_query($conn,$query);
    echo "<h2>ONGOING RTIs</h2>" ;
	echo "<marquee><strong>CHOOSE THE RTI TO BE MODIFIED/VIEWED: </strong></marquee><br><br>";
	echo "<table  width=100% border=2>" ;
	echo "<tr>
			<th>ID</th>
			<th>Applicant Name</th>
			<th>Date of Receipt</th>
			<th>Last date</th>
			<th>Days left</th>
			<th>Mark as completed</th>
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
				echo "<td><a href='previd.php?id=".$r['id']."'>".$r['id']." </a></td>";
				echo "<td><a href='previd.php?id=".$r['id']."'>".$r['name']."</a></td>"; 
				echo "<td><a href='previd.php?id=".$r['id']."'>".$r['date_of_receipt_cio']."</a></td>"; 		
				echo "<td><a href='previd.php?id=".$r['id']."'>".date("Y-m-d",strtotime($d2))."</a></td>"; 
				echo "<td><a href='previd.php?id=".$r['id']."'>".$d3."</a></td>";
				echo "<td><a href='old_rti.php?id=".$r['id']."'>Completed</a></td>";
			echo "</tr>";
		}
	}
	echo "</table>";
?>
	<br><a href="new_prev.php">Back</a>
</body>
</html>
