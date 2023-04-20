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
define( 'DB_NAME', 'cyenitec_wp264' );

/** Database username */
define( 'DB_USER', 'cyenitec_wp264' );

/** Database password */
define( 'DB_PASSWORD', '7@3i6S.paL' );

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
define( 'AUTH_KEY',         'ntifcl3vpopqvahzsdtqjn65p3uhg3wiczhvc6zu6acs3u4g5mrsjh8w7soj1abv' );
define( 'SECURE_AUTH_KEY',  'dwhuicvoceov88fy2tsyorxs1nq7tcbc1mbbvzftcnzcrcpizehog631hwceleaa' );
define( 'LOGGED_IN_KEY',    '8oodtf6pbfv8jhd6bn994v5hvr70oa2f7ly0mz3ao0osarhokstofnystyydxamk' );
define( 'NONCE_KEY',        'ygakje3ceyq1cz1jhskcpcpdjrbgjt3zonx0lqgapcmex0ckxkbepvr8nsnnz31n' );
define( 'AUTH_SALT',        '34m3eyca28sgxzbzsa56ozrls83dyaalg34omltbtbm0n7nwpttmsapku627rkix' );
define( 'SECURE_AUTH_SALT', '9ttxdj7f4xxsx4i7trmyplkgzdyps00smtcleutt775lkwlfo3pxftnmvalgdu3h' );
define( 'LOGGED_IN_SALT',   'flz2s8yepsf5fj2snu4uv2joxy0kqpbv2s4y0kixahxh0z0r3medk1houzgj65x9' );
define( 'NONCE_SALT',       'kb71w3zzfpdop5gf05dvz4foes2ymgn1okobqcfvssqtdaivplxo1tavknpfljan' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdd_';

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
