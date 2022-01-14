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
      <img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_02.jpg" alt="T課長代理" />
    </div>
    <?php //名前・肩書 ?>
    <div class="kobetsu-staff_meta clr">
      <div class="kobetsu-staff_name">Ｔ課長</div>
      <div class="kobetsu-staff_post">2007年 入社</div>
    </div>
  </div>

  <?php //仕事内容について ?>
  <div class="staff_kobetsu_box">
    <h2 class="obi_title-1">仕事内容について</h2>
    <dl class="staff_kobetsu-list">
      <dt>Q 思い出や印象に残っている仕事や出来事は何ですか？</dt>
      <dd class="clr">
        <div class="f_l">
          <img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_02-1.jpg" alt="Ｔ部長：仕事内容について" />
        </div>
        <p>入社当時の頃、研修の一環として、「過去にお取引のあったお客様に会いに行き、改めて関係性を築く」という任務を与えられ、お客様を訪問する機会がありました。<br />それから一ヶ月間、毎日同じ時間に同じお客様のところへ通いつめ、仕事の話から身近な話題まで、会って話すことで、まず私自身を信頼して頂き、もう1度デンセンとお取引してもらえるような関係を築きたいと、一生懸命走る毎日。</p>
        <p>これは、お客様ごとに訪問する時間帯を決め、この時間になれば、デンセンの営業マンが訪問に来ると、まずは覚えていただこうという意味で続けました。しかし、なかなか注文が貰えず、苦労していた時、あるお客様から「今日も来るかな？」と連絡があり、「来るならコンセント一個持ってきてよ！」と受注の話を頂きました。一ヶ月苦労した分、その瞬間はとても嬉しかった。毎日毎日通うことで信頼関係が築けた。また、その仕事を通じ、自分自身に自信がつきました。</p>
        <p>あとは年始に弊社の様な卸商社が、年が明けて１年の始まりに電気工事店様に訪問をする初荷行事ですね。営業所長以下、所属の営業マンや内勤社員全員で、普段は顔を知らない他の担当エリアの顧客と顔を合わせる機会でも有りますし、普段電話でのみやり取りをしている内勤者とも顔を合わせて頂く事で、より信頼を深めて頂く良い機会になっているものと思います。</p>
      </dd>
      <dt>Q どんな会社ですか？</dt>
      <dd>
        営業、業務など社員全員に対して頑張っている人は、認めてくれる会社です。 一年に一回全社員が集って行う方針発表会で表彰が行われます。
      </dd>
      <dt>Q この会社、この仕事に向く人、先輩からのアドバイス</dt>
      <dd>
        何事にもやる気のある人、負けず嫌いな人　お酒も強い方が良いかもしれません(笑)
      </dd>
      <dt>Q 先輩からの就職活動のアドバイス</dt>
      <dd>
        早めに行動をして、熱意を相手に伝えられるように努力してください。
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
          <th><em>出社</em></th><td>&nbsp;</td>
        </tr>
        <tr>
          <td class="staff_tbl_time"></td>
          <th><em>午前業務</em></th><td>営業　配達</td>
        </tr>
        <tr>
          <td class="staff_tbl_time">12:00</td>
          <th><em>昼休憩</em></th><td>&nbsp;</td>
        </tr>
        <tr>
          <td class="staff_tbl_time"></td>
          <th><em>午後業務</em></th><td>営業　配達</td>
        </tr>
        <tr>
          <td class="staff_tbl_time">18:00</td>
          <th></th><td>見積・伝票整理</td>
        </tr>
        <tr>
          <td class="staff_tbl_time">19:00</td>
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
        <img class="carrierpass" src="<?php echo get_template_directory_uri(); ?>/img/staff/staff2-carrier.png" alt="T課長代理 キャリアパス" />
        <img class="carrier_photo" src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_02-3.jpg" alt="T課長代理 キャリアパスの写真2" />
      </div>
      <div class="carrier_mokuhyo">
        <h5>今後の目標</h5>
        <p>
          デンセンのＴに任せれば大丈夫！と言っていただける様にお得意様、メーカー様との信頼関係を築いていきたいと思います。
        </p>
      </div>
    	<img class="carrier_photo" src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_02-2.jpg" alt="T課長代理 キャリアパスの写真1" />
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