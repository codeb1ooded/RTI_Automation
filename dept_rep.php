<?php
include 'config_database.php';
session_start();
$q=$_SESSION['que'];
$m=$_SESSION['map'];

$b=1;
//echo " "+$b;
$id=$_SESSION['id'];
$sq="SELECT * FROM t2 WHERE id=".$id." order by q_no;";
$res=mysqli_query($con,$sq);
$f1=mysqli_num_rows($res);

while($b<=$q && $f1 !=0)
{
	$f=mysqli_fetch_array($res);			
	if( $f['map']==$m )
		{
			$ans="ans".$b;
			$ans=$_POST[$ans];
			echo " ".$ans."\n";
			$qno1=$f['q_no'];
			$qc="SELECT * FROM dept_reply WHERE id=".$id." AND query_no=".$qno1.";";
			$rc=mysqli_query($con,$qc);
			$cnt=mysqli_num_rows($rc);
			echo $cnt;
			if($cnt!=0)
				{
					$sssl= "UPDATE dept_reply SET 
						map=".$m."
						answer=".$ans."WHERE id=".$id."AND query_no=".$qno1.";";
				}
			else
			{
				$sssl="INSERT INTO dept_reply(id, query_no, map, answer) VALUES ($id, $qno1, '$m', '$ans');"; 
			}
			mysqli_query($con, $sssl);
			$b=$b+1;
		}
		$f1 --;
	}
		include 'select_option.php';
	

?>
