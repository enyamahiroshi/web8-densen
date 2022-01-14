/* --------------------------------------------------
	�X�}�z���̂�
-------------------------------------------------- */
var ua = navigator.userAgent;
if(ua.indexOf("iPhone") > 0 && ua.indexOf("iPod") == -1 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0 ){
	
	/* tel �����N���쓮������ */
	$(".link_tel").each(function(){
		var str = $(this).text();
		$(this).html($("<a>").attr("href", "tel:" + str.replace(/-/g, "")).append(str + "</a>"));
	});
	
	/*GMap�̃I�[�o�[���C���^�b�v�Ŕ�\���ɂ���*/
	var olyBox = ".map_overlay";
	var oly = ".map_overlay .btn_map_close";
	$(oly).on('touchend mouseup', function(){
		$(this).parent(olyBox).hide();
	});
	
}



/* --------------------------------------------------
	���j���[�^�b�v����70th���S���B���iz-index�����܂����삵�Ȃ����߁j
-------------------------------------------------- */	
$('.modal_switch').on('click', function(){
	$('.logo_70th').toggle();
});

/* --------------------------------------------------
	�r�K�[�����N�Fjquery.biggerlink.min.js
-------------------------------------------------- */	
$(".maker_name li, .staff_box").biggerlink();  

/* --------------------------------------------------
	�����𑵂���
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

/* �����𑵂�������s */
$(".maker_name li a").tile(); //���[�J�[�ꗗ

$(window).on("load resize" , function(){
	/* �X�}�z�͑����Ȃ��ꍇ */
	var ua = navigator.userAgent;
	if( !(ua.indexOf("iPhone") > 0 && ua.indexOf("iPod") == -1 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) ){
	 $(".branch_list_text").tile(); //�c�Ə��ꗗ
	 $(".staff_text").tile(); //��y�Ј��Љ�
	 $(".staff_other li a").tile(); //���̐�y�Ј�
	 $(".box-hems-2_bottom").tile(); //HEMS�����o��
	 $(".contents_nav li a").tile(); //�g�b�v��MV���̃����N
	}
});

/* --------------------------------------------------
	scrollTop�F�y�[�W�g�b�v�փX�N���[��
-------------------------------------------------- */
var topBtn = $('.page_top');	
topBtn.hide();
// �X�N���[���������ɒB������{�^���\��
$(window).scroll(function () {
	if ($(this).scrollTop() > 220) {
		topBtn.fadeIn(500,"swing");
	} else {
		topBtn.fadeOut(500,"swing");
	}
});
// �X�N���[�����ăg�b�v��
topBtn.click(function () {
$('body,html').animate({
	scrollTop: 0
}, 200);
return false;
});

/* --------------------------------------------------
	scrollToAnchor�F�y�[�W���A���J�[�փX�N���[��
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
	�t�H�[��
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
	addclear : �t�H�[���̃e�L�X�g�{�b�N�X�Ɂ~��ǉ�
-------------------------------------------------- */
//$("input").addClear();
