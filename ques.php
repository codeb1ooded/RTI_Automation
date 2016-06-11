<?php
	$con= mysqli_connect("localhost","root","","rti");
	session_start();
	$b=$_POST['ques'];
	$_SESSION['q']=$b;
	$id=$_SESSION['id'];
	$a=$b;
	echo "The id of this RTI is: ".$id;
	echo "<table>
			<tbody>
				<tr>
					<th>Query No</th>
					<th>Query</th>
					<th>Map To</th>
					<th>Date Sent</th>
				</tr>";
	echo "<form action=save_ques.php method=post>";
	$c=1;
	while($a!=0)
	{
		$ques="ques".$a;
		$map="map".$a;
		$date_s="date_s".$a;
?>
		<tr>
			<th><input type=text name=<?php echo $c; ?> value=<?php echo $c; ?>></th>	
			<th><input type=text name=<?php echo $ques; ?>></th>
			<th><select name=<?php echo $map; ?>>
					<span>
						<option value=''>--Select--</option>
						<option value=Ac>Acacemics</option>
						<option value=Ex>Examination Division</option>
						<option value=Ad>Administrative</option>
						<option value=HR>Human Resource</option>
					</span>
				</select>
			</th>
			
			<th><input type=text name=<?php echo $date_s; ?> placeholder=YYYY-MM-DD></th>
		</tr>
<?php				
		$a--;
		$c++;
	}
	echo "<th colspan=15></th><th><input type=submit name=save value='Save and Exit' ></th>";
	echo"<th colspan=30></th><th><input type=submit name=gen_pdf value='Generate_pdf_query' ></th>";
	echo "</form>";
	mysqli_close($con);
	
    include 'logoff.html';
?>
