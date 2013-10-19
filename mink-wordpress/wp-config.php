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
define('DB_NAME', 'wp_mink');

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
define('AUTH_KEY',         'zFM}@ad|4|C.S%0%8O: DCm0AmN(3r{gmyoT8@|<Lxh!aK9a8I|7sG/Wrj%Gvs88');
define('SECURE_AUTH_KEY',  'g#&7/n?X9|Y,C VWp@]-S /~twtNXlriKL.80UA*5Mgqak+xeP(Om}% vbgH`VgO');
define('LOGGED_IN_KEY',    'ZXGC4,9yLfjz~#_Y+xl-{twjJ}T?xKKjBN vY{lW/.wMfRms)%_|i=npp2xY# mw');
define('NONCE_KEY',        'v_q)$=c4kfC}F~rc:s.xM,L7Q_mGTzr$d:2=3[yM[mSjp60-/Pm% aFDGW0sud]>');
define('AUTH_SALT',        ' Yvf@:D@wjH:-/~WR1ep6GsS Dt7#- llQ4x=tyTR.#bveOuB%:[ier{2u#Q+1mD');
define('SECURE_AUTH_SALT', 'Rg#(P$!FJpKbl}^J_W-5<L2CK>u/G|-jK|4`l[>Td_M0:&x Ny3.osUua7 Vk@,5');
define('LOGGED_IN_SALT',   'AT6e&WMr>|i7b{C3iv|IUHyXN75/KTD[78fmL(?APb|l36?Xtz-+8%1h}Ho,^vUn');
define('NONCE_SALT',       '1w!P-#DU<fTe5,ot<ktlz&!h])lkD/],T)Z9MP6F-.R$9j$I$;.*Z^=x%+kz^f9(');

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
