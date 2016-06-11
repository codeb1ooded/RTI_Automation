<!DOCTYPE HTML>
<html>
<body>
<?php
$id=$_GET['id'];
$con = mysqli_connect("localhost","root","");
if (!$con) 
	{ 
		die('Could not connect: ' . mysqli_error()); 
	} 
	mysqli_select_db($con, "rti");
	
$data1="SELECT * FROM t2 WHERE id=".$id.";";
$query=mysqli_query($con,$data1);
$data2=mysqli_num_rows($query);
$a=$data2;

$data3="SELECT * FROM add_rti WHERE id=".$id.";";
$query2=mysqli_query($con,$data3);
$data4=mysqli_num_rows($query2);
$b=$data4;
$add_rtirows=mysqli_fetch_array($query2);

echo" The information asked by the appellant ".$add_rtirows['name']." are furnished as:";
echo"<table>";
		echo"<tr>
				<th>Query no:</th>
				<th>Query</th>
				<th>Reply</th>
			</tr>";
		while( $a!=0)
		{
			$t2rows=mysqli_fetch_array($query);
			//$qno="q_no".$a;
			//$ques="ques".$a;
			$ans="ans".$a;
?>
		<tr>
			<th><input type=text value="<?php echo $t2rows['q_no']?>"></th>	
			<th><input type=text value="<?php echo $t2rows['ques']?>" ></th>
			<th><input type=text value="<?php echo $t2rows['ans']?>" ></th>
		</tr>
<?php
		$a--;
		}
		
echo"</table>";
echo "<a href='new_prev.php'><th colspan=15></th><th><input type=submit name=save value='Exit' ></th></a>";
?>
</body>
</html>