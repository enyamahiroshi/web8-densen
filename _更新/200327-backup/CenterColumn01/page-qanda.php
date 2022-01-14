<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php
/*
※Q＆Aはプラグイン「WordPress FAQ Manager」使用。
ダッシュボードのメニュー「FAQs」から更新を行える。
*/
?>


<?php the_content(); ?>


<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
  </article><?php //.left_content ?>
  
  <article class="right_content">
  <?php //Q＆Aページのみ：サイドサブナビを表示 ?>
  <?php if(is_page('qanda')){ include('block-side-subNav-company.php'); } ?>
  <?php get_sidebar(); ?>
  </article>

<?php get_footer(); ?>