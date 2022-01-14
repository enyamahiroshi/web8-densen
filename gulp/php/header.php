<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title(); ?><?php /* ※プラグイン「WordPress SEO」を使わない場合： if(is_home()): ?><?php bloginfo('name'); ?><?php else:if(get_query_var('paged')) echo 'Page '.get_query_var('paged'); wp_title('|', true, 'right'); ?><?php endif; */ ?></title>
<link href="<?php echo esc_url(home_url('/')); ?>common/fonts/awesome/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo esc_url(home_url('/')); ?>common/css/reset.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/site.css" rel="stylesheet">
<?php //201810 サイト改修用の追加CSS ?>
<link href="<?php echo get_template_directory_uri(); ?>/style-add.css" rel="stylesheet">

<?php //スマホ対応ページと非対応ページで読込みを振り分ける ?>
<?php //▼スマホ対応ページ ?>
<?php if( is_home() || is_page(array("recruit","profile","branch")) || is_category() || is_single() || '75' == $post->post_parent || '2115' == $post->post_parent ): ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo get_template_directory_uri(); ?>/site-SP.css" rel="stylesheet" media="screen and (max-width: 767px)">
<link href="<?php echo get_template_directory_uri(); ?>/slide_nav.css" rel="stylesheet" media="screen and (max-width: 767px)">
<?php endif; ?>

<?php //------------------------ 採用サイト -- 先輩社員からのメッセージページのみ ?>
<?php if(is_page(array('freshman'))): ?>
<link href="<?php echo esc_url(home_url('/')); ?>common/js/bxslider/jquery.bxslider.css" rel="stylesheet" />
<?php endif; ?>

<?php //function.php で全てのフィードを非表示にしてあるのでサイトのフィードだけここで表示 ?>
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss2_url'); ?>">
<?php wp_deregister_script('jquery'); //wp_head() で読み込まれる jquery を停止 ?>
<?php wp_head(); ?>
<link rel="icon" href="<?php echo esc_url(home_url('/')); ?>favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="<?php echo esc_url(home_url('/')); ?>webclip.png">
</head>

<body id="top" class="<?php if (is_home()){ echo 'home'; } elseif(is_page()){ echo 'p-'.get_page_slag($wp_query->post->ID); } elseif(is_single()){ echo 'p-single p-';$category=get_the_category();$cat_slug=$category[0]->category_nicename;echo $cat_slug; } elseif(is_category()||is_archive()){ echo 'p-archive p-';$category=get_the_category();$cat_slug=$category[0]->category_nicename;echo $cat_slug; } else{ echo 'p-other'; } ?>">

<?php // ------------------------------------- ヘッダー ?>
<header>
	<?php // ロゴ ?>
	<div class="head_logo">
  	<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo1.png" alt="デンセンロゴ"></a>
  </div>
	<?php // グローバルメニュー(PC view) ?>
	<div class="global_nav">
		<?php //条件分岐：採用サイトページ、採用者ブログ以外
      if( !(is_page('recruit') || is_category('blog') || in_category('blog') || '75' == $post->post_parent || '2115' == $post->post_parent ) ): ?>
    <?php wp_nav_menu( array('menu'=>'MainMenu', 'container'=>false, 'menu_class'=>'main_menu' )); //カスタムメニュー呼出し ?>
    <?php else: ?>
    <?php wp_nav_menu( array('menu'=>'Recruit_Menu', 'container'=>false, 'menu_class'=>'main_menu recruit_menu' )); //採用サイト用のカスタムメニュー呼出し ?>
    <?php endif; ?>
	</div>
	<?php // スライドメニュー(SP view) ?>
	<nav class="slide_nav_wrap">
		<div id="modal_btn_open" class="modal_switch">
			<span class="css-bar"></span>
      <span class="menu-title">MENU</span>
		</div>
		<div class="modal_menu">
			<div class="modal_switch modal_btn_close">×</div>
			<?php //条件分岐：採用サイトページ、採用者ブログ以外
        if( !(is_page('recruit') || is_category('blog') || in_category('blog') || '75' == $post->post_parent || '2115' == $post->post_parent ) ): ?>
			<?php wp_nav_menu( array('menu'=>'MainMenu', 'container'=>false, 'menu_class'=>'main_menu' )); //カスタムメニュー呼出し ?>
			<?php else: ?>
      <?php wp_nav_menu( array('menu'=>'Recruit_Menu', 'container'=>false, 'menu_class'=>'main_menu recruit_menu' )); //採用サイト用のカスタムメニュー呼出し ?>
      <?php endif; ?>
			<div class="modal_switch modal_btn_close">×</div>
		</div>
	</nav>
</header>

<?php // HOMEと採用サイトTOPページ以外でパンくずナビ表示（WPプラグイン：Yoast WordPress 使用）
if ( !(is_home() || is_page('recruit') ) && function_exists('yoast_breadcrumb') ) {
echo '<section class="bread_nav_wrap">';
yoast_breadcrumb('<div class="bread_nav">','</div>');
echo '</section>';
} ?>

