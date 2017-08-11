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
define('DB_NAME', 'ethiapath_com_1');

/** MySQL database username */
define('DB_USER', 'ethiapathcom1');

/** MySQL database password */
define('DB_PASSWORD', 'aATk62A^');

/** MySQL hostname */
define('DB_HOST', 'mysql.ethiapath.com');

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
define('AUTH_KEY',         '6@f|tL?D#p;mrny(V608`BLLCEenc:OilgVqL@K9f44WQqyFzISy48c@|wUJd82e');
define('SECURE_AUTH_KEY',  'VGdD~d&6!a6(aJy1LfbM"Xl1OTUpM_8YAXDG"o@*0$qCCO+f9vFYl4naqiphU(yP');
define('LOGGED_IN_KEY',    'mRVwGvPnGTUu@"P%HcGt*qFW"C9ZPcoF1jo8y?ArAt;y!`5$oxd5KXX8f9uV62?r');
define('NONCE_KEY',        '2C^U~y;?|sN:0P6C/MK|G$vM;"v_7k$oaz!Fz2qN?8L6vS3q0*~vO3:@/Oh33Bt+');
define('AUTH_SALT',        '#83?NaG_Yeu_OkI"u7d~t%E%9eGx)ce`g~+"2)7P(F@hLIQ@ngTq?bH"I$J523%h');
define('SECURE_AUTH_SALT', 'S5Wp2jOmw$iBy/:QN:_YNLW1jyK#NhEAgaunJ2X#dbTYs|Xi4kA;zOVV*$O2OnT~');
define('LOGGED_IN_SALT',   'kqR?n~~B)cN1hC1goP!MUr()pfY)LJ9a):ENI#iJ`VNCN2nZ%7;q0hyML3!$8v~t');
define('NONCE_SALT',       ')B(;kd~~n1~SZbZl*0xoSpq|n+H(pl%e+z@KH$mD4U)3oKx;E94F|bxTF*vi%C~Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_d7f7br_';

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

