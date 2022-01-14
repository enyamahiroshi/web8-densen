<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>



<div class="branch_map_info">
	<img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_marker_PC.png" alt="マーカー"><em>… 営業所</em>マップ内の営業所マーカーをクリックすると情報を表示します。
</div>

<?php //200424 google マイマップに変更 ?>
<div class="g-mymap_wrap">
<iframe src="https://www.google.com/maps/d/embed?mid=10O-Pf9Ic5YqLNrUAiNbhmAvHESd6Df05&ehbc=2E312F" width="640" height="480"></iframe>
</div>

<?php /* 200424以前のgooglemap
<div class="gmap_wrap">

<?php //Google Map カスタマイズ参考：http://objc-lovers.com/archives/210 ?>
  <div class="axgmap"
    data-latlng="36.401912,138.248889"
    data-zoom="7" >


    <?php //マーカー ?>
    <div class="branch_box"
      data-latlng="36.645066,138.235485"
      data-marker-image="<?php echo get_template_directory_uri(); ?>/img/branch/branch_marker_PC.png"
      data-title="本社/長野支店/長野営業所"
      data-window-open="false" >
        <div class="branch_add">〒381-8525<br />長野県長野市南長池713-1</div>
        <div class="branch_info">
          <h5 class="branch_name">本社</h5>
          <p class="branch_tel">026-251-0860</p>
          <p class="branch_fax">026-251-0889</p>
        </div>
				<div class="branch_info">
          <h5 class="branch_name">長野支店</h5>
          <p class="branch_tel">026-251-0870</p>
          <p class="branch_fax">026-251-0879</p>
        </div>
				<div class="branch_info">
          <h5 class="branch_name">長野営業所</h5>
          <p class="branch_tel">026-251-0870</p>
          <p class="branch_fax">026-251-0879</p>
        </div>
    </div>

    <?php //マーカー ?>
    <div class="branch_box"
      data-latlng="36.411072,138.232953"
      data-marker-image="<?php echo get_template_directory_uri(); ?>/img/branch/branch_marker_PC.png"
      data-title="上田支店/上田営業所/エネルギーソリューション営業部"
      data-window-open="false" >
        <div class="branch_add">〒386-0041<br />長野県上田市問屋町505</div>
        <div class="branch_info">
          <h5 class="branch_name">上田支店</h5>
          <p class="branch_tel">0268-27-8121</p>
          <p class="branch_fax">0268-27-8118</p>
        </div>
        <div class="branch_info">
          <h5 class="branch_name">上田営業所</h5>
          <p class="branch_tel">0268-27-8111</p>
          <p class="branch_fax">0268-24-4748</p>
        </div>
        <div class="branch_info">
          <h5 class="branch_name">エネルギーソリューション営業部</h5>
          <p class="branch_tel">0268-27-8131</p>
          <p class="branch_fax">0268-27-8150</p>
        </div>
        <div class="branch_info">
          <h5 class="branch_name">介護福祉サポート事業部 上田店</h5>
          <p class="branch_tel">0268-28-6170</p>
          <p class="branch_fax">0268-21-6167</p>
        </div>
    </div>

    <?php //マーカー ?>
    <div class="branch_box"
      data-latlng="36.212557,137.947835"
      data-marker-image="<?php echo get_template_directory_uri(); ?>/img/branch/branch_marker_PC.png"
      data-title="松本支店/松本営業所"
      data-window-open="false" >
        <div class="branch_add">〒390-0847<br />長野県松本市笹部4-11-9</div>
        <div class="branch_info">
          <h5 class="branch_name">松本支店</h5>
          <p class="branch_tel">0263-27-8833</p>
          <p class="branch_fax">0263-27-8877</p>
        </div>
        <div class="branch_info">
          <h5 class="branch_name">松本営業所</h5>
          <p class="branch_tel">0263-27-8844</p>
          <p class="branch_fax">0263-27-8866</p>
        </div>
    </div>

    <?php //マーカー ?>
    <div class="branch_box"
      data-latlng="36.25714,138.470967"
      data-marker-image="<?php echo get_template_directory_uri(); ?>/img/branch/branch_marker_PC.png"
      data-title="佐久営業所"
      data-window-open="false" >
        <div class="branch_add">〒385-0011<br />長野県佐久市猿久保661</div>
        <div class="branch_info">
          <h5 class="branch_name">佐久営業所</h5>
          <p class="branch_tel">0267-67-4440</p>
          <p class="branch_fax">0267-68-1355</p>
        </div>
    </div>

    <?php //マーカー ?>
    <div class="branch_box"
      data-latlng="36.753773,138.378022"
      data-marker-image="<?php echo get_template_directory_uri(); ?>/img/branch/branch_marker_PC.png"
      data-title="北信営業所"
      data-window-open="false" >
        <div class="branch_add">〒383-0013<br />長野県中野市中野1911-3</div>
        <div class="branch_info">
          <h5 class="branch_name">北信営業所</h5>
          <p class="branch_tel">0269-22-2252</p>
          <p class="branch_fax">0269-26-3331</p>
        </div>
    </div>

    <?php //マーカー ?>
    <div class="branch_box"
      data-latlng="35.562625,139.373602"
      data-marker-image="<?php echo get_template_directory_uri(); ?>/img/branch/branch_marker_PC.png"
      data-title="相模原営業所"
      data-window-open="false" >
        <div class="branch_add">〒229-0038<br />神奈川県相模原市中央区星が丘2-15-5</div>
        <div class="branch_info">
          <h5 class="branch_name">相模原営業所</h5>
          <p class="branch_tel">042-756-0696</p>
          <p class="branch_fax">042-757-1400</p>
        </div>
    </div>

    <?php //マーカー ?>
    <div class="branch_box"
      data-latlng="36.266898,138.85283"
      data-marker-image="<?php echo get_template_directory_uri(); ?>/img/branch/branch_marker_PC.png"
      data-title="富岡営業所"
      data-window-open="false" >
        <div class="branch_add">〒370-2412<br />群馬県富岡市妙義町下高田24-3</div>
        <div class="branch_info">
          <h5 class="branch_name">富岡営業所</h5>
          <p class="branch_tel">0274-73-3655</p>
          <p class="branch_fax">0274-73-3656</p>
        </div>
    </div>

    <?php //マーカー ?>
    <div class="branch_box"
      data-latlng="37.43155720635979,138.79101276397705"
      data-marker-image="<?php echo get_template_directory_uri(); ?>/img/branch/branch_marker_PC.png"
      data-title="長岡営業所"
      data-window-open="false" >
        <div class="branch_add">〒940-2127<br />新潟県長岡市新産3-8-8</div>
        <div class="branch_info">
          <h5 class="branch_name">長岡営業所</h5>
          <p class="branch_tel">0258-47-4700</p>
          <p class="branch_fax">0258-47-4701</p>
        </div>
    </div>

    <?php //マーカー ?>
    <div class="branch_box"
      data-latlng="36.570487,138.142835"
      data-marker-image="<?php echo get_template_directory_uri(); ?>/img/branch/branch_marker_PC.png"
      data-title="住宅ソリューション営業部/介護福祉サポート事業部 長野南店/elife研修センター"
      data-window-open="false" >
        <div class="branch_add">〒388-8006<br />長野県長野市篠ノ井御幣川1053-11</div>
				<div class="branch_info">
          <h5 class="branch_name">住宅ソリューション営業部</h5>
          <p class="branch_tel">026-299-5210</p>
          <p class="branch_fax">026-299-5211</p>
        </div>
				<div class="branch_info">
          <h5 class="branch_name">介護福祉サポート事業部 長野南店</h5>
          <p class="branch_tel">026-299-6165</p>
          <p class="branch_fax">026-299-6167</p>
        </div>
        <div class="branch_info">
          <h5 class="branch_name">elife研修センター</h5>
          <p class="branch_tel">026-299-8811</p>
          <p class="branch_fax">026-299-6167</p>
        </div>
    </div>

  </div>
	<?php //ここまで：Google Map カスタマイズ ?>

  <?php //スマホのみ：マップが動かないようにタップではずすオーバーレイレイヤー ?>
	<div class="map_overlay hidePC"><div class="btn_map_close"></div><span>左上の×をタップでMap操作が可能になります</span></div>

</div>
*/ ?>





