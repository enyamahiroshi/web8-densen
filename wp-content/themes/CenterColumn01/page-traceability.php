<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>

<div class="traceability_main">


	<h1 class="entry_list_title">トレサビリティ</h1>

	<h2 class="middle_title">高精細　YAGレーザーマーカー</h2>

	<section class="lm2500-mv">
		<img src="<?php echo get_template_directory_uri(); ?>/img/traceability/lm2500-mv.jpg" alt="brother LM-2500 レーザーマーカー">
	</section>

	<?php //POINT -  ?>
	<section class="lm2500-point-wrap lm2500-point_1">
		<h3 class="point_title"><span>POINT1</span>高精細</h3>
		<div class="inner_point_wrap">
			<h4 class="point_sub_title">素材に熱影響を与えにくいクリアな印字。</h4>
			<span>［印字サンプル］</span>
			<ul class="point1_sample">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/traceability/lm2500-point1-1.jpg" alt="電磁銅板">
					<dl class="sample_meta">
						<dt>素材</dt>
						<dd>電磁銅板</dd>
						<dt>対象物</dt>
						<dd>モーター部品</dd>
						<dt>印字例</dt>
						<dd>生産情報</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/traceability/lm2500-point1-2.jpg" alt="樹脂（ABS）">
					<dl class="sample_meta">
						<dt>素材</dt>
						<dd>樹脂（ABS）</dd>
						<dt>対象物</dt>
						<dd>スイッチ部品</dd>
						<dt>印字例</dt>
						<dd>ロット番号</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/traceability/lm2500-point1-3.jpg" alt="ステンレス">
					<dl class="sample_meta">
						<dt>素材</dt>
						<dd>ステンレス</dd>
						<dt>対象物</dt>
						<dd>医療ピンセット</dd>
						<dt>印字例</dt>
						<dd>データマトリックス</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/traceability/lm2500-point1-4.jpg" alt="アルミ">
					<dl class="sample_meta">
						<dt>素材</dt>
						<dd>アルミ</dd>
						<dt>対象物</dt>
						<dd>名刺ケース</dd>
						<dt>印字例</dt>
						<dd>JPEG画像データ</dd>
					</dl>
				</li>
			</ul>
		</div>
	</section>

	<?php //POINT -  ?>
	<section class="lm2500-point-wrap lm2500-point_2">
		<h3 class="point_title"><span>POINT2</span>簡単設定</h3>
		<div class="inner_point_wrap">
			<h4 class="point_sub_title">導入したその日からすぐ印字が可能。<br>プリンター感覚で簡単印字！</h4>
			<img src="<?php echo get_template_directory_uri(); ?>/img/traceability/lm2500-point2-1.png" alt="徹底サポート">
		</div>
	</section>

	<?php //POINT -  ?>
	<section class="lm2500-point-wrap lm2500-point_3">
		<h3 class="point_title"><span>POINT3</span>安全・高耐久</h3>
		<div class="inner_point_wrap">
			<h4 class="point_sub_title">レーザヘッド IP64に準拠。</h4>
			<img src="<?php echo get_template_directory_uri(); ?>/img/traceability/lm2500-point3-1.png" alt="專用エンクロージャー EN-100（オプション）">
		</div>
	</section>

	<?php //流れ  ?>
	<section class="point-item-wrap">
		<img src="<?php echo get_template_directory_uri(); ?>/img/traceability/lm2500-nagare.png" alt="導入までの流れ">
	</section>

	<?php //吹き出し  ?>
	<section class="point-item-wrap">
		<img src="<?php echo get_template_directory_uri(); ?>/img/traceability/lm2500-fukidashi.png" alt="LM-2500なら">
	</section>

	<?php //ボタン  ?>
	<section class="point-btn">
		<a href="http://www.brother.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/traceability/lm2500-btn.png" alt="さらに詳しい情報はブラザー工業（株）へ"></a>
	</section>

</div>

<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-monodukuri' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>