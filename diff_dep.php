
<?php
include 'config_database.php';
$id=$_GET['id'];
session_start();
$m=$_SESSION['map'];

$sql="SELECT * FROM t2 WHERE id=".$id.";";
$s="SELECT * FROM reply_queries WHERE id=".$id.";";

$res2=mysqli_query($con,$s);
$a=mysqli_num_rows($res2);
$res=mysqli_query($con,$sql);
$v=mysqli_num_rows($res);
echo"<form action=dept_rep.php method=post>";
echo "<table  width=100% border=2>" ;
	echo "<tr>
			<th>Query Number</th>
			<th>Query</th>
			<th>Reply</th>
		</tr>";  

while($v!=0)
{
	$r=mysqli_fetch_array($res);
	$w=mysqli_fetch_array($res2);
	if ($r['map']==$m )
	{	echo"<th>".$r['q_no']."</th>";
			echo"<th>".$r['ques']."</th>";
			if($r['q_no']==$w['q_no'])
				echo"<th><input type=text name=ans value=".$w['ans']."></th>";
			else
				echo "<th><input type=text name=ans></th>";
			echo"<button class=btn>Mark complete</button>";
	}
	
	
	$v--;
	}


echo"</form>";
?>