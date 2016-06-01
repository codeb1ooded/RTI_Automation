<!DOCTYPE html>
<html>
<head>
	<title>RTI Application Form</title>
</head>
<body>
<?php
	include 'logoff.html';
	$con = mysqli_connect("localhost","root",""); 
	if (!$con) 
	{ 
		die('Could not connect: ' . mysqli_error()); 
	} 
	mysqli_select_db($con, "rti"); 
	if(isset($_GET['id']))
	{
		$Id = $_GET['id'];
		$data = "SELECT * FROM  add_rti WHERE id=".$Id.";";
		$query = mysqli_query($con, $data);
		$data2 = mysqli_fetch_array($query);
?>
		<form action='modify.php'  method='post' id='Form_1458553627'>
		<!-- Personal details of applicant--> 
		<table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
			<tbody>
				<tr><th colspan="2">Personal Details of RTI Applicant:-</th></tr>
			</tbody>
		</table>
		 <input type="hidden" name="ID" value="<?php echo $Id ?>">
			<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
			<tbody>
				<tr>
                    <th class="THfirst"><samp style="color:#FF0000"><b>*</b></samp>Name of Applicant</th>
                    <td class="TDfirst">
						<input type="text" name="name" id="name" maxlength="50" value="<?php echo $data2['name']?>" class="name" placeholder="">
                    </td>
                </tr>
				<tr>
                    <th><samp style="color:#FF0000"><b>*</b></samp>Gender </th>
                    <td>
						<input type="text" name="gender" id="gender" value="<?php echo $data2['gender']?>"> 
                    </td>
				</tr>
				<tr>
					<th><samp style="color:#FF0000"><b>*</b></samp> Address</th>
					<td>
						<input type="text" name="address" id="address1" class="address" maxlength="100" value="<?php echo $data2['address']?>">
						<!--<add class="question"><img src="https://rtionline.gov.in/images/questionToolTip.png" /></add>-->
					</td>
				</tr>
				<tr>
					<th>Pin code</th>
					<td>
						<input type="text" name="pin_code" minlength="6" maxlength="6" onkeydown="return isNumeric(event.keyCode);" value="<?php echo $data2['pin_code']?>">
					</td>
				</tr>
				<tr>
					<th>Country</th>
					<td>
						<input type="text" name="country" id="chkstate" value="<?php echo $data2['country']?>">               
					</td>
				</tr>
				<tr>
					<th>State</th>
					<td>
						<input type="text" name="state" id="state" maxlength="18" value="<?php echo $data2['state']?>">
					</td>
				</tr>
				
		<tr>
			<th>Phone Number</th>
			<td>
			<input type="text" name="phone_no" id="phone" maxlength="18" onkeydown="return isNumeric(event.keyCode);" class="numeric" value="<?php echo $data2['phone_no']?>">
		<!--<phone class="question"><img src="https://rtionline.gov.in/images/questionToolTip.png" /></phone>-->
		<cite>Provide STD code with zero eg.01123456789</cite>
			</td>
		</tr>

		<tr>
			<th>Mobile Number<cite>(For receiving SMS alerts)</cite></th>
              <td><input type="text" name="mobile" id="cell" maxlength="15" class="numeric" onkeydown="return isNumeric(event.keyCode);" value="<?php echo $data2['mobile']?>">
				<cite>Provide Country code eg. +910123456789</cite>
				<!--<cell class="question"><img src="https://rtionline.gov.in/images/questionToolTip.png" /></cell>-->
				<!-- <cite>eg. 9400000001</cite>-->
			</td>
		</tr>
	
		<tr>
			<th><samp style="color:#FF0000"><b>*</b></samp> Email-ID</th>
			<td>
			<input type="text" name="email" maxlength="70" value="<?php echo $data2['email']?>" id="Email" class="watermark">
			<!--<email class="question"><img src="https://rtionline.gov.in/images/questionToolTip.png" /></email>-->
			</td>
		</tr>
       
		<tr>
			<th class="THfirst">Citizenship<cite>(Only Indian citizens can file RTI Request application)</cite>
			
			</th>
			<td >
			<input type="text" name="citizenship" id="Citizenship" class="selectLong" value="<?php echo $data2['citizenship']?>">
			</select></td>
		</tr>
			
		</tbody></table>
	<!--Receipt of RTI Application:- -->	<table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
			<tbody>
				<tr><th colspan="2">(I)Receipt of RTI Application:-</th></tr>
				<tr><th colspan="2">(Section 7)</th></tr>
			</tbody>
		</table>

			<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
	<tbody>
	
	<tr>
	<th>Date of receipt of RTI application by R & I section of public authority</th>
	<th><input type="text" name="date_of_receipt" id="Name" maxlength="50" value="<?php echo $data2['date_of_receipt']?>" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	
	<tr>
	<th>Date of its receipt by CPIO</th><th><input type="text" name="date_of_receipt_cio" id="Name" maxlength="50" value="<?php echo $data2['date_of_receipt_cio']?>" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	
	<tr>
		<th>Time between (1) & (2) in days</th><th> <input type="text" name="Name" id="Name" maxlength="50" value="<?php echo $data2['timespan']?>" class="name" placeholder=""></th>
	</tr> 
	</tbody> </table>
	
	<!-- Fee Payment Details-->	<table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
			<tbody>
				<tr><th colspan="2">(II) Fee Payment Details:-</th></tr>
				<tr><th colspan="2">(Rule-3 of RTI regulation of fee and cost rules)</th></tr>
			</tbody>
		</table>
			<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
	
	<tr>
		<th>Whether fee is enclosed with RTI application</th>
			<td>    
				<input type="text" name="fee_enclosed" value="<?php echo $data2['fee_enclosed']?>">
			</td>
	</tr>

	<tr>
		<th>Date of depositing fee</th>
		<th><input type="text" name="fee_deposit_date" maxlength="50" placeholder="YYYY-MM-DD" value="<?php echo $data2['fee_deposit_date']?>"></th>
	</tr>
	<tr>
		<th>Mode of payment(cheque/DD,cash,IPO)</th>
		<th><input type="text" name="pay_mode" maxlength="50" value="<?php echo $data2['pay_mode']?>"></th>
	</tr>
	</table>
	<!--Processing of RTI application and response to the appellant-->	<table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
			<tbody>
				<tr><th colspan="2">(III) Processing of RTI application and response to the appellant:-</th></tr>
			</tbody>
			</table>
			<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">

	<tr>
		<th>(i) Date of receipt of information by the CPIO<br> from the holder(s) of information</th>
		<th><input type="text" name="holder_receipt_date" id="Name" maxlength="50" value="<?php echo $data2['holder_receipt_date']?>" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>	
	<tr>
		<th>(ii)Date of reply to appellant/complaint by CPIO</th>
		<th><input type="text" name="reply_date" id="Name" maxlength="50" value="<?php echo $data2['reply_date']?>" class="name" placeholder="YYYY-MM-DD"></th></tr>
	<tr>
	<tr>
		<th>Time between (i)&(ii) days</th>
		<th><input type="text" name="reply_time" id="Name" maxlength="50" value="<?php echo $data2['reply_time']?>" class="name"></th>
	</tr>
	<tr>
		<th>Mode of communicating reply </th><th>
		<input type="text" name="reply_mode" maxlength="50" value="<?php echo $data2['reply_mode']?>"></th>
	</tr>
		<th>Whether name and address of FAA mentioned in the</br> reply u/s 7(8)(give particulars)</th>
		<th><input type="text" name="faa_info" id="Name" maxlength="50" value="<?php echo $data2['faa_info']?>" class="name" placeholder=""></th>
	</tr>
	
	</table>
	<!--Information providing,fee details--><table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
			<tbody>
				<tr><th colspan="2">(IV) Reference u/s 7 of RTI Act:- (where applicable)</th></tr>
			</tbody>
			</table>
			<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
	<tr>
		<th> Date of intimation given to appelant regarding fee u/s</br> 7(1) chargeable  and his right to review</th>
		<th><input type="text" name="info_fee_date" id="Name" maxlength="50" value="<?php echo $data2['info_fee_date']?>" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>Quantum of<br>(a) Fee & (b) Further fee indicated to be charged</th>
		<th><input type="text" name="info_fee" id="Name" maxlength="50" value="<?php echo $data2['info_fee']?>" class="name" placeholder=""></th>
	</tr>
	<tr>
		<th>(vi)Date of depositing fees by petitioner as demanded by CPIO </br>(indicate mode of depositing fee too)</th>
		<th><input type="text" name="fee_submit_date" id="Name" maxlength="50" value="<?php echo $data2['fee_submit_date']?>" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>(vii)Date of furnishing information </th>
		<th><input type="text" name="given_info_date" id="Name" maxlength="50" value="<?php echo $data2['given_info_date']?>" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>Time taken between (vi)&(vii) in days</th>
		<th><input type="text" name="info_time" id="Name" maxlength="50" value="<?php echo $data2['info_time']?> " class="name"></th>
		</tr>
	</table>
	<!--Reference to another CPIO-->	<table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
			<tbody>
				<tr><th colspan="2">(V) Reference u/s 6(3) of RTI Act:- (where applicable)</th></tr>
			</tbody>
			</table>
			<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
	<tr>
		<th>(iv)Date of transfer to another Public Authority</th>
		<th><input type="text" name="Asent_date" id="Name" maxlength="50" value="<?php echo $data2['Asent_date']?>" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>To whom was it transferred</br> (mention name,designation and address)</th>
		<th><input type="text" name="Ainfo" id="Name" maxlength="50" value="<?php echo $data2['Ainfo']?>" class="name" placeholder=""></th>
	</tr>
	<tr>
		<th>(v)Date of receipt by another Public Authority</th>
		<th><input type="text" name="Areceived_date" id="Name" maxlength="50" value="<?php echo $data2['Areceived_date']?>" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>Time between (iv)&(v)</th>
		<th><input type="text" name="Atime" id="Name" maxlength="50" value="<?php echo $data2['Atime']?> " class="name"></th>
	</tr>
	</table>
			
		<!-- APPEAL--> <table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
			<tbody>
				<tr>
					<th>(VI) I<sup>st</sup> Appeal:- (where applicable)</th>
				</tr>
			</tbody>
			</table>
			<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
	<tr>
		<th> Name and designation of the officer before whom <br>the 1<sup>st</sup> appeal is filed u/s 19(1)</th>
		<th><input type="text" name="appeal_info" id="Name" maxlength="50" value="<?php echo $data2['appeal_info']?> " class="name" placeholder=""></th>
	</tr>
	<tr>
		<th>Date of transfer of appeal by the receiving officer to FAA</th>
		<th><input type="text" name="transfer_date" id="Name" maxlength="50" value="<?php echo $data2['transfer_date']?> " class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>Date of receipt of appeal by FAA(mention name of FAA)</th>
		<th><input type="text" name="faa_receipt_date" id="Name" maxlength="50" value="<?php echo $data2['faa_receipt_date']?> " class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
	<tr>
		<th>Date of communicating decision to appelant </th>
		<th><input type="text" name="meet_date" id="Name" maxlength="50" value="<?php echo $data2['meet_date']?> " class="name" placeholder="YYYY-MM-DD"></th>
	</tr>
</table>

<table>
	<tbody>
		<tr>
			<th colspan="15"></th><th><input type="submit" name="add" id="addQuestions" value="Add Queries" class="btnaddQuestions"></th>
			<th colspan="15"></th><th><input type="submit" name="edit" id="addQuestions" value="Edit Queries" class="btnaddQuestions"></th>
			<th colspan="15"></th><th><input type="submit" name="submit" id="addQuestions" value="Save and Exit" class="btnaddQuestions"></th>
		
		</tr>
	</tbody>
 </table>

</form>		
	</body>
</html>
<?php } ?>