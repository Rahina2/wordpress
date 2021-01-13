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
define( 'AUTH_KEY',         'rqHcJA_#[ij -]P/Dbkeq`R|8C{IQyA0V,,GwH#oeu_`/C9G!X(+|}RIpO?am9(2' );
define( 'SECURE_AUTH_KEY',  '?Voh3{Nme4~^JNBx!=$zhSC N%&lD?<A--yV1I4Uu5e8;*I^=<uSdQ$Xz{qEP{8|' );
define( 'LOGGED_IN_KEY',    '`{5jzSaa.+FQl@E7@h/P^obzT>g2%>UHE,F%o^vZ2;H5PCiEnj<_mC_l&@L#X|_b' );
define( 'NONCE_KEY',        'K6gA(nV(&$M-AHJ7HA10NCR/o{ K{VgNuSIht&#V&W||r(p^Mp7E=&56pp%?~w^c' );
define( 'AUTH_SALT',        'j[]nY[d~jm&=c6ToiY8epnMwkB|tNwZQC|L(om5,B!^tHC(H4RqXq5D(|I11+8)5' );
define( 'SECURE_AUTH_SALT', '=e(IPXQ|b?HpCsyQO0/oLC!/,?^>e3$IwrilPb@c@timy<ON:Q=-fV(C22*&}c1N' );
define( 'LOGGED_IN_SALT',   'Pa:uMCxP6tP`.<tAl!njY&)tcnt{YG(M&P~:M%:S(,Y!.!lXHoRMa^@>_WeZ4&)t' );
define( 'NONCE_SALT',       'yaTiT0:8L  0T}yKac`2]xv~/jvsS1 l^k?[UD=f7iIea|FGV3.`O^v{mx^~qiJ;' );

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
