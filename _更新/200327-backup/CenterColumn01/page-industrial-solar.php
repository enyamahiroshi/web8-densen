<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>

<?php //メインコンテンツ ?>
<div class="industrial-solar_main">

	<h1 class="entry_list_title"><?php echo the_title(); ?></h1>

	<section class="intro_i-solar">
		<ul class="info_i-solar">
			<li>
				<h2 class="title_i-solar"><span class="num_circle">1</span>太陽光発電システム</h2>
				<p>公共・民間問わず豊富な施工実績による<br>
                                   万全のサポート体制で<br>
                                   システム導入をお手伝いします。</p>
			</li>
			<li>
				<h2 class="title_i-solar"><span class="num_circle">2</span>蓄電システム</h2>
				<p>万が一の際、非常用のバックアップ電源としてリチウムイオン蓄電池の導入をサポートします。</p>
			</li>
		</ul>
	</section>

	<section class="system_wrap">
		<h2 class="title_i-solar"><span class="num_circle">1</span>太陽光発電システム</h2>
		<img class="main_image" src="<?php echo get_template_directory_uri(); ?>/img/industrial-solar/img_panel.png" alt="太陽光発電システムイラスト">
		<ul class="list_disc">
			<li>商品の手配だけでなく、現場調査から設計、施工までを一貫してサポート致します。</li>
			<li>国への事業認定申請や電力会社への申請に加え、補助金申請等の各種書類作成をお手伝いします。</li>
			<li>障害発生時の一次対応や、製品寿命・故障などによる機器交換が発生した場合のご提案も可能です。</li>
		</ul>
	</section>

	<section class="system_wrap">
		<h2 class="title_i-solar"><span class="num_circle">2</span>蓄電システム</h2>
		<img class="main_image" src="<?php echo get_template_directory_uri(); ?>/img/industrial-solar/img_chikuden.png" alt="蓄電システムイラスト">
		<ul class="list_disc">
			<li>蓄電池に電気を貯めておくことで停電の際にも電気が使えます。</li>
			<li>太陽光発電と組み合わせることで、昼間であれば停電中でも充電できるシステムを構築することができます。</li>
			<li>蓄電池に貯めた電気を有効に長時間使用できる様、使う電気を計算し、最適なシステムをご提案します。</li>
		</ul>
	</section>

</div>

<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-eco' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>