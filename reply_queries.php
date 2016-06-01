<!doctype html>
<html>
<body>
<?php
if(isset($_POST['enter']))
{
	include 'logoff.html';
	$con= mysqli_connect("localhost","root","","rti");
	session_start();
	$b=$_POST['ques'];
	$_SESSION['q']=$b;
	$a=$b;
	echo "<table>
			<tbody>
				<tr>
					<th>Query No</th>
					<th>Query</th>
					<th>Reply</th>
					<th>Date Received</th>
				</tr>";
	echo "<form action=save_ques.php method=post>";
	while( $a!=0)
	{
		$qno="q_no".$a;
		$ques="ques".$a;
		$ans="ans".$a;
		$date_r="date_r".$a;
?>
		<tr>
			<th><input  value="<?php echo $data3['q_no']?>" type=text name=<?php echo $qno; ?>></th>	
			<th><input type=text name=<?php echo $ques; ?> value="<?php echo $data3['ques']?>" ></th>
			<th><input type=text name=<?php echo $ans; ?>></th>
			<th><input type=text name=<?php echo $date_r; ?> placeholder=YYYY-MM-DD></th>
		</tr>
		</body>
		</html>