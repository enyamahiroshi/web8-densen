<?php get_header(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php //ニュース新着記事リスト表示 ?>
<section class="entry_list_wrap">
	<?php
	$args = array( "cat" => "1,-11,-163", "posts_per_page" => 3 ); //ニュースの記事5件
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
	?>
	<h4 class="entry_list_title">ニュース<a class="show_acv" href="<?php echo esc_url(home_url('/')); ?>news/"><i class="fa fa-newspaper-o"></i>一覧</a></h4>
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
<?php //ここまで：ニュース新着記事リスト表示 ?>


<?php //イベント情報新着記事リスト表示 ?>
<section class="entry_list_wrap">
  <?php
  $args = array( "cat" => "168", "posts_per_page" => 3 ); //ニュースの記事5件
  $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) :
  ?>
  <h4 class="entry_list_title">イベント情報<a class="show_acv" href="<?php echo esc_url(home_url('/')); ?>news/event/"><i class="fa fa-newspaper-o"></i>一覧</a></h4>
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
<?php //ここまで：イベント情報新着記事リスト表示 ?>


<?php //採用サイトリスト表示 ?>
<section class="entry_list_wrap">
	<?php
	$args = array( "cat" => "11", "posts_per_page" => 3 ); //採用サイトの記事5件
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
	?>
	<h4 class="entry_list_title">採用サイト<a class="show_acv" href="<?php echo esc_url(home_url('/')); ?>news/recruit_news/"><i class="fa fa-newspaper-o"></i>一覧</a></h4>
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
<?php //ここまで：採用サイトリスト表示 ?>


<?php //バナーリンク ?>
<div class="bnr_link_box">
	<a href="<?php echo esc_url(home_url('/')); ?>company/evmap/"><img src="<?php echo get_template_directory_uri(); ?>/img/banner/bnr_ev.png" alt="EV車用 電源設置情報"></a>
	<a href="<?php echo esc_url(home_url('/')); ?>sales/"><img src="<?php echo get_template_directory_uri(); ?>/img/banner/bnr_urikomi.png" alt="売り込み大歓迎"></a>
	<a href="https://eco-megane.jp/" target="_blank"><img src="https://eco-megane.jp/img/bnr_300x80.gif" alt="太陽光発電見える化サービス エコめがね" /></a>
</div>


<?php // ここまで このページの内容----------------------------------------------- ?>
  </article><?php //.left_content ?>

  <article class="right_content">
  <?php get_sidebar(); ?>
  </article>

<?php get_footer(); ?>