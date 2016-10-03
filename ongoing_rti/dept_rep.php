<?php
		$_SESSION['database_access'] = true;
		include '../db/config_database.php';
		$_SESSION['database_access'] = false;
		session_start();
		$q = $_SESSION['que'];
		$m = $_SESSION['map'];

		$b = 1;
		$id = $_SESSION['id'];
		$sq = "SELECT * FROM t2 WHERE id=".$id." order by q_no;";
		$res = mysqli_query ($con, $sq);
		$f1 = mysqli_num_rows ($res);

		while ($b <= $q && $f1 != 0){
			$f = mysqli_fetch_array ($res);
			if ($f['map'] == $m ){
				$ans = "ans".$b;
				$date = "date".$b;
				$ans = $_POST[$ans];
				$date = $_POST[$date];
				$qno1 = $f['q_no'];

				$sssl = "INSERT INTO dept_reply(id, query_no, map, answer,date_reply) VALUES ($id, $qno1, '$m', '$ans','$date');";
				//Changes to t2 flag
				$ql = "UPDATE t2 SET flag=1 WHERE id=".$id." AND q_no=".$qno1." AND map='".$m."';";

				mysqli_query($con, $ql);
				mysqli_query($con, $sssl);
				$b = $b+1;
			}
			$f1--;
		}
		header ('location: ../select_option.php');
?>
