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
define( 'DB_NAME', 'wordpres' );

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
define( 'AUTH_KEY',         'Zdn@Ge5ae,WaJ<%W6RhA!XPp>=HY&Fzj*BO~2Dp+MV7JUbD*GT$03^iKYkt36/Pl' );
define( 'SECURE_AUTH_KEY',  'd:#7|<_N|ywA(FzyN[O;-=e08PRP@kuK2LCpv/:H<}Q+Q-xw0bt>@N-qh~,<42qC' );
define( 'LOGGED_IN_KEY',    'qrs4*3z%Ls]XQA#dO1H]~T&7W*[$$+4et-1t&<*C]6(epTvP 8cd@kDD4+l84{n)' );
define( 'NONCE_KEY',        'Lu/*P3?xtn~Mk%aI2 .Jh!egQQ1Gc*@vp~QW}XZ^e>s0eW_*nH~{KR).l]t*Cn@!' );
define( 'AUTH_SALT',        '(ds#YKOM:T>w~{*R83aRndlZFm5$?ej}}ff* fWcoO9GTj]X@)rojS)@J2%+.LQ5' );
define( 'SECURE_AUTH_SALT', '@I3G0:Ms#h*#{)idx~g!!PvMo7p^_b}Qx ?z^!-BlLGx7UwSn^?Ajr(FT(]GqylO' );
define( 'LOGGED_IN_SALT',   '&f)sR@_5^+KJZ{w-v<g>OOCi!7*vuSs: YKih2@#VLl>$|Y{7[)Rou0pKZ),bO4/' );
define( 'NONCE_SALT',       'rd_I]m!wXlEM;K^,Sxa<o[<BMLZ.L~Th2nHe!n$7Ezpq-g)KX^wWb!.aa/CtXaZX' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
