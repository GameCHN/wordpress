<?php

if (!defined('WP_ONLY')) {
	require_once dirname(__DIR__) . '/index.php';
}

define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', $_SERVER['SERVER_NAME']);
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/app/article');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
//
define('WP_CONTENT_DIR', __DIR__);
define('WP_CONTENT_URL', '/app');

define('WP_PLUGIN_DIR', dirname(WP_CONTENT_DIR) . '/addon');
define('WP_PLUGIN_URL', '/addon');

define('COOKIEPATH', '/');
//
//define('WP_CORE_DIR', WP_PLUGIN_DIR . '/ycms/wp-core');

/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */
// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Vl1;uG6uNj5U/UyN4+&`%3nLs#W^2iG-p#xUc7GW=n_;kAPp}VmDaG2Y<2.;XLo<');
define('SECURE_AUTH_KEY',  '[~T}FQLwjW~kDW2|FU]k<b=SL@]HSu|tUYTSuEs8I@+Z![(oAhVS& l%l!Kyuy{L');
define('LOGGED_IN_KEY',    'nDGL+NQC5i(w++pIXXmuLqG06L&dZ-DA*2]4;`&&l/H],!%(_hscsDX-@y9+sw_F');
define('NONCE_KEY',        'EGSTs}1!$1Qp`pO=9:5&RuapZ+8}L-I!S%(5VY.!%:%Tiu|){`G-LW7BN P.7u**');
define('AUTH_SALT',        'es Izn, ]B{-yvr3$R$q^h$!)-xM5.Av-v;| &S7N_RjzW/b^Tjh{CBZciJD-uX&');
define('SECURE_AUTH_SALT', 'yBZE4}MQ*7@09f/U Y%XGWi>yOrBkl#cF+@`y7X/WSJgQj:v6/gd|{@ TDbLh!bC');
define('LOGGED_IN_SALT',   '++E>~|Lqy_OIwUoJ=a^6C[mim9V%# JIiA?rXjMP?EW6o(H6Fc{x= !4hc=w& B-');
define('NONCE_SALT',       '-MOU)xj2Nqt .h1W@ZzG12V%+^Oa(p!.k@0K0.|mhGi-v_|r)KT3#k-k?-uyQvM+');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
