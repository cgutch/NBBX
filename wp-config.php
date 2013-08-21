<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nbbx');

/** MySQL database username */
define('DB_USER', 'wearecivilizedus');

/** MySQL database password */
define('DB_PASSWORD', '^mwc!Ezg');

/** MySQL hostname */
define('DB_HOST', 'mysql-wp.nbbx.wearecivilized.us');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'e8H?mq!e49TCs^xE/nivKxk9w69mC!fBSupMvrC/4(1xz!cp#$S9+CDH*)sQH`2C');
define('SECURE_AUTH_KEY',  '#O`;7zI5yb5)$qY@xa#i15S@n9:V*v732qqDF8b#Z$V:mK#ufN9%`C)**lVIZsug');
define('LOGGED_IN_KEY',    'eo0xs;7l&p~xXU3w&q|;ov+9VB8jtA;Ljx?Z_siCDEoj+|dV)puzDXY4?~BNYPLY');
define('NONCE_KEY',        'QwKN"|;_t9a:ZNM3|R^eL:id(c8uFT?W^643"cQDbLs2@T9J/q?!:`RsKAV65F*"');
define('AUTH_SALT',        '1Xr(aaXasdPVAS35T2OH@r?O%R3X?&C)8h^KlIi9yX&TDxOA:iXM03LTYTdwLJXk');
define('SECURE_AUTH_SALT', 'SyX8Att0x;tz%1Ap$rTfHg2q(MdpQiE*@fS~yjN/g_uyxG8I1z+KsEGD2L_7MdAX');
define('LOGGED_IN_SALT',   ')|k)TW()C;xm7&/4X*Ikcsb1:3Wzw?m2jvKv~8fj%wA4zZM9Y$b&zoP_|Hj&N8yq');
define('NONCE_SALT',       '4`@?Kv3jgiHVQWe*SJklHe^1`5C7Mk?Qem1x/kPd8VI|%DzU1xa_+1r*#;(VgDKl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_m7zi2t_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

