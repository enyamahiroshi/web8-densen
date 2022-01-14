<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>
	
  
<?php //wrap_800px ?>	
<div class="wrap_800px">

<h1 class="page_title">採用エントリーフォーム</h1>

  <p>以下の入力フォームへ必要事項を入力後、内容をよくお確かめいただき「送信する」ボタンを押してください。<br />個人情報のお取り扱いにつきましては、弊社<a href="<?php echo esc_url(home_url('/')); ?>privacy/">プライバシーポリシー</a>のページをご覧下さい。</p>
    
  <div class="contact_form">
    <?php echo do_shortcode( '[contact-form-7 id="2178" title="採用エントリーフォーム"]' ); ?>
  </div>
   
</div><?php //.wrap_800px ?>	


<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>