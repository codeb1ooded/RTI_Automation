<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['login_access'])){
	header("location: ../errors/no_file.php");
}
else {
	?>
	<html>
	<head>
		<title>Completed RTI</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<meta charset="utf-8">
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<link rel=stylesheet href="../css/a.css">
	</head>
	<body>
		<div class='container'>
			<?php
			$_SESSION['database_access'] = true;
			include '../db/config_database.php';
			$_SESSION['database_access'] = false;
			$id = $_GET['id'];

			echo "<center><h3>RTI Details for Id" . $id . "</h3></center>" ;
			$query = " SELECT * FROM add_rti where id=" . $id;
			$res = mysqli_query($con, $query);
			$r1 = mysqli_fetch_assoc($res);

			$query = " SELECT * FROM info_about_reply where id=" . $id;
			$res = mysqli_query($con, $query);
			$r2 = mysqli_fetch_assoc($res);

			$query = " SELECT * FROM section4 where id=" . $id;
			$res = mysqli_query($con, $query);
			$r3 = mysqli_fetch_assoc($res);

			$query = " SELECT * FROM public_authority where id=" . $id;
			$res = mysqli_query($con, $query);
			$r4 = mysqli_fetch_assoc($res);

			$query = " SELECT * FROM first_appeal where id=" . $id;
			$res = mysqli_query($con, $query);
			$r5 = mysqli_fetch_assoc($res);
			echo "<table class='table table-bordered'>" ;
			echo "<tr class='tor'>
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
		
		if($r2) {
			echo "<tr>";
			echo "<td>(i) Date of receipt of information by the CPIO from the holder(s) of information</td>";
			echo "<td>".$r2['holder_receipt_date']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>(ii)Date of reply to appellant/complaint by CPIO</td>";
			echo "<td>".$r2['reply_date']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Mode of communicating reply</td>";
			echo "<td>".$r2['reply_mode']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Whether name and address of FAA mentioned in the reply u/s 7(8)(give particulars)</td>";
			echo "<td>".$r2['faa_info']."</td>";
			echo "</tr>";
		}
		if($r3) {
			echo "<tr>";
			echo "<td>Date of intimation given to appelant regarding fee u/s 7(1) chargeable  and his right to review</td>";
			echo "<td>".$r3['info_fee_date']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Quantum of (a) Fee & (b) Further fee indicated to be charged</td>";
			echo "<td>".$r3['info_fee']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>(vi)Date of depositing fees by petitioner as demanded by CPIO (indicate mode of depositing fee too)</td>";
			echo "<td>".$r3['fee_submit_date']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>(vii)Date of furnishing information</td>";
			echo "<td>".$r3['given_info_date']."</td>";
			echo "</tr>";
		}

		if($r4) {
			echo "<tr>";
			echo "<td>(iv)Date of transfer to another Public Authority</td>";
			echo "<td>".$r4['Asent_date']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>To whom was it transferred (mention name,designation and address)</td>";
			echo "<td>".$r4['Ainfo']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>(v)Date of receipt by another Public Authority</td>";
			echo "<td>".$r4['Areceived_date']."</td>";
			echo "</tr>";
		}

		if($r5)	{
			echo "<tr>";
			echo "<td> Name and designation of the officer before whom  the 1<sup>st</sup> appeal is filed u/s 19(1)</td>";
			echo "<td>".$r5['appeal_info']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Date of transfer of appeal by the receiving officer to FAA</td>";
			echo "<td>".$r5['transfer_date']."</td>";
			echo "</tr>";
		}
		echo "</table><br>";

		$query=" SELECT * FROM t2 where id=".$id;
		$res=mysqli_query($con, $query);
		$r6=mysqli_fetch_assoc($res);
		$query=" SELECT * FROM reply_queries where id=".$id;
		$res1=mysqli_query($con, $query);
		$r7=mysqli_fetch_assoc($res1);
		echo "<h4><strong>Queries<strong></h4>";
		echo "<table class='table table-bordered'>
		<tr class='tor'>
			<th>Query Number</th>
			<th>Queries</th>
			<th>Mapped To</th>
			<th>Date Sent</th>
			<th>Date Received</th>
			<th>Reply</th>
		</tr>";
		if($r6) {
			do {
				echo "<tr>";
				echo "<td>".$r6['q_no']."</td>";
				echo "<td>".$r6['ques']."</td>";
				echo "<td>".$r6['map']."</td>";
				echo "<td>".$r6['date_sent']."</td>";
				if($r7) {
					while($r6['q_no']==$r7['q_no']) {
						echo "<td>".$r7['date_received']."</td>";
						echo "<td>".$r7['ans']."; ".$r7['section']."</td>";
						$r7=mysqli_fetch_assoc($res1);											}
					}
					else {
						echo "<td> - </td>";
						echo "<td> - </td>";
					}
					echo "</tr>";
					$r6 = mysqli_fetch_assoc($res);
				} while($r6);
			}
			echo "</table>";
			if ($r1['closed'] == 1)
				echo "<a class='btn btn-log' href='view_closed_rti.php'>Back</a></br>" ;
			else if ($r1['archive'] == 1)
				echo "<a class='btn btn-log' href='completed_rti.php'>Back</a></br>" ;
			else
				echo "<a class='btn btn-log' href='../ongoing_rti/ongoing_rti_option.php?id=".$id."'>Back</a></br>" ;
			?>
		</div>
	</body>
	</html>
	<?php 
} 
?>