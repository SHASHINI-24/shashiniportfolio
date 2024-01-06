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
define( 'DB_NAME', 'shashiniportfolio_db' );

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
define( 'AUTH_KEY',         '<6QUw1W8L_4E/xl}CE`S|U_8n}AE>.<{t_B~cByZQXJ~KIU<T#nSG-6PP}Q#$(l<' );
define( 'SECURE_AUTH_KEY',  'k{:lvPa% 5~HhR=Cl=k$t[W?q4[2VOdHF=5x(1Tj^@yEbLwbJn}# *Uj|+d?z@%3' );
define( 'LOGGED_IN_KEY',    '9F6Mye~.8^u^oC I03js_f/H;QPwoR_J5UZiePcIA~9RmC=l|;cR{TEa:S@ ~+tB' );
define( 'NONCE_KEY',        ']j9eN C8iTnTnNR9t5 |YxZS-*-m7i_/Ka;NeEA.u+t~f7/%O-yJ3M{Hs]<S:Ktc' );
define( 'AUTH_SALT',        'gpH~VjJ/,^4/ilGp$+(t8-[%{(Z?x;?Q$ylQbOv%^espxoA@J3[pgN&m7=S4;UO7' );
define( 'SECURE_AUTH_SALT', 'aF#wJU R]T(.yE (LD?}IY}M]BVM_3%z1y?hLrKr cu$GJwCKA^(7{`j)|BaS~?N' );
define( 'LOGGED_IN_SALT',   'Tr!BF6@>x/1yf3_sI HQfaGEvo]7d5+):P}@?k)wTR#Qa@P`@h&OK~@L2v?`W7l*' );
define( 'NONCE_SALT',       '(LIN9,Hw,d;x/c1LqK/yh]s}&DdVUi`|:<y4%Y}3cj,A:N7fwFU,C$r[7gV &#~q' );

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
