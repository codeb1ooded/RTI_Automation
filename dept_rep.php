<?php
include 'config_database.php';

$m=$_SESSION['map'];
$id=$_SESSION['id'];
$sq="SELECT * FROM t2 WHERE id=".$id.";";
$res=mysqli_query($con,$sq);
$f=mysqli_num_rows($res);
if($f['map']==$m)
$sql= "INSERT INTO dept_reply(id,q_no,ans) VALUES($id,$_POST['qno'],$_POST['ans'])"
include 'new_prev.php';
?>