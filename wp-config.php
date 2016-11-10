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
define('DB_NAME', 'baodao');

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
define('AUTH_KEY',         'kn9ECc8p jyfq<E&Op1gwS!]gUcmB4SWDL01C*d$1Rc2:6bq+6Wzp0OswI4ye81y');
define('SECURE_AUTH_KEY',  'xbHadRbP1TdHz(p&i(F!t?$@_Er]&0[c9SH5W3G/9/&JAQaAr:>Q]#hx=av|dRL)');
define('LOGGED_IN_KEY',    'FzcJA:$/+<ZxGgfq]OCpJZ,PR6PveQvj;euWUMtlD=$[+Z[Q^ 4Z7DBz>/^=AA[C');
define('NONCE_KEY',        '9zCNNcX4Lw%vl`i:T*;$7IQ]kYIK$#<*B%@,(e{?jfqF[nk+pku(?x)9!FsUaML~');
define('AUTH_SALT',        'RwQwMuR#&H%AvU|6hCg.I-o,w<2a%Lo%!}.NW7bUf0jS0zW8U49r_yWTJZ ~;J9z');
define('SECURE_AUTH_SALT', 'gaEQx{p4;h8z5%eD3hP_IM3*t5L[.V/d43axLge81G,})*]H2`P+v>(P+f:%M&{9');
define('LOGGED_IN_SALT',   '5/0?B&Ni-}N|z;e$aCV7,jd=c$[,l3Pkj4%dpbt_3=p#dW MP5VRn9u~/uI>Es;E');
define('NONCE_SALT',       'V?{l-M5&=u^9(Y>gw/Zl9@HDYRt=Mqm~Z*+wQVo*-Dh_%8PE+L)rHSb11uY{>Oc,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bd_';

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
