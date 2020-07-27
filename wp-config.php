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
define('DB_NAME', 'wordpressdblinhongceramic');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'Tmatt2015');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'ucw?/|Otx+y30Iqy_<F+8B]EH=zld4a8wMhN!D_a:W>Nkv*m&kT_-8Z%D+|6!4}T');
define('SECURE_AUTH_KEY',  ';iIg_[pa+Q1u/zBxEp|@+3b#GrJ!+9A]Yd Z|j0,TMCMPQz=vk(iF6@7+0ya#!cG');
define('LOGGED_IN_KEY',    'QDNxK 5#lw7~Ar0iDtW0N2`(rPZQQEs@_hZCD8yr8B]W*Bt?7%avzHj_4+R<ccH#');
define('NONCE_KEY',        'y!W>;cbW{*5/MC#%2`+Ml3<l,q-Ts?7-+u1:p&Ae7x-hzP0vE/l|R%_uPlJ:Pk`x');
define('AUTH_SALT',        '(0(%]%{1tmfme/-|%EITm?I_xol3:gr*B:4x9e9(XoX`adP)9NxlA-kpA_?nbMou');
define('SECURE_AUTH_SALT', 'Av*8(M| LY/O9S[AyaH9Vy@6%4Oa7hLHf+lz1[mh6oi+T?g|zvY,(De0k;ZM4Yx}');
define('LOGGED_IN_SALT',   '1#){PR-d=de&=zP1|J]4^?bmI~zlg|h,6n_lAd6r;Qj4371aAe}#X3>wY)rl4{M-');
define('NONCE_SALT',       '@do+c2_fu+gf,zE/AN(U6h{vP;3jo|r.R|Lt:CXO.~PV+52YzbMGBnGSum3W:eP7');

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

/*
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'linhongceramic.tmatt.com.au');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

*/
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
