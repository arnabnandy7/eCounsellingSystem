// JavaScript Document
//alert("working");
$(document).ready(function(e) {
    $('.admin_right').load("rank_entry.php");
	$('ul#one li a').click(function(e) {
       var page=$(this).attr('href');
	   //alert(page);
	   $('.admin_right').load(page +'.php');
	   return false;
    });
});