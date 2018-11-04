// JavaScript Document
function rankpage(pno)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","rank_details.php?pageno="+pno,true);
xmlhttp.send();
}


function changepass()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","change_password.php",true);
xmlhttp.send();
}
function contactcandidate()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","quick_contact.php",true);
xmlhttp.send();
}

function loadXMLDoc()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","rank_entry.php",true);
xmlhttp.send();
}
function updaterank(r)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","update_rank.php?rank="+r,true);
xmlhttp.send();
}

function candlist(pno)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","candidate_details.php?pageno="+pno,true);
xmlhttp.send();
}
function candpref(pno)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","candidate_preferences.php?pageno="+pno,true);
xmlhttp.send();
}
function clglist(pno)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","college_details.php?pageno="+pno,true);
xmlhttp.send();
}
function clgadd()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","college_entry.php",true);
xmlhttp.send();
}
function updateclg(str)
{
	var xmlhttp;
	if (str.length==0)
  	{ 
  		document.getElementById("ajaxpagecall").innerHTML="";
 	 	return;
  	}
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","update_clg.php?clgid="+str,true);
xmlhttp.send();
}

function noticeadd()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","upload_notice.php",true);
xmlhttp.send();
}
function noticelist()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","notice_details.php",true);
xmlhttp.send();
}
function editnotice()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","notice_details.php",true);
xmlhttp.send();
}

function admissionstatus(pno)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","admission_status.php?pageno="+pno,true);
xmlhttp.send();
}
function counsellingallotments(pno)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","counselling_allotments.php?pageno="+pno,true);
xmlhttp.send();
}
function startcounselling()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","start_counselling.php",true);
xmlhttp.send();
}
function counsellingschedule()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","counselling_schedule.php",true);
xmlhttp.send();
}
function newsdetails()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","news_details.php",true);
xmlhttp.send();
}
function editnewsdetails(x)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","edit_news.php?id="+x,true);
xmlhttp.send();
}
function addnews()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("right_content").innerHTML=xmlhttp.responseText;
    			}
  		}
xmlhttp.open("GET","add_news.php",true);
xmlhttp.send();
}
