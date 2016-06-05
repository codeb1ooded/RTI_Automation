<?php
if(isset($_POST['submit']))
{
	include 'new_prev.php';
	$con = mysqli_connect("localhost","root",""); 
	if (!$con) 
	{ 
		die('Could not connect: ' . mysqli_error()); 
	} 
	$id = $_POST['ID'];
	$d1=strtotime($_POST['date_of_receipt']);
	$d2=strtotime($_POST['date_of_receipt_cio']);
	$d3=floor(abs($d2-$d1)/86400);
	
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
			pay_mode = '$_POST[pay_mode]'
			WHERE id=".$id;
		
	if ($con->query($data) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $con->error;
	}
	$con->close();
}
	
//////////////
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
			pay_mode = '$_POST[pay_mode]'
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
					<th>Date Sent</th>
				</tr>";
	echo "<form action=quesform.php method=post>";
	while( $a!=0)
	{
		$data3=mysqli_fetch_array($query);
		$qno="q_no".$a;
		$ques="ques".$a;
		$map="map".$a;
		$date_s="date_s".$a;
?>
		<tr>
			<th><input  value="<?php echo $data3['q_no']?>" type=text name=<?php echo $qno; ?>></th>	
			<th><input type=text name=<?php echo $ques; ?> value="<?php echo $data3['ques']?>" ></th>
			<th><input type=text name=<?php echo $map; ?> value="<?php echo $data3['map']?>" ></th>
			<th><input type=text name=<?php echo $date_s; ?> value="<?php echo $data3['date_sent'] ?>" placeholder=YYYY-MM-DD></th>
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