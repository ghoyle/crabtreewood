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
define('DB_NAME', 'wp_crabtree');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'nHS,m5<1vVnN|,AL1W,OYqOb>8aHX{y{xMF?.DO9Fp1IvKsZS-IB?(f +cm@Tv j');
define('SECURE_AUTH_KEY',  'Y%MxdPGnFwY&^OvIH6v.bdvG]$XaBM,M{?FDn(`HDSU^3;&H10>h7=>7auC8I~+<');
define('LOGGED_IN_KEY',    'hbp9P%_!H%vlM#=YDBY|l!#K!18sC/M*iKU@l[PE,yk Q!E{*H+X%P,,~` sU`9{');
define('NONCE_KEY',        'L|N&Bxoa-qo{?9,0eehTs~.d9-)XdI%=MC6>[8>&o0.gj$Ii1&ikA`mt pir4DdH');
define('AUTH_SALT',        '/x:w.P%Tbw=HjUft-H Zgess:YuN7*?d|-k.pCg~Eo^_L)IPh?WcaKGS+3DtV+/&');
define('SECURE_AUTH_SALT', 'zm?IPyIp~P-GfP_8.$G:j[ufG~d+1*.R{qazM&%F{n59eISHa>Egs0l;{Lv06o)$');
define('LOGGED_IN_SALT',   ' HOxO+hyHy]A@[w&y7y?2g.90|xB#=z6Oh9d|_mn^c.(8m!5a8ARq?+. U5mw{)R');
define('NONCE_SALT',       'YxEDJ!C4>vw8jpJ@3E%J!`lwbAe;LW20%,g?-uHs:hHv3@4}#6_)=wTr.zsvg5/;');

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
