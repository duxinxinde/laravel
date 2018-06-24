
$(function(){
	
	$('.StudyMenu_school').hover(function(){
		$index=$(this).index()-1;
		$('.bnr_bdr').eq($index).css('background-color','red')
	},function(){
		$index=$(this).index()-1;
		$('.bnr_bdr').eq($index).css('background-color','#59BCDB').css('transition','background-color .9s')
	});
	
	$('.School_content').hide();
	$('.School_content').eq(0).show();
	$('.School_li').eq(0).css('background-color','red').css('color','#FFFFFF');
	$('.School_li').each(function(index){
		$(this).click(function(){
			$('.School_content').eq(index)
		               .show()
		               .siblings('.School_content')
		               .hide();
		if($('.School_content').eq(index).css('display','block')){
			$('.School_li').eq(index)
			               .css('background-color','red')
			               .css('color','#FFFFFF')
			               .siblings('.School_li')
			               .css('background-color','#FFFFFF')
			               .css('color','black');
		}
		});

	});
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
			callboarTimer = setTimeout(self, 5000); 
		}); 
		} 
		callboard.mouseenter( 
			function (){ 
			clearTimeout(callboarTimer); 
		}).mouseleave(function (){ 
			callboarTimer = setTimeout(win.autoAnimation, 5000); 
		}); 
	}(window)); 
	setTimeout(window.autoAnimation, 5000);
		
});

