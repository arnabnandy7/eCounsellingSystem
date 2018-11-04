// JavaScript Document
function valid_rank_entry()
{
	var enrolment_no= document.frm1.eno.value;
	var name= document.frm1.name.value;
	var dob= document.frm1.dob.value;
	if(enrolment_no=='')
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry Enrolemt No is empty ";
		document.getElementById("eno").focus();
		
		return false;
	}
	if(enrolment_no.length != 8)
	{
		document.getElementById("td_error_msg").innerHTML=" Invalid Enrolment Number";
		document.getElementById("eno").focus();
		
		return false;
	}
	if(enrolment_no!='')
	{
		for (i = 0; i < enrolment_no.length; i++)
		{	
			var c = enrolment_no.charAt(i);
			if(!((c >= "0") && (c <= "9")))
			{
				document.getElementById("td_error_msg").innerHTML=" Invalid Enrolment Number";
				document.getElementById("eno").focus();
		
				return false;
			}
		}
	}
	if(name=='')
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry Name is empty ";
		document.getElementById("name").focus();
		
		return false;
	}
	if(name!='' || name!=null)
	{
		for (var i = 0; i < name.length; i++) 
		{
			var asciiNum = name.charCodeAt(i);
			if ((asciiNum == 32) || (asciiNum>64 && asciiNum<91) || (asciiNum>96 && asciiNum<123))
			{	
				
			} 
			else 
			{
				document.getElementById("td_error_msg").innerHTML=" Invalid Candidate Name";
				document.getElementById("name").focus();
					
				return false;
			}
		}
	}
	if(dob=='' || dob==null)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry Date of Birth is empty ";
		document.getElementById("dob").focus();
		
		return false;
	}
}