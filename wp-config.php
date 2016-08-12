<?php
# Database Configuration
define( 'DB_NAME', 'wp_sfwp' );
define( 'DB_USER', 'sfwp' );
define( 'DB_PASSWORD', 'hqUWtxWEgdeY16NPQAh0' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'yH%ODy{:.*+;+hU2Qa&}/5!5&sOj9nlJ3uUR|URy%v+!+;@+zEyE$f&w3o-PL]=-');
define('SECURE_AUTH_KEY',  ';OCmYz.u7;+u{yW{_!b!|Qbj5;Z[s?wF*{-N70N-oD0?W$|tVq]T487W2GON/^%m');
define('LOGGED_IN_KEY',    ']PZUH?z2qO LH40v0&9>[`QBNX#L}#gaGFfH03`8!_?b+MCNOs&Fgbz2xf!B+!M~');
define('NONCE_KEY',        'N}P!r.A,X>BnalIJSI+Nt^z+ru;zF@!_X+rMZ9lKStN1p^#R0tVFJUosm3;WOr(H');
define('AUTH_SALT',        'oW33,B4.+l_[*M5eW|S#l3ctiC}< 8&t3u7A>cu_]NY-qa~*[:{wVWN^|n4-1w6(');
define('SECURE_AUTH_SALT', 'mcmQ6V8:WJP!uB7~jTAXM>{DPcK+|J#%Z`Go&/MitG1eZ7IdOi?Zrqf6 #R]|eZ+');
define('LOGGED_IN_SALT',   'BAUmL-gvd@~;{^~-Hx,aZgk~rPG`N2kcYa-Tfmy>UnAg:?0?{-@8(O_bJ;jhRKBN');
define('NONCE_SALT',       'e,bR&4fy9#ow%^NjK$]`^M{&V[OB4j(77M=-jz]LpBVKrnpZsZ8-gJ?KTB$|2wI?');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'sfwp' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'f998a826efe656b348d490ee92f53f0534726a92' );

define( 'WPE_CLUSTER_ID', '32378' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '104.130.239.147' );

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

$wpe_all_domains=array ( 0 => 'sfwp.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-32378', );

$wpe_special_ips=array ( 0 => '104.130.239.147', );

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
