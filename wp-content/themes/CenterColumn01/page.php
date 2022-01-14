<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php the_content(); ?>


<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
  </article><?php //.left_content ?>
  
  <article class="right_content">
  <?php get_sidebar(); ?>
  </article>

<?php get_footer(); ?>