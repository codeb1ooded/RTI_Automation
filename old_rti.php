<html>
<body>
<?php
$id=$_GET['id'];
echo "The rti corresponding to ".$id." has been marked completed.\n";
$con= mysqli_connect("localhost","root","","rti");
if(!$con)
	die("Can not connect:" . mysql_error());
$sql="UPDATE add_rti SET archieve=1 WHERE id=".$id;
mysqli_query($con,$sql);
?>
<span><a href='prev_rti.php'>Back</a></span>
<?php
mysqli_close($con);
?>
</body>
</html>