<?php // ------------------------------------- メインビジュアル
if ( is_home() || is_page(array('business', 'freshman', 'staff', 'eco', 'monodukuri', 'densetsu')) || is_category('blog') || $post->post_parent == ( 2451 ) || $post->post_parent == ( 2455 ) || $post->post_parent == ( 2460 ) ): ?>


<?php //-----------メインビジュアルのスタイル分岐
	if ( is_home() || is_page(array('business', 'freshman', 'staff')) || is_category('blog') ): ?>
	<div class="main_visual">
	<img src="<?php echo get_template_directory_uri(); ?>/img/mv/mv_<?php
			  if(is_home()){ echo 'home'; }
			  elseif (is_category('blog')){ echo 'blog'; }
			  else { echo get_page_slag($wp_query->post->ID); } ?>.jpg" alt="メインイメージ"
			  <?php if(is_home()){ echo ' class="hidePC"'; } ?>>

  <?php //--------------後から追加ページ。スタイル違う。
		elseif ( is_page(array('eco', 'monodukuri', 'densetsu'))
				|| $post->post_parent == ( 2451 || 2455 || 2460 )
		): ?>
	<div class="main_visual mv_second">
<?php endif ?>

  <?php //MVの中に入るテキスト ?>
  <?php if ( is_page('business') ): ?>
  	<div class="inner_mv_text">私たちの暮らしを<span class="space_negative">、</span>守り続けます。</div>
  <?php elseif ( is_page(array('staff', 'freshman')) ): ?>
  	<div class="inner_mv_text"><?php the_title(); ?></div>
  <?php elseif ( is_category('blog') ): ?>
  	<div class="inner_mv_text">採用担当者ブログ</div>

  <?php elseif ( is_page( 'eco' ) || $post->post_parent == 2451 ): ?>
  	<div class="inner_mv_text">ECO関連事業<br>
		<div class="txt_sub">エネルギーを創る、貯める、管理する<br>
		太陽光発電を中心とした、地球に優しいクリーンエネルギーサービスをトータルサポートします。</div>
  	</div>

  <?php elseif ( is_page( 'monodukuri' ) || $post->post_parent == 2455 ): ?>
	<div class="inner_mv_text">ものづくり支援事業
		<div class="txt_sub">日本のものづくりを支えるワンストップソリューション<br>
		デンセンは、世界と戦う製造業のみなさんを応援します。</div>
 	</div>

  <?php elseif ( is_page( 'densetsu' ) || $post->post_parent == 2460 ): ?>
	<div class="inner_mv_text">電設資材事業
		<div class="txt_sub">目に見える照明から、壁や天井裏の配線にいたるまで、<br>
		安心・安全そして快適に暮らすためのサポートをしています。
		</div>
 	</div>


  <?php endif; ?>
  <?php //HOMEのみ*/ ?>
  <?php if(is_home()): ?>
  <div class="inner_mv_text-home">
  	<div class="inner_mv_img"><img src="<?php echo get_template_directory_uri(); ?>/img/home/inner_mv_img.png" alt="明日の暮らしをお手伝い Densenだから、できること"></div>
		<?php //最新の記事1件----(PC) ?>
    <div class="inner_mv_entry hideSP">
	<?php
      $args = array( "cat" => "1", "posts_per_page" => 1 ); //ニュースカテゴリ　最新の記事1件
      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) :
      ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
        <span class="entry_date"><?php the_time("Y.m.d"); ?></span>
        <span class="entry_title"><?php the_title(); ?></span>
      </a>
      <?php endwhile; endif; ?>
    </div>
  	<?php //ここまで：最新の記事1件 ?>
  </div>
  <?php endif; //ここまで：HOMEのみ ?>
</div><?php //.main_visual ?>
	<?php if(is_home()): ?>
		<?php //最新の記事1件----(SP) ?>
    <div class="inner_mv_entry hidePC">
			<?php
      $args = array( "cat" => "1", "posts_per_page" => 1 ); //ニュースカテゴリ　最新の記事1件
      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) :
      ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
        <span class="entry_date"><?php the_time("Y.m.d"); ?></span>
        <span class="entry_title"><?php the_title(); ?></span>
      </a>
      <?php endwhile; endif; ?>
    </div>
  	<?php //ここまで：最新の記事1件 ?>
   <?php endif; //ここまで：HOMEのみ ?>
<?php endif; ?>


<?php // ------------------------------------- 全画面背景動画 採用サイトTOPのみ）
if ( is_page('recruit') ): ?>
<?php //全画面背景動画 - covervid.min.js：http://design.webclips.jp/jquery-covervid/ ?>
<div class="masthead-wrapper">
  <video class="masthead-video hideSP" autoplay loop poster="<?php echo get_template_directory_uri(); ?>/videos/no-video.jpg">
		<source src="<?php echo get_template_directory_uri(); ?>/videos/recruit_mov_2425172-2.webmsd.webm" type="video/webm">
    <source src="<?php echo get_template_directory_uri(); ?>/videos/recruit_mov_2425172-2.mp4" type="video/mp4">
  </video>
  <div class="masthead-overlay"></div>
  <div class="masthead-arrow"></div>
  <div class="masthead-text">
  	<span class="text1">1つ1つの街の明かりを結んで、安心という未来をつくっている。<br />積み重ねた願いと共に、次なる挑戦へ。<br /></span>
    <span class="text2">connect hearts</span>
  </div>
