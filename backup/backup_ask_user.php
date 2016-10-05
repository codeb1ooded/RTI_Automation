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
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	
	</head>
	<body>
		<p>Select All Tables for which you want backup</p>
		<form method="post" action="backup.php">
		<table>
			<tr>
				<th>Add rti</th>
  					<th><input type="radio" name="add_rti" value="yes" checked> Yes</th>
					<th><input type="radio" name="add_rti" value="no"> No</th>
			</tr>
			<tr>
				<th>Appeal Query</th>
  					<th><input type="radio" name="appeal_query" value="yes" checked> Yes</th>
					<th><input type="radio" name="appeal_query" value="no"> No</th>
			</tr>
			<tr>
				<th>Article Section</th>
  					<th><input type="radio" name="article_section" value="yes" checked> Yes</th>
					<th><input type="radio" name="article_section" value="no"> No</th>
			</tr>
			<tr>
				<th>Article Sub-section</th>
  					<th><input type="radio" name="article_sub_section" value="yes" checked> Yes</th>
					<th><input type="radio" name="article_sub_section" value="no"> No</th>
			</tr>
			<tr>
				<th>Department Reply</th>
  					<th><input type="radio" name="dept_reply" value="yes" checked> Yes</th>
					<th><input type="radio" name="dept_reply" value="no"> No</th>
			</tr>
			<tr>
				<th>First Appeal</th>
  					<th><input type="radio" name="first_appeal" value="yes" checked> Yes</th>
					<th><input type="radio" name="first_appeal" value="no"> No</th>
			</tr>
			<tr>
				<th>Info About Reply</th>
  					<th><input type="radio" name="info_about_reply" value="yes" checked> Yes</th>
					<th><input type="radio" name="info_about_reply" value="no"> No</th>
			</tr>
			<tr>
				<th>Public Authorities</th>
  					<th><input type="radio" name="public_authority" value="yes" checked> Yes</th>
					<th><input type="radio" name="public_authority" value="no"> No</th>
			</tr>
			<tr>
				<th>Reply Queries</th>
  					<th><input type="radio" name="reply_queries" value="yes" checked> Yes</th>
					<th><input type="radio" name="reply_queries" value="no"> No</th>
			</tr>
			<tr>
				<th>Section 4</th>
  					<th><input type="radio" name="section4" value="yes" checked> Yes</th>
					<th><input type="radio" name="section4" value="no"> No</th>
			</tr>
			<tr>
				<th>T2</th>
  					<th><input type="radio" name="t2" value="yes" checked> Yes</th>
					<th><input type="radio" name="t2" value="no"> No</th>
			</tr>
		</table>
		<input type="submit" name="submit" value="Submit" />
	</form>
	<br><br><br><br><a href="../select_option.php" class=btn>Back</a>
	</body>
</html>
<?php } ?>
