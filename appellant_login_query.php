<html>
	<head>
		<title>Appealed RTI</title>
		<link rel="stylesheet" href="css/background.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<meta charset="utf-8">
		<script src="bootstrap/jQuery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
<body>
<div class='container'>
<?php
	include 'config_database.php'; 
	$id=$_GET['id'];
	
	echo "<h4><strong>RTI Details for ID ".$id." are-</strong></h4>" ;
	$query=" SELECT * FROM add_rti where id=".$id;
    $res=mysqli_query($con, $query);
	$r1=mysqli_fetch_assoc($res);
	
	echo "<table class='table table-bordered'>" ;
		echo "<tr>
				<th>Field</th>
				<th>Value</th>
			</tr>";  
		echo "<tr>";
			echo "<td>RTI Id</td>";
			echo "<td>".$r1['id']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Name of Applicant</td>";
			echo "<td>".$r1['name']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Gender</td>";
			echo "<td>".$r1['gender']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Address</td>";
			echo "<td>".$r1['address']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Pin-Code</td>";
			echo "<td>".$r1['pin_code']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Country</td>";
			echo "<td>".$r1['country']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Phone Number</td>";
			echo "<td>".$r1['phone_no']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Mobile Number</td>";
			echo "<td>".$r1['mobile']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Email-ID</td>";
			echo "<td>".$r1['email']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Citizenship</td>";
			echo "<td>".$r1['citizenship']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Date of receipt of RTI application by R & I section of public authority</td>";
			echo "<td>".$r1['date_of_receipt']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Date of its receipt by CPIO</td>";
			echo "<td>".$r1['date_of_receipt_cio']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Whether fee is enclosed with RTI application</td>";
			echo "<td>".$r1['fee_enclosed']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Date of depositing fee</td>";
			echo "<td>".$r1['fee_deposit_date']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Mode of payment(cheque/DD,cash,IPO)</td>";
			echo "<td>".$r1['pay_mode']."</td>";
		echo "</tr>";
		
	echo "</table><br>";
	
	$query=" SELECT * FROM appeal_query where id=".$id;
    $res=mysqli_query($con, $query);
	$r6=mysqli_fetch_assoc($res);
	$query=" SELECT * FROM reply_queries where id=".$id;
    $res1=mysqli_query($con, $query);
	$r7=mysqli_fetch_assoc($res1);
	echo "<h4><strong>Queries<strong></h4>";
	echo "<table class='table table-bordered'>
			<tr>
				<th>Query Number</th>
				<th>Queries</th>
				<th>Description</th>
			</tr>";
	if($r6)
	{
		do{
			echo "<tr>";
				echo "<td>".$r6['q_no']."</td>";
				echo "<td>".$r6['query']."</td>";
				echo "<td>".$r6['description']."</td>";
			echo "</tr>";
			$r6=mysqli_fetch_assoc($res);
		}while($r6);
	}
	echo "</table>";
	if($r1['closed']==1)
		echo "<a class=btn href='view_closed_rti.php'>Back</a>" ;
	else if($r1['archive']==1)
		echo "<a class=btn href='completed_rti.php'>Back</a>" ;
	else
		echo "<a class=btn href='appeal_option.php?id=".$id."'>Back</a>" ;

?>
</form>
</div>
</body>
</html>