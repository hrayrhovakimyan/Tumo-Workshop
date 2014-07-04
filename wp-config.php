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
define('AUTH_KEY',         '?}&A|r[-.!{<t?}@+G|v=5kU._lyDzQi}D>sR%sm3}7)i|wBMF4G|<XXMpk+5hsG');
define('SECURE_AUTH_KEY',  '7-77f?[F;MPVK>I*k>Uk& ~A*U]=9|-Hf+K#-?%nI3;hy]%~Mv1fvS|lcq OL^+Y');
define('LOGGED_IN_KEY',    '._1TVZ5Z@ ML_dZNC:gaH]Ftbz+8Adiqu:,Th=73*2q!j H|m8@n/kn)_1nhngC%');
define('NONCE_KEY',        '!d#%}m$>^PhQR?Y({9f;bmwlZn(|aV&? Q7}Yl++<chsonAR^6|Lu9-3|VwPdD!|');
define('AUTH_SALT',        'V0k-^t3eusrC%h~fiEC_N4-Qcg+,s6m%-r6|m-kfM*(~AodM+En@-]{H~`yNp(eJ');
define('SECURE_AUTH_SALT', 'Gn%sC09kw+-FQiE%Yi[)S*N$-@FRF-:M}Sd+S7-m{Z*-bZr]:e]i>*(|aRh-.2gq');
define('LOGGED_IN_SALT',   'hjqBq.Gk9XcOYCNj,WX-#_R|M<7!DfSMO%^*s9)e{bg:lS,^|R4lY$?Bi9T=q<Wb');
define('NONCE_SALT',       '6D,=S3=Vs>``_^KedJVhtk;P+Ao3T?PwRJTDy%DiwBx)(D<efB,%fKN5YV:(:;&X');

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
