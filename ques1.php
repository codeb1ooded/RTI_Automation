<?php
if(isset($_POST['enter']))
{
	include 'logoff.html';
	$con= mysqli_connect("localhost","root","","rti");
	session_start();
	$b=$_POST['ques'];
	$_SESSION['q']=$b;
	$id=$_SESSION['oid'];
	$a=$b;
	echo "The id of this RTI is: ".$id;
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
	echo "<form action=save_ques1.php method=post>";
	while( $a!=0)
	{
		$qno="q_no".$a;
		$ques="ques".$a;
		$map="map".$a;
		$ans="ans".$a;
		$date_s="date_s".$a;
		$date_r="date_r".$a;
?>
		<tr>
			<th><input type=text name=<?php echo $qno; ?>></th>	
			<th><input type=text name=<?php echo $ques; ?>></th>
			<th><select name=<?php echo $map; ?>>
				<span><option value=''>--Select--</option>
				<option value=Ac>Acacemics</option>
				<option value=Ex>Examination Division</option>
				<option value=Ad>Administrative</option>
				<option value=HR>Human Resource</option></span></select></th>
			<th><input type=text name=<?php echo $ans; ?>></th>
			<th><input type=text name=<?php echo $date_s; ?> placeholder=YYYY-MM-DD></th>
			<th><input type=text name=<?php echo $date_r; ?> placeholder=YYYY-MM-DD></th>
		</tr>
<?php				
		$a--;
	}
	echo "<th colspan=15></th><th><input type=submit name=save value='Save and Exit' ></th>";
	echo "<th colspan=15></th><th><input type=submit name=reply value='Generate Reply' ></th>";
	echo "</form>";
	mysqli_close($con);
}
?>