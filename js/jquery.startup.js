/*--------------------------------------------------------------------------*
 * rollOver on jQuery
 * rollOver tag:img,input
 * rollOver class:Over
 * rollOver FileName:*_o.*
 * Last modify:20081210
 * Licensed:MIT License
 * @author AkiraNISHIJIMA(http://nishiaki.probo.jp/)
 *--------------------------------------------------------------------------*/

$(function() {
    //ロールオーバー
    rollOver();
});

function rollOver(){
    var preLoad = new Object();
    $('img.Over,input.Over').not("[src*='_o.']").each(function(){
        var imgSrc = this.src;
        var fType = imgSrc.substring(imgSrc.lastIndexOf('.'));
        var imgName = imgSrc.substr(0, imgSrc.lastIndexOf('.'));
        var imgOver = imgName + '_o' + fType;
        preLoad[this.src] = new Image();
        preLoad[this.src].src = imgOver;
        $(this).hover(
            function (){
                this.src = imgOver;
            },
            function (){
                this.src = imgSrc;
            }
        );
    });
}


/*--------------------------------------------------------------------------*
 *  
 *  SmoothScroll JavaScript Library beta2
 *  
 *  MIT-style license. 
 *  
 *  2007-2010 Kazuma Nishihata 
 *  http://www.to-r.net
 *  
 *--------------------------------------------------------------------------*/
 
new function(){

	/*
	 *イベント追加用
	  -------------------------------------------------*/
	function addEvent(elm,listener,fn){
		try{ // IE
			elm.addEventListener(listener,fn,false);
		}catch(e){
			elm.attachEvent(
				"on"+listener
				,function(){
					fn.apply(elm,arguments)
				}
			);
		}
	}

	/*
	 *スムーズスクロール
	  -------------------------------------------------*/
	function SmoothScroll(a){
		if(document.getElementById(a.rel.replace(/.*\#/,""))){
			var e = document.getElementById(a.rel.replace(/.*\#/,""));
		}else{
			return;
		}
		
		//移動位置
		var end=e.offsetTop
		var docHeight = document.documentElement.scrollHeight;
		var winHeight = window.innerHeight || document.documentElement.clientHeight
		if(docHeight-winHeight<end){
			end = docHeight-winHeight;
		}


		//現在位置
		var start=window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
		
		
		var flag=(end<start)?"up":"down";

		function scrollMe(start,end,flag) {
			setTimeout(
				function(){
					if(flag=="up" && start >= end){
						start=start-(start-end)/20-1;
						window.scrollTo(0,start)
						scrollMe(start,end,flag);
					}else if(flag=="down" && start <= end){
						start=start+(end-start)/20+1;
						window.scrollTo(0,start)
						scrollMe(start,end,flag);
					}else{
						scrollTo(0,end);
					}
					return ;
				}
				,10
			);
			
		}

		scrollMe(start,end,flag)
		
	}

	/*
	 *スムーズ変換スクリプト
	  -------------------------------------------------*/
	addEvent(window,"load",function(){
		var anchors = document.getElementsByTagName("a");
		for(var i = 0 ; i<anchors.length ; i++){
			if(anchors[i].href.replace(/\#[a-zA-Z0-9]+/,"") == location.href.replace(/\#[a-zA-Z0-9]+/,"")){
				anchors[i].rel = anchors[i].href;
				anchors[i].href = "javascript:void(0)";
				anchors[i].onclick=function(){SmoothScroll(this)}
			}
		}
	});

}


/*--------------------------------------------------------------------------*
 *  
 *  dorop down header navigator
 *  
 *  2013 Yuko Shigeoka (komomodesign)
 *  http://www.komomo.biz/
 *  
 *--------------------------------------------------------------------------*/

$(function(){
	if( !(window.matchMedia('(max-width:640px)').matches )){
		init_menu();
	}
});

function init_menu(){
	$('li.dropdown-item').hover(
		function(){
			$(this).find('ul').slideDown(200);
		},
		function(){
			$(this).find('ul').hide();
		});
}


/*--------------------------------------------------------------------------*
 *  
 *  page top scroll fix
 *  
 *  http://www.webopixel.net/javascript/538.html
 *  
 *--------------------------------------------------------------------------*/

$(function() {
	var topBtn = $('#TopLink');	
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//スクロールしてトップ
    topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
    });
});




/*--------------------------------------------------------------------------*
 *  
 *  スマホグローバルナビ
 *  
 *--------------------------------------------------------------------------*/

$(function(){
	if( window.matchMedia('(max-width:640px)').matches ){
		var flg = "close";
		$("#BtnMenu img").click(function(){
			$('#GlobalNavigation').slideToggle();
			if(flg=="close") {
				this.src = "/theme/bccolors/img/sp/common/btn_close.png";
				flg = "open";
			} else {
				this.src = "/theme/bccolors/img/sp/common/btn_menu.png";
				flg = "close";
			}
		});
	}
})

