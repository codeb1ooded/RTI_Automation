<!DOCTYPE HTML>
<head>
	<title>GModify Queries</title>
	<link rel="stylesheet" href="css/background.css">
	<meta charset="utf-8">
</head>
<body>
<?php
if(isset($_POST['enter']))
{	
	include 'config_database.php'; 
	session_start();
	$id=$_SESSION['oid'];
	$a=$_POST['ques'];
	$_SESSION['q']=$a;
	
	$query="SELECT * FROM t2 where id=".$id.";";
	$data=mysqli_query($con,$query);
	$data2=mysqli_num_rows($data);
	$qno=$data2;
	$_SESSION['qno']=$qno;
	

	echo "Fill the query details for RTI ID: ".$id."<br><br>";
	echo "<table>
			<tbody>
				<tr>
					<th>Query No</th>
					<th>Query</th>
					<th>Map To</th>
					<th>Date Sent</th>
				</tr>";
	echo "<form action=save_ques1.php method=post>";
?>

<script type="text/javascript">
	function mailTo (a) {
		var map = document.getElementById("map"+a);
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
			} else if(selected == "HR"){
				mailid = "humaresource@igdtuw.com";
			} else{
				alert("Please select department first");
				return;
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

	while( $a!=0)
	{
		$qno=$qno+1;	
		$ques="ques".$a;
		$map="map".$a;
		$date_s="date_s".$a;
?>
		<tr>
			<th><input type=text name=<?php echo $qno; ?> value=<?php echo $qno; ?> readonly></th>	
			<th><input type=text name=<?php echo $ques; ?> id=<?php echo $ques; ?>></th>
			<th><select name=<?php echo $map; ?> id=<?php echo $map; ?>>
				<span><option value='' name=<?php echo $map; ?> id=<?php echo $map; ?>>--Select--</option>
				<option value=Ac>Acacemics</option>
				<option value=Ex>Examination Division</option>
				<option value=Ad>Administrative</option>
				<option value=HR>Human Resource</option></span></select></th>
			<th><input type=text name=<?php echo $date_s; ?> id=<?php echo $date_s; ?> placeholder=YYYY-MM-DD></th>
			<th><button type="button" name="mail_button" onclick="mailTo(<?php echo $a; ?>);">Mail</button></th>
		</tr>
<?php				
		$a--;
	}
	$_SESSION['v']=$qno;
	echo "<th colspan=15></th><th><input type=submit name=save class=btn value='Save and Exit' ></th>";
	echo "<th colspan=15></th><th><input type=submit name=gen_pdf class=btn value='Generate Reply' ></th>";
	echo "</form>";
	mysqli_close($con);
}
?>
</body>
</html>