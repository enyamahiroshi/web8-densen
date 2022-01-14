/* --------------------------------------------------
	スマホ時のみ
-------------------------------------------------- */
var ua = navigator.userAgent;
if(ua.indexOf("iPhone") > 0 && ua.indexOf("iPod") == -1 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0 ){
	
	/* tel リンクを作動させる */
	$(".link_tel").each(function(){
		var str = $(this).text();
		$(this).html($("<a>").attr("href", "tel:" + str.replace(/-/g, "")).append(str + "</a>"));
	});
	
	/*GMapのオーバーレイをタップで非表示にする*/
	var olyBox = ".map_overlay";
	var oly = ".map_overlay .btn_map_close";
	$(oly).on('touchend mouseup', function(){
		$(this).parent(olyBox).hide();
	});
	
}



/* --------------------------------------------------
	メニュータップ時に70thロゴを隠す（z-indexがうまく動作しないため）
-------------------------------------------------- */	
$('.modal_switch').on('click', function(){
	$('.logo_70th').toggle();
});

/* --------------------------------------------------
	ビガーリンク：jquery.biggerlink.min.js
-------------------------------------------------- */	
$(".maker_name li, .staff_box").biggerlink();  

/* --------------------------------------------------
	高さを揃える
-------------------------------------------------- */	
$.fn.tile = function(columns) {
	var tiles, max, c, h, last = this.length - 1, s;
	if(!columns) columns = this.length;
	this.each(function() {
		s = this.style;
		if(s.removeProperty) s.removeProperty("height");
		if(s.removeAttribute) s.removeAttribute("height");
	});
	return this.each(function(i) {
		c = i % columns;
		if(c == 0) tiles = [];
		tiles[c] = $(this);
		h = tiles[c].height();
		if(c == 0 || h > max) max = h;
		if(i == last || c == columns - 1)
			$.each(tiles, function() { this.height(max); });
	});
};

/* 高さを揃えるを実行 */
$(".maker_name li a").tile(); //メーカー一覧

$(window).on("load resize" , function(){
	/* スマホは揃えない場合 */
	var ua = navigator.userAgent;
	if( !(ua.indexOf("iPhone") > 0 && ua.indexOf("iPod") == -1 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) ){
	 $(".branch_list_text").tile(); //営業所一覧
	 $(".staff_text").tile(); //先輩社員紹介
	 $(".staff_other li a").tile(); //他の先輩社員
	 $(".box-hems-2_bottom").tile(); //HEMS吹き出し
	 $(".contents_nav li a").tile(); //トップのMV下のリンク
	}
});

/* --------------------------------------------------
	scrollTop：ページトップへスクロール
-------------------------------------------------- */
var topBtn = $('.page_top');	
topBtn.hide();
// スクロールが◯◯に達したらボタン表示
$(window).scroll(function () {
	if ($(this).scrollTop() > 220) {
		topBtn.fadeIn(500,"swing");
	} else {
		topBtn.fadeOut(500,"swing");
	}
});
// スクロールしてトップへ
topBtn.click(function () {
$('body,html').animate({
	scrollTop: 0
}, 200);
return false;
});

/* --------------------------------------------------
	scrollToAnchor：ページ内アンカーへスクロール
-------------------------------------------------- */
scrollToAnchor();
function scrollToAnchor() {
	$("a[href*=#]").click(function() {
		var target = this.hash;
		var offset = $(target).offset().top;
		if (offset > $(document).height()-$(window).height()) {
			offset = $(document).height()-$(window).height();
		}
		$("html, body").animate({scrollTop:offset-160},{duration:1000, easing:"easeOutQuart"});
		return false;
	});
}

/* --------------------------------------------------
	FAQ
-------------------------------------------------- */
/*
var que = ".faq-question";
var ans = ".faq-answer";
$(ans).hide();
$(que).click(function() {
	$(this).next().slideToggle("fast");
});
*/

/* --------------------------------------------------
	フォーム
-------------------------------------------------- */
$inputArea = ".wpcf7-text, .wpcf7-textarea";

$($inputArea).css({"opacity":"0.7"}).on({
		"focus":function(){
		 $(this).css({"opacity":"1"});
	}, "blur":function(){
		 $(this).css({"opacity":"0.7"});
	}
});

/* --------------------------------------------------
	addclear : フォームのテキストボックスに×を追加
-------------------------------------------------- */
//$("input").addClear();
