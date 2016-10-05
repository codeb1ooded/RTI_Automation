<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(!isset($_SESSION['login_access'])){
		header("location: ../errors/no_file.php");
	}
	else{
?>
<head>
	<title>Description of Appeal</title>
	<link rel="stylesheet" href="../css/background.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/jQuery/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<br><h4><strong>Mark the queries for which the appeal is raised:</strong></h4>
<script type="text/javascript">
function checkbox_input (checkbox_id, description_id){
	if (document.getElementById(checkbox_id).checked) {
    document.getElementById(description_id).disabled=false;
  } else {
    document.getElementById(description_id).disabled=true;
  }
}
</script>
<?php
		$id = $_GET['id'];
		$_SESSION['id'] = $id;

		$_SESSION['database_access'] = true;
		include '../db/config_database.php';
		$_SESSION['database_access'] = false;

		if (isset ($_POST['submitappeal'])) {
			$sql = "INSERT INTO first_appeal (id, appeal_info, transfer_date)
							VALUES(' $id ',' $_POST[appeal_info] ',' $_POST[transfer_date]')";
			mysqli_query ($con, $sql);
		}
		$sq_q = "SELECT * FROM t2 WHERE id=".$id.";";
		$res_set = mysqli_query ($con, $sq_q);
		$b = mysqli_num_rows ($res_set);
		$num = $b;
		$_SESSION['n'] = $num;
?>
<form action="save_appeal_query.php" method=POST>
<table width=100%>
<tr>
		<th>Query Number</th>
		<th>Query</th>
		<th>Objection</th>
		<th id='desc'> Description </th>
		</tr>
<?php
		while ($b != 0) {
			$obj = "obj".$b;
			$desc = "desc".$b;
			$v = mysqli_fetch_array ($res_set);
			echo "<tr>";
			echo "<th>".$v['q_no']."</th>";
			echo "<th>".$v['ques']."</th>";
?>
	<!-- in order to disable an input box disabled='disabled'-->
	<th><input type='checkbox' id=<?php echo "checkbox".$b; ?> name=<?php echo $obj;?> onclick="checkbox_input ('<?php echo "checkbox".$b; ?>', '<?php echo "description".$b; ?>')"/>Objection</th>
	<th><input type='text' name=<?php echo $desc;?> id=<?php echo "description".$b; ?>></th>
	<?php
			echo "</tr>";
			$b--;
		}
		echo "</table>";
		echo "<button class=btn>Save</button>";
		echo "</form>";
	}
?>
