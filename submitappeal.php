//Submit appeal
<?php	
	if(isset($_POST['submitappeal'])){
	include 'new_prev.php';
	$con= mysqli_connect("localhost","root","","rti");
	
	if(!$con){
			die("Can not connect:" . mysql_error());
	}
	?>
