<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'HeLb/>rG,Dl@7Km2+-=}WN+M{2W6/uWsU{,5J|pF6;1L&bImT0G46IH:TnAm-sGf');
 define('SECURE_AUTH_KEY',  'gJJf k-oQjTgF`q@e)J]K8@ON*XoZIU@``L{Y9+jDF/C6M6[X-9ru;{3HrI1rSke');
 define('LOGGED_IN_KEY',    '-rb|gR!|adxFs^gv^ScP5y_adAn}Zzl@_}kNL0oX6bQi@(M+C|I?_R(brDeB?-2t');
 define('NONCE_KEY',        '-PJumZiyy31T-]*fspQAblrRt+[@c4@sT)~s3En^8iAp-1PPFB~tN`*Pe0-lgYar');
 define('AUTH_SALT',        'B]Irh0~3[2FP0GI6]=b^BsJm!TJXQ}+b}~[U@kV-9#O(!$6!#Zqf5RYSOCIf1=Z;');
 define('SECURE_AUTH_SALT', 'rBh89#A/lC+:Ck7l+& Zx_5~uA0@V>uH{?Nm]&IdxvoVe#$LLns,2bXLY-&y@G|1');
 define('LOGGED_IN_SALT',   '%FDyQ gKeZZHOi@-z&0uj>|3g--wu%dbOVAH6c|:pr7[xNf:},N+`9nC)=55c/|F');
 define('NONCE_SALT',       '4aq,Q~$$+yy0-$3o-Tj:J]&pXQwFrA|/n-b-]i#M(0Si=3lV-gu.l+t^QKGY a*2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
