<!DOCTYPE HTML>
<head>
	<title>Generate Reply</title>
	<link rel="stylesheet" href="css/background.css">
	<meta charset="utf-8">
</head>
<body>
<?php
$id=$_GET['id'];
include 'config_database.php'; 
	
$data1="SELECT * FROM t2 WHERE id=".$id.";";
$query=mysqli_query($con,$data1);
$data2=mysqli_num_rows($query);
$a=$data2;

$data3="SELECT * FROM add_rti WHERE id=".$id.";";
$query2=mysqli_query($con,$data3);
$data4=mysqli_num_rows($query2);
$b=$data4;
$add_rtirows=mysqli_fetch_array($query2);
//$add_rtirows['name']

echo" 
Ref.: CPIO/	</br>						Dated:
</br></br></br>
To </br></br> Name: ".$add_rtirows['name']."</br></br>Address: ".$add_rtirows['address']."</br></br></br>
	
Subject:-	Information required under Section 6(1) of the Right to Information Act, 2005.

Sir/Madam,

	Please refer to your application dated  ".$add_rtirows['date_of_receipt'].", on the subject mentioned above.

2.	The information sought by you is enclosed.

3.	You are requested to acknowledge the receipt of this letter.

Yours faithfully,

";
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
			<th>"<?php echo $t2rows['q_no']?></th>	
			<th><?php echo $t2rows['ques']?></th>
			<th><?php echo $t2rows['ans']?></th>
		</tr>
<?php
		$a--;
		}
	echo"Name :</br></br>
								Designation/CPIO

Encl.: As above.";
		
echo"</table>";
echo "<button onclick='myFuction()'>Print the reply</button>";
echo "<br><br><a href='previd.php?id=".$id."''>Back</a>";
?>
<script>
function myFuction(){
	window.print();
}
</script>
</body>
</html>