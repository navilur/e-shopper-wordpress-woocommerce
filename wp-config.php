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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         'Fw=uk|KEkeIau?P~+8z%oVdhL!0M7/|[Rx#UF 4Gl0+$PYRLaPK=2zoKM2lS,dPO' );
define( 'SECURE_AUTH_KEY',  'XO$TX_1-@R#aS>(brvRcyrQ.]aX+Sg`*%F+-E^?r3?0ARdtmyHg{Hz^=g%{7AX3+' );
define( 'LOGGED_IN_KEY',    '|cRwj%`7GYa5*6&z5on_#m]veuyhmkJ/nTAN-^>ux(T7Z1V%;KrxR$)A@>w>{PV%' );
define( 'NONCE_KEY',        'W(:I-wP[l+krlm1mq]@9:Q>_@Yi,TB[al]-_+O@n!FRS:qrEgpq$sz#u^v^,&RJ&' );
define( 'AUTH_SALT',        'U-;j[uPoDZk75}P$k:Y-L1pbXOk)?,x5ca+]}W=c9!|B~e.dh/PS6XARkU3vJj(6' );
define( 'SECURE_AUTH_SALT', 'efpv+r~},(q@rP}l>T|vPikA21LkiY04.{$Obr8Nw^f@70&SW6b9HoF@v8EY;LMg' );
define( 'LOGGED_IN_SALT',   'A?fH/]3y?wM8ITJ8i)RRYs?,Q+c}:f> bQ1g1mxqUUy=Ibx!>}STEd*dcOm$ 9Mu' );
define( 'NONCE_SALT',       ')~Vbb2f8v5]`S(x08P>UWgr45&?i+C6b{[rFgD^s(Ct:xP6kL+S.T1/4yo~5#x+t' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
