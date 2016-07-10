<head>
		<title>View RTI</title>
		<link rel="stylesheet" href="css/new_prev.css">
		<link rel="stylesheet" href="css/background.css">
	</head>
<?php
		echo"</br></br></br></br></br>";
		include 'config_database.php';
		$id=$_GET['id'];
		$sql_query="SELECT * FROM appeal_query WHERE id=".$id.";";
		$result=mysqli_query($con,$sql_query);
		$num=mysqli_num_rows($result);
		echo"
				<table width=100%>
				<tr>
				<th>Query Number</th>
				<th>Query</th>
				<th>Description</th>
				</tr>";
		while($num!=0)
		{
			$b=mysqli_fetch_array($result);
			echo"<tr>
						<th>".$b['q_no']."</th>
						<th>".$b['query']."</th>
						<th>".$b['description']."</th>
				</tr>";
			$num--;
		}
		echO"</table>";
		include 'logoff.html';
?>