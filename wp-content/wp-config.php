<?php
# Database Configuration
define( 'DB_NAME', 'wp_momtoast' );
define( 'DB_USER', 'momtoast' );
define( 'DB_PASSWORD', 'wBwXp45WALxKM5aK5UV8' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'S-F2?EIX IB,[MXXncxAn9db]a$wFAT+!f[w;Z<+P*!+zZ:6Edg/o}?!V-[T2^EU');
define('SECURE_AUTH_KEY',  'T@4SOymhQOFC~_JM>h+7by[BVKw`+Vtm.lB%BA%Q6I4K!bAVq@2a+$PL[OL6<:3h');
define('LOGGED_IN_KEY',    ':%TQt|m<jyisy/kSBJ0xtigG{v2+P>-*H2Q8QFmSOlLv7Ki?n!>|[]D81cl{6-kf');
define('NONCE_KEY',        'gDGgzOgqE{)uD-CY=M<R=z#v>^eCCl{_X051 6nkZ.yu1|dx^{oV[@79qgc;d+}E');
define('AUTH_SALT',        'rbO>QHE~UmYM6evE~WgXe.u0PvzAMR/|v|5X`:.]9Du:b%1Julk^T}ckb6m0_%0>');
define('SECURE_AUTH_SALT', '{FXMPI.!Ik?d$7ebV|f+4W{@$%:Av>?;gtVWbXkA:9L~5C`*_ _V>]>-eI`A?_oo');
define('LOGGED_IN_SALT',   '!;oo6CM+vqu}ob}`9C|kk(?bSL67o]37`[+X0TtcX3pG>GfMpdy&8L%sIJ+Q`7t=');
define('NONCE_SALT',       '`Fa,q~Aa7-yn()jjm6jN&o!UV|Q:{.po9`Y4%]8|aR]2<lh0s[%Co]+x|ypqL54v');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'momtoast' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '75afe19336242d28d8136a3a477d5121196abeb1' );

define( 'WPE_CLUSTER_ID', '100493' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'momtoast.wpengine.com', 1 => 'momtoastdesign.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100493', );

$wpe_special_ips=array ( 0 => '104.199.118.119', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
