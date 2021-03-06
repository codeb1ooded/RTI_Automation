<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['login_access'])){
	header("location: ../errors/no_file.php");
}
elseif ($_SESSION['login_access'] != 'Admin') {
	header("location: ../errors/no_access.php");
}
else {
	?>
	<html>
	<head>
		<title> Backup </title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<link rel=stylesheet href="../css/a.css">
		<meta charset="utf-8">
	</head>
	<body>
		<h3><center>Select all tables for which you want Backup</center></h3>
		<div class="container">	
			<form method="post" action="backup.php">
				<br><table class="table table-bordered">
				<tr class='tor'>
					<th>Table Name</th>
					<th>Backup: Yes</th>
					<th>Backup: No</th>
				</tr>
				<tr>
					<td>Add rti</td>
					<td><input type="radio" name="add_rti" value="yes" checked></td>
					<td><input type="radio" name="add_rti" value="no"></td>
				</tr>
				<tr>
					<td>Appeal Query</td>
					<td><input type="radio" name="appeal_query" value="yes" checked></td>
					<td><input type="radio" name="appeal_query" value="no"></td>
				</tr>
				<tr>
					<td>Article Section</td>
					<td><input type="radio" name="article_section" value="yes" checked></td>
					<td><input type="radio" name="article_section" value="no"></td>
				</tr>
				<tr>
					<td>Article Sub-section</td>
					<td><input type="radio" name="article_sub_section" value="yes" checked></td>
					<td><input type="radio" name="article_sub_section" value="no"></td>
				</tr>
				<tr>
					<td>Department Reply</td>
					<td><input type="radio" name="dept_reply" value="yes" checked></td>
					<td><input type="radio" name="dept_reply" value="no"></td>
				</tr>
				<tr>
					<td>First Appeal</td>
					<td><input type="radio" name="first_appeal" value="yes" checked></td>
					<td><input type="radio" name="first_appeal" value="no"></td>
				</tr>
				<tr>
					<td>Info About Reply</td>
					<td><input type="radio" name="info_about_reply" value="yes" checked></td>
					<td><input type="radio" name="info_about_reply" value="no"></td>
				</tr>
				<tr>
					<td>Public Authorities</td>
					<td><input type="radio" name="public_authority" value="yes" checked></td>
					<td><input type="radio" name="public_authority" value="no"></td>
				</tr>
				<tr>
					<td>Reply Queries</td>
					<td><input type="radio" name="reply_queries" value="yes" checked></td>
					<td><input type="radio" name="reply_queries" value="no"></td>
				</tr>
				<tr>
					<td>Section 4</td>
					<td><input type="radio" name="section4" value="yes" checked></td>
					<td><input type="radio" name="section4" value="no"></td>
				</tr>
				<tr>
					<td>Query Table(T2)</td>
					<td><input type="radio" name="t2" value="yes" checked></td>
					<td><input type="radio" name="t2" value="no"></td>
				</tr>
			</table>
			<center><input class='btn btn-primary' type="submit" name="submit" value="Submit" />
				<a href="../select_option.php" class='btn btn-log'>Back</a></center>
			</form>
		</div>
	</body>
	</html>
	<?php 
} 
?>