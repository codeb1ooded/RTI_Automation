<?php
session_start();
$I=0;
$I=$_SESSION['i'];
include 'appellant_interface.php';
include 'config_database.php';

$ans=$_POST['decision'];


$sql="INSERT INTO appeal_decision VALUES($I,'$ans');";
$res=mysqli_query($con,$sql);

?>