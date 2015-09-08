$(document).ready(function(){
	$(window).scroll(function(){
		var position_top=$(document).scrollTop();
		if(position_top>=200){
			$('.navbar navbar-inverse').addClass('navbar navbar-inverse navbar-fixed-top');
			$('.navbar navbar-inverse').removeClass('navbar navbar-inverse');
			
		}else if(position_top<200){
			$('.navbar navbar-inverse').removeClass('navbar navbar-inverse navbar-fixed-top');
			$('.navbar navbar-inverse').addClass('navbar navbar-inverse');
			
		}
	} );
	
});
