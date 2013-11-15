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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'r`5/ml~h-5=c=3V8NNAmt!p6=JLuA:5u_3}%OnWU8Z8|Ep+Ov%>.F$@?X&1lm[/x');
define('SECURE_AUTH_KEY',  'G?96B_O=%ptrnE{G<#ac}Cr_p6z1=`<8CA0X%$IO8@pD!u%T x$p3Cv9(c#[NuaE');
define('LOGGED_IN_KEY',    'RJ:)ck9LJjgobqpNKxdSQGSJaSU=eo8!Ri<$OAse@nqw~9sLD Nn87aelX{M@7eI');
define('NONCE_KEY',        '1hp U`6_+wgNof.|N/DxEyiEN !cGhDq+,s7r}0)wofyn&JO=?n7hal%9*H/lm1`');
define('AUTH_SALT',        '[YLZ:2OY06_`Byqw2_ [Z=5<U$c@ooX4+mV6<[kkzW_bP~G`oac|~0u$)UZj?[yM');
define('SECURE_AUTH_SALT', 'z5aZP +f<;Rx:hf-th%*CJ+wFb_Q`{4<k [/t../MVXM/!./Hx`{E6QNV+%gc^R8');
define('LOGGED_IN_SALT',   'I4dG>L*d8Z8g57)j5N~zX,*MH4Dct.C1,dY+CtM@%a?eYExvn^EHD51:FzrCIOkG');
define('NONCE_SALT',       ',Qu{iUjbxYw-,Cq7rSoz<.$1nFK]o-YP.2RER.o|,kwKxwUX@IC!Oyam)iN5|$VT');

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
