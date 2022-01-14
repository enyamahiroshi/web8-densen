<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>
	
  
  <div class="sales_box clr">
  	<img class="f_r" src="<?php echo get_template_directory_uri(); ?>/img/sales/sale_img01.png" alt="売り込み大歓迎">
    <p>株式会社デンセンでは現在、新規取り扱い商品の開拓を推し進めております。</p>
    <p>産業分野・業種を問わず各方面でご活躍されている企業のご担当者様よりお薦めの商品をご提案していただけませんか？</p>
  </div>
  
  
  
  <h1 class="page_title">売り込み内容送信フォーム</h1>
  <p>以下の入力フォームへ必要事項を入力後、内容をよくお確かめいただき「送信する」ボタンを押してください。<br />個人情報のお取り扱いにつきましては、弊社<a href="<?php echo esc_url(home_url('/')); ?>privacy/">プライバシーポリシー</a>のページをご覧下さい。</p>
    
  <div class="contact_form">
    <?php echo do_shortcode( '[contact-form-7 id="419" title="売り込み大歓迎！"]' ); ?>
  </div>
   

<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>