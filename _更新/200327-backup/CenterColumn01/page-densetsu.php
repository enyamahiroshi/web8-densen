<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php //ニュース新着記事リスト表示 ?>
<section class="entry_list_wrap">
	<?php
	$args = array( "category__in" => "167", "posts_per_page" => 5 ); //ニュースの記事5件
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
	?>
	<h4 class="entry_list_title">電設資材事業<a class="show_acv" href="<?php echo esc_url(home_url('/')); ?>densetsu/"><i class="fa fa-newspaper-o"></i>一覧</a></h4>
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

<?php //銅ベース最新の1件表示 ?>
<section class="entry_list_wrap">
	<?php
	$args = array( "category__in" => "164", "posts_per_page" => 1 ); //銅ベース1件表示
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
	?>
	<h4 class="entry_list_title">銅ベース<a class="show_acv" href="<?php echo esc_url(home_url('/')); ?>densetsu/"><i class="fa fa-newspaper-o"></i>一覧</a></h4>
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
<?php //ここまで：銅ベース最新の1件表示 ?>


<?php //メインコンテンツ ?>
<section class="densetsu_top_main">

		<div class="densetsu_catch">
			デンセン独自のサポート体制と、工・製・販の<br>
			トータルパワーをつなぎ、快適な暮らしを支えます
		</div>
		<div class="fig_support">
		<img src="<?php echo get_template_directory_uri(); ?>/img/densetsu/img_densetsu.png" alt="工・製・販のトータルパワー">
		</div><!--/.fig_support-->

		<div class="btn_area">
			<div class="wrap_button">
				<div class="mono_btn">
					<a href="<?php echo esc_url(home_url('/')); ?>business/densetsu/urban-development/">街づくり支援事業</a>
				</div>
				<div class="mono_btn">
					<a href="<?php echo esc_url(home_url('/')); ?>business/eco/house-development/">家づくり支援事業</a>
				</div>
			</div><!--/.wrap_button-->
		</div><!--/.btn_area-->

		<div class="foot_btn_densetsu clr">
			<div class="txt_top">電設資材に関するご相談・お問合せ</div>
			<table>
				<tbody>
					<tr>
						<th><span>■</span>長野地区のお客様</th>
						<td class="branch">長野支店</td>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;026-251-0870</td>
						<?php /*
						<td class="cell_calendar">
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_nagano.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
						*/?>
					</tr>

					<tr>
						<th><span>■</span>上田地区のお客様</th>
						<td class="branch">上田支店</td>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;0268-27-8121</td>
						<?php /*
						<td class="cell_calendar">
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_ueda.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
						*/?>
					</tr>

					<tr>
						<th><span>■</span>松本・諏訪地区のお客様</th>
						<td class="branch">松本支店</td>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;0263-27-8833</td>
						<?php /*
						<td class="cell_calendar">
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_matsumoto.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
						*/?>
					</tr>

					<tr>
						<th><span>■</span>佐久・軽井沢地区のお客様</th>
						<td class="branch">佐久営業所</td>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;0267-67-4440</td>
						<?php /*
						<td class="cell_calendar">
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_saku.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
						*/?>
					</tr>

					<tr>
						<th><span>■</span>中野・飯山地区のお客様</th>
						<td class="branch">北信営業所</td>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;0269-22-2252</td>
						<?php /*
						<td class="cell_calendar">
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_hokushin.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
						*/?>
					</tr>

					<tr>
						<th><span>■</span>神奈川県のお客様</th>
						<td class="branch">相模原営業所</td>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;042-756-0696</td>
						<?php /*
						<td class="cell_calendar">
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_sagamihara.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
						*/?>
					</tr>

					<tr>
						<th><span>■</span>群馬県のお客様</th>
						<td class="branch">富岡営業所</td>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;0274-73-3655</td>
						<?php /*
						<td class="cell_calendar">
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_tomioka.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
						*/?>
					</tr>

					<tr>
						<th><span>■</span>新潟県のお客様</th>
						<td class="branch">長岡営業所</td>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;0258-47-4700</td>
						<?php /*
						<td class="cell_calendar">
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_nagaoka.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
						*/?>
					</tr>

				</tbody>
			</table>

			<div class="link_access"><a href="<?php echo esc_url(home_url('/')); ?>company/branch/#stn"><i class="fa fa-map-marker fa-fw"></i>各支店・営業所へのアクセスはこちら</a></div>

		</div>

</section><!--/.eco_top_main-->

<?php //ここまで：メインコンテンツ ?>





<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>


<article class="right_content">

<?php //銅ベース表示 ?>
<?php get_template_part( 'block', 'side-doubase' ); ?>

<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-densetsu' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>
