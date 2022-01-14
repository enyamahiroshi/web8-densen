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
      <img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_01.jpg" alt="Ｔ部長" />
    </div>
    <?php //名前・肩書 ?>
    <div class="kobetsu-staff_meta clr">
      <div class="kobetsu-staff_name">Ｔ部長</div>
      <div class="kobetsu-staff_post">2000年 入社</div>
    </div>
  </div>

  <?php //仕事内容について ?>
  <div class="staff_kobetsu_box">
    <h2 class="obi_title-1">仕事内容について</h2>
    <dl class="staff_kobetsu-list">
      <dt>Q 思い出や印象に残っている仕事や出来事は何ですか？</dt>
      <dd class="clr">
        <div class="f_l">
          <img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_01-1.jpg" alt="Ｔ部長：仕事内容について" />
        </div>
        <p>展示会の実行委員に任命されて、企画やイベント、展示方法などの会議を経て、大勢のお客様にご来場いただき展示会を終えることが出来たこと。</p>
        <p>国の補助事業を活用し、提案から申請、事業完了までの一連の業務を完了出来たこと。</p>
        <p>現在の一番の思いは、18名を率いる拠点の責任者として重い責任と新たな挑戦に挑む意欲に満ちあふれています。</p>
      </dd>
      <dt>Q どんな会社ですか？</dt>
      <dd>
        雰囲気が良いです。仕事は、大変なことも多いですが、社員それぞれに個性があり助け合う心をもっている人が多く居ます。楽しむ時はには、力いっぱい楽しめる。そんな会社だと思います。
      </dd>
      <dt>Q この会社、この仕事に向く人、先輩からのアドバイス</dt>
      <dd>
        明るく挨拶ができ、我慢強い人。そして体が丈夫なこと。
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
          <td class="staff_tbl_time">8:20</td>
          <th><em>朝礼</em></th><td></td>
        </tr>
        <tr>
          <td class="staff_tbl_time">8:30</td>
          <th><em>午前業務</em></th><td>見積確認、拠点運営管理業務</td>
        </tr>
        <tr>
          <td class="staff_tbl_time">12:00</td>
          <th><em>昼休憩</em></th><td></td>
        </tr>
        <tr>
          <td class="staff_tbl_time">13:00</td>
          <th><em>午後業務</em></th><td>得意先訪問、現場対応、商談　他</td>
        </tr>
        <tr>
          <td class="staff_tbl_time">17:30</td>
          <th><em>帰社</em></th><td>事務処理（見積、商品手配）、実績進捗管理</td>
        </tr>
        <tr>
          <td class="staff_tbl_time">19:00</td>
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
        <img class="carrierpass" src="<?php echo get_template_directory_uri(); ?>/img/staff/staff1-carrier.png" alt="Ｔ部長 キャリアパス" />
        <img class="carrier_photo" src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_01-3.jpg" alt="Ｔ部長 キャリアパスの写真2" />
      </div>
      <div class="carrier_mokuhyo">
        <h5>今後の目標</h5>
        <p>
          先輩社員、他、営業部の方々の営業手法や戦力を学び、拠点運営に活かしていきたいです。また、成長してくれる後輩社員と共に、本当に満足をしていただいたお客様からの「ありがとう」を、分かち合いたいと思います。
        </p>
      </div>
    	<img class="carrier_photo" src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_01-2.jpg" alt="Ｔ部長 キャリアパスの写真1" />
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