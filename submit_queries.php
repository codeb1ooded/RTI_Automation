<?php
	if(!isset($_SESSION)) {
		session_start();
	}
	if(!isset($_SESSION['login_access'])){
		header("location: errors/no_file.php");
	}
	elseif ($_SESSION['login_access'] != 'Admin') {
		header("location: errors/no_access.php");
	}
	else {
		$id=$_SESSION['id'];
		$_SESSION['no_of_queries']=$_POST['ques'];
?>
<html>
<head>
	<title>Queries</title>
	<link rel="stylesheet" href="css/background.css">
	<meta charset="utf-8">
</head>

<body>
<?php
	$_SESSION['database_access'] = true;
	include 'config_database.php';
	$_SESSION['database_access'] = false;
	$a=$_POST['ques'];

	echo " <h3>RTI ID:".$id."</h3>";
	echo "<table>
			<tbody>
				<tr>
					<th>Query No</th>
					<th>Query</th>
					<th>Map To</th>
					<th>Date Sent</th>
				</tr>";
	echo "<form action=save_queries.php method=post>";
?>

<script type="text/javascript">
	function mailTo (a) {
		var map = document.getElementById("dropdown"+a);
		var no_select = "no_selection"+a;
		var selected = map.options[map.selectedIndex].value;
		if(no_select != selected){
			var mailid;
			if(selected == "Ac"){
				mailid = "academics@igdtuw.com";
			} else if(selected == "Ex"){
				mailid = "examination@igdtuw.com";
			} else if(selected == "Ad"){
				mailid = "administrative@igdtuw.com";
			} else{
				mailid = "humaresource@igdtuw.com";
			}
			var subject="Please Send reply to the query of RTI Id: "+ <?php echo $id; ?>;
			var ques = "ques"+a;
			var body="Query: " + document.getElementById(ques).value + " \ndated on:" + document.getElementById("date_s"+a).value;
			window.open('mailto:'+mailid+'?subject='+subject+'&body='+body);
		}
		else{
			alert("Please select a department first");
		}
	}
</script>

<?php
	$c=1;
	while($a!=0)
	{
		$ques="ques".$a;
		$map="map".$a;
		$date_s="date_s".$a;
		$no_selection="no_selection".$a;
		$dropdown="dropdown".$a;
?>


		<tr>
			<th><input type=text name=<?php echo $c; ?> value=<?php echo $c; ?> readonly></th>
			<th><input type=text name=<?php echo $ques; ?> id=<?php echo $ques; ?>></th>
			<th><select name=<?php echo $map; ?> id=<?php echo $dropdown;?> >
					<span>
						<option value=<?php echo $no_selection; ?>>--Select--</option>
						<option value=Ac>Academics</option>
						<option value=Ex>Examination Division</option>
						<option value=Ad>Administrative</option>
						<option value=HR>Human Resource</option>
					</span>
				</select>
			</th>

			<th><input type=date name=<?php echo $date_s; ?> id=<?php echo $date_s; ?> placeholder=YYYY-MM-DD></th>
			<th><button type="button" name="mail_button" class=btn onclick="mailTo(<?php echo $a; ?>);">Mail</button></th>
<?php
		echo '</tr>';
		$a--;
		$c++;
	}
	//echo "<th colspan=15></th><th><input class='btn' type=submit name=gen_pdf value='Generate Reply'><th>";

	echo "<th colspan=15></th><th><input type=submit name=save class=btn value='Save and Exit' ></th>";
	echo "</form>";
	echo "<th colspan=15></th><th><a href='../select_option.php' name=exit  class=btn>Exit</a></th>";
	mysqli_close($con);
?>
</body>
</html>
<?php } ?>
