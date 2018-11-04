// JavaScript Document
function valid_reg1()
{
	var enrolment_no= document.reg1.eno.value;
	var rank= document.reg1.rank.value;
	var dob= document.reg1.birth.value;
	if(enrolment_no=='')
	{
		document.getElementById("label_eno").innerHTML=" Sorry Enrolemt No is empty ";
		document.getElementById("eno").focus();
		
		return false;
	}
	if(enrolment_no.length != 8)
	{
		document.getElementById("label_eno").innerHTML=" Invalid Enrolment Number";
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
				document.getElementById("label_eno").innerHTML=" Invalid Enrolment Number";
				document.getElementById("eno").focus();
		
				return false;
			}
		}
	}
	
	if(rank=='')
	{
		document.getElementById("label_rank").innerHTML=" Sorry Rank is empty ";
		document.getElementById("rank").focus();
		
		return false;
	}
	if(rank!='' || rank!=null)
	{
		for (i = 0; i < rank.length; i++)
		{	
			var c = rank.charAt(i);
			if(!((c >= "0") && (c <= "9")))
			{
				document.getElementById("label_rank").innerHTML=" Invalid Rank";
				document.getElementById("rank").focus();
		
				return false;
			}
		}
	}
	
	if(dob=='' || dob==null)
	{
		document.getElementById("label_birth").innerHTML=" Sorry Date of Birth is empty ";
		document.getElementById("birth").focus();
		
		return false;
	}
}