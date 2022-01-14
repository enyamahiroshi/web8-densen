<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php //wrap_800px ?>	
<div class="wrap_800px">


<h1 class="page_title">採用Q&amp;A</h1>

  <?php //エントリーボタン ?>	
  <div class="recruit_entry_btn_box"><a href="<?php echo esc_url(home_url('/')); ?>recruit/entry/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/btn_entry_sp.png" alt="GO求人エントリー"></a></div>

<?php the_content(); ?>

</div><?php //.wrap_800px ?>	


<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>

<article class="right_content hidePC">
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>