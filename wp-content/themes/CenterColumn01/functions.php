<?php
/**********************************************************************************************************************
  基本設定
 **********************************************************************************************************************/
/**
 * デフォルトの「投稿」メニューの変更   ※()内はデフォルト名
 * function change_post_menu_label(), function change_post_object_label() で読込み
 */
/*
$orglabel = array(
	'ttname'            => '投稿', //（投稿）
	'ttlist'            => '投稿一覧', //（投稿一覧）
	'ttaddnewpost'      => '新規追加', //（新規追加）
	'ttaddnewposttitle' => '新規投稿を追加', //（新規投稿を追加）
	'tteditpost'        => '投稿の編集', //（投稿の編集）
	'ttnewpost'         => '新規投稿', //（新規投稿）
	'ttviewpost'        => '投稿を表示', //（投稿を表示）
	'ttsearch'          => '投稿を検索', //（投稿を検索）
	'ttnotfound'        => '投稿が見つかりませんでした', //（投稿が見つかりませんでした）
	'ttnotfoundintrash' => 'ゴミ箱の投稿にも見つかりませんでした' //（ゴミ箱の投稿にも見つかりませんでした）
);
// ダッシュボードの「投稿」メニュー項目名の変更
function change_post_menu_label() {
	global $orglabel;
	global $menu;
	global $submenu;
	$menu[5][0] = $orglabel['ttname'];
	$submenu['edit.php'][5][0] = $orglabel['ttlist'];
	$submenu['edit.php'][10][0] = $orglabel['ttnewpost'];
}
function change_post_object_label() {
	global $orglabel;
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $orglabel['ttname'];
	$labels->singular_name = $orglabel['ttname'];
	$labels->add_new = _x($orglabel['ttaddnewpost'], $orglabel['ttname']);
	$labels->add_new_item = $orglabel['ttaddnewposttitle'];
	$labels->edit_item = $orglabel['tteditpost'];
	$labels->new_item = $orglabel['ttnewpost'];
	$labels->view_item = $orglabel['ttviewpost'];
	$labels->search_items = $orglabel['ttsearch'];
	$labels->not_found = $orglabel['ttnotfound'];
	$labels->not_found_in_trash = $orglabel['ttnotfoundintrash'];
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );
*/

/**
 * カスタムメニューを使用可能にする
 */
add_theme_support('menus');

/**
 * サムネイル（アイキャッチ）を使用可能にする
 */
add_theme_support('post-thumbnails');



/**********************************************************************************************************************
  wordpress デフォルトの設定を変更
 **********************************************************************************************************************/
/**
 * wp_head()の余分な出力を削除する
 * http://pc-sk.com/wp_tema_jisaku/ouyou/wp_head_fuyo_sakujyo/
 */
remove_action('wp_head', 'rsd_link');                         /* Really Simple Discoveryリンクの削除 */
remove_action('wp_head', 'wlwmanifest_link');                 /* Windows Live Writerの削除 */
remove_action('wp_head', 'wp_generator');                     /* WPのバージョン削除 */
remove_action('wp_head', 'index_rel_link' );                  /* linkタグの削除 */
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');  /* link rel='next…'関連の削除 */
remove_action('wp_head', 'parent_post_rel_link', 10, 0 );     /* link rel='next…'関連の削除 */
remove_action('wp_head', 'start_post_rel_link', 10, 0 );      /* link rel='next…'関連の削除 */
remove_action('wp_head', 'wp_shortlink_wp_head');             /* ショートリンクの削除 */
remove_action('wp_head', 'feed_links', 2 );                   /* サイト全体のフィードの削除*/
remove_action('wp_head', 'feed_links_extra',3);               /* コメントフィードの削除 */

/**
 * 画像挿入時の添付ファイルのページの選択肢を消す
 * http://www.seotemplate.biz/blog/wordpress-tips/12786/#ga01
 */
function media_script_buffer_start() {
    ob_start();
}
add_action( 'post-upload-ui', 'media_script_buffer_start' );
function media_script_buffer_get() {
    $scripts = ob_get_clean();
    $scripts = preg_replace( '#<option value="post">.*?</option>#s', '', $scripts );
    echo $scripts;
}
add_action( 'print_media_templates', 'media_script_buffer_get' );
//attachment_id=ページに404を返す
add_action( 'template_redirect', 'gs_attachment_template_redirect' );
function gs_attachment_template_redirect() {
    if ( is_attachment() ) { // 添付ファイルの個別ページなら
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
    }
}


/**********************************************************************************************************************
  テーマファイル内で呼び出し・関数
 **********************************************************************************************************************/
