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

var div1=document.getElementById('div1');
		var obj=document.getElementById('content');
		var btn1=document.getElementById('btn1');
		var btn2=document.getElementById('btn2');
		var key=true;
		var keyd='left';
		obj.innerHTML=obj.innerHTML+obj.innerHTML+obj.innerHTML;
		obj.style.marginLeft='0px';
		div1.onmouseenter=function(){
			key=false;
		}
		div1.onmouseleave=function(){
			key=true;
		}
		aa();
		function aa(){
			var num=parseFloat(obj.style.marginLeft);
			if(key){
				if(keyd=='left'){
					num-=2;
					if(num<=-200*4){
						num=0;
					}
				}else{
					num+=2;
					if(num>=0){
						num=-200*4;
					}
				}
			}
			obj.style.marginLeft=num+'px';
			setTimeout("aa()",100);
		}