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
define( 'DB_NAME', 'm1486_parafia' );
/** MySQL database username */
define( 'DB_USER', 'm1486_parafia' );
/** MySQL database password */
define( 'DB_PASSWORD', 'pp7JNZ5WFLiaj66Cu8rA' );
/** MySQL hostname */
define( 'DB_HOST', 'mysql13.mydevil.net' );
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
define( 'AUTH_KEY',         '6VDOEg|y~qC4wx!)7;N;-2/y8v8]sDiOfmkbD|E=D^NPE^AU1o6<-mLd36~ytD.8' );
define( 'SECURE_AUTH_KEY',  'c8;i}[aEsRS[Hswn;bS6_MAV*7%~+D#}FEw)5q;eIG{6/@}}0~t7SEo{{JH%xX4=' );
define( 'LOGGED_IN_KEY',    'q6I]vALJUPkSS3K$vX6P`4!}%;zwyit8tdh6*5EjTrJx3efCRN/2k#R`V_2xN{+?' );
define( 'NONCE_KEY',        'X,ZWi.`~@|y,0>>+I(wnKhOI1-_N{V;NX=_otb[IuT XWErf@@c+$}vpGhUp-%{>' );
define( 'AUTH_SALT',        '=F9AB78A:3gS|QMEr&K[^obRz~;n-U7-FBJ5o~OMOS6Ps.w)uZ2FHOA7RR[@4Gut' );
define( 'SECURE_AUTH_SALT', 'QtFtR|M/m^g2.2iMOA}l ~4}TD&`, .),OK-,,q-:nH$7:_h>/X1Z dT)`zH:%,%' );
define( 'LOGGED_IN_SALT',   '@43VDuZG%w,nL5rJ2~O{s$mWPq~0Eq^zRMk#p{.UBLxCuwH4wi%rJn@KVnBpzp&?' );
define( 'NONCE_SALT',       '/`ST)ayIkamO(&0? <VUX2bbvHp 2uf({-dj2&PGLFWDoqZE)&p-*QEIlP`|^&lw' );
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