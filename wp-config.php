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
define('DB_NAME', 'studentlife_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ',0ie3NjDcQr;0yf<5:>B7:}a9@pSxs.nSeT<z[xIHgi,#w:$4#:%=F@|spE8(|#O');
define('SECURE_AUTH_KEY',  '~5Kzs%)AJePh+LcE;6&rq$^NFe#-temwV-KPU}|^%43I-j|C|&eGcttx6#/K!J~t');
define('LOGGED_IN_KEY',    '$D7X{gi(+WvIc_$$gn597ymA)]E-~OEn} p.OjzD8 R[k9WGlBg,7jm3CZ^eo|eM');
define('NONCE_KEY',        's-y/DuwArH)nD7ziNQ^7-a25oWy-zNchgzBUXq(Zi x|(Bm{.P<`y]fX5l0g=*N@');
define('AUTH_SALT',        'x/.OnjAc-VAPv5S:1unm`~-7!C8hp7y|512!|KL+#C7[DwNUEqCUSwcIG+}L Ez^');
define('SECURE_AUTH_SALT', 'r/6_6#~1hb:H4l6)Ogr+`iw!kY9$yA.Y7`IRFcAV47pS8>6A$/6hUadf.==B1x?-');
define('LOGGED_IN_SALT',   '|4`MU^MN,Yd9_|J1SB^iK+5sowC7NL!G0_-S<qX^s1l/-5%MC8)v 3!|a_L;2npH');
define('NONCE_SALT',       ' ~M;{:`sp&[c:k~d6|nN{qFPn@[;93s~}UzzI=ia_Zl>Lddl+A&2pQIEI},(4Ia4');

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

