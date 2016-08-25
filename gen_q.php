<?php
if(!isset($_SESSION) || !isset($_SESSION['Account_type'])) {
	// echo 'session not started';
		include 'index.php';
		echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Please login first"; document.getElementById("message").style.color = "#ff0000";</script>';
}
else{
	$id=$_SESSION['id'];

	include 'config_database.php';
	$qno=$_GET['qno'];
	$data3="SELECT * FROM add_rti WHERE id=".$id.";";
    $query2=mysqli_query($con,$data3);
    $data4=mysqli_num_rows($query2);
    $b=$data4;
    $add_rtirows=mysqli_fetch_array($query2);

	$data1="SELECT * FROM t2 WHERE id=".$id." AND q_no=".$qno.";";
	$query=mysqli_query($con,$data1);
	$data2=mysqli_fetch_assoc($query);
	echo"</br>";

	echo"
Subject:- 	Information required under Section 6(1) of the Right to Information Act, 2005.</br></br>

	Shri.".$add_rtirows['name'] . " has sought the following information:-</br></br>

(Brief of information)</br>


2.	The Information Seeker has submitted an application on " .$add_rtirows['date_of_receipt_cio'] . "  and paid the prescribed fee on".$add_rtirows['fee_deposit_date']." The information sought is reportedly held by you/your office.
</br></br></br>
3.	Attention in this regard is invited to Sections 5(4) and (5) of the Right to Information Act, 2005, which reads as under:-</br></br>

“(4)	The Central Public Information Officer or State Public Information Officer, as the case may be, may seek the assistance of any other officer as he or she considers it necessary for the proper discharge of his or her duties.
</br></br>
(5)   Any Officer, whose assistance has been sought under sub-section (4), shall render all assistance to the Central Public Information Officer or State Public Information Officer, as the case may be, seeking his or her assistance and for the purposes of any contravention of the provisions of this Act, such other officer shall be treated as a Central Public Information Officer or State Public Information Officer, as the case may be.”
</r></br>
4.	In view of the above, you are requested to please supply the information sought by the applicant to the undersigned by the close of </br>
";
 echo"</br>";
	echo $data2['ques'];
	echo"</br>";
	echo"</br>";
echo"5.	The receipt of this communication may please be acknowledged.
</br>
</br>
</br>
(Name and designation of CPIO)</br></br>
To,</br>".
	$data2['map']."</br></br></br>";

	echo"<a href='select_option.php'><input type=submit value=Exit></a>";
	echo "<button onclick='myFuction()'>Print the reply</button>";

	?>
	<script>
    function myFuction(){
	                window.print();
                        }
</script>
<?php } ?>
