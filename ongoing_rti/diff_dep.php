<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(!isset($_SESSION['login_access'])){
		header("location: ../errors/no_file.php");
	}
	else{
?>
<head>
<link rel="stylesheet" href="../css/prev_rti.css">
	<link rel="stylesheet" href="../css/background.css">
		<meta charset="utf-8">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="../bootstrap/jQuery/jquery.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
	</head>
<?php
		$m = $_SESSION['map'];
		$_SESSION['database_access'] = true;
		include '../db/config_database.php';
		$_SESSION['database_access'] = false;
		$id = $_GET['id'];
		$_SESSION['id']= $id;

		$sql = "SELECT * FROM t2 WHERE id=".$id.";";
		$s = "SELECT * FROM dept_reply WHERE id=".$id.";";

		//Values from reply queries
		$res2 = mysqli_query($con, $s);
		$a = mysqli_num_rows($res2);

		//Values from t2
		$res = mysqli_query($con, $sql);
		$data2 = mysqli_num_rows($res);
		//Session for the values from t2
		$v = $data2;
?>
<div class=container>
<form action=dept_rep.php method=post>
<h2>Queries for this Id :</h2>
<table  width=100% border=2>
		
		<tr>
			<th>Query Number</th>
			<th>Query</th>
			<th>Reply</th>
			<th>Date of reply</th>
		</tr>
<?php
	$t=1;
	while($v!=0){
		$r = mysqli_fetch_array($res);
		$w = mysqli_fetch_array($res2);
		if ($r['map'] == $m ) {
			$q = $r['q_no'];
			$ans = "ans".$t;
			$qno = "qno".$t;
			$date = "date".$t;
			echo "<tr>";
			echo "<th>$q</th>";
			echo "<th>".$r['ques']."</th>";
			if ($r['q_no'] == $w['query_no'])
				echo "<th><input type=text name=$ans value=".$w['answer']."></th>";
			else
				echo "<th><input type=text name=$ans></th>";
			echo "<th><input name=$date maxlength=50 placeholder='YYYY-MM-DD' required></th>";
			echo "</tr>";
			$t++;
		}
		$v--;
	}
	
?>
</table>	
	<br><input type=submit name=save class=btn value='Save' >
			</form>
			<a class=btn href='../ongoing_rti/ongoing_rti.php'>Back</a>


<?php
		$_SESSION['que']=$t;
	}
?>
</div>
</body>
</html>
