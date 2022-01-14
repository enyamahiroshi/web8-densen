<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'web8gold_densen_test');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'web8gold');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'uejvb57gui');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql468.db.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6c=<e;#j6HpbO,:H:Yv[6|u^^0Uxn-;GC7@u0kJRLP{Bj@ UR27DQ/UiU5Pin<=5');
define('SECURE_AUTH_KEY',  '>3x7g0x{j?c7A1BRe={6h)se|[y. /4BghNZEF3CPcI 54B5x>iWw&|9)`(t(s6,');
define('LOGGED_IN_KEY',    ',B[@R~v3A#?zXQmo%i-fYrB2aL`DCQmmQ@*@8e@xaXD1;3V-T>Ti(oT`J=|; Tnw');
define('NONCE_KEY',        '.lxN4vw{o(-hwm?f)bV<7VN+DrQP)$Tm$|_[NU@v~%2pi{C>6>S+U;8JK>kligx$');
define('AUTH_SALT',        'ZTW8L#6K^`f|]8n;GW$Tjs6qSkEu0F5+ZRvb$k9fr~<1lmc2f1&@{cTND}k;m5HT');
define('SECURE_AUTH_SALT', '>U?v#k2q!Bk|^%P+wIgV|kV (A}_:=<ekUvRH-c?xUjl%fV!n|!%Y:j-T1a_}~@j');
define('LOGGED_IN_SALT',   'U>[W3oV9x$`TF;+VXY7,WRg-T*V wZ|=o:}Qpt4rid`h(yD_z]0gsGgOB[^{hv=|');
define('NONCE_SALT',       '.<4w,u)5*DeSd]LUk;%K1p@sKYjH6YR<g--TVnImB#pUQe-1~bSxyBcmO{EqhL5J');
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'densen_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
