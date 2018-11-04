// JavaScript Document
function val_pass_set()
{
	var pass1= document.frm_pass_set.pass1.value;
	var pass2= document.frm_pass_set.pass2.value;

		
	if(pass1=='' || pass1==null)
		{
			document.getElementById("td_error_msg").innerHTML=" Sorry Password is Blank";
			document.getElementById("pass1").focus();
					
			return false;
		}
	
	if(pass2=='' || pass2==null)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry Retype Password is Blank";
		document.getElementById("pass2").focus();
		
		return false;
	}
	if(pass1 != pass2)
	{
		document.getElementById("td_error_msg").innerHTML=" Sorry Both Password Not Match";
		document.getElementById("pass2").focus();
		document.getElementById("pass1").focus();
		
		return false;
	}
}