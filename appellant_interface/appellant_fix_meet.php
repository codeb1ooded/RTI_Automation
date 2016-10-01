<?php
if(!isset($_SESSION)){
	session_start();
}
$Id=$_GET['id'];
?>
<html>
<head>
	<title>Appealed RTI</title>
	<link rel="stylesheet" href="../css/background.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>
	<script type="text/javascript">
	function mailTo () {
		var selected = map.options[map.selectedIndex].value;
				mailid1 = "cpio@igdtuw.com";
				mailid2 = "appellant@igdtuw.com";
			var subject="Date and place fixed ";
			//var body="Query: " + document.getElementById(ques).value + " \ndated on:" + document.getElementById("date_s"+a).value;
			window.open('mailto:'+mailid1+mailid2+'?subject='+subject+'&body='+body);
		}
		else{
			alert("Please select a department first");
		}
	}
	function print(){
		window.print();
	}
</script>

	<?php

		include '../config_database.php';

		$q='SELECT * FROM add_rti WHERE id='.$Id.";";
		$sql=mysqli_query($con,$q);
		$data3=mysqli_fetch_array($sql);

		$q2='SELECT * FROM first_appeal WHERE id='.$Id.";";
		$sql2=mysqli_query($con,$q2);
		$data2=mysqli_fetch_array($sql2);

	?>
	<h5 style="margin:40 0 0 900px">Date:</h5>
	</br>
	<h5 style="margin:-2 0 0 900px">Appeal No:<?php echo " ".$Id; ?></h5> 
	<?php echo "<h6><b>Name of appellant: </b>".$data3['name']."</h6> ";?>
	<h6><b>Address of appellant: </b><?php echo " ".$data3['address'];?></h6>
	<p>
		The present appeal dated <?php echo" ".$data2['transfer_date']; ?> has been preferred by Shri/Smt./Ms <?php echo" ".$data3['name']; ?> , hereinafter referred to
	    as the Appellant, against the order bearing reference No. . . . . . …… dated <?php echo" ".$data2['transfer_date']; ?>. of Shri/Smt./Ms <?php echo" ".$data3['name']; ?>, CPIO, Public Authority.

	   </br>
	  <u><b>Facts:</b></u>
	  	
	  	</br>

			2.	Shri/Smt./Ms <u><?php echo " ".$data3['name'];?></u>, the applicant, vide application dated <u><?php echo" ".$data3['date_of_receipt']; ?></u>. sought the following information under the RTI Act, 2005 from the CPIO, . . . . . . . . . . . . . . . .  . . . . . … . (name of Department/Organisation), 
			Public Authority:
	
	</br>
		<b><u>Decision:</u></b>
	</br>
		8.	The Appellant in paragraph ....... of his appeal dated <?php echo" ".$data2['transfer_date']; ?> has stated that ..  ..  ..  ..  (observation)/(reasoning), the decision/direction of the CPIO u/s …….. of the Right to Information Act, 2005, is upheld/not upheld. The CPIO is hereby directed to disclose/provide the information within 10 working days from the date of receipt of this order. 
	</br>
		9.	The Appeal is disposed of accordingly.
	</br>
		10.	A copy of this order be forwarded to the Appellant and the CPIO.
	</p>		
	 </br>
	 </br>
	 </br>
	 </br>
	 <h5 style="margin:-2 0 0 900px">Signature of Appellate Authority
      <h5 style="margin:-2 0 0 900px">(Name and designation)
      <h5 style="margin:-2 0 0 900px">(Name of Public Authority)
     </br>
	 </br>
     <h5> Place:</h5></br>
	<h5> Dated :</h5></br>
	<button style="margin:0 0 0 550px" type="button" name="mail_button" class=btn onclick="mailTo();">Mail</button>
	<button style="margin:0 0 0 50px" type="button" name="print_button" class=btn onclick="print();">Print</button>
</body>
</html>