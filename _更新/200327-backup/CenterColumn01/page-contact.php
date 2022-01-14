<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>
	
  
  <p>以下の入力フォームへ必要事項を入力後、内容をよくお確かめいただき「送信する」ボタンを押してください。<br />個人情報のお取り扱いにつきましては、弊社<a href="<?php echo esc_url(home_url('/')); ?>privacy/">プライバシーポリシー</a>のページをご覧下さい。</p>
    
  <div class="contact_form">
    <?php echo do_shortcode( '[contact-form-7 id="4" title="お問合せ"]' ); ?>
  </div>
   

<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>