<?php //SPのみ：セパレート *?>
  <div class="hidePC separate_box"></div>

  <?php //リクルートページへ *?>
	<div class="side_box sidebox_recruit">
  	<a class="hideSP" href="<?php echo esc_url(home_url('/')); ?>recruit/" title="採用ページへ"><img src="<?php echo get_template_directory_uri(); ?>/img/common/side_bnr_recruit_PC.png" alt="あなただから、できること 採用ページ" width="259" height="190"></a>
    <a class="hidePC" href="<?php echo esc_url(home_url('/')); ?>recruit/" title="採用ページへ"><img src="<?php echo get_template_directory_uri(); ?>/img/common/side_bnr_recruit_SP.png" alt="あなただから、できること 採用ページ"></a>
  </div>

  <?php //バナーリンク：イベント・展示会 最新情報 ?>
  <div class="side_box">
    <p>
      <a href="https://job.mynavi.jp/22/pc/search/corp84755/outline.html"
      target="_blank">
      <img
      src="https://job.mynavi.jp/conts/kigyo/2022/logo/banner_entry_160_45.gif"
      alt="マイナビ2022" border="0">
      </a>
    </p>
    <p style="margin-bottom:1em;">
      <a href="<?php echo esc_url(home_url('/')); ?>event/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/bnr_news.png" alt="イベント・展示会 最新情報"></a>
    </p>
    <?php /*
    <p>
      <a href="https://www.densen.co.jp/ecatalog/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/bnr_book.png" alt="デジタルハンドブックはこちら"></a>
    </p>
    */ ?>
  </div>

  <?php //画像ナビ　?>
  <div class="side_box">
  	<ul class="side_img_nav">
		<li><a href="<?php echo esc_url(home_url('/')); ?>business/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/img_nav_sub_01.png" alt="デンセンだからできること"></a></li>
		<li><a href="<?php echo esc_url(home_url('/')); ?>hems/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/img_nav_sub_02.png" alt="HEMS（ヘムス）・スマート関連設備"></a></li>
		<li><a href="<?php echo esc_url(home_url('/')); ?>merchandise/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/img_nav_sub_03.png" alt="取扱商品・メーカー"></a></li>
		<li><a href="<?php echo esc_url(home_url('/')); ?>company/evmap/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/img_nav_sub_04.png" alt="EV電源"></a></li>
    </ul>
  </div>

  <?php //事業部ナビ（トップページ以外）
  if( !is_home() ): ?>
  <div class="side_box side_business">
  	<ul class="side_img_nav">
    	<li><a href="<?php echo esc_url(home_url('/')); ?>business/densetsu/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/img_nav_business_03-2.png" alt="電設資材事業"></a></li>
    	<li><a href="<?php echo esc_url(home_url('/')); ?>business/monodukuri/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/img_nav_business_02.png" alt="ものづくり支援事業"></a></li>
    	<li><a href="<?php echo esc_url(home_url('/')); ?>business/eco/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/img_nav_business_01.png" alt="ECO関連事業"></a></li>
    	<li><a href="https://www.densen.co.jp/kaigo/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/img_nav_business_04.png" alt="介護福祉サポート事業部"></a></li>
    </ul>
  </div>
  <?php endif; ?>

  <?php //お問合せこちら *?>
  <div class="side_box contact_info">
  	<h4>お電話でのお問合せは<br />各部門までお願い致します。</h4>
    <div class="contact_into">
    	<p class="contact_text">
      	<span>【営業時間】</span><br />8:15 〜 17:45（土日祝は除く）
      </p>
      <?php //ボタンリンク *?>
      <ul class="btn_link-1">
      	<li><a href="<?php echo esc_url(home_url('/')); ?>contact/"><i class="fa fa-envelope"></i>メールでのお問合せ</a></li>
      	<li><a href="<?php echo esc_url(home_url('/')); ?>company/branch/"><i class="fa fa-th"></i>営業所一覧</a></li>
      </ul>
    </div>
  </div>


  <?php //サイドバナーリンク *?>
  <div class="side_box">
  	<ul class="side_bnr_link">
    	<li><a href="https://eclub.densen.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/banner/banner_top_club.png" alt="デンセンクラブ"></a></li>
      <li><a href="https://www.densen.co.jp/kenshu_center/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/banner/banner_kensyucenter.png" alt="デンセン elife研修センター"></a></li>
      <li><a class="side-banner-link" href="https://www.densen.co.jp/news/6456/"><img src="https://www.densen.co.jp/wp-content/uploads/2020/03/2b-1.jpg" alt="GOALS"></a></li>
      <li><a href="https://www.densen.co.jp/news/6470/"><img src="https://www.densen.co.jp/wp-content/uploads/2020/02/banner-kosodatesengen-mini-bana-kosodate.png" alt="社員の子育て応援宣言"></a></li>
      <li><a class="side-banner-link" href="https://www.densen.co.jp/news/6449/"><img src="https://www.densen.co.jp/wp-content/uploads/2020/02/kosodatesengen-mini-bana-advense.png" alt="職場いきいきアドバンスカンパニー"></a></li>
    </ul>
  </div>
