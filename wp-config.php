<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wp_mysite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y|1Ai i(Vx]Dv9bJenP9T_*@ eH{)P+X;~*l0`u-Ye#=H+pemtzEij~S4,/0>M3!' );
define( 'SECURE_AUTH_KEY',  'W%]t~D|Gv!XT;GyZ6aeuVL_+}H3J<Bi:w-jdMM2K)l7E@<x82TL+|Ld&M6jxW-u[' );
define( 'LOGGED_IN_KEY',    'iKhn2_l!0de!C,sDbjm~m)T%YI[BZmaN@Z1N]p@^dO]It=5@r|ewK.$xwc5n,W~G' );
define( 'NONCE_KEY',        'H/zRovrDq1> *mn2!)PW6@38d%ot)]B8):P&[kP3QZ*][$=p`38UTf r]<9+xXKy' );
define( 'AUTH_SALT',        'fx?$mi>^J:bPJXIBFOmne$+sUqc:%J/wr-Lw,,H}vTTN~HYik;^?A,dugbaPOtZG' );
define( 'SECURE_AUTH_SALT', 'emoqe~L[=itNOhz7i#=9Tr^JT3jA1oDSfz.IK!BCI+p Rk_,dlXR}3mEhBFvD9Mj' );
define( 'LOGGED_IN_SALT',   'gLQ0eXYZmE|YU.F1%%pM{a6dBU ~Vi^`x)|)1 XlNXh%l*?;r(} 2_g1(kDV6}&s' );
define( 'NONCE_SALT',       ':fevsm_->U*]qrMExu7Ll8#Hi_DL-S(el,VZRJCx(MJoaRG[Adc-jZfI&1S`x#(J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ms_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
