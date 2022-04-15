<?php
define( 'WP_HOME', 'https://wp123.squareops.co.in' );
define( 'WP_SITEURL', 'https://wp123.squareops.co.in' );
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)   $_SERVER['HTTPS']='on';
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'squareops' );

/** Database hostname */
define( 'DB_HOST', 'wp-ha-ashutosh.cfdyrms3ajre.ap-south-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p~9|zK:bttJ9 0#2P|Z$^iY51y/`?Wc$6Fw#J6I?eHQH/m!JCP9heej[+CmRFEyu' );
define( 'SECURE_AUTH_KEY',  'Gs,E-gprmoaMB$J+h<(dAdaz!JO56kQ.w{JXYFCv7*T/4tPiF`t+H:)jHM#XKf,(' );
define( 'LOGGED_IN_KEY',    '}Y7AW.IJboNbv0Q7=:<Nc;0_P0Dh?~@s:.|FMhEb/Lz~6S:4~y#R6mu+unQ`3ukF' );
define( 'NONCE_KEY',        '^>oVwvkv86#75!UT;)*et8`cNOkVvXc!6mK-BSGRxL%CGnQL|2~{}=[Peav#h;XK' );
define( 'AUTH_SALT',        'KDkr99foJJ8t5T:9zx@+YclJRyFL>bFk<rpEg}VS]B5gxj/:FgpoVch7Rb^Zo@Nu' );
define( 'SECURE_AUTH_SALT', '0>^!ACtCe>9<iYY:i`t6wp&3p7R/`-d1u81~@QO7(_@D5a+cpwTfb!Wc4Za!9Ztf' );
define( 'LOGGED_IN_SALT',   'R#D/Nony?Slq4C+q)r*j>ZxN3b^^#E0S#t)bn4Zp9Sbz9jMYi%}9A.g}vd4#;vLB' );
define( 'NONCE_SALT',       'Q(qhKS3QG_sdrM;BdJzf_o+}JL>cF)UI7(o|VY]:1uC*Vt0{CAYnsNj=!=%O4-9[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
