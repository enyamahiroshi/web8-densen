<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<div class="box_hems">
  <h2 class="middle_title">HEMSとは？</h2>
  <div class="box_page_head_big">
    HEMS （Home Energy Management System/ヘムス）
  </div>
  <p>
    家庭のエネルギー管理システムをあらわします。<br />
  導入することで消費電力を使用する家電ごとに可視化（見える化）できるようになり、<br />
  その情報をもとに省エネするなどの、さまざまなサービスが受けられるようになります。
  </p>
  <h2 class="middle_title2 t_c">HEMS導入のイメージ図</h2>
  <img src="<?php echo get_template_directory_uri(); ?>/img/hems/hems_image1.png" alt="HEMS導入のイメージ図" width="700" height="392" />
</div>


<div class="box_hems">
  <h2 class="middle_title">HEMSを導入すると、何が変わるのか？</h2>
  <div class="box_hems-2">
  	<div class="box-hems-2_box">
    	<h3>現状の配電設備の場合</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/img/hems/hems_image3.png" alt="イラスト：現状の配電設備の場合" width="303" height="209" />
      <div class="box-hems-2_bottom">
      	<h4>月単位の電気使用量しかわからない</h4>
      	<p>毎月の検針で、一ヶ月単位の電気使用量がわかりますが一日単位や時間ごとの使用量を知ることはできません。</p>
      </div>
    </div>
    <div class="box_hems-2_sep"><img src="<?php echo get_template_directory_uri(); ?>/img/hems/hems_arrows1.png" alt="→" width="28" height="69" /></div>
  	<div class="box-hems-2_box">
    	<h3>HEMS導入した場合</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/img/hems/hems_image2.png" alt="イラスト：HEMS導入した場合" width="303" height="209" />
      <div class="box-hems-2_bottom">
      	<h4>知りたい時にそのつど、電気使用量がわかる！</h4>
      	<p>HEMS機器で、一日単位や時間ごとの電気使用量を見ることができます。</p>
      </div>
    </div>
  </div><?php //.box_hems-2 ?>
  <div class="box_page_head_big">
   エネルギーがいつでも見えるようになります。
  </div>
  <p class="t_r">イラストはイメージで、実際の設備や環境サービスと異なる場合があります。</p>
</div>


<div class="box_hems">
  <h2 class="middle_title">電力が見えるとは？</h2>
  <div class="box_hems-3">
  	<dl>
    	<dt>電力の変化が見えるようになります。</dt>
      <dd>日・時間などによる電気使用量の変化が一目でわかります。<img src="<?php echo get_template_directory_uri(); ?>/img/hems/hems_arrows2.png" alt="↓" width="66" height="27" /></dd>
      <dt>無駄が見つかります。<img src="<?php echo get_template_directory_uri(); ?>/img/hems/hems_image4.png" alt="イラスト：使用電力量予測図" width="115" height="77" /></dt>
      <dd>電気使用量のデータを通じて電力の無駄遣いを発見できます。<img src="<?php echo get_template_directory_uri(); ?>/img/hems/hems_arrows2.png" alt="↓" width="66" height="27" /></dd>
      <dt>省エネが出来るようになります。</dt>
      <dd>電気使用量の変化、無駄遣いを知ることで、電気使用量を抑えられます。</dd>
    </dl>
  </div>
</div>


<div class="box_hems">
  <h2 class="middle_title">HEMSで広がる、さまざまなサービス（予想）</h2>
  <div class="box_hems-4">
  	<img src="<?php echo get_template_directory_uri(); ?>/img/hems/hems_image5.png" alt="イラスト：HEMSさまざまなサービス（予想）" width="680" height="166" />
	</div>
</div>


<div class="button_area">
  <div class="button_white01"><a href="https://www.densen.co.jp/kenshu_center/information/products/tecnical/">もっと多くのHEMS情報はこちら<br /><span>デンセン「elife 研修センター」</span></a></div>
</div>


<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>