<?php
$I=0;
session_start();
$I=$_SESSION['i'];
echo $I;
include 'appeal_option.php';
include 'config_database.php';

$ans=$_POST['decision'];

$sql="INSERT INTO appeal_decision VALUES($I,'$ans');";
$res=mysqli_query($con,$sql);

?>