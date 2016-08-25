<?php
<?php
if(!isset($_SESSION) || !isset($_SESSION['Account_type'])) {
	// echo 'session not started';
		include 'index.php';
		echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Please login first"; document.getElementById("message").style.color = "#ff0000";</script>';
}
else{
include 'config_database.php';
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

}
?>