/**
 * 「続きを読む」の変更
 */
// 抜粋文字の文字数設定
function new_excerpt_mblength($length) {
	return 60;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');
// 抜粋文字にリンクなしバージョン
function new_excerpt_more($more) {
	return ' [...]';
}
// 抜粋文字にリンクありバージョン
/**
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '"> [...]</a>';
}*/
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * 現在のページのページスラッグを表示する
 * <?php echo get_page_slag($wp_query->post->ID); ?>で取得できます
 */
function get_page_slag($page_id) {
	$page = get_page($page_id);
	return $page->post_name;
}

/**
 * ページスラッグからIDを取得する
 */
function get_ids_from_slugs($slugs){
  $slugs = preg_split("/,¥s?/", $slugs);
  $ids = array();
  foreach($slugs as $page_slug){
    $page = get_page_by_path($page_slug);
    array_push($ids, $page->ID);
  }
  return implode(",", $ids);
}

/**
 * 記事の一番最初の画像を取得する：http://liginc.co.jp/designer/archives/3205
 */
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

if(empty($first_img)){ //Defines a default image
        $first_img = "piyopiyo.jpg";
    }
    return $first_img;
}


/**********************************************************************************************************************
  ダッシュボードの操作（参考：http://htdsn.com/blog/archives/wordpress-admin-customize.html）
 **********************************************************************************************************************/
// ログイン画面：ロゴの変更（ロゴ画像は wp インストール階層の common/img に置く）
// リンク先は下のCSS（pointer-events: none;）で発動しないようにしている。
// リンクする必要がある場合はCSSを修正して WP Total Hack プラグインで行う。
function custom_login_logo() {
 echo '<style type="text/css">h1 a { pointer-events: none; display: block; width: 320px !important; height: 84px !important; background: url('.esc_url(home_url('/')).'/common/img/logo_login.png) 50% 50% no-repeat !important; }</style>';
 }
add_action('login_head', 'custom_login_logo');

// ダッシュボード左上のロゴを非表示にする
function hide_before_admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action('wp_before_admin_bar_render', 'hide_before_admin_bar_render' );


// ▽▽▽ 管理者(level10)以外の非表示設定
if (!current_user_can('level_10')) { //level10（管理者）以外のユーザーの場合


	/* 管理バーの表示オプションを消して変更できなくする
	function remove_screen_options(){
		return false;
	}
	add_filter( 'screen_options_show_screen', 'remove_screen_options' );
	*/

	// 管理バーのメニューの一部を非表示
	function my_admin_head(){
	 echo '<style type="text/css">#contextual-help-link-wrap {display:none;}</style>';
	 echo '<style type="text/css">#wp-admin-bar-wpseo-menu {display:none;}</style>'; //wepSEO
	}
	add_action('admin_head', 'my_admin_head');

	// ダッシュボードのウィジェット非表示
	function example_remove_dashboard_widgets() {
	 global $wp_meta_boxes;
	 // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // 現在の状況
	 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
	 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
	 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
	 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
	 // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
	 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
	 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
	}
	add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');

	// ダッシュボードのメニューを非表示（参考：http://htdsn.com/blog/archives/wordpress-admin-customize.html）
	function remove_menus () {
	 remove_menu_page('wpcf7'); //Contact Form 7 を非表示
	 remove_menu_page('wpseo_dashboard'); //wpSEO を非表示
	 global $menu;
	 // unset($menu[2]); // ダッシュボード
	 // unset($menu[4]); // メニューの線1
	 // unset($menu[5]); // 投稿
	 // unset($menu[10]); // メディア
	 unset($menu[15]); // リンク
	 // unset($menu[20]); // ページ
	 unset($menu[25]); // コメント
	 unset($menu[59]); // メニューの線2
	 unset($menu[60]); // テーマ
	 unset($menu[65]); // プラグイン
	 // unset($menu[70]); // プロフィール
	 unset($menu[75]); // ツール
	 unset($menu[80]); // 設定
	 unset($menu[90]); // メニューの線3
	}
	add_action('admin_menu', 'remove_menus');

	// 投稿・固定ページ画面の項目を非表示（http://hack.aipo.com/archives/1048/）
	function remove_extra_meta_boxes() {
		// remove_meta_box( 'categorydiv','post','side'); /* 投稿のカテゴリーフィールド */
		remove_meta_box( 'postcustom' , 'post' , 'normal' ); /* 投稿のカスタムフィールド */
		// remove_meta_box( 'postcustom' , 'page' , 'normal' ); /* 固定ページのカスタムフィールド */
		remove_meta_box( 'postexcerpt' , 'post' , 'normal' ); /* 投稿の抜粋 */
		remove_meta_box( 'postexcerpt' , 'page' , 'normal' ); /* 固定ページの抜粋 */
		remove_meta_box( 'commentsdiv' , 'post' , 'normal' ); /* 投稿のコメント */
		remove_meta_box( 'commentsdiv' , 'page' , 'normal' ); /* 固定ページのコメント */
		remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'side' ); /* 投稿のタグ */
		remove_meta_box( 'tagsdiv-post_tag' , 'page' , 'side' ); /* 固定ページのタグ */
		remove_meta_box( 'trackbacksdiv' , 'post' , 'normal' ); /* 投稿のトラックバック */
		remove_meta_box( 'trackbacksdiv' , 'page' , 'normal' ); /* 固定ページのトラックバック */
		remove_meta_box( 'commentstatusdiv' , 'post' , 'normal' ); /* 投稿のディスカッション */
		remove_meta_box( 'commentstatusdiv' , 'page' , 'normal' ); /* ページのディスカッション */
		remove_meta_box( 'slugdiv','post','normal'); /* 投稿のスラッグ */
		remove_meta_box( 'slugdiv','page','normal'); /* 固定ページのスラッグ */
		remove_meta_box( 'authordiv','post','normal' ); /* 投稿の作成者 */
		remove_meta_box( 'authordiv','page','normal' ); /* 固定ページの作成者 */
		remove_meta_box( 'revisionsdiv','post','normal' ); /* 投稿のリビジョン */
		remove_meta_box( 'revisionsdiv','page','normal' ); /* 固定ページのリビジョン */
		remove_meta_box( 'pageparentdiv','page','side'); /* 固定ページのページ属性 */
		remove_meta_box( 'wpseo_meta','post','side'); /* 投稿のwpseo */
	}
	add_action('admin_menu','remove_extra_meta_boxes');


}
// △△△ ここまで：管理者(level10)以外の非表示設定

