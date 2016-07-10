<?php
include 'config_database.php';
session_start();
$b=$_SESSION['que'];
$m=$_SESSION['map'];

$b=$b-1;
//echo " "+$b;
$id=$_SESSION['id'];
$sq="SELECT * FROM t2 WHERE id=".$id." order by q_no;";
$res=mysqli_query($con,$sq);
$f1=mysqli_num_rows($res);

while($b!=0 && $f1 !=0)
{
	$f=mysqli_fetch_array($res);
	
		
	if( $f['map']==$m )
		{
			$ans="ans".$b;
			$ans=$_POST[$ans];

			$qno1=$f['q_no'];
			$sssl="INSERT INTO dept_reply(id, query_no, map, answer) VALUES ($id, $qno1, '$m', '$ans');"; 
			mysqli_query($con, $sssl);
			$b=$b-1;
		}
		$f1 --;
	}
		include 'select_option.php';
	

?>
