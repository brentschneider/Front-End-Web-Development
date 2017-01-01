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
define('DB_NAME', 'artfulpersuasion_net');

/** MySQL database username */
define('DB_USER', 'sysadminz');

/** MySQL database password */
define('DB_PASSWORD', '!M0g3db0wz3R#40mD~43K@w');

/** MySQL hostname */
define('DB_HOST', 'mysql.artfulpersuasion.net');

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
define('AUTH_KEY',         'chnG^Po4aN&yxs58U5FS3gw%h~xgU%"ClveXN~q9ZSm/F&;Ea~$IEiv+Ef1#?R7w');
define('SECURE_AUTH_KEY',  'HE/*2Fh~APGYz*A%56H!EldHj3H0NBtWF2B+XDh*:VXGO0shkCpT/RMCBOVMUT)g');
define('LOGGED_IN_KEY',    'd6VK)pPFuBsE@mC18l&qbxO2MssuPVXM$e!9oQ+exQ*1@"0&vhU~Ujpm&@b%uCcp');
define('NONCE_KEY',        'eTRzv1"*E3zu5T)U0rEepL5Pu*Hm1ipduATRN(aWF#N`*(vYS5bigmC+zIj!Ij:R');
define('AUTH_SALT',        '/ABvsk0`DgimG^%k`ZQc0Iw!mL65r*b~()E)i0k0hjh(EP;6"7JXbCvNF96AM12%');
define('SECURE_AUTH_SALT', 'JXtF"6KcthtXDT_3gtx~)CJ*P@BvG&jRy)A6dogekZEhDOe0Eqbx$+2OS9#|U`7R');
define('LOGGED_IN_SALT',   '5Li6Zi#UrquHeV5StMg5Fs~7JYW2c1tdU_h6$!?j_!p/A&kM/*"(9J@u@t@LIh?V');
define('NONCE_SALT',       '?1M`pq&iRci8iXxK7YOt+Lc~m/T40~l7n8e@M!|KC^V89/U*;?V813daOlu`hYK@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_bfzw77_';

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

