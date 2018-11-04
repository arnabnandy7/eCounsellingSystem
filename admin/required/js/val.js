function validate()
	{
		var a=document.frm1.ph1.value;
		var a1=document.frm1.ph2.value;
		var c;
		var fl=0;
				
		if(document.frm.name.value=="")
			{
				alert("Please enter your name.");
				document.frm.name.focus();
				return false;
			}	
		if(document.frm.eno.value=="")
			{
				alert("Please fill up enrollment number.");
				document.frm.eno.focus();
				return false;
			}	
		if( document.frm.name.value.length == 0 ) {
				alert('Please enter a name');
					document.frm.name.focus();
					return false;
			}
		
		
			return true;
	}
	function validate1()
	{
		if( document.frm1.cname.value.length == 0 ) {
				alert('Please enter college name');
					document.frm1.cname.focus();
					return false;
			}
		if( document.frm1.uname.value.length == 0 ) {
				alert('Please enter a name');
			document.frm1.uname.focus();
			return false;
			}
		if( document.frm1.wb.value.length == 0 ) {
			alert('Please enter website');
			document.frm1.wb.focus();
			return false;
			}
		if( document.frm1.ph1.value.length == 0 || document.frm1.ph1.value.length > 10) {
			alert('Please enter correct phone number.');
			document.frm1.ph1.focus();
			return false;
			}
		if( document.frm1.ph2.value.length > 10) {
			alert('Please enter correct phone number.');
			document.frm1.ph2.focus();
			return false;
			}
		if( document.frm1.loc.value.length == 0) {
			alert('Please enter valid address');
			document.frm1.loc.focus();
			return false;
			}
		if( document.frm1.mailid.value.length == 0 ) {
				alert('Please enter a valid email address');
					document.frm1.mailid.focus();
					return false;
			}
			else {
				//check email format
					var mail_id=document.frm1.mailid.value;
					var validEmail=true;
					if (mail_id.indexOf("@") < 1) validEmail=false;
					if (mail_id.indexOf(".") == -1) validEmail=false;
					if ((mail_id.indexOf(".") - mail_id.indexOf("@")) < 2) validEmail=false;
					if (!validEmail)
					{
						alert('Please enter a valid email address');
						document.frm1.mailid.focus();
						return false;
					}
				}
		if(document.frm1.ph1.value=="")
			{
				alert("Please provide your mobile number.");
				document.frm1.ph1.focus();
				return false;
			}	
			else
			{
				c=a.length;
				if(c!=10)		
				{
					alert("Invalid phone number.");
					document.frm1.ph1.focus();	
					return false;
				}
				
				for(i=1;i<=c;i++)
				{
					if(a[i]<0 && a[i]>9)
					{
						alert("Invalid phone number.");
						document.frm1.ph1.focus();	
						return false;
					}
				}
			}
	}
	function getKey(e)  
      {  
        if (window.event)  
           return window.event.keyCode;  
        else if (e)  
           return e.which;  
        else  
           return null;  
      }  
      function restrictChars(e)  
      {  
        var CHAR_AFTER_DP = 2;  // number of decimal places  
        var validList = "0123456789.";  // allowed characters in field  
        var key, keyChar;  
        key = getKey(e);  
          //alert(key);
        if (key == null) return true;  
        // control keys  
        // null, backspace, tab, carriage return, escape  
        if ( key==0 || key==8 || key==9 || key==13 || key==27 )  
           return true;  
        // get character  
        keyChar = String.fromCharCode(key);  
        // check valid characters  
        if (validList.indexOf(keyChar) != -1)  
        {  
          // check for existing decimal point  
          var value = $("#d input").val();
          var dp = value.indexOf( ".");              
          if( dp > -1)  
          {  
            if( keyChar == ".")  
              return false;  // only one allowed  
            else  
            {  
              // room for more after decimal point?  
              if( value.length - dp <= CHAR_AFTER_DP)  
                return true;  
            }  
          }  
          else return true;  
        }  
        // not a valid character  
        return false;  
      } 

$("#d input").keypress(function(event){
    return restrictChars(event);
});