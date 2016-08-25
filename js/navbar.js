$(document).ready(function(){
	$(window).scroll(function(){
		var position_top=$(document).scrollTop();
		if(position_top>=5){
			$('.navbar').css('height','60px');
			$('.nav').css('padding-top','0px');
			$('.navbar-brand').css('padding','0px');
			
		}else if(position_top<5){
			$('.navbar').css('height','90px');
			$('.nav').css('padding-top','20px');
			$('.navbar-brand').css('padding-top','15px');
		}
	} );
	
});
