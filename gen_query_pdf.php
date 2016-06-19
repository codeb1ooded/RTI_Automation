<!DOCTYPE HTML>
<html>

<?php
//session_start();
$b= $_SESSION['q'];
echo "Start of queries ".$b;
$d= $_SESSION['v'];
echo "End of queries ".$d;
//$id= $_SESSION['oid'];
$c=$d;
$a=$b;
//$c=$c+1;
//echo $b;
//echo $d;
while($a<=$c)
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