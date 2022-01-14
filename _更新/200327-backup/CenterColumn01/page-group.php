<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<div class="box_page_head">
『デンセンホールディングス』は、常にニュースを発信し続ける「企業群」です。<br>
IT時代の最先端で活躍するソフトウェア開発会社をはじめ、電気設備、エネルギーソリューション、介護関連、映像コンテンツ制作関連の4社からなる企業グループを形成。<br>
あらゆるジャンルで活躍するグループ企業とのネットワークを活かし、お客様の様々なご要望にお応え致します。
</div>

<div class="img_group">
	<img src="<?php echo get_template_directory_uri(); ?>/img/group/img_group.png" alt="デンセンホールディングス図" width="700" height="679">
	<a class="group_link_annex" href="http://www.annex-info.co.jp/" target="_blank">
		<img src="<?php echo get_template_directory_uri(); ?>/img/group/img_group_annex.png" alt="アネックス・インフォメーション株式会社" width="310" height="38">
	</a>
	<a class="group_link_annex-degital" href="http://annex-digital.com/" target="_blank">
		<img src="<?php echo get_template_directory_uri(); ?>/img/group/img_group_annex-degital.png" alt="アネックスデジタル株式会社" width="255" height="38">
	</a>
</div>

<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-company' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>