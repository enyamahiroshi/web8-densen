<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>

<div class="business_block">
	<div class="business_img"><img src="<?php echo get_template_directory_uri(); ?>/img/business/ph_business03.jpg" alt="電設資材事業" width="252" height="138" /></div>
	<div class="business_right">
		<h2>電設資材事業</h2>
		<p>目に見える照明から、壁や天井裏の配線にいたるまで、安心・安全そして快適に暮らすためのサポートをしています。</p>
		<div class="button_white01"><a href="<?php echo esc_url(home_url('/')); ?>business/densetsu/">詳しくはこちら</a></div>
	</div>
</div>

<div class="business_block">
	<div class="business_img"><img src="<?php echo get_template_directory_uri(); ?>/img/business/ph_business02.jpg" alt="ものづくり支援事業" width="252" height="138" /></div>
	<div class="business_right">
		<h2>ものづくり支援事業</h2>
		<p>日本のものづくりを支えるワンストップソリューション。デンセンは、世界と戦う製造業のみなさんを応援します。</p>
		<div class="button_white01"><a href="<?php echo esc_url(home_url('/')); ?>business/monodukuri/">詳しくはこちら</a></div>
	</div>
</div>

<div class="business_block">
	<div class="business_img"><img src="<?php echo get_template_directory_uri(); ?>/img/business/ph_business01.jpg" alt="ECO関連事業" width="252" height="138" /></div>
	<div class="business_right">
		<h2>ECO関連事業</h2>
		<p>エネルギーを創る、貯める、管理する。太陽光発電を中心とした、地球に優しいクリーンエネルギーサービスをトータルサポートします。</p>
		<div class="button_white01"><a href="<?php echo esc_url(home_url('/')); ?>business/eco/">詳しくはこちら</a></div>
	</div>
</div>

<div class="business_block">
	<div class="business_img"><img src="<?php echo get_template_directory_uri(); ?>/img/business/ph_business04.png" alt="介護福祉サポート事業部" width="252" height="138" /></div>
	<div class="business_right">
		<h2>介護福祉サポート事業部</h2>
		<p>介護福祉サポート事業部では、お客様に「ゆとりと笑顔のある暮らし」をご提供できるよう、最適なサービスを提案させて頂きます。</p>
		<div class="button_white01"><a href="https://www.densen.co.jp/kaigo/">詳しくはこちら</a></div>
	</div>
</div>



<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>