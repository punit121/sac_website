$(document).ready(function(){
	$(window).scroll(function(){
		var position_top=$(document).scrollTop();
		if(position_top>=144){
			$('.navbar').addClass('navbar-fixed-top');
			 $(".logo").attr("src", "img/kgp.png");
			
			
		}else if(position_top<144){
			$('.navbar ').removeClass('navbar-fixed-top');
			$('.navbar ').addClass('navbar-inverse');
		 	$(".logo").removeAttr("src");
		}
	} );
	
});
