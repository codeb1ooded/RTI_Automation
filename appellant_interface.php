<html>
<head>
	<title>Appellant</title>
	<link rel="stylesheet" href="css/background.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>
<?php

include'config_database.php';
$sql="SELECT * FROM first_appeal ";
$res=mysqli_query($con,$sql);
$b=mysqli_num_rows($res);
?>
<table width=100%>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Transfer Date</th>
		<th>Options</th>

	</tr>

<?php
while($b!=0)
{
	$f=mysqli_fetch_array($res);
	$query="SELECT * FROM add_rti WHERE id=".$f['id'].";";
	$res2=mysqli_query($con,$query);
	$f2=mysqli_fetch_array($res2);

	echo"<tr>
		<th>".$f2['id']."</a></th>
		<th>".$f2['name']."</a></th>
		<th>".$f['transfer_date']."</a></th>
		<th><a href='appeal_option.php?id=".$f2['id']."'>View Options</a></th>
	</tr>";

$b--;
}
echo"</table></br></br>";	
include 'logoff.html';
?>