<?php //本社 ?>
<h2 class="branch_title">本社</h2>
<ul class="branch_list clr">
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>本社</h3>
    <div class="branch_list_text">
    	〒381-8525<br />長野県長野市南長池713-1<br />TEL：026-251-0860<br />FAX：026-251-0889
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_nagano.jpg" alt="本社"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/honsha.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
</ul>


<?php //電材営業本部 ?>
<h2 id="stn" class="branch_title">電材営業本部</h2>
<ul class="branch_list clr">
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>長野支店</h3>
    <div class="branch_list_text">
    	〒381-8525<br />長野県長野市南長池713-1<br />TEL：026-251-0870<br />FAX：026-251-0879
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_nagano.jpg" alt="長野支店"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/nagano.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>上田支店</h3>
    <div class="branch_list_text">
    	〒386-0041<br />長野県上田市問屋町505<br />TEL：0268-27-8121<br />FAX：0268-27-8118
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_ueda.jpg" alt="上田支店"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/ueda.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>松本支店</h3>
    <div class="branch_list_text">
    	〒390-0847<br />長野県松本市笹部4-11-9<br />TEL：0263-27-8833<br />FAX：0263-27-8877
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_matsumoto.jpg" alt="松本支店"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/matsumoto.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
  <li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>佐久営業所</h3>
    <div class="branch_list_text">
    	〒385-0011<br />長野県佐久市猿久保661<br />TEL：0267-67-4440<br />FAX：0267-68-1355
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_saku.jpg" alt="佐久営業所"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/saku.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>北信営業所</h3>
    <div class="branch_list_text">
    	〒383-0013<br />長野県中野市中野1911-3<br />TEL：0269-22-2252<br />FAX：0269-26-3331
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_nakano.jpg" alt="北信営業所"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/hokushin.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>相模原営業所</h3>
    <div class="branch_list_text">
    	〒252-0238<br />神奈川県相模原市中央区星が丘2-15-5<br />TEL：042-756-0696<br />FAX：042-757-1400
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_sagamihara.jpg" alt="相模原営業所"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/sagamihara.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>富岡営業所</h3>
    <div class="branch_list_text">
    	〒370-2412<br />群馬県富岡市妙義町下高田24-3<br />TEL：0274-73-3655<br />FAX：0274-73-3656
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_tomioka.jpg" alt="富岡営業所"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/tomioka.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>長岡営業所</h3>
    <div class="branch_list_text">
    	〒940-2127<br />新潟県長岡市新産3-8-8<br />TEL：0258-47-4700<br />FAX：0258-47-4701
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_nagaoka2018.jpg" alt="長岡営業所"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/nagaoka.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
</ul>

