<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>

<?php //ニュース新着記事リスト表示 ?>
<section class="entry_list_wrap">
	<?php
	$args = array( "cat" => "165", "posts_per_page" => 5 ); //ニュースの記事5件
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
	?>
	<h4 class="entry_list_title">ECO関連事業<a class="show_acv" href="<?php echo esc_url(home_url('/')); ?>eco/"><i class="fa fa-newspaper-o"></i>一覧</a></h4>
  <ul class="entry_list_box">
  <?php /* ↓↓↓ 記事繰り返しスタート ↓↓↓ */ ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li id="post_<?php the_ID(); ?>" <?php post_class(); ?>>
      <a class="entry_list" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
        <div class="entry_meta">
          <span class="entry_date"><?php the_time("Y.m.d"); ?></span><?php /*カテゴリー表示<span class="entry_category">［<?php the_category(" "); ?>］</span> */ ?>
        </div>
        <h2 class="entry_title"><?php the_title(); ?></h2>
      </a><!-- .entry_list-->
    </li><!-- #post-## -->
  <?php endwhile; endif; ?>
  <?php /* ↑↑↑ 記事繰り返しここまで ↑↑↑ */ ?>
  </ul><!-- .entry_list_box -->
  <?php wp_reset_query(); ?>

</section>
<?php //ここまで：ニュース新着記事リスト表示 ?>

<?php //メインコンテンツ ?>
<section class="eco_top_main">

		<div class="eco_catch">
			デンセン独自のトータルサポート体制で<br>
			パートナー様を支えていきます
		</div>
		<div class="fig_support">
		<img src="<?php echo get_template_directory_uri(); ?>/img/eco/img_eco_fig.jpg" alt="">
<!--
			<div class="box_support1">
				<div class="title_support">お客様担当</div>
				<div class="desc_support">
					<ul class="desc_list">
						<li>営業支援</li>
						<li>企画・ご提案</li>
						<li>業界最新情報提供</li>
					</ul>
				</div>
			</div>

			<div class="box_support2">
				<div class="title_support">設計・施工</div>
				<div class="desc_support">
					<ul class="desc_list">
						<li>設置検討</li>
						<li>パネルレイアウト</li>
						<li>工程管理</li>
						<li>施工管理</li>
					</ul>
				</div>
			</div>

			<div class="box_support3">
				<div class="title_support">業務支援</div>
				<div class="desc_support">
					<ul class="desc_list">
						<li>設備認定</li>
						<li>補助金</li>
						<li>メーカー保証</li>
					</ul>
				</div>
			</div>
-->

		</div><!--/.fig_support-->
		<div class="wrap_button">
			<div class="mono_btn">
				<a href="<?php echo esc_url(home_url('/')); ?>business/eco/solar/">太陽光発電事業（住宅用）</a>
			</div>
			<div class="mono_btn">
				<a href="<?php echo esc_url(home_url('/')); ?>business/eco/industrial-solar/">太陽光発電事業（公共・産業用）</a>
			</div>
			<div class="mono_btn">
				<a href="<?php echo esc_url(home_url('/')); ?>business/eco/o_and_m/">太陽光発電（O&amp;M）</a>
			</div>
			<div class="mono_btn">
				<a href="<?php echo esc_url(home_url('/')); ?>business/eco/house-development/">家づくり支援事業</a>
			</div>
		</div><!--/.wrap_button-->


		<div class="foot_btn_densetsu tuimin clr">
			<table class="tuimalesan">
				<tbody>
					<tr>
						<th class="tuminwi"><span>■</span>エネルギーソリューション営業部</th>
						<td class="tel tuiminnss"><i class="fa fa-phone-square"></i>&nbsp;0268-27-8131</td>
						<td class="cell_calendar">
							<div class="btn_calendar">
                                <a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_kaihatsu.pdf" target="_blank">
                                <i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
                                </a>
							</div>
						</td>
					</tr>
				</tbody>
			</table>

			<div class="link_access"><a href="<?php echo esc_url(home_url('/')); ?>company/branch/#esr"><i class="fa fa-map-marker fa-fw"></i>エネルギーソリューション営業部へのアクセスはこちら</a></div>

            <table class="tuimalesan">
				<tbody>
					<tr>
						<th class="tuminwi"><span>■</span>住宅ソリューション営業部</th>
						<td class="tel tuiminnss"><i class="fa fa-phone-square"></i>&nbsp;026-299-5210</td>
						<td class="cell_calendar">
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_jyuutakus.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
					</tr>
				</tbody>
			</table>

			<div class="link_access"><a href="<?php echo esc_url(home_url('/')); ?>company/branch/#jsr"><i class="fa fa-map-marker fa-fw"></i>住宅ソリューション営業部へのアクセスはこちら</a></div>

		</div>



</section><!--/.eco_top_main-->

<?php //ここまで：メインコンテンツ ?>






<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-eco' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>