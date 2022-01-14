<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php //エントリーボタン ?>
<div class="recruit_entry_btn_box"><a href="<?php echo esc_url(home_url('/')); ?>recruit/entry/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/btn_entry_sp.png" alt="GO求人エントリー"></a></div>

<?php //新着記事リスト表示 ?>
<section class="entry_list_wrap">

	<?php
	$args = array( "cat" => 11, "posts_per_page" => 3 ); //採用サイトの記事3件
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
	?>

	<h4 class="entry_list_title">採用に関するお知らせ<a class="show_acv" href="<?php echo esc_url(home_url('/')); ?>news/recruit_news/"><i class="fa fa-newspaper-o"></i>一覧</a></h4>

  <ul class="entry_list_box">
  <?php /* ↓↓↓ 記事繰り返しスタート ↓↓↓ */ ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li id="post_<?php the_ID(); ?>" <?php post_class(); ?>>
      <a class="entry_list" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
        <div class="entry_meta">
          <span class="entry_date"><?php the_time("Y.m.d"); ?></span><?php /*カテゴリー表示<span class="entry_category">［<?php the_category(" "); ?>］</span> */ ?>
        </div>
        <h2 class="entry_title"><?php the_title(); ?></h2>
      </a><!-- .entry_list-->
    </li><!-- #post-## -->
  <?php endwhile; endif; ?>
  <?php /* ↑↑↑ 記事繰り返しここまで ↑↑↑ */ ?>
  </ul><!-- .entry_list_box -->
  <?php wp_reset_query(); ?>

</section>
<?php //ここまで：新着記事リスト表示 ?>

<?php //1分でわかる！デンセンの人たち ?>
<section class="minute_densen">
  <h2 class="minute_title">1分で分かる！デンセンの人たち</h2>
  <section class="wrap_minute_item">
    <div class="minute_item minute_item-1"><div class="minute_item_center"><span>長く働く人が多い<br>平均勤務年数</span><em>13年</em></div></div>
    <div class="minute_item minute_item-2"><div class="minute_item_center"><span>キャリアパスは、嘘じゃない<br>拠点長平均年齢</span><em>42歳</em></div></div>
    <div class="minute_item minute_item-3"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/staff-ph1.jpg" alt="スタッフ1"></div>
    <div class="minute_item minute_item-4"><div class="minute_item_center"><span>年齢構成の<br>バランスがいい<br>平均年齢</span><em>41歳</em></div></div>
    <div class="minute_item minute_item-5"><div class="minute_item_center"><span>先輩が<br>辞めてない<br>新卒者定着率</span><em>80%以上</em></div></div>
    <div class="minute_item minute_item-6"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/staff-ph2.jpg" alt="スタッフ2"></div>
    <div class="minute_item minute_item-7"><div class="minute_item_center"><span>定年後も、あなたと共に<br>継続雇用者人数</span><em>全社員の13%</em></div></div>
    <div class="minute_item minute_item-8"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/staff-ph3.jpg" alt="スタッフ3"></div>
  </section>
  <section class="minute_footer">
    あなたの人生と共に、仕事の喜びと共に<br>共に成長できる仲間との出会いに、期待しています。
  </section>
</section>

<?php //バナーリンク ?>
<div class="recruit_bnr_wrap clr">
	<a class="recruit_bnr bnr_01" href="<?php echo esc_url(home_url('/')); ?>recruit/guideline/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/bnr_01.jpg" alt="新卒採用要項"></a>
  <a class="recruit_bnr bnr_02" href="<?php echo esc_url(home_url('/')); ?>recruit/recruit-qanda/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/bnr_02.jpg" alt="採用Q&amp;A"></a>
  <a class="recruit_bnr bnr_03" href="<?php echo esc_url(home_url('/')); ?>recruit/staff/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/bnr_03.jpg" alt="デンセンのひと 先輩社員紹介"></a>
  <a class="recruit_bnr bnr_04" href="<?php echo esc_url(home_url('/')); ?>recruit/freshman/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/bnr_06.jpg" alt="先輩社員からのメッセージ"></a>
  <?php /*採用担当者ブログ：一時停止
  <a class="recruit_bnr bnr_05" href="<?php echo esc_url(home_url('/')); ?>recruit/blog/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/bnr_05.jpg" alt="採用担当者ブログ"></a>
	*/ ?>
</div>


<?php //その他のバナー ?>
<div class="other_bnr_wrap">

	<?php //youtube会社説明へ ?>
	<div class="setumei_link">
		<p>『株式会社デンセン 会社案内』</p>
		<a title="株式会社デンセン 会社案内動画" href="https://www.youtube.com/watch?feature=player_detailpage&v=kQTgJ6JmT1U" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/bnr_setumei.png" alt="株式会社デンセン 会社案内動画"></a>
    <a href="https://job.mynavi.jp/22/pc/search/corp84755/outline.html"
    target="_blank">
    <img
    src="https://job.mynavi.jp/conts/kigyo/2022/logo/banner_entry_160_45.gif"
    alt="マイナビ2022" border="0">
    </a>
  </div>

</div>



<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
