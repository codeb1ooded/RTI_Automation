<?php
    session_start();
?>
<html>
	<head>
		<title>Reply Queries</title>
		<link rel="stylesheet" href="css/background.css">
		<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/jQuery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
	<div class="container">
	<?php
		include 'config_database.php'; 
		$id=$_GET['id'];
		$k = "SELECT * FROM t2 WHERE id=".$id.";";
		$query=mysqli_query($con,$k);
		$data2=mysqli_num_rows($query);
		
		$_SESSION['quer']=$data2;
		
		$a=$data2;
		echo "<br><h3>Fill query replies for RTI ID: ".$id."</h3><br>";
		echo "<table class='table table-bordered'>
				<tbody>
					<tr>
						<th>Query No</th>
						<th>Query</th>
						<th>Reply</th>
						<th>Section</th>
						<th>Sub-Section</th>
						<th>Date Received</th>
					</tr>";
		echo "<form action=save_replies.php method=post>";
		while( $a!=0)
		{
			$data3=mysqli_fetch_array($query);
			$qno="q_no".$a;
			$ques="ques".$a;
			$ans="ans".$a;
			$sec="sec".$a;
			$subsec="subsec".$a;
			$date_rec="date_rec".$a;
			
			$sql = "SELECT * from article_section";
			$result = $con->query($sql);
			
			$sqlFramework = "SELECT * FROM article_sub_section";
			$resultFramework = $con->query($sqlFramework);
			$rowFrameworkResult = array();
			if ($resultFramework->num_rows > 0) {
				while($rowFramework = mysqli_fetch_assoc($resultFramework)) {
					$rowFrameworkResult[] = $rowFramework;
				}
			}
	?>
		<tr>
			<td> <?php echo $data3['q_no']?> </td>  
			<td> <?php echo $data3['ques']?></td>
			<td><input  style="height:32px" type=text name=<?php echo $ans; ?>></td>
			<td>
				<select class="btn" style="background:white; color:black" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value, this.name);" name=<?php echo $sec; ?>>
					<option value="">Select Section</option>
					<?php if ($result->num_rows > 0) { ?>
						<?php while($row = mysqli_fetch_assoc($result)) { ?>
						<option value="<?php echo $row['Id']; ?>"> <?php echo $row['No']; ?></option>
						<?php } ?>
					<?php } ?>
				</select>
			</td>
			<script type='text/javascript'>
			var blah="<?php echo $subsec; ?>";
			</script>
			<td>
			<div>
				<script type="text/javascript" language="JavaScript">
					document.write('<select class="btn" style="background:white; color:black" name="subsec" id="subsec" ><option value="">Please select sub-section</option></select>')
					document.getElementById("subsec").name=blah;
					document.getElementById("subsec").id=blah;
				</script>
				
				<noscript>
					<select class="btn" style="background:white; color:black" name=<?php echo $subsec; ?> id=<?php echo $subsec; ?>>
						<option value="">Please select sub-section</option>
					</select>
				</noscript>
			</div>
	  
			<script language="javascript" type="text/javascript">
				var rowFrameworkResultInJs =<?php echo json_encode($rowFrameworkResult);?> ;
			</script>
			<script language="javascript" type="text/javascript">
				function dynamicdropdown(listindex,blah1)
				{   
					var x=0;
					for(var i=3;i<blah1.length;i++)
					{
						var b=blah1.charAt(i);
						x=x*10+parseInt(b);
					}
					var y="subsec"+x;
					var ele = document.getElementById(y);
					ele.length = 0;
					
					ele.options[0]=new Option("Please select sub-section","");
					if (listindex) {
						var lookup = {};
						var j = 1;
						for (var i = 0, len = rowFrameworkResultInJs.length; i < len; i++) {
							if (rowFrameworkResultInJs[i].sec_id == listindex) {
								ele.options[j]=new Option(rowFrameworkResultInJs[i].No,rowFrameworkResultInJs[i].Id);
								j = j+1;
							}
						}
					}
					
					return true;
				}
			</script>
			</td>
			<td><input  style="height:32px" type=date name=<?php echo $date_rec;?> placeholder=YYYY-MM-DD></td>
		</tr>
	<?php               
			$a--;
		}
		
		echo "</table>" ;
		echo "<input type=submit name=save class=btn value='Save and Exit' >";
		echo "</form>" ;
		echo "<br><br><a href='ongoing_rti_option.php?id=".$id."' class=btn>Back</a>";
	?>
	</div>
	</body>
</html>