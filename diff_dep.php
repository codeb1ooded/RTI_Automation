<head>
<link rel="stylesheet" href="css/prev_rti.css">
	<link rel="stylesheet" href="css/background.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<?php
session_start();
$m=$_SESSION['map'];

include 'config_database.php';
$id=$_GET['id'];
// session for id
$_SESSION['id']=$id;
$sql="SELECT * FROM t2 WHERE id=".$id.";";
$s="SELECT * FROM reply_queries WHERE id=".$id.";";

$res2=mysqli_query($con,$s);
$a=mysqli_num_rows($res2);

//Values from t2
$res=mysqli_query($con,$sql);
$data2=mysqli_num_rows($res);
//Seesion for the values from t2
$v=$data2;

echo"<form action=dept_rep.php method=post>";
echo "<table  width=100% border=2>" ;
	echo "<tr>
			<th>Query Number</th>
			<th>Query</th>
			<th>Reply</th>
		</tr>";  
$t=1;
while($v!=0)
{
	$r=mysqli_fetch_array($res);
	$w=mysqli_fetch_array($res2);
	if ($r['map']==$m )
	{	
		$q=$r['q_no'];
		$ans="ans".$t;
		$qno="qno".$t;
		echo"<tr>";
		echo"<th>$q</th>";
			echo"<th>".$r['ques']."</th>";
			if($r['q_no']==$w['q_no'])
				echo"<th><input type=text name=$ans value=".$w['ans']."></th>";
			else
				echo "<th><input type=text name=$ans></th>";
		echo"</tr>";
		$t++;
			
	}	
	$v--;
	}
echo "</table>";
			echo"<a class=btn href='./ongoing_rti.php'>Back</a>";
echo"</form>";
$_SESSION['que']=$t;
?>