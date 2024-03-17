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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webhotel' );

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
define( 'AUTH_KEY',         '9{s,xbKW|[:zT!,~B3A:{YL,o>:E-7|>U+7Nhdm,hs`dRoB.OqSy[:;5cCPMHfSq' );
define( 'SECURE_AUTH_KEY',  '?0@*f$T#1r32{6{kntBNZuta5ib!N-~R!#5^,2^-s~AP![IM=uGp(*f~FE:1:VEK' );
define( 'LOGGED_IN_KEY',    '`17ygy|nU5lB8)tTSOuv_+_+_O$v(V[uv~fBOm0V-;@x q39l3c-a*V#c#+ z!uV' );
define( 'NONCE_KEY',        'CV%ObYTUl?o9Wh O/on3Q9?>|sj`v3%)/A[iz_>EIk II+M+bf$th4Gs5=d|=_-p' );
define( 'AUTH_SALT',        'tUc?d<i`Z]iE H7Hu)8u.8 ]A/e,Td*^l#S>xFI#AxxCIk>yVk?hrp=C*%re}+Yq' );
define( 'SECURE_AUTH_SALT', 'uw37}Gecj9AIt7O8dx0zZ1gH<+VHurn/ILe)7!b1oEs89%+L3iE+TmF;pnv|EM+_' );
define( 'LOGGED_IN_SALT',   'CoKV>/}TU/(-Mg7>v:mORR4WcME-6|MJ;D]Z_ 4uqoR;)J1nZL/W.Jj+NjS>H=1:' );
define( 'NONCE_SALT',       '3S-0vT+&}of p+rr;.G%N4iw4pvblTyD{c()m5s[Kviq1:06lTssqnthRe6PL5UY' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
