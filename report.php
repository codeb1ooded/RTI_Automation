<!DOCTYPE html>

<html>
	<head>
		<title>Generate Report</title>
		<link rel="stylesheet" href="css/background.css">
		<meta charset="utf-8">
	</head>
		
	<body>
<h2>Generate Report Of RTIs</h2>
<marquee><strong>CHOOSE THE DESIRED FIELD ON WHICH RTIs NEED TO BE SORTED</strong></marquee><br>
<form action="report.php" method="post">
	<input type="submit" name="name" value="Name"><br><br>
	<input type="submit" name="dept" value="Department"><br><br>
	<input type="submit" name="date" value="Date"><br><br>
	<input type="submit" name="close" value="Closed"><br><br>
</form>
<?php
	
if(isset($_POST['name'])){
	include 'config_database.php'; 
	
	$query="SELECT count(name),name,id FROM add_rti group by name order by id";
    $res=mysqli_query($con,$query);
	echo "<table  width=100% border=2>" ;
	echo "<tr>
			<th>ID</th>
			<th>Applicant Name</th>
			<th>No. of Applications filed</th>
		</tr>";  
	

	while($r=mysqli_fetch_assoc($res))
	{
		echo "<tr>";
			echo "<td>";
		echo $r['id']."</td>";
		echo "<td>";
		echo $r['name'];
		echo "</td>";
		echo "<td>";
		echo $r['count(name)'];	
		echo "</td></tr>";		
	}
}	
if(isset($_POST['dept'])){
	
	include 'config_database.php'; 
	
	$query="SELECT count(map),map,id FROM t2 group by map order by id";
    $res=mysqli_query($con,$query);

	echo "<table  width=100% border=2>" ;
	echo "<tr>
			<th>ID</th>
			<th>Department Name</th>
			<th>No. of Queries</th>
		</tr>";  
	
	while($r=mysqli_fetch_assoc($res))
	{
		echo "<tr>";
		echo "<td>";
		echo $r['id'];
		echo "</td>";
		echo "<td>";
		echo $r['map'];
		echo "</td>";
		echo "<td>";
		echo $r['count(map)'];	
		echo "</td></tr>";		
	}
}
if(isset($_POST['close'])){
	
	include 'config_database.php'; 
	
	$query="SELECT * FROM add_rti WHERE archieve=1";
	$res=mysqli_query($con,$query);

    echo "<table  width=100% border=2>" ;
	echo "<tr>
			<th>ID</th>
			<th>Applicant Name</th>
			<th>Reply Date</th>
		</tr>";  
	while($r=mysqli_fetch_assoc($res))
	{
		echo "<tr>";
		echo "<td>";
		echo $r['id'];
		echo "</td>";
		echo "<td>";
		echo $r['name'];
		echo "</td>";
		$que="SELECT * FROM info_about_reply WHERE id=".$r['id'].";";
		$ut=mysqli_query($con,$que);
		$ut1=mysqli_fetch_assoc($ut);
		echo "<td>";
		echo $ut1['reply_date'];	
		echo "</td></tr>";		
	}
}
if(isset($_POST['date'])){
		echo "
		<form method=post action='./report.php'><th>Start Date</th>
                    <td><input type=text name=d1 placeholder=YYYY-MM-DD></td>
					<th>End Date</th>
                    <td><input type=text name=d2 placeholder=YYYY-MM-DD></td>
					<input type=submit name=enter value=Enter>
					</form>";
}
if(isset($_POST['enter'])){
	include 'config_database.php'; 
	
	$d1=$_POST['d1'];
	$d2=$_POST['d2'];
//	$d1=date('Y-m-d',);
	//$d2=date('Y-m-d',$_POST['d2']);
	$query="SELECT * FROM add_rti where (date_of_receipt_cio>='".$d1."' and date_of_receipt_cio<='".$d2."');";
    $res=mysqli_query($con,$query);

	echo "<table width=100% border=2>" ;
	echo "<tr>
			<th>ID</th>
			<th>Applicant Name</th>
		</tr>";  
	
	while($r=mysqli_fetch_assoc($res))
	{
		echo "<tr>";
		echo "<td>";
		echo $r['id'];
		echo "</td>";
		echo "<td>";
		echo $r['name'];
		echo "</td>";
	}
}
?>

<br><a href="new_prev.php">Back</a>
</body>
<html>