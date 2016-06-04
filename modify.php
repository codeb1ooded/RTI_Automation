<?php
if(isset($_POST['submit']))
{
	include 'new_prev.php';
	$con = mysqli_connect("localhost","root",""); 
	if (!$con) 
	{ 
		die('Could not connect: ' . mysqli_error()); 
	} 
	$id = $_GET['Id'];
	$d1=strtotime($_POST['date_of_receipt']);
	$d2=strtotime($_POST['date_of_receipt_cio']);
	$d3=floor(abs($d2-$d1)/86400);
	
	$d1=strtotime($_POST['holder_receipt_date']);
	$d2=strtotime($_POST['reply_date']);
	$d4=floor(abs($d2-$d1)/86400);
	
	$d1=strtotime($_POST['fee_submit_date']);
	$d2=strtotime($_POST['given_info_date']);
	$d5=floor(abs($d2-$d1)/86400);
	
	$d1=strtotime($_POST['Areceived_date']);
	$d2=strtotime($_POST['Asent_date']);
	$d6=floor(abs($d2-$d1)/86400);
	
	mysqli_select_db($con, "rti");
	
	$data = "UPDATE add_rti SET
			name = '$_POST[name]',
			gender = '$_POST[gender]',
			address = '$_POST[address]',
			pin_code = '$_POST[pin_code]',
			state = '$_POST[state]',
			country = '$_POST[country]',
			phone_no = '$_POST[phone_no]',
			mobile = '$_POST[mobile]',
			email = '$_POST[email]',
			citizenship = '$_POST[citizenship]',
			date_of_receipt = '$_POST[date_of_receipt]',
			date_of_receipt_cio = '$_POST[date_of_receipt_cio]',
			timespan = '$d3',
			fee_enclosed = '$_POST[fee_enclosed]',
			fee_deposit_date = '$_POST[fee_deposit_date]',
			pay_mode = '$_POST[pay_mode]',
			holder_receipt_date = '$_POST[holder_receipt_date]',
			reply_date = '$_POST[reply_date]',
			reply_mode = '$d4',
			reply_time = '$_POST[reply_mode]',
			faa_info = '$_POST[faa_info]',
			info_fee_date = '$_POST[info_fee_date]',
			info_fee = '$_POST[info_fee]',
			fee_submit_date = '$_POST[fee_submit_date]',
			given_info_date = '$_POST[given_info_date]',
			info_time = '$d5',
			Asent_date = '$_POST[Asent_date]',
			Ainfo = '$_POST[Ainfo]',
			Areceived_date = '$_POST[Areceived_date]',
			Atime = '$d6',
			appeal_info = '$_POST[appeal_info]',
			transfer_date = '$_POST[transfer_date]',
			faa_receipt_date = '$_POST[faa_receipt_date]',
			meet_date = '$_POST[meet_date]'
			WHERE id=".$id;
		
	if ($con->query($data) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $con->error;
	}
	$con->close();
}
	
//////////////
if(isset($_POST['add']))
{
	$con = mysqli_connect("localhost","root",""); 
	if (!$con) 
	{ 
		die('Could not connect: ' . mysqli_error()); 
	} 
	$id = $_POST['ID'];
	session_start();
	$_SESSION['oid']=$id;
	$d1=strtotime($_POST['date_of_receipt']);
	$d2=strtotime($_POST['date_of_receipt_cio']);
	$d3=floor(abs($d2-$d1)/86400);
	
	$d1=strtotime($_POST['holder_receipt_date']);
	$d2=strtotime($_POST['reply_date']);
	$d4=floor(abs($d2-$d1)/86400);
	
	$d1=strtotime($_POST['fee_submit_date']);
	$d2=strtotime($_POST['given_info_date']);
	$d5=floor(abs($d2-$d1)/86400);
	
	$d1=strtotime($_POST['Areceived_date']);
	$d2=strtotime($_POST['Asent_date']);
	$d6=floor(abs($d2-$d1)/86400);
	
	mysqli_select_db($con, "rti");
	
	$data = "UPDATE add_rti SET
			name = '$_POST[name]',
			gender = '$_POST[gender]',
			address = '$_POST[address]',
			pin_code = '$_POST[pin_code]',
			state = '$_POST[state]',
			country = '$_POST[country]',
			phone_no = '$_POST[phone_no]',
			mobile = '$_POST[mobile]',
			email = '$_POST[email]',
			citizenship = '$_POST[citizenship]',
			date_of_receipt = '$_POST[date_of_receipt]',
			date_of_receipt_cio = '$_POST[date_of_receipt_cio]',
			timespan = '$d3',
			fee_enclosed = '$_POST[fee_enclosed]',
			fee_deposit_date = '$_POST[fee_deposit_date]',
			pay_mode = '$_POST[pay_mode]',
			holder_receipt_date = '$_POST[holder_receipt_date]',
			reply_date = '$_POST[reply_date]',
			reply_mode = '$d4',
			reply_time = '$_POST[reply_mode]',
			faa_info = '$_POST[faa_info]',
			info_fee_date = '$_POST[info_fee_date]',
			info_fee = '$_POST[info_fee]',
			fee_submit_date = '$_POST[fee_submit_date]',
			given_info_date = '$_POST[given_info_date]',
			info_time = '$d5',
			Asent_date = '$_POST[Asent_date]',
			Ainfo = '$_POST[Ainfo]',
			Areceived_date = '$_POST[Areceived_date]',
			Atime = '$d6',
			appeal_info = '$_POST[appeal_info]',
			transfer_date = '$_POST[transfer_date]',
			faa_receipt_date = '$_POST[faa_receipt_date]',
			meet_date = '$_POST[meet_date]'
			WHERE id=".$id;
			
	echo "<form action=ques1.php method=post>";
	echo "The id of this RTI is: ".$id;
	echo "<tr>
			<th><h3>No. of Queries</h3></th>
			<th><input type=text name=ques></th>
			<th><input type=submit name=enter value='Enter'></th>
		</tr></form>";
	if ($con->query($data) === TRUE) 
	{
		echo "Record updated successfully";
	} 
	else 
	{
		echo "Error updating record: " . $con->error;
	}
	$con->close();
}
	
