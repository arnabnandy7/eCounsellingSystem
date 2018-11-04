// JavaScript Document
function val_pass()
{
	var emailid= document.frm_pass.eno.value;
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		
		var rank= document.frm_pass.rank.value;
		
		
	if(emailid=='' || emailid==null)
		{
			document.getElementById("td_error_msg").innerHTML=" Sorry Email is Blank";
			document.getElementById("eno").focus();
					
			return false;
		}
	if(emailid!='' || emailid!=null)
	{ 
    	if(!(re.test(emailid)))
		{
			document.getElementById("td_error_msg").innerHTML=" Invalid Email";
			document.getElementById("eno").focus();
			return false;
		}
	}
	
	if(rank=='')
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry Rank is empty ";
		document.getElementById("rank").focus();
		
		return false;
	}
	if(rank!='')
	{
		for (i = 0; i < rank.length; i++)
		{	
			var c = rank.charAt(i);
			if(!((c >= "0") && (c <= "9")))
			{
				document.getElementById("td_error_msg").innerHTML=" Invalid Rank";
				document.getElementById("rank").focus();
		
				return false;
			}
		}
	} 
}