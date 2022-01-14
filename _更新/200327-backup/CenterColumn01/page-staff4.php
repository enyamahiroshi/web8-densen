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
      <img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_04.jpg" alt="Ｙ社員" />
    </div>
    <?php //名前・肩書 ?>
    <div class="kobetsu-staff_meta clr">
      <div class="kobetsu-staff_name">Ｙ社員</div>
      <div class="kobetsu-staff_post">1995年 入社</div>
    </div>
  </div>
  
  <?php //仕事内容について ?>
  <div class="staff_kobetsu_box">
    <h2 class="obi_title-1">仕事内容について</h2>
    <dl class="staff_kobetsu-list">
      <dt>Q 思い出や印象に残っている仕事や出来事は何ですか？</dt>
      <dd class="clr">
        <div class="f_l">
          <img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_04-1.jpg" alt="Ｙ社員：仕事内容について" />
        </div>
        <p>入社し間もない頃、お客様の奥様から電話をお受けし、私の対応した言葉にお叱りを受けました。 その後業務の先輩にフォローをしてもらいましたが、顔が見えない電話対応こそ大事だと思いました。</p>
        <p>業務は、電話応対が多いですが会社の窓口になりますので、「お客様に感謝の気持ちを持って対応しなければいけない。」と、痛感しました。</p>
      </dd>
      <dt>Q どんな会社ですか？</dt>
      <dd>
        仕事に対しては熱意を燃やし、遊ぶ時は思いっきり楽しめる会社です。
      </dd>
      <dt>Q この会社、この仕事に向く人、先輩からのアドバイス</dt>
      <dd>
        電材卸業の知識が無くても、問題ありません。入社してから、周りの先輩・お客様・メーカーさんから学ぶ事が多くあります。何より、お客様と接する事が好きで、向上心をもった人が向いていると思います。
      </dd>
      <dt>Q 先輩からの就職活動のアドバイス</dt>
      <dd>
        会社を選ぶ際は、まったく経験のない仕事でも入社してみれば意外と自分に向いている事もあるので、選択枠から外さないという道もあるかと思います。
      </dd>
    </dl>
  </div>
  
  <?php //1日の流れ「ある日の業務記録」 ?>
  <div class="staff_kobetsu_box">
    <h2 class="obi_title-1">1日の流れ「ある日の業務記録」</h2>
    <table class="tbl-1">
      <tbody>
        <tr>
          <td class="staff_tbl_time">9:00</td>
          <th><em>午前業務</em></th><td>営業担当者の売上伝票発行、メーカーへの手配、入荷チェック、仕入</td>
        </tr>
        <tr>
          <td class="staff_tbl_time">12:00</td>
          <th><em>昼休憩</em></th><td>&nbsp;</td>
        </tr>
        <tr>
          <td class="staff_tbl_time">13:00</td>
          <th><em>午後業務</em></th><td>営業担当者から依頼の見積作成　消込　メーカーからの納期回答整理</td>
        </tr>
        <tr>
          <td class="staff_tbl_time">17:00</td>
          <th><em>退社</em></th><td>&nbsp;</td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <?php //わたしのキャリアパス ?>
  <div class="staff_kobetsu_box">
    <h2 class="obi_title-1">わたしのキャリアパス</h2>
    <div class="carrier_wrap">
      <div class="carrier_box">
        <img class="carrierpass" src="<?php echo get_template_directory_uri(); ?>/img/staff/staff4-carrier.png" alt="Ｙ社員 キャリアパス" />
      </div>
      <div class="carrier_mokuhyo">
        <h5>今後の目標</h5>
        <p>
          1社でも多くのお客様から、「注文はデンセンへ」と、言っていただけるような会社になるよう貢献していきたいと思います。
        </p>
      </div>
      <div class="carrier_yamaura_comment">
        <h5>産前産後休業（健康保険 出産手当金制度受給）と、<br />育児休業休暇（雇用保険、育児休業給付金受給）を受け感じたこと</h5>
        <p>
          第一子出産を機に退職。2年ほど経った頃、私が退職し代わりに入社した女性が妊娠したと連絡を受けて復帰することになりました。その後、第二子出産を控え産前産後休業と、育児休業休暇を受けました。まだ、私の周りにはこの制度を受けた人がいなかったので、不安なことばかりで本などを見て情報収集をしました。幸いにも、本社総務部より早くから出産手当金・育児休業制度等を受給する為の関係書類を用意していただき、更に私の休暇中の人材についても派遣社員を採用し、代替要員を各所頂きましたおかげで安心して子育てに専念する事ができました。
        </p>
      </div>
    	<img class="carrier_photo" src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_04-2.jpg" alt="Ｙ社員 キャリアパスの写真1" />
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
          <div class="staff_other_name">Ｔ課長代理</div>
          <div class="staff_other_post">2007年 入社</div>
        </a>
      </li>
      <li>
      	<a href="<?php echo esc_url(home_url('/')); ?>recruit/staff/staff3/">
        	<img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_03.jpg" alt="Ａ支店長" />
          <div class="staff_other_name">Ａ支店長</div>
          <div class="staff_other_post">2005年 入社</div>
        </a>
      </li>
      <li>
      	<a href="<?php echo esc_url(home_url('/')); ?>recruit/staff/staff4/">
        	<img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_04.jpg" alt="Ｙ社員" />
          <div class="staff_other_name">Ｙ社員</div>
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