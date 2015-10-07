$(document).ready(function(){
	$(window).scroll(function(){
		var position_top=$(document).scrollTop();
		if(position_top>=120){
			$('.navbar').addClass('navbar-fixed-top');
			 $(".logo").attr("src", "img/logo.png");
			
			
		}else if(position_top<120){
			$('.navbar ').removeClass('navbar-fixed-top');
			$('.navbar ').addClass('navbar-inverse');
		 	$(".logo").removeAttr("src");
		}
	} );
	
});
