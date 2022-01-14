<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<div class="t_c"><img src="<?php echo get_template_directory_uri(); ?>/img/structure/img_structure.png" alt="デンセン組織図" width="700" height="751"></div>


<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-company' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>