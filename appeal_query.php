<head>
	<title>Description of Appeal</title>
	<link rel="stylesheet" href="css/background.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/jQuery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<br><h4><strong>Mark the queries for which the appeal is raised:</strong></h4>
<script type="text/javascript">

function test(chckbox)
{
	var txtfield= document.getElementById('desc');
	txtfield.disabled=chckbox.checked?false:true;
	if(!txtfield.disabled)
	{
		txtfield.focus();
	}
}
</script>
<?php
$id=$_GET['id'];

session_start();
$_SESSION['id']=$id;

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
<form action="save_appeal_query.php" method=POST>
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
	<!-- in order to disable an input box disabled='disabled'-->
	<th><input type='checkbox' id='chckbox' name=<?php echo $obj;?> onclick="test(this)"/>Objection</th>
	<th><input type='text' name=<?php echo $desc;?> id='desc'></th>
	<?php
	echo "</tr>";
	$b--;
}
echo"</table>";
echo"<button class=btn>Save</button>";
echo"</form>";
?>