<?php //FAソリューション営業本部 ?>
<h2 id="tkes" class="branch_title">FAソリューション営業本部</h2>
<ul class="branch_list clr">
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>上田営業所</h3>
    <div class="branch_list_text">
    	〒386-0041<br />長野県上田市問屋町505<br />TEL：0268-27-8111<br />FAX：0268-24-4748
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_ueda-tokki.jpg" alt="上田営業所"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/fa_ueda.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>長野営業所</h3>
    <div class="branch_list_text">
    	〒381-8525<br />長野県長野市南長池713-1<br />TEL：026-251-0890<br />FAX：026-251-0879
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_nagano.jpg" alt="長野営業所"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/fa_nagano.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>松本営業所</h3>
    <div class="branch_list_text">
    	〒390-0847<br />長野県松本市笹部4-11-9<br />TEL：0263-27-8844<br />FAX：0263-27-8866
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_matsumoto.jpg" alt="松本営業所"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/fa_matsumoto.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>Si推進部</h3>
    <div class="branch_list_text">
      〒386-0041<br />長野県上田市問屋町505<br />TEL：0268-27-8111<br />FAX：0268-24-4748
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_ueda-tokki.jpg" alt="Si推進部"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/fa_si-suishinbu.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
</ul>


<?php //ライフソリューション営業本部 ?>
<h2 id="esr" class="branch_title">ライフソリューション営業本部</h2>
<ul class="branch_list clr">
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>エネルギーソリューション営業部</h3>
    <div class="branch_list_text">
    	〒386-0041<br />長野県上田市問屋町505<br />TEL：0268-27-8131<br />FAX：0268-27-8150
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_ueda-tokki.jpg" alt="エネルギーソリューション営業部"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/energy_solution.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
  <li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>住宅ソリューション営業部</h3>
    <div class="branch_list_text">
    	〒388-8006<br />長野県長野市篠ノ井御幣川1053-11<br />TEL：026-299-5210<br />FAX：026-299-5211
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_kaigo-nagano.jpg" alt="住宅ソリューション営業部"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/jyuutakus.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
  <li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>介護福祉サポート事業部 長野南店</h3>
    <div class="branch_list_text">
    	〒388-8006<br />長野県長野市篠ノ井御幣川1053-11<br />TEL：026-299-6165<br />FAX：026-299-6167
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_kaigo-nagano.jpg" alt="介護福祉サポート事業部 長野南"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/kaigo_nagano.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
  <li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>介護福祉サポート事業部 上田店</h3>
    <div class="branch_list_text">
      〒386-0041<br />長野県上田市問屋町505<br />TEL：0268-28-6170<br />FAX：0268-21-6167
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_ueda-tokki.jpg" alt="介護福祉サポート事業部 上田"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/kaigo_ueda.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
</ul>
<p><i class="fa fa-angle-double-right"></i><a href="https://www.densen.co.jp/kaigo/" target="_blank">介護福祉サポート事業部サイトはこちら</a></p>

<?php //elife研修センター ?>
<h2 class="branch_title">elife研修センター</h2>
<ul class="branch_list clr">
	<li class="branch_list_item clr">
  	<h3 class="branch_list_title"><span>■</span>elife研修センター</h3>
    <div class="branch_list_text">
    	〒388-8006<br />長野県長野市篠ノ井御幣川1053-11<br />TEL：026-299-8811<br />FAX：026-299-6167
    </div>
    <div class="branch_list_img"><img src="<?php echo get_template_directory_uri(); ?>/img/branch/branch_ph_kaigo-nagano.jpg" alt="elife研修センター"></div>
    <div class="calender_link"><a href="<?php echo esc_url(home_url('/')); ?>pdf/2022/elife.pdf" target="_blank"><i class="fa fa-caret-right"></i>営業日カレンダー<img src="<?php echo esc_url(home_url('/')); ?>common/img/pdficon_large.png" alt="営業日カレンダーPDF"></a></div>
  </li>
</ul>
<p><i class="fa fa-angle-double-right"></i><a href="https://www.densen.co.jp/kenshu_center/" target="_blank">elife研修センターサイトはこちら</a></p>



<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-company' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>
