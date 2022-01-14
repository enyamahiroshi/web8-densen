<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<div class="box_page_head">
	株式会社デンセンは、県内５拠点（長野・佐久・北信・上田・松本）に、皆様の電気自動車（EV）充電用コンセントを設置し、電気自動車ユーザーの充電インフラ補完手段（緊急用）として活用していただく取り組みをおこなっています。
</div>

<div class="box_ev_area">
	<a class="ev_area_01" href="https://www.google.com/maps/ms?msid=204611529538363400843.0004fbee99fcbc6d8bc79&msa=0&ll=36.644982,138.236117&spn=0.006568,0.011308&iwloc=0004fbee9c2840982e1ca" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/evmap/ev_area_01.png" alt="長野支店 詳細はこちら" width="232" height="113"></a>
	<a class="ev_area_02" href="https://www.google.com/maps/ms?msid=204611529538363400843.0004fbee99fcbc6d8bc79&msa=0&ll=36.257935,138.469507&spn=0.0033,0.005654&iwloc=0004fcb4d532ce5a4fd9c" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/evmap/ev_area_02.png" alt="佐久営業所 詳細はこちら" width="232" height="112"></a>
	<a class="ev_area_03" href="https://www.google.com/maps/ms?msid=204611529538363400843.0004fbee99fcbc6d8bc79&msa=0&ll=36.75282,138.37762&spn=0.006559,0.011308" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/evmap/ev_area_03.png" alt="北信営業所 詳細はこちら" width="232" height="113"></a>
	<a class="ev_area_04" href="https://www.google.com/maps/ms?msid=204611529538363400843.0004fbee99fcbc6d8bc79&msa=0&ll=36.410952,138.232593&spn=0.003294,0.005654&iwloc=0004fbee9c284080c6ef2" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/evmap/ev_area_04.png" alt="上田支店 詳細はこちら" width="247" height="98"></a>
	<a class="ev_area_05" href="https://www.google.com/maps/ms?msid=204611529538363400843.0004fbee99fcbc6d8bc79&msa=0&ll=36.212792,137.948182&spn=0.003302,0.005654&iwloc=0004fbee9c2840c123d72" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/evmap/ev_area_05.png" alt="松本営業所 詳細はこちら" width="232" height="112"></a>
  <div class="ev_ph_01"><img src="<?php echo get_template_directory_uri(); ?>/img/evmap/ev_ph_01.jpg" alt="EV充電を利用している写真" width="269" height="186"><br />オレンジのスタンドが目印です</div>
</div>

<table class="tbl-1 tbl-evmap1">
	<caption>デンセン EVご利用インフォメーション</caption>
  <tbody>
  	<tr>
    	<th>利用時間</th>
      <td>8:30～17:30（日曜・祝日・当社休日を除く）</td>
    </tr>
    <tr>
    	<th>利用条件</th>
      <td>緊急を要する際（電池残量切れ等）に限る。</td>
    </tr>
    <tr>
    	<th>利用者</th>
      <td>一般の方のみ。事業者の方（タクシー等）を除く。</td>
    </tr>
    <tr>
    	<th>利用方法</th>
      <td>設置事務所へ申し出いただき、利用申請を行い、充電器の鍵をお借りください。</td>
    </tr>
    <tr>
    	<th>充電時間</th>
      <td>2時間以内</td>
    </tr>
  </tbody>
</table>

<div class="bn_ev">全国の「全日電工連エマージェンシー充電ポイント」<br /><a href="http://www.ev-life.com/charging/emergency4.html#nagano" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/evmap/bn_ev.jpg" alt="EV-LIFE.com EVに関する総合ポータルサイト" width="267" height="102"></a></div>
  

<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-company' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>