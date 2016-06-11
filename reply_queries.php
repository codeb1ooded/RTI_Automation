<!doctype html>
<html>
<body>
<?php
$con= mysqli_connect("localhost","root","","rti");
$id=$_GET['id'];
$k = "SELECT * FROM t2 WHERE id=".$id.";";
$query=mysqli_query($con,$k);
$data2=mysqli_num_rows($query);
$a=$data2;

echo "<table>
			<tbody>
				<tr>
					<th>Query No</th>
					<th>Query</th>
					<th>Reply</th>
					<th>Date Received</th>
				</tr>";
	echo "<form action=reply_form.php method=post>";
	while( $a!=0)
	{
		$data3=mysqli_fetch_array($query);
		$qno="q_no".$a;
		$ques="ques".$a;
		$ans="ans".$a;
		$date_rec="date_rec".$a;
?>
<tr>
			<th><input  value="<?php echo $data3['q_no']?>" type=text name=<?php echo $qno; ?>></th>	
			<th><input type=text name=<?php echo $ques; ?> value="<?php echo $data3['ques']?>" ></th>
			<th><input type=text name=<?php echo $ans;?>></th>
			<th><input type=date name=<?php echo $date_rec;?> placeholder=YYYY-MM-DD></th>
</tr>
<?php				
		$a--;
	}
	session_start();
	$_SESSION['oid']=$id;
	$_SESSION['quer']=$data2;
	echo "<th colspan=15></th><th><input type=submit name=save value='Save and Exit' ></th>";
	echo "</form>"
?>
	
</body>
</html>
