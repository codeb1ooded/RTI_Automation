<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(!isset($_SESSION['login_access'])){
		header("location: ../errors/no_file.php");
	}
	else{
    $d = $_SESSION['no_of_queries'];
    $b = $_SESSION['qu'];
    $id = $_SESSION['id'];
?>

<html>
<head>
		<title>PDF</title>
		<link rel="stylesheet" href="css/background.css">
	</head>
<?php
    echo "Start of queries ".$b;
    echo "End of queries ".$d;
    $a = $b;

    while($a<=$d){
		    echo "<li>";
				echo "<a href='gen_q.php?qno=".$a."' target=_blank><input type=submit name=query_btn value=query_no_is_".$a."></a>";
		    echo "</li>";
		    echo "</br></br></br>";
	      $a = $a+1;
    }
    echo "<br>";
    echo "<a href='ongoing_rti.php'><input type=submit class=btn value=Exit></a>";
  }
?>
</html>
