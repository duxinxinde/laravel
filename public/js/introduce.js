(function (win){ 
		var callboarTimer; 
		var callboard = jQuery('#callboard'); 
		var callboardUl = callboard.find('ul'); 
		var callboardLi = callboard.find('li'); 
		var liLen = callboard.find('li').length; 
		var initHeight = callboardLi.first().outerHeight(true); 
		win.autoAnimation = function (){ 
		if (liLen <= 1) return; 
		var self = arguments.callee; 
		var callboardLiFirst = callboard.find('li').first(); 
		callboardLiFirst.animate({ 
			marginTop:-initHeight 
		}, 500, function (){ 
			clearTimeout(callboarTimer); 
			callboardLiFirst.appendTo(callboardUl).css({marginTop:0}); 
			callboarTimer = setTimeout(self, 3000); 
		}); 
		} 
		callboard.mouseenter( 
			function (){ 
			clearTimeout(callboarTimer); 
		}).mouseleave(function (){ 
			callboarTimer = setTimeout(win.autoAnimation, 3000); 
		}); 
	}(window)); 
	setTimeout(window.autoAnimation, 3000);
$(function(){
	$('.content_left_School').hide();
	$('.content_left_School').eq(0).show();
	$('.School_li').css('cursor','pointer');
	$('.School_li').eq(0).css('background-color','#C01831')
	                     .css('color','#FFFFFF');
	$('.School_li').each(function(index){
		$(this).click(function(){
			$('.content_left_School').eq(index)
			                         .show()
			                         .siblings('.content_left_School')
			                         .hide();
			if($('.content_left_School').eq(index).css('display','block')){
				$('.School_li').eq(index)
				               .css('background-color','#C01831')
				               .css('color','#FFFFFF')
				               .siblings('.School_li')
				               .css('color','black')
				               .css('background-color','#FFFFFF');
			}
		})
	})
})