<!doctype html>
<html>
<body>
<?php
$con= mysqli_connect("localhost","root","","rti");
$id=$_GET['id'];
$query = "SELECT * FROM t2 WHERE id=".$id.";";
$v=mysqli_query($con,$k);
echo "<table>
			<tbody>
				<tr>
					<th>Query No</th>
					<th>Query</th>
					<th>Reply</th>
					<th>Date Received</th>
				</tr>";
?>
</body>
</html>