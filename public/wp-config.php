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
define('DB_NAME', 'sherpaco_wp');

/** MySQL database username */
define('DB_USER', 'riffraff');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '7T|h1G@rWp=<r`k+oP|-{[628gK(JaNenvx-8#R=A3PHx=TH<b%YmC. #9!4BD1D');
define('SECURE_AUTH_KEY',  'r4GRwp)PxIDI~d]?PGl A]C62*1u0OrqpNVTVSk~m7Q8b?r(5a(?.p]-{kys2.F~');
define('LOGGED_IN_KEY',    'VM>>lnG:D0>[LyFKFT%KzYs&+V5hwJCSLmDy}8$0Y`|8^%t58P5l_`)oa`cF)9_0');
define('NONCE_KEY',        '<I54s)-Sj9H[&VMHSI`K8)u[0(! Nb6zaUH`g 2s:WrVQUl|;*u;w}C0Uw)Um b#');
define('AUTH_SALT',        '-MB1Och<q5%hzoO)LJFl;s|d[Y{ZX{V4naKyaJn7}Swq}-{(`<gfc8q^$g:2M&~Y');
define('SECURE_AUTH_SALT', '$]rdG5@|TrB)p0i uG}/c)]Z0WhyAkT3NECzv}!viK+a|}CYi$Q^/Z|M$4%w@[o ');
define('LOGGED_IN_SALT',   'i1+r6 54^c@ot_UYo[6#@he.t#3,H3E?ZND5,yu7y9J*Qg~3UXp<sL^I*cx;t2NY');
define('NONCE_SALT',       '{4y%rKukF%~Jn&h&J#BL0=1<d*%1N+N+~^81I*X-f.4[XT7vHL71BNNg>YIFMSY+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
