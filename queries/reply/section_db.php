<?php
 if(!isset($_SESSION)) {
	session_start();
 }
 if(!isset($_SESSION['login_access'])){
   header("location: ../../errors/no_file.php");
 }
 else {
?>
<html>
	<head>
		<title>Section Information</title>
		<link rel="stylesheet" href="../../css/background.css">
		<meta charset="utf-8">
		<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	</head>

	<body>
	<h3>Section Information</h3>
		<table class='table table-bordered'>
			<tr>
				<th>S.No</th>
				<th>Section</th>
				<th>SubSection</th>
				<th>Description</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Section 8</td>
				<td>Subsection 8.a</td>
				<td>Description</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Section 8</td>
				<td>Subsection 8.b</td>
				<td>Description</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Section 8</td>
				<td>Subsection 8.c</td>
				<td>Description </td>
			</tr>
			<tr>
				<td>4</td>
				<td>Section 9</td>
				<td>Subsection 9.a</td>
				<td>Description</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Section 9</td>
				<td>Subsection 9.b</td>
				<td>Description</td>
			</tr>
			<tr>
				<td>6</td>
				<td>Section 9</td>
				<td>Subsection 9.c</td>
				<td>Description</td>
			</tr>
		</table>
	</body>
</html>
<?php } ?>
