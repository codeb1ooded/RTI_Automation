<?php	
	if(isset($_POST['submit'])){
	include 'new_prev.php';
	$con= mysqli_connect("localhost","root","","rti");
	
	if(!$con){
			die("Can not connect:" . mysql_error());
	}
	
	$d1=strtotime($_POST['date_of_receipt']);
	$d2=strtotime($_POST['date_of_receipt_cio']);
	$d3=floor(abs($d2-$d1)/86400);
$sql="INSERT INTO add_rti (name,gender,address,pin_code,state,country,phone_no,mobile,email,citizenship,date_of_receipt,date_of_receipt_cio,timespan
	,fee_enclosed 	
,fee_deposit_date 	
,pay_mode)
VALUES('$_POST[name]','$_POST[gender]','$_POST[address]','$_POST[pc]','$_POST[state]','$_POST[country]','$_POST[phone]','$_POST[mobile]','$_POST[email]',
	'$_POST[citizenship]','$_POST[date_of_receipt]','$_POST[date_of_receipt_cio]','$d3','$_POST[fee]','$_POST[fee_deposit_date]',
	'$_POST[pay_mode]')";
	mysqli_query($con,$sql);
	}
	///////////////////////////////////////////
	if(isset($_POST['submit1'])){
	include 'logoff.html';
	$con= mysqli_connect("localhost","root","","rti");
	
	if(!$con){
			die("Can not connect:" . mysql_error());
	}
	$d1=strtotime($_POST['date_of_receipt']);
	$d2=strtotime($_POST['date_of_receipt_cio']);
	$d3=floor(abs($d2-$d1)/86400);
	$sql="INSERT INTO add_rti (name,gender,address,pin_code,state,country,phone_no,mobile,email,citizenship,date_of_receipt,date_of_receipt_cio,timespan
	,fee_enclosed ,fee_deposit_date ,pay_mode)
VALUES('$_POST[name]','$_POST[gender]','$_POST[address]','$_POST[pc]','$_POST[state]','$_POST[country]','$_POST[phone]','$_POST[mobile]','$_POST[email]',
	'$_POST[citizenship]','$_POST[date_of_receipt]','$_POST[date_of_receipt_cio]','$d3','$_POST[fee]','$_POST[fee_deposit_date]',
	'$_POST[pay_mode]')";
	mysqli_query($con,$sql);
	}
	echo "<form action=ques.php method=post>";
	echo "<tr>
		<th><h3>No. of Queries</h3></th>
		<th><input type=text name=ques></th>
	<th><input type=submit name=enter value='Enter'></th>
	</tr>";
	$a=0;
	$k="SELECT * FROM add_rti";
	$v=mysqli_query($con,$k);
	while($r=mysqli_fetch_assoc($v))
	{
		$a=$r['id'];
	}
	mysqli_query($con,$sql);
	
	session_start();
	$_SESSION['id']=$a;
	
	mysqli_close($con);
	
	?>