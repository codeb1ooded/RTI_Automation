<?php 
session_start();
$d=$_SESSION['no_of_queries'];
$b=$_SESSION['qu'];
$id= $_SESSION['id'];
?>

<html>

<?php

echo "Start of queries ".$b;

echo "End of queries ".$d;

$a=$b;

while($a<=$d)
{	
		echo"<li>";
				echo"<a href='gen_q.php?qno=".$a."' target=_blank><input type=submit name=query_btn value=query_no_is_".$a."></a>";
		echo"</li>";
		echo"</br></br></br>";
	$a=$a+1;
}
echo"</br></br></br>";
echo"Your pdf is generated you can exit:";
echo"<a href='new_prev.php'><input type=submit value=Exit></a>";

	
?>
</html>