<?php
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
define( 'DB_NAME', 'ebiz' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'YmubR_2|JoR.}NABw9m0EuA@W;KeyaL&4UZ>O`l1n]x(aFUiV8:2;;kNTo}q@Vs1' );
define( 'SECURE_AUTH_KEY',  ' .Q/&{bs&KD-6)_m0u~fn)eC9OkiHWg/1RgFe*peCDlDKTnEtPpR+Ypu~*4`(S@^' );
define( 'LOGGED_IN_KEY',    ',{ClVE`||9U];1Sp_GnMRr%x~@*Z?j8cqn$  Z<uo,Vy%gc$n#K5EI(my3IJJ)jr' );
define( 'NONCE_KEY',        'n!{>QD.<XGJm[<VaXqYJf#2^s&h8 m%Fnh<;w70~NIMO=Ps/@Oj-MR?Z3 n!S8@[' );
define( 'AUTH_SALT',        'JxD)+Ob:Y@JUg}yxpKjUk{e%p Yzc,cJ&U1PX^^iB{v7hM&#9kw7g}I1#n2SfQYc' );
define( 'SECURE_AUTH_SALT', ':(m{([Zd4lj}%-S<C_WW)86D/mhF7o8rvy{mr%9(MF(ePvjs n>2jnG8q1luxJA]' );
define( 'LOGGED_IN_SALT',   '7uOhk<$L:AzQ_ll%X4c8@ wiDZNxq*`_XQ=uOOf8os-jczC1x(#(}akz::1ncz1|' );
define( 'NONCE_SALT',       '+%2NFn-TSQ31v>ijfQKI54&&)LH94!?(]#fbI`,R45q|%ycZQ,I3M3MAnfFPMP<V' );

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