// フッターのWordPressリンクを非表示に
function custom_admin_footer() {
 echo ' ';
 }
add_filter('admin_footer_text', 'custom_admin_footer');

// プロフィール内の項目を削除
function custom_profile_fields( $contactmethods ) {
	unset($contactmethods['aim']);		// AIM
	unset($contactmethods['yim']);		// Yahoo IM
	unset($contactmethods['jabber']);	// Jabber / Google Talk
	return $contactmethods;
}
add_filter('user_contactmethods','custom_profile_fields',10,1);

// Contact Form7 のメール入力確認項目を追加：http://www.kitaguchi.jp/contact/96.html
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
$type = $tag['type'];
$name = $tag['name'];
$_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
if ( 'email' == $type || 'email*' == $type ) {
if (preg_match('/(.*)_confirm$/', $name, $matches)){
$target_name = $matches[1];
if ($_POST[$name] != $_POST[$target_name]) {
$result['valid'] = false;
$result['reason'][$name] = '確認用のメールアドレスが一致していません';
}
}
}
return $result;
}


// Simple Membership プラグインカスタマイズ
add_filter( 'swpm_not_logged_in_post_msg', function( $error_msg ) {
	$error_msg = '<div class="swpm-post-not-logged-in-msg"><p>このコンテンツを閲覧するにはログインが必要です。</p><p>会員の方は、<a class="swpm-login-link" href="../membership-login/">ログイン</a> してください。<br>または、こちらから <a class="swpm-login-link" href="../membership-registration/">新規会員登録</a></p></div>';
	return $error_msg;
} );


// カテゴリーの選択を1つしかできないように制限する：http://www.nxworld.net/wordpress/wp-limit-category-select.html
add_action( 'admin_print_footer_scripts', 'limit_category_select' );
function limit_category_select() {
	?>
	<script type="text/javascript">
		jQuery(function($) {
			// 投稿画面のカテゴリー選択を制限
			var cat_checklist = $('.categorychecklist input[type=checkbox]');
			cat_checklist.click( function() {
				$(this).parents('.categorychecklist').find('input[type=checkbox]').attr('checked', false);
				$(this).attr('checked', true);
			});
			// クイック編集のカテゴリー選択を制限
			var quickedit_cat_checklist = $('.cat-checklist input[type=checkbox]');
			quickedit_cat_checklist.click( function() {
				$(this).parents('.cat-checklist').find('input[type=checkbox]').attr('checked', false);
				$(this).attr('checked', true);
			});

			$('.categorychecklist>li:first-child, .cat-checklist>li:first-child').before('<p style="padding-top:5px;">カテゴリーは1つしか選択できません</p>');
		});
	</script>
<?php } ?>