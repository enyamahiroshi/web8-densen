<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php //wrap_800px ?>
<div class="wrap_800px">


  <h1 class="page_title">先輩社員紹介</h1>

  <?php //スタッフ ?>
  <div class="kobetsu-staff_box clr">
    <?php //写真 ?>
    <div class="kobetsu-staff_img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_03.jpg" alt="Ａ本部長" />
    </div>
    <?php //名前・肩書 ?>
    <div class="kobetsu-staff_meta clr">
      <div class="kobetsu-staff_name">Ａ本部長</div>
      <div class="kobetsu-staff_post">2005年 入社</div>
    </div>
  </div>

  <?php //仕事内容について ?>
  <div class="staff_kobetsu_box">
    <h2 class="obi_title-1">仕事内容について</h2>
    <dl class="staff_kobetsu-list">
      <dt>Q 思い出や印象に残っている仕事や出来事は何ですか？</dt>
      <dd class="clr">
        <div class="f_l">
          <img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_03-1.jpg" alt="Ａ本部長：仕事内容について" />
        </div>
        <p>信州大学教育学部付属特別支援学校・信州大学教育学部付属長野中学校南校舎。</p>
        <p>お客様と一体になって仕事をさせていただいた思い出深い現場です。</p>
        <p>支店長へ就任した事の期待に応えられる様、拠点運営の変化に向けた取り組みを高い志を持って全力で推進したい。</p>
      </dd>
      <dt>Q どんな会社ですか？</dt>
      <dd>
        様々なチャレンジを歓迎する社風があります。
      </dd>
      <dt>Q この会社、この仕事に向く人、先輩からのアドバイス</dt>
      <dd>
        意欲的な人材が向いていると思います。何事も挑戦です。頑張ってください。
      </dd>
      <dt>Q 先輩からの就職活動のアドバイス</dt>
      <dd>
        様々な職種、企業があると思いますが、自分の可能性を信じて頑張ってください。
      </dd>
    </dl>
  </div>

  <?php //1日の流れ「ある日の業務記録」 ?>
  <div class="staff_kobetsu_box">
    <h2 class="obi_title-1">1日の流れ「ある日の業務記録」</h2>
    <table class="tbl-1">
      <tbody>
        <tr>
          <td class="staff_tbl_time">8:00</td>
          <th><em>出社</em></th><td></td>
        </tr>
        <tr>
          <td class="staff_tbl_time">9:00</td>
          <th><em>午前業務</em></th><td>拠点運営管理業務</td>
        </tr>
        <tr>
          <td class="staff_tbl_time">12:00</td>
          <th><em>昼休憩</em></th><td></td>
        </tr>
        <tr>
          <td class="staff_tbl_time">13:00</td>
          <th><em>午後業務</em></th><td>得意先回り、商談、見積り作成、社内業務、実績進捗管理</td>
        </tr>
        <tr>
          <td class="staff_tbl_time">19:30</td>
          <th><em>退社</em></th><td></td>
        </tr>
      </tbody>
    </table>
  </div>

  <?php //わたしのキャリアパス ?>
  <div class="staff_kobetsu_box">
    <h2 class="obi_title-1">わたしのキャリアパス</h2>
    <div class="carrier_wrap">
      <div class="carrier_box">
        <img class="carrierpass" src="<?php echo get_template_directory_uri(); ?>/img/staff/staff3_2-carrier.png" alt="Ａ本部長 キャリアパス" />
      </div>
      <div class="carrier_mokuhyo">
        <h5>今後の目標</h5>
        <p>
          日々進化する電気の世界、暮らしやすさを提案していきます。
        </p>
      </div>
    	<img class="carrier_photo" src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_03-2.jpg" alt="Ａ本部長 キャリアパスの写真1" />
    </div>
  </div>

  <?php //他の先輩社員 ?>
  <div class="staff_kobetsu_box">
    <h2 class="page_title">他の先輩社員</h2>
    <ul class="staff_other clr">
    	<li>
      	<a href="<?php echo esc_url(home_url('/')); ?>recruit/staff/staff1/">
        	<img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_01.jpg" alt="Ｔ部長" />
          <div class="staff_other_name">Ｔ部長</div>
          <div class="staff_other_post">2000年 入社</div>
        </a>
      </li>
      <li>
      	<a href="<?php echo esc_url(home_url('/')); ?>recruit/staff/staff2/">
        	<img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_02.jpg" alt="T課長代理" />
          <div class="staff_other_name">Ｔ課長</div>
          <div class="staff_other_post">2007年 入社</div>
        </a>
      </li>
      <li>
      	<a href="<?php echo esc_url(home_url('/')); ?>recruit/staff/staff3/">
        	<img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_03.jpg" alt="Ａ本部長" />
          <div class="staff_other_name">Ａ本部長</div>
          <div class="staff_other_post">2005年 入社</div>
        </a>
      </li>
      <li>
      	<a href="<?php echo esc_url(home_url('/')); ?>recruit/staff/staff4/">
        	<img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_04.jpg" alt="Ｙリーダー" />
          <div class="staff_other_name">Ｙリーダー</div>
          <div class="staff_other_post">1995年 入社</div>
        </a>
      </li>
    </ul>
  </div>

  <?php //エントリーボタン ?>
  <div class="recruit_entry_btn_box"><a href="<?php echo esc_url(home_url('/')); ?>recruit/entry/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/btn_entry_sp.png" alt="GO求人エントリー"></a></div>

</div><?php //.wrap_800px ?>



<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>

<article class="right_content hidePC">
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>