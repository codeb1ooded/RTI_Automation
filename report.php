
<head>
	<title>Report</title>
	<link rel="stylesheet" href="css/background.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/jQuery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
</head>
		
<body>
<div class='container'>
<h2>Generate RTI Report By :</h2><br>
<form action="report.php" method="post">
	<input type="submit" name="name" class=btn value="Name">
	<input type="submit" name="dept" class=btn value="Department">
	<input type="submit" name="date" class=btn value="Date">
	<input type="submit" name="close" class=btn value="Closed">
</form>

<?php
if(isset($_POST['name'])){
	include 'config_database.php'; 
	
	$query="SELECT count(name),name,id FROM add_rti group by name order by id";
    $res=mysqli_query($con,$query);
	echo "<table class='table table-bordered'>" ;
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
	echo "</table>";
}	
if(isset($_POST['dept'])){
	
	include 'config_database.php'; 
	
	$query="SELECT count(map),map,id FROM t2 group by map order by id";
    $res=mysqli_query($con,$query);

	echo "<table class='table table-bordered'>" ;
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
	echo "</table>";
}
if(isset($_POST['close'])){
	
	include 'config_database.php'; 
	
	$query="SELECT * FROM add_rti WHERE archieve=1";
	$res=mysqli_query($con,$query);

    echo "<table class='table table-bordered'>" ;
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
	echo "</table>";
}
if(isset($_POST['date'])){
		echo "
		<form method=post action='./report.php' name='report_rti'><th>Start Date</th>
                    <td><input type=text name=d1 placeholder=YYYY-MM-DD></td>
					<th>End Date</th>
                    <td><input type=text name=d2 placeholder=YYYY-MM-DD></td>
					<input type=submit name=enter class=btn value=Enter onclick=\"return validateDate()\">
					</form>";
	echo "</table>";
}
?>
<script type="text/javascript">
		function validateDate(){
			var bool1 = validatedate1(document.report_rti.d1);
			var bool2;
			if(bool1 == true){
				bool2 = validatedate2(document.report_rti.d2);		
			}
			if(bool1 == false || bool2 == false){
				return false;		
			}
		}

function validatedate1(inputText)  {  
	var dateformat = /^(\d{4})-(\d{1,2})-(\d{1,2})/;  
	
	// Match the date format through regular expression  
	if(inputText.value.match(dateformat)) {  
		document.report_rti.d1.focus();  
 
  		//Test which seperator is used '/' or '-'  
		var opera1 = inputText.value.split('/');  
		var opera2 = inputText.value.split('-');  
		lopera1 = opera1.length;  
		lopera2 = opera2.length;  

		// Extract the string into month, date and year  
		if (lopera1>1) {  
			var pdate = inputText.value.split('/');  
		} else if (lopera2>1) {  
			var pdate = inputText.value.split('-');  
		}  
		var dd = parseInt(pdate[2]);  
		var mm  = parseInt(pdate[1]);  
		var yy = parseInt(pdate[0]);  
		
		// Create list of days of a month [assume there is no leap year by default]  
		var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];  
		if(mm >12){
			document.report_rti.d1.focus();
			alert('Month should be less than twelve!!! \nInvalid date format!');  
			return false; 
		}
		if (mm==1 || mm>2) {  
			if (dd>ListofDays[mm-1]) {  
				document.report_rti.d1.focus();
				alert('Date exceeded!!! \nInvalid date format!');  
				return false;  
			}  
			else {
				return true;
			}
		}  
		if (mm==2) {  
			var lyear = false;  
			if ( (!(yy % 4) && yy % 100) || !(yy % 400)) {  
				lyear = true;  
			}  
			if ((lyear==false) && (dd>=29)) {  
				alert('Date exceeded!!! \nInvalid date format!');  
				document.report_rti.d1.focus();
				return false;  
  			}  
			else if ((lyear==true) && (dd>29)) {  
				alert('Date exceeded!!! \nInvalid date format!');  
				document.report_rti.d1.focus(); 
				return false;  
			}  
			else {
				return true;
			}
		}  
	}  
	else {  
		alert("Date format is not correct!!!! \nInvalid date format!");  
		document.report_rti.d1.focus();  
		return false;  
	}  
}  

function validatedate2(inputText)  {  
	var dateformat = /^(\d{4})-(\d{1,2})-(\d{1,2})/;  
	
	// Match the date format through regular expression  
	if(inputText.value.match(dateformat)) {  
		document.report_rti.d1.focus();  
 
  		//Test which seperator is used '/' or '-'  
		var opera1 = inputText.value.split('/');  
		var opera2 = inputText.value.split('-');  
		lopera1 = opera1.length;  
		lopera2 = opera2.length;  

		// Extract the string into month, date and year  
		if (lopera1>1) {  
			var pdate = inputText.value.split('/');  
		} else if (lopera2>1) {  
			var pdate = inputText.value.split('-');  
		}  
		var dd = parseInt(pdate[2]);  
		var mm  = parseInt(pdate[1]);  
		var yy = parseInt(pdate[0]);  
		
		// Create list of days of a month [assume there is no leap year by default]  
		var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];  
		if(mm >12){
			document.report_rti.d2.focus();
			alert('Month should be less than twelve!!! \nInvalid date format!');  
			return false; 
		}
		if (mm==1 || mm>2) {  
			if (dd>ListofDays[mm-1]) {  
				document.report_rti.d2.focus();
				alert('Date exceeded!!! \nInvalid date format!');  
				return false;  
			}  
			else {
				return true;
			}
		}  
		if (mm==2) {  
			var lyear = false;  
			if ( (!(yy % 4) && yy % 100) || !(yy % 400)) {  
				lyear = true;  
			}  
			if ((lyear==false) && (dd>=29)) {  
				alert('Date exceeded!!! \nInvalid date format!');  
				document.report_rti.d2.focus();
				return false;  
  			}  
			else if ((lyear==true) && (dd>29)) {  
				alert('Date exceeded!!! \nInvalid date format!');  
				document.report_rti.d2.focus(); 
				return false;  
			}  
			else {
				return true;
			}
		}  
	}  
	else {  
		alert("Date format is not correct!!!! \nInvalid date format!");  
		document.report_rti.d2.focus();  
		return false;  
	}  
} 
</script>
<?php
if(isset($_POST['enter'])){
	include 'config_database.php'; 
	
	$d1=$_POST['d1'];
	$d2=$_POST['d2'];
//	$d1=date('Y-m-d',);
	//$d2=date('Y-m-d',$_POST['d2']);
	$query="SELECT * FROM add_rti where (date_of_receipt_cio>='".$d1."' and date_of_receipt_cio<='".$d2."');";
    $res=mysqli_query($con,$query);

	echo "<table class='table table-bordered'>" ;
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
	echo "</table>";
}
?>
<br><a href=select_option.php class=btn>Back</a>
</div>
</body>
</html>
