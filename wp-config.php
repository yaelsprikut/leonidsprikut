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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'UaH`~E--BbIZ}rh%Wi_{#+om]YLWT+B/Mt.84O)=7UvdX*2cV^^6QH%s.LLjlq?!');
define('SECURE_AUTH_KEY',  '{QG6l 23_M5/k6_F|sth%8DX--a 4x$s>%lOjOU;-mYk~_Sba#b&Y`iqi:Via# 8');
define('LOGGED_IN_KEY',    'HnJkqc#$)+^~ bXCv+>%}i(W^If+h2R_8%L5X._c}F4LP#59|M`c/!gdRi61V`57');
define('NONCE_KEY',        '~.2: Dx0[|~:K/=Bu7{0*Pkg->9o>ws{9-c334OZr}KG_tJg(6H2*:DRN>)97.OT');
define('AUTH_SALT',        '[MZ5^!>k{Dn:P+K%qUx<FA=]_7@IcK-`Ma}PEQ@r6:.KD+7z{0~]-I_+G*|L8NT_');
define('SECURE_AUTH_SALT', 'pL.y{%/)kb9P5Q6ZJmiidEGHXnLb6HlQR}`(BKG5GLHdBcE}(1%yS6[7:U2C[6w/');
define('LOGGED_IN_SALT',   '6+e&xD4s5DIwXTu>gOG!g9p{T_zy;dEZFRx}Kb-hAN#0xp2_+%p!L#ID&zfxy{kT');
define('NONCE_SALT',       '>-.knCjt[ j$QDSh}N+2G3iUt4FxrMFn[X?&3Xo^osR(s>.I%OqLr4T40c[; :x2');

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
