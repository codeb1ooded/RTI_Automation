<?php
session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd']))
	header("Location: 1.php");
else
	include 'new_prev.php';
?>