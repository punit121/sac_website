$(document).ready(function(){
var currentindex = 0;
var items = $('.logo div');
var itemslength = items.length;

function cycleitems(){
	var item = $('.logo div').eq(currentindex);
    	items.hide();
    	item.css('display', 'inline-block');
    	item.addClass('fadeInLeftBig');
    	setTimeout(function(){
    		item.removeClass('fadeInLeftBig');
    	},1000);
}

var autoslide = setInterval(function() {
	currentindex += 1;
	if(currentindex > itemslength-1){
		currentindex = 0;
	}
	cycleitems();
}, 3000);
	
	$(window).scroll(function(){
		var position_top=$(document).scrollTop();
		if(position_top>=5){
			$('.slider').css('padding-top','60px');
			
		}else if(position_top<5){
			$('.slider').css('padding-top','90px');

		}
	} );

});