//////////////////
if(isset($_POST['edit']))
{
	$con = mysqli_connect("localhost","root",""); 
	if (!$con) 
	{ 
		die('Could not connect: ' . mysqli_error()); 
	} 
	$id = $_POST['ID'];
	$d1=strtotime($_POST['date_of_receipt']);
	$d2=strtotime($_POST['date_of_receipt_cio']);
	$d3=floor(abs($d2-$d1)/86400);
	
	$d1=strtotime($_POST['holder_receipt_date']);
	$d2=strtotime($_POST['reply_date']);
	$d4=floor(abs($d2-$d1)/86400);
		
	$d1=strtotime($_POST['fee_submit_date']);
	$d2=strtotime($_POST['given_info_date']);
	$d5=floor(abs($d2-$d1)/86400);
		
	$d1=strtotime($_POST['Areceived_date']);
	$d2=strtotime($_POST['Asent_date']);
	$d6=floor(abs($d2-$d1)/86400);
		
	mysqli_select_db($con, "rti");
	
	$data = "UPDATE add_rti SET
			name = '$_POST[name]',
			gender = '$_POST[gender]',
			address = '$_POST[address]',
			pin_code = '$_POST[pin_code]',
			state = '$_POST[state]',
			country = '$_POST[country]',
			phone_no = '$_POST[phone_no]',
			mobile = '$_POST[mobile]',
			email = '$_POST[email]',
			citizenship = '$_POST[citizenship]',
			date_of_receipt = '$_POST[date_of_receipt]',
			date_of_receipt_cio = '$_POST[date_of_receipt_cio]',
			timespan = '$d3',
			fee_enclosed = '$_POST[fee_enclosed]',
			fee_deposit_date = '$_POST[fee_deposit_date]',
			pay_mode = '$_POST[pay_mode]',
			holder_receipt_date = '$_POST[holder_receipt_date]',
			reply_date = '$_POST[reply_date]',
			reply_mode = '$d4',
			reply_time = '$_POST[reply_mode]',
			faa_info = '$_POST[faa_info]',
			info_fee_date = '$_POST[info_fee_date]',
			info_fee = '$_POST[info_fee]',
			fee_submit_date = '$_POST[fee_submit_date]',
			given_info_date = '$_POST[given_info_date]',
			info_time = '$d5',
			Asent_date = '$_POST[Asent_date]',
			Ainfo = '$_POST[Ainfo]',
			Areceived_date = '$_POST[Areceived_date]',
			Atime = '$d6',
			appeal_info = '$_POST[appeal_info]',
			transfer_date = '$_POST[transfer_date]',
			faa_receipt_date = '$_POST[faa_receipt_date]',
			meet_date = '$_POST[meet_date]'
			WHERE id=".$id;
	
	$data1="SELECT * FROM t2 WHERE id=".$id.";";
	$query=mysqli_query($con,$data1);
	$data2=mysqli_num_rows($query);
	$a=$data2;
	session_start();
	$_SESSION['oid']=$id;
	$_SESSION['uq']=$data2;
	echo "<table>
			<tbody>
				<tr>
					<th>Query No</th>
					<th>Query</th>
					<th>Map To</th>
					<th>Reply</th>
					<th>Date Sent</th>
					<th>Date Received</th>
				</tr>";
	echo "<form action=quesform.php method=post>";
	while( $a!=0)
	{
		$data3=mysqli_fetch_array($query);
		$qno="q_no".$a;
		$ques="ques".$a;
		$map="map".$a;
		$ans="ans".$a;
		$date_s="date_s".$a;
		$date_r="date_r".$a;
?>
		<tr>
			<th><input  value="<?php echo $data3['q_no']?>" type=text name=<?php echo $qno; ?>></th>	
			<th><input type=text name=<?php echo $ques; ?> value="<?php echo $data3['ques']?>" ></th>
			<th><input type=text name=<?php echo $map; ?> value="<?php echo $data3['map']?>" ></th>
			<th><input type=text name=<?php echo $ans; ?> value="<?php echo $data3['ans'] ?>"></th>
			<th><input type=text name=<?php echo $date_s; ?> value="<?php echo $data3['date_sent'] ?>" placeholder=YYYY-MM-DD></th>
			<th><input type=text name=<?php echo $date_r; ?> placeholder=YYYY-MM-DD value="<?php echo $data3['date_received'] ?>" ></th>
		</tr>
<?php				
		$sql="DELETE FROM t2 WHERE id=".$id.";";
		mysqli_query($con,$sql);
		$a--;
	}
	echo "<th colspan=15></th><th><input type=submit name=save value='Save and Exit' ></th>";
	echo "<th colspan=15></th><th><input type=submit name=reply value='Generate Reply' ></th>";
	echo "</form>";
	if ($con->query($data) === TRUE) 
	{
		echo "Record updated successfully";
	} 
	else 
	{
		echo "Error updating record: " . $con->error;
	}
	$con->close();
}
?>