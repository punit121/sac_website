$(document).ready(function(){
	$(window).scroll(function(){
		var position_top=$(document).scrollTop();
		if(position_top>=200){
			$('.navbar').addClass('navbar-fixed-top');
			$('.navbar').removeClass('');
			$('.nav').removeClass('navbar-left');
			$('.nav ').addClass('navbar-right');
			 $(".logo").attr("src", "http://placehold.it/60x60");
			
			
		}else if(position_top<200){
			$('.navbar ').removeClass('navbar-fixed-top');
			$('.navbar ').addClass('navbar-inverse');
			$('.nav').removeClass('navbar-right');
			$('.nav ').addClass('navbar-left');
		 	$(".logo").removeAttr("src");
		}
	} );
	
});
