<?php get_header(); ?>
<?php // ここから --------------------------------------------------------------------- ?>

<?php // カテゴリー情報を取得
$cat = get_the_category();
$cat = $cat[0];
$cat_name = $cat->cat_name; //カテゴリー名
$cat_slag = $cat->category_nicename; //スラッグ名
?>


<?php //エントリーボタン ?>	
<?php if(is_category('blog')): ?>
<div class="recruit_entry_btn_box"><a href="<?php echo esc_url(home_url('/')); ?>recruit/entry/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/btn_entry_sp.png" alt="GO求人エントリー"></a></div>
<?php endif; ?>

<section class="archive_wrap">

<?php /* ページネーション */ ?>
<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>

<?php /* 記事が無い場合 */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post_0" class="post error404 not_found">
		<h1 class="entry_title">記事がありません。</h1>
		<div class="entry_body">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry_body -->
	</div><!-- #post-0 -->
<?php endif; ?>

<ul class="entry_list_box">
<?php /* ↓↓↓ 記事繰り返しスタート ↓↓↓ */ ?>
<?php while ( have_posts() ) : the_post(); ?>
  <li id="post_<?php the_ID(); ?>" <?php post_class(); ?>>
    <a class="entry_list" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">    
      <div class="entry_meta">
        <span class="entry_date"><?php the_time("Y.m.d"); ?></span><?php /*カテゴリー表示<span class="entry_category">［<?php the_category(" "); ?>］</span> */ ?>
      </div>
      <h2 class="entry_title"><?php the_title(); ?></h2>
    </a><!-- .entry_list-->
  </li><!-- #post-## -->
<?php endwhile; ?>
<?php /* ↑↑↑ 記事繰り返しここまで ↑↑↑ */ ?>
</ul><!-- .entry_list_box -->

<?php /* ページネーション */ ?>
<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>

</section><?php //.archive_wrap ?>


<?php // ここまで --------------------------------------------------------------------- ?>

<?php //条件分岐：採用サイトページ、採用者ブログ以外
	if( !(is_page('recruit') || is_category('blog') || '75' == $post->post_parent || '2115' == $post->post_parent ) ): ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php get_sidebar(); ?>
</article>
<?php endif; ?>

<?php get_footer(); ?>