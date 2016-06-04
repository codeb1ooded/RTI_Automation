<!--Processing of RTI application and response to the appellant-->	
<table width="100%" border="0" class="heading" cellpadding="0 0 0 15">
	<tbody>
		<tr><th colspan="2">(III) Processing of RTI application and response to the appellant:-</th></tr>
	</tbody>
</table>
<table width="100%" border="2" class="tbl-border" cellpadding="0" cellspacing="2">
	<form action ="responsetoappelant.php" method ="post">
	<tr>
		<th>(i) Date of receipt of information by the CPIO<br> from the holder(s) of information</th>
		<th><input type="text" name="holder_receipt_date" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th>
	</tr>	
	<tr>
		<th>(ii)Date of reply to appellant/complaint by CPIO</th>
		<th><input type="text" name="reply_date" maxlength="50" value="" class="name" placeholder="YYYY-MM-DD"></th></tr>
	</tr>
	<tr>
		<th>Mode of communicating reply </th><th>
		<input type="text" name="reply_mode" maxlength="50"></th>
	</tr>
	<tr>
		<th>Whether name and address of FAA mentioned in the</br> reply u/s 7(8)(give particulars)</th>
		<th><input type="text" name="faa_info" maxlength="50" value="" class="name" placeholder=""></th>
	</tr>
</table>
<th colspan="15"></th><th><input type="submit" name="submitresponse" value="Save and Exit"></th>
</form>