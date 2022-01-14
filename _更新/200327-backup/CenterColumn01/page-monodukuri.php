<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php //ニュース新着記事リスト表示 ?>
<section class="entry_list_wrap">
	<?php
	$args = array( "cat" => "166", "posts_per_page" => 5 ); //ニュースの記事5件
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
	?>
	<h4 class="entry_list_title">ものづくり支援事業<a class="show_acv" href="<?php echo esc_url(home_url('/')); ?>monodukuri/"><i class="fa fa-newspaper-o"></i>一覧</a></h4>
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
<section class="mono_top_main">

		<div class="mono_catch">
			日本のものづくりを支える<br>
			デンセンのワンストップサポート<br>
			<span>One Stop Total Support</span>
		</div>
		<div class="btn_area">
			<div class="wrap_button">
				<div class="mono_btn">
					<a href="<?php echo esc_url(home_url('/')); ?>business/monodukuri/security/">安全セキュリティ</a>
				</div>
				<div class="mono_btn">
					<a href="<?php echo esc_url(home_url('/')); ?>business/monodukuri/traceability/">トレサビリティ</a>
				</div>
			</div><!--/.wrap_button-->

		</div><!--/.btn_area-->


		<?php //ピックアップ商品の表示 ?>
		<?php
		$args = array( "category_name" => "pickup", "posts_per_page" => 6 ); //ピックアップ商品の記事6件
		$the_query = new WP_Query( $args );
		if( $the_query -> have_posts() ):
		?>
		<h2 class="middle_title">ピックアップ商品</h2>
		<div class="pickup_area">
		<?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
			<a class="pickup_link" href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image(); ?>"></a>
		<?php endwhile; endif; wp_reset_query(); ?>
			<div class="to_list">
				<a href="<?php esc_url(home_url('/')); ?>pickup/">一覧を見る</a>
			</div>
		</div><!--/.pickup_area-->


		<div class="foot_btn_mono clr">
			<div class="txt_top">FAソリューション営業部・お問合せ</div>
			<table>
				<tbody>
					<tr>
						<th>上田営業所</th>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;0268-27-8111</td>
						<?php /*
						<td>
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_fa_ueda.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
						*/?>
					</tr>

					<tr>
						<th>長野営業所</th>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;026-251-0890</td>
						<?php /*
						<td>
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_fa_nagano.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
						*/?>
					</tr>

					<tr>
						<th>松本営業所</th>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;0263-27-8844</td>
						<?php /*
						<td>
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_fa_matsumoto.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
						*/?>
					</tr>

				</tbody>
			</table>

			<div class="link_access link_access_toiawase"><a href="<?php echo esc_url(home_url('/')); ?>company/branch/#tkes"><i class="fa fa-map-marker fa-fw"></i>営業所へのアクセスはこちら</a></div>

		</div><!--/.foot_btn_mono clr-->

</section><!--/.mono_top_main-->

<?php //ここまで：メインコンテンツ ?>






<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-monodukuri' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>