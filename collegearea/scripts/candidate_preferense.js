$(document).ready(function(e){
var v1, v2, v3, v4, v5, v6, value1, value2, value3, pref_1, pref_2, pref_3;
		$('.button').click(function(e) {
            $('.lightboxbg, .lightbox').fadeIn(800);
			$('.pref_btn').attr('disabled', 'disabled');
        });
		$('.close').click(function(e) {
            $('.lightboxbg, .lightbox').fadeOut(800);
			$('input:checkbox:checked').removeAttr('checked','checked');
			$('input:checkbox').attr('disabled', false);
        });
		$('.close1').click(function(e) {
            $('#boxbg, #box').fadeOut(800);
        });
		$('#rounded-corner tr:odd').addClass('highlight');
		$('.pref_btn').click(function(e){
			counter(3);
			$('#counter').html('<img src = "images/a1.gif">');
			$('#counter').html();
			$('#pref1').text(v4);
			$('#pref2').text(v5);
			$('#pref3').text(v6);
			$('#p1').change(function(){
				value1 = $('#p1').val();
					if(value1 == 1 && value1 != 2 && value1 != 3) {
						pref_1 = v1;
						$('#p2 option[value=1]').prop('disabled', true);
						$('#p3 option[value=1]').prop('disabled', true);
					} else if(value1 == 2 && value1 != 1 && value1 != 3) {
						pref_2 = v2;
						$('#p2 option[value=1]').prop('disabled', false);
						$('#p3 option[value=1]').prop('disabled', false);
						
						$('#p2 option[value=2]').prop('disabled', true);
						$('#p3 option[value=2]').prop('disabled', true);
					} else {
						pref_3 = v3;
						$('#p2 option[value=2]').prop('disabled', false);
						$('#p3 option[value=2]').prop('disabled', false);
						
						$('#p2 option[value=3]').prop('disabled', true);
						$('#p3 option[value=3]').prop('disabled', true);
					}
			});
			$('#p2').change(function(){
				value2 = $('#p2').val();
					if(value2 == 1 && value2 != 2 && value2 != 3) {
						pref_1 = v1;
						$('#p1 option[value=1]').prop('disabled', true);
						$('#p3 option[value=1]').prop('disabled', true);
					} else if(value2 == 2 && value2 != 1 && value2 != 3) {
						pref_2 = v2;
						('#p1 option[value=1]').prop('disabled', false);
						$('#p3 option[value=1]').prop('disabled', false);
						
						$('#p1 option[value=2]').prop('disabled', true);
						$('#p3 option[value=2]').prop('disabled', true);
					} else {
						pref_3 = v3;
						('#p1 option[value=1]').prop('disabled', false);
						$('#p3 option[value=1]').prop('disabled', false);
						
						$('#p1 option[value=2]').prop('disabled', true);
						$('#p3 option[value=2]').prop('disabled', true);
					}
			});
			$('#p3').change(function(){
				value3 = $('#p3').val();
					if(value3 == 1 && value3 != 2 && value3 != 3) {
						pref_1 = v1;
						$('#p1 option[value=1]').prop('disabled', true);
						$('#p2 option[value=1]').prop('disabled', true);
					} else if(value3 == 2 && value3 != 1 && value3 != 3) {
						pref_2 = v2;
						('#p1 option[value=1]').prop('disabled', false);
						$('#p2 option[value=1]').prop('disabled', false);
						
						$('#p1 option[value=2]').prop('disabled', true);
						$('#p2 option[value=2]').prop('disabled', true);
					} else {
						pref_3 = v3;
						('#p1 option[value=1]').prop('disabled', false);
						$('#p2 option[value=1]').prop('disabled', false);
						
						$('#p1 option[value=2]').prop('disabled', true);
						$('#p2 option[value=2]').prop('disabled', true);
					}
			});
				
				$('#save_pref').click(function(){
					$('#save_massage').html('<img src="images/a2.gif" alt="" />');
						//if(value1 != '' && value2 != '' && value3 != '')
						//{	
							$.post('load.php', { name_1: pref_1, name_2: pref_2, name_3: pref_3 }, function(data) {
							$('#save_massage').text(data);
							});
							
						//}
					
				});
				
		});
		
	
	$('input:checkbox').change(function(e){
	var tempValue='';
	var name = '';
	tempValue=$('input:checkbox:checked').map(function(e){
			return  this.value;
	}).get().join(', ');
	
   if($( "input:checked" ).length == 3) {
	$("input:checkbox:not(:checked)").attr('disabled', true);
	$('.pref_btn').removeAttr('disabled', 'disabled');
		v = tempValue;
		var arr = v.split(', ');
		$('#display1').text(arr[0]);
		v1 = $('#display1').text();
		$('#display2').text(arr[1]);
		v2 = $('#display2').text();
		$('#display3').text(arr[2]);
		v3 = $('#display3').text();
		
	} else {
	$("input:checkbox:not(:checked)").attr('disabled', false);
	$('.pref_btn').attr('disabled', 'disabled');
		$('#display1').html();
		$('#display2').html();
		$('#display3').html();
	}
	
	name = $('input:checkbox:checked').map(function(e){
			return  $(this).attr('name');
	}).get().join(', ');
		if($( "input:checked" ).length == 3) {
			n = name;
			var arr = n.split(', ');
			$('#display4').text(arr[0]);
			v4 = $('#display4').text();
			$('#display5').text(arr[1]);
			v5 = $('#display5').text();
			$('#display6').text(arr[2]);
			v6 = $('#display6').text();
			
		} else {
			$('#display4').html();
			$('#display5').html();
			$('#display6').html();
		}
	});
});

function counter(time) {
		var interval = setInterval(function() {
			
			time -= 1;
			if(time == 0) {
				clearInterval(interval);
				$('#counter').text('');
				$('#boxbg, #box').fadeIn(800);
			}
		}, 1000);
	}
