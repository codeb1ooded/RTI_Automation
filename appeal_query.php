<head>
	<title>Save Appeal</title>
	<link rel="stylesheet" href="css/background.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/jQuery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<br><h4><strong>Mark the queries for which the appeal is raised:</strong></h4>
<script type="text/javascript">
document.getElementById('desc').disabled=true;
function test()
{
	document.getElementById('desc').disabled=false;
}
</script>
<?php
session_start();
$id=$_SESSION['prev_rti_id'];
include 'config_database.php';
if(isset($_POST['submitappeal'])){
		
		$sql="INSERT INTO first_appeal (id, appeal_info, transfer_date) 
		VALUES('$id','$_POST[appeal_info]','$_POST[transfer_date]')";
		mysqli_query($con,$sql);
		
	}
$sq_q="SELECT * FROM t2 WHERE id=".$id.";";
$res_set=mysqli_query($con,$sq_q);
$b=mysqli_num_rows($res_set);
$num=$b;
$_SESSION['n']=$num;?>
<form action=save_appeal_query.php method=POST>
<table width=100%>
<tr>
		<th>Query Number</th>
		<th>Query</th>
		<th>Objection</th>
		<th id='desc'> Description </th>
		</tr>
<?php 
while($b!=0)
{
	$obj="obj".$b;
	$desc="desc".$b;
	$v=mysqli_fetch_array($res_set);
	echo"<tr>";
	echo "<th>".$v['q_no']."</th>";
	echo "<th>".$v['ques']."</th>";
	?>
	<th><input type=checkbox name=<?php echo $obj;?> onclick=test();>Objection</th>
	<th><input type=text name=<?php echo $desc;?> id='desc'></th>
	<?php
	echo "</tr>";
	$b--;
}
echo"</table>";
echo"<button class=btn>Save</button>";
echo"</form>";
?>