// JavaScript Document
$(document).ready(function(e) {
	//$('input[type=submit]').attr("disabled", "disabled");
	var count = 0;
	$('#eno').focusout(function(e) {
		 var e_no= $('#eno').val().length;
        if(e_no<1)
		{
			$('#label_eno').addClass('error_msg');
			$('#label_eno').text('*Enrolment no cannot be empty');
		}else{
				
			$('#label_eno').text('');
			count ++;
		}
			
    });
	$('#rank').focusout(function(e) {
        var rank_len=$('#rank').val().length;
		if(rank_len<1)
		{
			$('#label_rank').addClass('error_msg');
			$('#label_rank').text("*Rank cannot be empty");
		}else{
			$('#label_rank').text("");
			count ++;
		}
		
	});
		
		$('#birth').focusout(function(e) {
            var birth_len=$('#birth').val().length;
			if(birth_len<1)
			{
				$('#label_birth').addClass('error_msg');
				$('#label_birth').text("*Date of birth cannot be empty");
			}
			else{
				$('#label_birth').text("");
				count ++;
			}
        });
		
		if(count == 3) {
			$('input[type=submit]').attr("enabled");
		}
});