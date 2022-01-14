<?php
$args = array( "cat" => "164", "posts_per_page" => 1 ); //銅ベース1件表示
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
?>
<div class="side_info">
<h4 class="side_info_title">銅ベース</h4>
<?php /* ↓↓↓ 記事繰り返しスタート ↓↓↓ */ ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <div class="side_info_detail">
    <p class="info_date"><?php the_time("Y.m.d"); ?>現在</p>
    <a href="<?php the_permalink(); ?>"><p class="info_desc"><?php the_title(); ?></p></a>
  </div>
  <?php endwhile; endif; ?>
<?php /* ↑↑↑ 記事繰り返しここまで ↑↑↑ */ ?>
</div>
<?php wp_reset_query(); ?>