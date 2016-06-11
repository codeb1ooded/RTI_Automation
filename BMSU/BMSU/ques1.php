<?php
if(isset($_POST['enter']))
{
	include 'logoff.html';
	$con= mysqli_connect("localhost","root","","rti");
	session_start();
	$b=$_POST['ques'];
	$_SESSION['q']=$b;
	$id=$_SESSION['oid'];
	$_SESSION['oid']=$id;
	$a=$b;
	$query="SELECT * FROM t2 where id=".$id.";";
	$data=mysqli_query($con,$query);
	$data2=mysqli_num_rows($data);
	$ac=$data2;
	$qno=0;
		

	while( $ac!=0)
	{
		$data3=mysqli_fetch_array($data);
		$qno=$data3['q_no'];
		$ac--;
	}
	echo "The id of this RTI is: ".$id;
	echo "<table>
			<tbody>
				<tr>
					<th>Query No</th>
					<th>Query</th>
					<th>Map To</th>
					<th>Date Sent</th>
				</tr>";
	echo "<form action=save_ques1.php method=post>";
	while( $a!=0)
	{
		$qno=$qno+1;	
		$ques="ques".$a;
		$map="map".$a;
		$ans="ans".$a;
		$date_s="date_s".$a;
		$date_r="date_r".$a;
?>
		<tr>
			<th><input type=text name=<?php echo $qno; ?> value=<?php echo $qno; ?>></th>	
			<th><input type=text name=<?php echo $ques; ?>></th>
			<th><select name=<?php echo $map; ?>>
				<span><option value=''>--Select--</option>
				<option value=Ac>Acacemics</option>
				<option value=Ex>Examination Division</option>
				<option value=Ad>Administrative</option>
				<option value=HR>Human Resource</option></span></select></th>
			<th><input type=text name=<?php echo $date_s; ?> placeholder=YYYY-MM-DD></th>
			<a href='gen_quer_pdf?id=".$Id."'><th><input type=submit name=save value='Generate_pdf_query' ></th></a>
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
