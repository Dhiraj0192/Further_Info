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
define( 'DB_NAME', 'further_info_db' );

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
define( 'AUTH_KEY',         'qY&4G9(ne[F_{?H%u SMJlk`.N3~,_B71u?,`!Zpwjkn<g% ]R#P`LYQWvmK/pL=' );
define( 'SECURE_AUTH_KEY',  '[&[c riyrpK)[qa2^<vld%bl}-]XZQ.9|UPl2zt0=A?&V.!$xzqF%8d #dsD0gp$' );
define( 'LOGGED_IN_KEY',    'j5T@rvo:/b$pBwaHf [0O_m|Gy~6N9DKvbMELDbK.wOCAmlaL{zd;spR{r REe~`' );
define( 'NONCE_KEY',        '/&Hc!%#l/ozy}EJuX zdw;D,O%tNp~E%v}X|II48;<MnY.)e*Is[IA2L4)bd?X#C' );
define( 'AUTH_SALT',        '$V<:-MdSVq9T|w~h{`3lMUK&FY_pOPZ<E.MgK]k]S$}o2_~?<s:myZ20!@l.cYoH' );
define( 'SECURE_AUTH_SALT', '@K4Bn`+Xgcf0As)Y4d@Tri-1`tRx{)6RmG.< ?,[itR` rh&cNr8MAHo4g)N7ykP' );
define( 'LOGGED_IN_SALT',   'R-@?GTHPdXW:/_kLB)#Ow;OIO(h?U[fc>Uov>TJ5S9a/N{G44.PqEl(2wmQgfBza' );
define( 'NONCE_SALT',       '^#A!I.&940!;4KO{T>]x|qMN;o3OS5!ne9!bdgBH~raWI*0kr%_[/o8oe}}$/}Y=' );

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
