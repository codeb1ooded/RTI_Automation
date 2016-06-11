<html>
<form action="report.php" method="post">

<input type="submit" name="name" value="Name">
<input type="submit" name="dept" value="Department">
<input type="submit" name="date" value="Date">
<input type="submit" name="close" value="Closed">
<input type="submit" name="back" value="Back">

</form>
<?php
	
if(isset($_POST['name'])){
	$con=mysqli_connect("localhost","root","");
	if(!$con)
		echo " Connection to the server failed ";
	$db=mysqli_select_db($con,'rti');
	if(!$db)
		echo " Connection to the database failed ";
	
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
	
	$con=mysqli_connect("localhost","root","");
	if(!$con)
		echo " Connection to the server failed ";
	$db=mysqli_select_db($con,'rti');
	if(!$db)
		echo " Connection to the database failed ";
	
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
	
	$con=mysqli_connect("localhost","root","");
	if(!$con)
		echo " Connection to the server failed ";
	$db=mysqli_select_db($con,'rti');
	
	if(!$db)
		echo " Connection to the database failed ";
	
	$query="SELECT * FROM old";
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
		echo "<td>";
		echo $v['reply_date'];	
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
	$con=mysqli_connect("localhost","root","");
	if(!$con)
		echo " Connection to the server failed ";
	$db=mysqli_select_db($con,'rti');
	if(!$db)
		echo " Connection to the database failed ";
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
 if(isset($_POST['back'])){
 header('Location: new_prev.php');}

?>
<html>