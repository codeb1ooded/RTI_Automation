<!DOCTYPE html>
<html>
	<head>
		<title>Previous RTI</title>
	</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
		echo " Connection to the server failed ";
	
	$db=mysqli_select_db($conn,'rti');
	if(!$db)
		echo " Connection to the database failed ";
	
	$query=" SELECT * FROM add_rti";
    $res=mysqli_query($conn,$query);
	echo "<table  width=100% border=2>" ;
	echo "<form method=post action='./back.php'><tr>
			<th>ID</th>
			<th>Applicant Name</th>
			<th>Date of Receipt</th>
			<th>Last date</th>
			<th>Days left</th>
		</tr>";  
	while($r=mysqli_fetch_assoc($res))
	{		
		echo "<tr>";
			echo "<td>";
			echo "<a href='previd.php?id=".$r['id']."'>".$r['id']." </a></td>";
			echo "<td>".$r['name']."</td>"; 
			echo "<td>".$r['date_of_receipt_cio']."</td>"; 
			
			$d1=strtotime("$r[date_of_receipt_cio]");
		$mth=0;
		$day=30;
		$yr=0;
		$d2=date('Y-m-d h:i:s',mktime(date('h',$d1),date('i',$d1),date('s',$d1),date('m',$d1)+$mth,date('d',$d1)+$day,date('Y',$d1)+$yr));
		echo "<td>".date("Y-m-d",strtotime($d2))."</td>"; 
		
		//$cyr=date('Y',time());
		//$cmon=date('m',time());
		//$cday=date('d',time());
		//$d2=strtotime($d2);
		//$d3=date('Y-m-d h:i:s',mktime(date('h',$cday),date('i',$d2),date('s',$d2),date('m',$d2)-$cmon,date('d',$d2)-$cday,date('Y',$d2)-$cyr));
		//echo "<td>".date("Y-m-d",strtotime($d3))."</td>"; 
		//echo "<td>"<input type='submit' value='close' name='close' class='btn' id=clsbtn>"</td>"; 
		/*<?php 
			if(isset($_POST['close'])){
				insert into old VALUES($r['id'],$r['name'],$r['gender'],$r['address'],$r['pin_code'],$r['state'],$r['country'],$r['phone_no'],$r['mobile'],$r['email'],$r['citizenship'],$r['date_of_receipt_cpio'],$r['timespan'],$r['fee_enclosed'],$r['fee_deposit_date'],$r['paymode'],$r['holder_receipt_date'],$r['reply_date'],$r['reply_mode'],$r['reply_time'],$r['faa_info'],$r['info_fee_date'],$r['info_fee'],$r['fee_submit_date'],$r['given_info_date'],$r['info_time'],$r['Asent_time'],$r['Ainfo'],$r['Areceived_date'],$r['Atime'],$r['appeal_info'],$r['tranfer_date'],$r['faa_receipt_date'],$r['meet_date']);
				delete from add_rti where id=$r['id'];
		?>*/
		echo "</tr>";
	}
	echo "</table>";
?>
	<input type="submit" name="back" value="Back" />
</body>
</html>