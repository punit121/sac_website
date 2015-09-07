$(document).ready(function(){
	$(window).scroll(function(){
		var position_top=$(document).scrollTop();
		if(position_top>=200){
			$('.place').addClass('navbar-fixed');
			$('.place').removeClass('position');
			$('.width12').css('width','80%');
		}else if(position_top<200){
			$('.place').removeClass('navbar-fixed');
			$('.place').addClass('position');
			$('.width12').css('width','100%');
		}
	} );
	 $(".button-collapse").sideNav();
	   $('.fixed-action-btn').openFAB();
	    $('.fixed-action-btn').closeFAB();
});
