<?php
	session_start();
	$id=$_SESSION['id'];
?>
<html>
<head>
	<title>Queries</title>
	<link rel="stylesheet" href="css/background.css">
	<meta charset="utf-8">
</head>

<body>
<?php
	include 'config_database.php';
	$b=$_POST['ques'];
	
	$_SESSION['no_of_queries']=$b;
	
	$a=$b;
	echo "The id of this RTI is: ".$id;
	echo "<table>
			<tbody>
				<tr>
					<th>Query No</th>
					<th>Query</th>
					<th>Map To</th>
					<th>Date Sent</th>
				</tr>";
	echo "<form action=save_ques.php method=post>";
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
			alert("Please select department first");
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
	echo "<th colspan=15></th><th><input type=submit name=save  class=btn value='Save and Exit' ></th>";
	echo "</form>";
	mysqli_close($con);
    include 'logoff.html';
?>
</body>
</html>