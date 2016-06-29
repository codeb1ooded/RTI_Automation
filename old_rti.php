<html>
<body>
<?php
$id=$_GET['id'];
include 'config_database.php'; 
$sql="UPDATE add_rti SET archieve=1 WHERE id=".$id;
mysqli_query($con,$sql);
?>
<span><a href='prev_rti.php'>Back</a></span>
<?php
mysqli_close($con);
?>
</body>
</html>