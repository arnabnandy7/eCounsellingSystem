// JavaScript Document
function validateEmail(e) 
{ 
 var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
 if (reg.test(e)){
 return true; 
}
 else{
 return false;
 } 
} 

function validateNumber(n) 
{ 
 var reg = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
 if (reg.test(n)){
 return true; 
}
 else{
 return false;
 } 
} 
$(document).ready(function(e) {
    $('#name').attr("readonly", "readonly"); 
	$('#std').prop("disabled", true);

	/*$('#reg_step2').click(function(){
	var emln1 = $('#email').val();
	 var pas1 = $('#pass').val();
	  var repas1 = $('#repass').val();
	  var addr1 = $('#address').val();
	   var phn1 = $('#phone').val();
	if(emln1 == "" ||pas1 == "" || repas1 == "" || addr1 == "" || phn1 == ""){
		alert('Some Field is missing.');
		window.location = "candidate_registration2.php";
	}else{}
	});*/
	var count = '0';
	
	$('#email').focusout(function(e) {
        var emln = $('#email').val().length;
		var e = $('#email').val();
			if(emln < 1) {
				$('#label_email').addClass('error_msg');
				$('#label_email').text('*Email cannot be empty');
			} else {
				if (validateEmail(e)) {
 					//alert('Valid Email Address');
					$('#label_img1').html("<img src='images/tick.png' />");
					$('#label_email').text('');
				    return false;
       			} else {
					 //alert('Invalid Email Address');
					 $('#label_email').addClass('error_msg');
					 $('#label_email').text('*Invalid email address.');
					 $('#label_img1').html("<img src='' />");
					 return false;
				}
				$('#label_email').text('');
				$('#label_img1').html("<img src='images/tick.png' />");
				//count ++;
			}
    });
	
	$('#pass').focusout(function(e) {
        var pas = $('#pass').val().length;
			if(pas < 1) {
				$('#label_pass').addClass('error_msg');
				$('#label_pass').text('*Password cannot be empty');
				
			} else {
				$('#label_pass').text('');
				$('#label_img2').html("<img src='images/tick.png' />");
				//count ++;
			}
    });
	
	$('#repass').focusout(function(e) {
        var repas = $('#repass').val().length;
			if(repas < 1) {
				$('#label_repass').addClass('error_msg');
				$('#label_repass').text('*Retype Password cannot be empty');
			} else {
				$('#label_repass').text('');
				$('#label_img3').html("<img src='images/tick.png' />");
				//count ++;
			}
    });
	
	$('#address').focusout(function(e) {
        var addr = $('#address').val().length;
			if(addr < 1) {
				$('#label_address').addClass('error_msg');
				$('#label_address').text('*Address cannot be empty');
			} else {
				$('#label_address').text('');
				$('#label_img4').html("<img src='images/tick.png' />");
				//count ++;
			}
    });
	
	$('#phone').focusout(function(e) {
        var phn = $('#phone').val().length;
    	 var n = $('#phone').val();
			if(phn < 1) {
				$('#label_phone').addClass('error_msg');
				$('#label_phone').text('*Phone no. cannot be empty');
			} else {
				if (validateNumber(n)) {
 					//alert('Valid Email Address');
					$('#label_img5').html("<img src='images/tick.png' />");
					$('#label_phone').text('');
				    return false;
       			} else {
					 //alert('Invalid Email Address');
					 $('#label_phone').addClass('error_msg');
					 $('#label_phone').text('*Invalid phone no.');
					 $('#label_img5').html("<img src='' />");
					 return false;
				}
				$('#label_phone').text('');
				$('#label_img5').html("<img src='images/tick.png' />");
				//count ++;
			}
    });
	
	/*if(count == '5') {
		$('input[type=submit]').attr("enabled");
	}
	*/
	$('#pass').keyup(function(e) {
         var len=$('#pass').val();
		 $('#repass').keyup(function(e) {
            var len1=$('#repass').val();
			if(len==len1)
			{
					//$('#i2').html("<img src='education/images/tick.png' />");
					$('#repass').focusout(function(e) {
                    $('#label_img3').html("<img src='images/tick.png' />");
						//$('#label_img').show();
                    });
					
			}
			else
			{
				$('#repass').focusout(function(e) {
                        $('#label_img3').html("<img src='images/cross.png' />");
                 });
				
			}
        });
    });

});