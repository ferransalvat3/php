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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '=qU!l]nil<Fku=$ 29VuP(%pKe_q63Kto=BKv@f=5zZEHq4NZ_KpY1#H:V>2/!g2' );
define( 'SECURE_AUTH_KEY',  '*~%g<<)LCkRGf6rdp]eKE&h=SzSN$+%Wpt@x Zaf$cZ$^0MpoV)HtU$#|s X}2RE' );
define( 'LOGGED_IN_KEY',    'CBF^d=uLKWT@=}t6lvs=SaI#}DpvA:[Qw&$*|M)k=PTO }Y.D%f8J7f_ocBi2>%`' );
define( 'NONCE_KEY',        'pB`O;<A5S <M-7(Tkm+Q2@*;elTqk`KpzH#Z`?s8cE)+yxqXvM@-WlJRg/5a |WV' );
define( 'AUTH_SALT',        'PA9f3}EqJ8_q)A<Y7kbcDY}b_s_C|36%v;a?@AZfUekN6A!XMypF_l,6Efnfnc*m' );
define( 'SECURE_AUTH_SALT', ')a6-=Iqy{5rO3pOGE;YDl|?I]xQ,z,E[>K|8&%cfa<d8DQNt>GZalJ)Uoug!)( `' );
define( 'LOGGED_IN_SALT',   '^:QTGl(5eZZ?G*wDv :cva2vGhWjW?64B] &8m:1w%+qgj U7#KElkYo+z2w7IS|' );
define( 'NONCE_SALT',       'AK 0uk.^1]Qjt4KR72/h:Ju-LJ7_ZbpdZ}$M|S5SR:/}9#hmq3UV*g3{7`/yBpe`' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
