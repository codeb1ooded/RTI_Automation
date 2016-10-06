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
	<link rel="stylesheet" href="../css/background.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/jQuery/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	</head>
	<body>
		<h3>Select All Tables for which you want backup</h3>
		<form method="post" action="backup.php">
		<div class="container">
		<table class="table table-bordered table-condensed">
			<tr>
				<th>Add rti</th>
  					<td><input type="radio" name="add_rti" value="yes" checked> Yes</td>
					<td><input type="radio" name="add_rti" value="no"> No</td>
			</tr>
			<tr>
				<th>Appeal Query</th>
  					<td><input type="radio" name="appeal_query" value="yes" checked> Yes</td>
					<td><input type="radio" name="appeal_query" value="no"> No</td>
			</tr>
			<tr>
				<th>Article Section</th>
  					<td><input type="radio" name="article_section" value="yes" checked> Yes</td>
					<td><input type="radio" name="article_section" value="no"> No</td>
			</tr>
			<tr>
				<th>Article Sub-section</th>
  					<td><input type="radio" name="article_sub_section" value="yes" checked> Yes</td>
					<td><input type="radio" name="article_sub_section" value="no"> No</td>
			</tr>
			<tr>
				<th>Department Reply</th>
  					<td><input type="radio" name="dept_reply" value="yes" checked> Yes</td>
					<td><input type="radio" name="dept_reply" value="no"> No</td>
			</tr>
			<tr>
				<th>First Appeal</th>
  					<td><input type="radio" name="first_appeal" value="yes" checked> Yes</td>
					<td><input type="radio" name="first_appeal" value="no"> No</td>
			</tr>
			<tr>
				<th>Info About Reply</th>
  					<td><input type="radio" name="info_about_reply" value="yes" checked> Yes</td>
					<td><input type="radio" name="info_about_reply" value="no"> No</td>
			</tr>
			<tr>
				<th>Public Authorities</th>
  					<td><input type="radio" name="public_authority" value="yes" checked> Yes</td>
					<td><input type="radio" name="public_authority" value="no"> No</td>
			</tr>
			<tr>
				<th>Reply Queries</th>
  					<td><input type="radio" name="reply_queries" value="yes" checked> Yes</td>
					<td><input type="radio" name="reply_queries" value="no"> No</td>
			</tr>
			<tr>
				<th>Section 4</th>
  					<td><input type="radio" name="section4" value="yes" checked> Yes</td>
					<td><input type="radio" name="section4" value="no"> No</td>
			</tr>
			<tr>
				<th>Query Table(T2)</th>
  					<td><input type="radio" name="t2" value="yes" checked> Yes</td>
					<td><input type="radio" name="t2" value="no"> No</td>
			</tr>
		</table>
		<br><input class=btn type="submit" name="submit" value="Submit" />
	</form>
	<br><br><a href="../select_option.php" class=btn>Back</a>
	</div>
	</body>
</html>
<?php } ?>
