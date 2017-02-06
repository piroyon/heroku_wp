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
define('DB_NAME', 'heroku_78fe340f026ff0d');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'b8023e0b7e52c4');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'becde647');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-01.cleardb.net');

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
define('AUTH_KEY',         '_A@pZ!R=:#c;Wfs]6[c:chaJK^BH-q2R3M8aeNnw_,{$DjT_<{E;q<5]63`$|%k-');
define('SECURE_AUTH_KEY',  ',b;sk|5){[4zR5d~i/b;4HX4>}n6vU:CEqaq*P9UQTIYS7gx.l1-hah=)Ea%jn.2');
define('LOGGED_IN_KEY',    '_y/d|G+O|/qlz3&o4/,7nq?X{i!IJSTj*ZLhI,gmps|tejQtGR72~`<N=4@)rr~%');
define('NONCE_KEY',        '|38R+RTFcuxk#[-p}@ZtD?x-roJH_g]xJTpe+XkT-Rd)=&l+1tP}=l/Vx%-pp]8I');
define('AUTH_SALT',        'Uz.;H|U-Cj7WTPF-=^Dvf-!j ose#B;7)+{#kc=-H`0S|R|:EZl{rIN$}EwB?MYT');
define('SECURE_AUTH_SALT', 'J$Jw{a@.U%?T@:Y2!RFdV1[[yXLVUG`_`.1^|$[Md-1tlGjO-lp:SHE_}MRwhJ+I');
define('LOGGED_IN_SALT',   ')+9GAQ<&gw%w9n+swK?d&o+=)gXTJCgM*Mt*IWe)QPY{dwun P:C%>#_.?+H30T+');
define('NONCE_SALT',       'LdI#v yXVEau{FW=oI[4t1_kF{S@^rj/LqU~|ZJF|#k?a7T=l3UQY1;1/|2yv)]5');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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
