<!DOCTYPE HTML>
<html>

<?php
//session_start();
$b= $_SESSION['q'];
$d= $_SESSION['v'];
$id= $_SESSION['oid'];
 $_SESSION['oid']=$id;
$c=$d;
$a=$b;
$c=$c+1;
echo $b;
echo $d;
while($a<$c)
{	
		echo"<li>";
				echo"<a href='gen_q.php?qno='".$a."'><input type=submit name=query_btn value=query_no_is_".$a."></a>";
		echo"</li>";
		echo"</br></br></br>";
	$a=$a+1;
}

	
?>
</html>