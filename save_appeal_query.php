<?php
session_start();
$id=$_SESSION['prev_rti_id'];
$data=$_SESSION['n'];

include 'config_database.php';
include 'select_option.php';

$sql_q="SELECT * FROM t2 WHERE id=".$id.";";
$res_set=mysqli_query($con,$sql_q);

while($data!=0){
	$f=mysqli_fetch_array($res_set);
	$m=$f['q_no'];
	$que=$f['ques'];
$obj="obj".$data;
 $desc="desc".$data;
$o=$_POST[$obj];
 $d=$_POST[$desc];
if( $o=='on')
{
 $sql="INSERT INTO appeal_query(id,q_no,query,description) VALUES( $id , $m , '$que','$d');";
 mysqli_query($con,$sql);
}
 $data--;
}

?>