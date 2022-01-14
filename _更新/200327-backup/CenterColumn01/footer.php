</article><?php // ここまで：.main_content ?>


<?php // ------------------------------------- フッター ?>
<footer>

	<?php //バナーエリア ?>
  <div class="footer_banner_wrap">
  	<ul class="footer_bnr_link">
    	<li class="footer_bnr_link_title"><img src="<?php echo get_template_directory_uri(); ?>/img/common/txtimg_footer_banner.png" alt="株式会社デンセンは信州のサッカーを応援しています。"></li>
      <li class="footer_bnr_link_bnr"><a href="https://www.yamaga-fc.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/banner/banner_top_yamaga.png" alt="松本山雅FC"></a></li>
      <li class="footer_bnr_link_bnr"><a href="https://parceiro.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/banner/banner_top_par.png" alt="AC長野パルセイロ"></a></li>
    </ul>
  </div>

  <?php //フッターナビエリア ?>
  <div class="footer_nav_wrap">

    <?php //フッターナビ ?>
    <div class="footer_nav clr">

    	<?php //ロゴとロゴ周り ?>
    	<div class="footer_nav_head">
      	<img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/img/common/logo1.png" alt="デンセンロゴ">
        <p>
        	<i class="fa fa-angle-double-right"></i><a href="<?php echo esc_url(home_url('/')); ?>contact/">お問合せ</a><br />
          <i class="fa fa-angle-double-right"></i><a href="<?php echo esc_url(home_url('/')); ?>privacy/">プライバシーポリシー</a><br />
          <i class="fa fa-angle-double-right"></i><a href="<?php echo esc_url(home_url('/')); ?>site-map/">サイトマップ</a>
        </p>
      </div>

      <?php //営業所一覧へのリンク ?>
      <div class="footer_nav_list_wrap">
        <ul class="footer_nav_list">
          <li class="footer_nav_title"><span>■</span>本社</li>
          <li>〒381-8525&nbsp;&nbsp;長野県長野市南長池713-1&nbsp;&nbsp;&nbsp;TEL 026-251-0860&nbsp;&nbsp;&nbsp;FAX 026-251-0889</li>
        </ul>
        <ul class="footer_nav_list">
          <li class="footer_nav_title"><span>■</span>電材営業部</li>
          <li>長野支店</li>
          <li>上田支店</li>
          <li>松本支店</li>
          <li>佐久営業所</li>
          <li>北信営業所</li>
          <li>相模原営業所</li>
          <li>富岡営業所</li>
          <li>長岡営業所</li>
        </ul>
        <ul class="footer_nav_list">
          <li class="footer_nav_title"><span>■</span>FAソリューション営業部</li>
          <li>上田営業所</li>
          <li>長野営業所</li>
          <li>松本営業所</li>
        </ul>
        <ul class="footer_nav_list">
          <li class="footer_nav_title"><span>■</span>エネルギーソリューション営業部</li>
        </ul>
        <ul class="footer_nav_list">
          <li class="footer_nav_title"><span>■</span>住宅ソリューション営業部</li>
        </ul>
        <ul class="footer_nav_list">
          <li class="footer_nav_title"><span>■</span>介護福祉サポート事業部</li>
          <li>長野南店</li>
          <li>上田店</li>
        </ul>
        <ul class="footer_nav_list">
          <li class="footer_nav_title"><span>■</span>elife研修センター</li>
        </ul>
      </div>

    </div>

		<?php //コピーライト ?>
    <div class="copyright"><span>&copy;</span> Densen Co., Ltd. All right reserved.</div>

  </div>

</footer>

<?php //ページトップへ ?>
<div class="page_top">
	<span class="icon fa fa-chevron-up"></span>
</div>


<?php //ここから：JavaScript 読込み------------------------------------------------------- ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo esc_url(home_url('/')); ?>common/js/jquery.easing.1.3.min.js"></script><?php //イージング効果 ?>
<script src="<?php echo esc_url(home_url('/')); ?>common/js/slidemenu-RtoL.js"></script><?php //スライダーメニュー ?>
<script src="<?php echo esc_url(home_url('/')); ?>common/js/prefixfree.min.js"></script><?php //CSS3ベンダープレフィックス自動付加 ?>
<script src="<?php echo esc_url(home_url('/')); ?>common/js/jquery.biggerlink.min.js"></script><?php //ビガーリンク ?>
<script src="<?php echo get_template_directory_uri(); ?>/site.js"></script>
<script src="<?php echo esc_url(home_url('/')); ?>common/js/addclear.min.js"></script><?php //inputにクリア用の×をつける ?>

<?php //------------------------ FAQページのみ ?>
<?php if(is_page("qanda") || is_page("recruit-qanda")): ?>
<script>
	var que = ".faq-question";
	var ans = ".faq-answer";
	$(ans).hide();
	$(que).click(function() {
		$(ans).toggleClass({"display":"none"});
		$(this).next().slideToggle("fast");
	});
	$(ans).click(function() {
		$(this).slideToggle("fast");
	});
</script>
<?php endif; ?>

<?php //------------------------ 営業所一覧のみ：Google Map カスタマイズ ?>
<?php if(is_page('branch')): ?>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php echo esc_url(home_url('/')); ?>common/js/jquery.axgmap.js"></script><?php //AxGmap:jsを書かずにGMapをカスタマイズ ?>
<?php endif; ?>

<?php //------------------------ メーカー一覧ページ内のみ ?>
<?php if(is_page(array('maker','onjun','download','link'))): ?>
<script src="<?php echo esc_url(home_url('/')); ?>common/js/jquery.sticky.js"></script><?php //追随メニュー ?>
<script>
	$("#maker_list_menu_wrap").sticky({ topSpacing: 160, center: false, className:"hey" });
</script>
<?php endif; ?>

<?php //------------------------ 採用サイトページ内のみ ?>
<?php if(is_page(array('recruit'))): ?>
<script src="<?php echo esc_url(home_url('/')); ?>common/js/covervid/covervid.min.js"></script><?php //背景に動画：CoverVid ?>
<script src="<?php echo esc_url(home_url('/')); ?>common/js/covervid/covervid_setting.js"></script><?php //CoverVid の全画面背景発動 ?>
<?php endif; ?>

<?php //------------------------ 採用サイト -- 先輩社員からのメッセージページのみ ?>
<?php if(is_page(array('freshman'))): ?>
<script src="<?php echo esc_url(home_url('/')); ?>common/js/bxslider/jquery.bxslider.js"></script><?php //スライダー：jquery.bxslider.js ?>
<script type="text/javascript">
$(document).ready(function(){
 var obj = $('.bxslider').bxSlider({
 mode:'fade', //エフェクトの種類
 speed      : 500, //エフェクトのスピード
 pager      : true , //ページャーの有無
 pagerCustom: '#bx-pager',//ページャーを画像にする
 auto       : false, //自動再生
 pause      : 4000, //静止時間
 slideWidth : 770, //スライドショーの幅
nextText: '＞',
prevText: '＜',
 responsive : false  //true or false
 });
});
</script>
<?php endif; ?>

<?php //ここまで：JavaScript 読込み------------------------------------------------------- ?>

<?php wp_footer(); ?>
</body>
</html>
