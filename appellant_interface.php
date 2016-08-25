<?php
if(!isset($_SESSION) || !isset($_SESSION['Account_type'])) {
	// echo 'session not started';
    include 'index.php';
    echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Please login first"; document.getElementById("message").style.color = "#ff0000";</script>';
}
else{
include'config_database.php';
$sql="SELECT * FROM first_appeal ";
$res=mysqli_query($con,$sql);
$b=mysqli_num_rows($res);
?>
<table width=100%>
	<tr>
		<th>Id</th>
		<th>Name</th>
	</tr>

<?php
while($b!=0)
{
	$f=mysqli_fetch_array($res);
	$query="SELECT * FROM add_rti WHERE id=".$f['id'].";";
	$res2=mysqli_query($con,$query);
	$f2=mysqli_fetch_array($res2);

	echo"<tr>
		<th><a href='appellant_login_query.php?id=".$f2['id']."'>".$f2['id']."</a></th>
		<th><a href='appellant_login_query.php?id=".$f2['id']."'>".$f2['name']."</a></th>
	</tr>";

$b--;
}
?>
</table>
<<?php } ?>
