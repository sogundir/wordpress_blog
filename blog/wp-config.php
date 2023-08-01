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
define( 'DB_NAME', 'wordpress-db' );

/** Database username */
define( 'DB_USER', 'wordpress-user' );

/** Database password */
define( 'DB_PASSWORD', 'stackinc' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '@7AHSVsWe13PM2k_xFU)6BkZUA9+E-5.Ax0_/XMvB^LNUY=Kv.mNFi.=];u8AEZE');
define('SECURE_AUTH_KEY',  'h]^aBaaTC,:2`X1#KjN- -yNU]7Rg=z|uR i pKjJ.&zq4gB)Q.#>K+iR*`|GN (');
define('LOGGED_IN_KEY',    '7zOS07+a{-3L7E&8&-?RU^hoC=F1M+t%Nye4r&y-ml!NT^1- vp,p.2)}V%j)w>C');
define('NONCE_KEY',        '!QOg6zlJZX})G}!#Hb9w[AMI-Y@F$|~@Z5|![s`iGkc-<UK-dr|8dqp:^j?|Z$ZT');
define('AUTH_SALT',        'tOCR]{w`S1O2_$YFqa``|M6MJ$v$+L:O~4lwE-{A%Ocl$`oa 9 o %5dwQA7~tA-');
define('SECURE_AUTH_SALT', 'EyPTF)u`L} WUdW#~<|<Jt7azBca>d8HfcgsMmhr{&Pq~zfn-?:a5GYuMZD=w-U5');
define('LOGGED_IN_SALT',   'y_v `}sEb}QvzaM`HZxD$e?C7SM;G/9Qg{kpx-e`/7uR>$@^*n6Z6p ZMO/*CkK:');
define('NONCE_SALT',       '|d5WB:_{^N906zI^Nt=qX=)ej/HrVh;CKEvs1wN=<>A!pcaO;.)m; =Sej=]{(S]');

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
