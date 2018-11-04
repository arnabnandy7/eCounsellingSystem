// JavaScript Document
function valid_college_entry()
{
	var clg_name= document.frm2.cname.value;
	var uni_name= document.frm2.s1.value;
	var clg_type= document.frm2.s2.value;
	var loc= document.frm2.loc.value;
	var intake= document.frm2.int.value;
	var ph1= document.frm2.ph1.value;
	var ph2= document.frm2.ph2.value;
	var website= document.frm2.wb.value;
	var emailid= document.frm2.mailid.value;
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	var re1 = /(http(s)?:\\)?([\w-]+\.)+[\w-]+[.com|.in|.org]+(\[\?%&=]*)?/;
	if(clg_name=='' || clg_name==null)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry College Name is Blank";
		document.getElementById("cname").focus();
					
		return false;
	}
	if(clg_name!='' || clg_name!=null)
	{
		for (var i = 0; i < clg_name.length; i++) 
		{
			var asciiNum = clg_name.charCodeAt(i);
			if ((asciiNum == 32) || (asciiNum>64 && asciiNum<91) || (asciiNum>96 && asciiNum<123))
			{	
				
			} 
			else 
			{
				document.getElementById("td_error_msg").innerHTML=" Invalid College Name";
				document.getElementById("cname").focus();
					
				return false;
			}
		}
	}
	if(uni_name=='' || uni_name==null)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry University is Unselect";
		document.getElementById("s1").focus();
					
		return false;	
	}
	if(clg_type=='' || clg_type==null)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry College Type is Unselect";
		document.getElementById("s2").focus();
					
		return false;	
	}
	if(loc=='' || loc==null)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry College Address is Blank";
		document.getElementById("loc").focus();
					
		return false;	
	}
	if(intake=='' || intake==null)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry Intake is Blank";
		document.getElementById("int").focus();
					
		return false;
	}
	if(intake!=''|| intake!=null)
	{
		for (i = 0; i < intake.length; i++)
		{	
			var c = intake.charAt(i);
			if(!((c >= "0") && (c <= "9")))
			{
				document.getElementById("td_error_msg").innerHTML=" Invalid Intake";
				document.getElementById("int").focus();
		
				return false;
			}
		}
	}
	if(ph1=='' || ph1==null)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry Phone 1 is Blank";
		document.getElementById("ph1").focus();
					
		return false;
	}
	if(ph1!=''|| ph1!=null)
	{
		for (i = 0; i < ph1.length; i++)
		{	
			var c = ph1.charAt(i);
			if(!((c >= "0") && (c <= "9")))
			{
				document.getElementById("td_error_msg").innerHTML=" Invalid Phone Number";
				document.getElementById("ph1").focus();
		
				return false;
			}
		}
	}
	if(ph2=='' || ph2==null)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry Phone 2 is Blank";
		document.getElementById("ph2").focus();
					
		return false;
	}
	if(ph2!=''|| ph2!=null)
	{
		for (i = 0; i < ph2.length; i++)
		{	
			var c = ph2.charAt(i);
			if(!((c >= "0") && (c <= "9")))
			{
				document.getElementById("td_error_msg").innerHTML=" Invalid Phone Number";
				document.getElementById("ph2").focus();
		
				return false;
			}
		}
	}
	if(website=='' || website==null)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry Website is Blank";
		document.getElementById("wb").focus();
					
		return false;
	}
	if(website!='' || website!=null)
	{ 
    	if(!(re1.test(website)))
		{
			document.getElementById("td_error_msg").innerHTML=" Invalid Website";
			document.getElementById("wb").focus();
			return false;
		}
	} 
	if(emailid=='' || emailid==null)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry Email is Blank";
		document.getElementById("mailid").focus();
					
		return false;
	}
	if(emailid!='' || emailid!=null)
	{ 
    	if(!(re.test(emailid)))
		{
			document.getElementById("td_error_msg").innerHTML=" Invalid Email";
			document.getElementById("mailid").focus();
			return false;
		}
	} 


}