</div>
<?php endif; ?>

<?php // ------------------------------------- コンテンツナビ HOMEのみ）
if ( is_home() ): ?>
<section class="contents_nav_wrap">
  <ul class="contents_nav">
	<li>
		<a href="<?php echo esc_url(home_url('/')); ?>business/densetsu/">
			<img class="contents_nav_img" src="<?php echo get_template_directory_uri(); ?>/img/common/contents_nav_03-2.jpg" alt="電設資材事業">
			<div class="contents_nav_tit">
				<?php //各カテゴリの最新の1件を取得して1週間以内の記事なら「NEW」をつける
				$args = array( "cat" => "167", "posts_per_page" => 1 );
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ): ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php if( time() - get_the_time('G') < 604800 ): ?>
				<div class="mark_new">NEW</div>
				<?php endif; ?>
				<?php endwhile; endif; wp_reset_query(); ?>
				電設資材事業
			</div>
			<p class="contents_nav_text">目に見える照明から、壁や天井裏の配線にいたるまで、安心・安全そして快適に暮らすためのサポートをしています。</p>
		</a>
	</li>
	<li>
		<a href="<?php echo esc_url(home_url('/')); ?>business/monodukuri/">
			<img class="contents_nav_img" src="<?php echo get_template_directory_uri(); ?>/img/common/contents_nav_02.jpg" alt="ものづくり支援事業">
			<div class="contents_nav_tit">
				<?php //各カテゴリの最新の1件を取得して1週間以内の記事なら「NEW」をつける
				$args = array( "cat" => "163", "posts_per_page" => 1 );
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ): ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php if( time() - get_the_time('G') < 604800 ): ?>
				<div class="mark_new">NEW</div>
				<?php endif; ?>
				<?php endwhile; endif; wp_reset_query(); ?>
				ものづくり支援事業
			</div>
			<p class="contents_nav_text">日本のものづくりを支えるワンストップソリューション。デンセンは、世界と戦う製造業のみなさんを応援します。</p>
		</a>
	</li>
    <li>
		<a href="<?php echo esc_url(home_url('/')); ?>business/eco/">
			<img class="contents_nav_img" src="<?php echo get_template_directory_uri(); ?>/img/common/contents_nav_01.jpg" alt="ECO関連事業">
			<div class="contents_nav_tit">
				<?php //各カテゴリの最新の1件を取得して1週間以内の記事なら「NEW」をつける
				$args = array( "cat" => "165", "posts_per_page" => 1 );
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ): ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php if( time() - get_the_time('G') < 604800 ): ?>
				<div class="mark_new">NEW</div>
				<?php endif; ?>
				<?php endwhile; endif; wp_reset_query(); ?>
				ECO関連事業
			</div>
			<p class="contents_nav_text">エネルギーを創る、貯める、管理する。太陽光発電を中心とした、地球に優しいクリーンエネルギーサービスをトータルサポートします。</p>
		</a>
	</li>
	<li>
		<a href="http://www.densen.co.jp/kaigo/">
			<img class="contents_nav_img" src="<?php echo get_template_directory_uri(); ?>/img/common/contents_nav_04.png" alt="介護福祉サポート事業部">
			<div class="contents_nav_tit tit_kaigo">介護福祉<br>サポート事業部</div>
			<p class="contents_nav_text">介護福祉サポート事業部では、お客様に「ゆとりと笑顔のある暮らし」をご提供できるよう、最適なサービスを提案させて頂きます。</p>
		</a>
	</li>
  </ul>
</section>
<?php endif; ?>

<?php // ------------------------------------- コンテンツ領域 ?>
<?php // メインコンテンツ ?>
<article class="main_content clr">

  <?php //条件分岐：採用サイトページと採用者ブログ以外
		if( !(is_page('recruit') || is_category('blog') || in_category('blog') || '75' == $post->post_parent || '2115' == $post->post_parent ) ): ?>
	<article class="left_content clr">
  <?php endif; ?>

		<?php // TOPページ・記事個別ページ・採用サイトページ内 以外で大見出し表示 ?>
    <?php if ( !( is_home()
				 || is_single()
				 || is_page('recruit')
				 || '75' == $post->post_parent
				 || '2115' == $post->post_parent
				 || is_category('blog')
				 || is_page(array('eco', 'monodukuri', 'densetsu'))
				 || $post->post_parent == ( 2451 || 2455 || 2460 )
				)

			 ): ?>
    <h1 class="page_title"><?php if (is_page()){
      echo the_title();
    } elseif (is_category('news')){
      echo "ニュース";
    } else {
      // カテゴリー情報を取得
      $cat = get_the_category();
      $cat = $cat[0];
      $cat_name = $cat->cat_name; //カテゴリ名
      echo $cat_name;
    } ?></h1>
    <?php endif; ?>
