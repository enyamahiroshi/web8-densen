<?php get_header(); ?>
<?php // ここから --------------------------------------------------------------------- ?>

<?php // カテゴリー情報を取得
$cat = get_the_category();
$cat = $cat[0];
$cat_name = $cat->cat_name; //カテゴリー名
$cat_slag = $cat->category_nicename; //スラッグ名
?>

<h2 class="page_title hidePC"><?php echo $cat_name; ?></h2>

<?php //エントリーボタン ?>	
<?php if(in_category('blog')): ?>
<div class="recruit_entry_btn_box"><a href="<?php echo esc_url(home_url('/')); ?>recruit/entry/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/btn_entry_sp.png" alt="GO求人エントリー"></a></div>
<?php endif; ?>

<section class="entry_wrap">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post_<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="entry_meta">
      <span class="entry_date"><?php the_time("Y.m.d"); ?></span><span class="entry_category">［ <?php echo get_the_category_list( ', ' ); ?> ］</span>
    </div>
    
		<h1 class="page_title"><?php the_title(); ?></h1>
    
		<div class="entry_body clr">
			<?php the_content(); ?>
			<?php //改ページがあった場合
			wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'st-bre') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
    
<?php //PDFファイル表示：WPプラグイン「PDF Thumbnails」使用時 --------------------------------------------
$pdf_1_title = post_custom("PDF-title-1");
$pdf_2_title = post_custom("PDF-title-2");
$pdf_3_title = post_custom("PDF-title-3");

$pdf_1_file_id = post_custom("PDF-file-1");
$pdf_2_file_id = post_custom("PDF-file-2");
$pdf_3_file_id = post_custom("PDF-file-3");

$pdf_1_url = wp_get_attachment_url($pdf_1_file_id); //PDFファイルURL
$pdf_2_url = wp_get_attachment_url($pdf_2_file_id); //PDFファイルURL
$pdf_3_url = wp_get_attachment_url($pdf_3_file_id); //PDFファイルURL

//PDFファイルの有無
if( ($pdf_1_title && $pdf_1_file_id) || ($pdf_2_title && $pdf_2_file_id) || ($pdf_3_title && $pdf_3_file_id) ){
	$flg_pdf = 1;
}
?>
	<?php if($flg_pdf > 0): //PDFファイルが1つでもあった場合 ?>
	<div id="attachedfiles" class="clr">
  	<h2>〈PDFファイルダウンロード〉</h2>
    <div class="informaition">
    	・サムネイルをクリックするとPDFを開きます。<br>
      ・下の［DOWNLOAD］をクリックするとPDFをダウンロードできます。
    </div>
		<ul class="sleeve">
    	<?php if($pdf_1_title && $pdf_1_file_id): //PDFファイル1があった場合 ?>
			<li class="col col3">
				<a href="<?php echo $pdf_1_url; ?>" target="_blank" class="pic"><?php echo get_the_post_thumbnail($pdf_1_file_id, "medium"); ?></a>
				<h3><?php echo $pdf_1_title; ?></h3>
        <div class="dl"><a href="<?php echo $pdf_1_url; ?>" download="">[DOWNLOAD]</a></div>
			</li>
			<?php endif; ?>
      <?php if($pdf_2_title && $pdf_2_file_id): //PDFファイル2があった場合 ?>
			<li class="col col3">
				<a href="<?php echo $pdf_2_url; ?>" target="_blank" class="pic"><?php echo get_the_post_thumbnail($pdf_2_file_id, "medium"); ?></a>
				<h3><?php echo $pdf_2_title; ?></h3>
        <div class="dl"><a href="<?php echo $pdf_2_url; ?>" download="">[DOWNLOAD]</a></div>
			</li>
			<?php endif; ?>
      <?php if($pdf_3_title && $pdf_3_file_id): //PDFファイル3があった場合 ?>
			<li class="col col3">
				<a href="<?php echo $pdf_3_url; ?>" target="_blank" class="pic"><?php echo get_the_post_thumbnail($pdf_3_file_id, "medium"); ?></a>
				<h3><?php echo $pdf_3_title; ?></h3>
        <div class="dl"><a href="<?php echo $pdf_3_url; ?>" download="">[DOWNLOAD]</a></div>
			</li>
      <?php endif; ?>
		</ul>
	</div>
  <?php endif; ?>
<?php //ここまで：PDFファイル表示 ------------------------------------------ ?>
    
	</article>
	
	<?php if(get_adjacent_post(true, '', true) || get_adjacent_post(true, '', false)): ?>
	<section class="nav_above">
		<div class="nav_previous">
			<?php previous_post_link( '%link', '%title<br><span>[%date]</span></a>' , TRUE ); ?>
		</div>
		<div class="nav_next">
			<?php next_post_link( '%link', '%title<br><span>[%date]</span></a>' , TRUE ); ?>
		</div>
	</section>
	<?php endif; ?>

	<?php endwhile; ?>
	
	<?php //コメントを受け付ける時 → comments_template( '', true ); ?>
	
	<?php else: ?>
	
	<div class="entry_body"><p>記事が見つかりません</p></div>
	
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
  

</section><?php //.entry_wrap ?>


<?php // ここまで --------------------------------------------------------------------- ?>

<?php //条件分岐：採用者ブログ以外
	if( !(in_category('blog')) ): ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php get_sidebar(); ?>
</article>
<?php endif; ?>

<?php get_footer(); ?>