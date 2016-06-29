function validatedate1(inputText)  {  
	var dateformat = /^(\d{4})-(\d{1,2})-(\d{1,2})/;  
	
	// Match the date format through regular expression  
	if(inputText.value.match(dateformat)) {  
		document.add_rti.date_of_receipt.focus();  
 
  		//Test which seperator is used '/' or '-'  
		var opera1 = inputText.value.split('/');  
		var opera2 = inputText.value.split('-');  
		lopera1 = opera1.length;  
		lopera2 = opera2.length;  

		// Extract the string into month, date and year  
		if (lopera1>1) {  
			var pdate = inputText.value.split('/');  
		} else if (lopera2>1) {  
			var pdate = inputText.value.split('-');  
		}  
		var dd = parseInt(pdate[2]);  
		var mm  = parseInt(pdate[1]);  
		var yy = parseInt(pdate[0]);  
		
		// Create list of days of a month [assume there is no leap year by default]  
		var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];  
		if(mm >12){
			document.add_rti.date_of_receipt.focus();
			alert('Month should be less than twelve!!! \nInvalid date format!');  
			return false; 
		}
		if (mm==1 || mm>2) {  
			if (dd>ListofDays[mm-1]) {  
				document.add_rti.date_of_receipt.focus();
				alert('Date exceeded!!! \nInvalid date format!');  
				return false;  
			}  
			else {
				return true;
			}
		}  
		if (mm==2) {  
			var lyear = false;  
			if ( (!(yy % 4) && yy % 100) || !(yy % 400)) {  
				lyear = true;  
			}  
			if ((lyear==false) && (dd>=29)) {  
				alert('Date exceeded!!! \nInvalid date format!');  
				document.add_rti.date_of_receipt.focus();
				return false;  
  			}  
			else if ((lyear==true) && (dd>29)) {  
				alert('Date exceeded!!! \nInvalid date format!');  
				document.add_rti.date_of_receipt.focus(); 
				return false;  
			}  
			else {
				return true;
			}
		}  
	}  
	else {  
		alert("Date format is not correct!!!! \nInvalid date format!");  
		document.add_rti.date_of_receipt.focus();  
		return false;  
	}  
}  

function validatedate2(inputText)  {  
	var dateformat = /^(\d{4})-(\d{1,2})-(\d{1,2})/;  
	
	// Match the date format through regular expression  
	if(inputText.value.match(dateformat)) {  
		document.add_rti.date_of_receipt_cio.focus();  
 
  		//Test which seperator is used '/' or '-'  
		var opera1 = inputText.value.split('/');  
		var opera2 = inputText.value.split('-');  
		lopera1 = opera1.length;  
		lopera2 = opera2.length;  

		// Extract the string into month, date and year  
		if (lopera1>1) {  
			var pdate = inputText.value.split('/');  
		} else if (lopera2>1) {  
			var pdate = inputText.value.split('-');  
		}  
		var dd = parseInt(pdate[2]);  
		var mm  = parseInt(pdate[1]);  
		var yy = parseInt(pdate[0]);  
		
		if(mm >12){
			document.add_rti.date_of_receipt_cio.focus();
			alert('Month should be less than twelve!!! \nInvalid date format!');  
			return false; 
		}
		// Create list of days of a month [assume there is no leap year by default]  
		var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];  
		if (mm==1 || mm>2) {  
			if (dd>ListofDays[mm-1]) {  
				document.add_rti.date_of_receipt_cio.focus();
				alert('Date exceeded!!! \nInvalid date format!');  
				return false;  
			}  
			else {
				return true;
			}
		}  
		if (mm==2) {  
			var lyear = false;  
			if ( (!(yy % 4) && yy % 100) || !(yy % 400)) {  
				lyear = true;  
			}  
			if ((lyear==false) && (dd>=29)) {  
				alert('Date exceeded!!! \nInvalid date format!');  
				document.add_rti.date_of_receipt_cio.focus();
				return false;  
  			}  
			else if ((lyear==true) && (dd>29)) {  
				alert('Date exceeded!!! \nInvalid date format!');  
				document.add_rti.date_of_receipt_cio.focus(); 
				return false;  
			}  
			else {
				return true;
			}
		}  
	}  
	else {  
		document.add_rti.date_of_receipt_cio.focus();  
		alert("Date format is not correct!!!! \nInvalid date format!");  
		return false;  
	}  
} 

function validatedate3(inputText)  {  
	var dateformat = /^(\d{4})-(\d{1,2})-(\d{1,2})/;  
	
	// Match the date format through regular expression  
	if(inputText.value.match(dateformat)) {  
		document.add_rti.fee_deposit_date.focus();  
 
  		//Test which seperator is used '/' or '-'  
		var opera1 = inputText.value.split('/');  
		var opera2 = inputText.value.split('-');  
		lopera1 = opera1.length;  
		lopera2 = opera2.length;  

		// Extract the string into month, date and year  
		if (lopera1>1) {  
			var pdate = inputText.value.split('/');  
		} else if (lopera2>1) {  
			var pdate = inputText.value.split('-');  
		}  
		var dd = parseInt(pdate[2]);  
		var mm  = parseInt(pdate[1]);  
		var yy = parseInt(pdate[0]);  
		
		// Create list of days of a month [assume there is no leap year by default]  
		var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];  
		if(mm >12){
			document.add_rti.fee_deposit_date.focus();
			alert('Month should be less than twelve!!! \nInvalid date format!');  
			return false; 
		}
		if (mm==1 || mm>2) {  
			if (dd>ListofDays[mm-1]) {  
				document.add_rti.fee_deposit_date.focus();
				alert('Date exceeded!!! \nInvalid date format!');  
				return false;  
			}  
			else {
				return true;
			}
		}  
		if (mm==2) {  
			var lyear = false;  
			if ( (!(yy % 4) && yy % 100) || !(yy % 400)) {  
				lyear = true;  
			}  
			if ((lyear==false) && (dd>=29)) {  
				alert('Date exceeded!!! \nInvalid date format!');  
				document.add_rti.fee_deposit_date.focus();
				return false;  
  			}  
			else if ((lyear==true) && (dd>29)) {  
				alert('Date exceeded!!! \nInvalid date format!');  
				document.add_rti.fee_deposit_date.focus(); 
				return false;  
			}  
			else {
				return true;
			}
		}  
	}  
	else {  
		document.add_rti.fee_deposit_date.focus();  
		alert("Date format is not correct!!!! \nInvalid date format!");  
		return false;  
	}  
}