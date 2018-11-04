$(document).ready(function(){
	$('marquee#mark').mouseover(function(e) {
        this.stop();
    });
	$('marquee#mark').mouseout(function(e) {
        this.start();
    });

});
