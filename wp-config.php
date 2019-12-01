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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog-nuevo' );

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
define( 'AUTH_KEY',         '9fxMOSr^3#5w~>y,.d([zj3Rsxxa[wJeneAeV(P^`c>r|m1Og}u(E}7Af2Pjf3m4' );
define( 'SECURE_AUTH_KEY',  '-Y_GyNEF~,oTb&3;u4P`wNR3?1Klf`t 4l+=kpA7N#6,ikPB2-4Ji925]@g2L|pZ' );
define( 'LOGGED_IN_KEY',    '91u9HMv!p~fdVpi>7,X48>Ps,9q5.S`nK>KwR`g-iPC j/D,>g9v,y;O]2L5,7 @' );
define( 'NONCE_KEY',        '#N.sXw+api-U||A0bQWOJMoE [Sh@E{wNs8P$)xHN`cn:fAMde~]Pu*|I_R!mp$[' );
define( 'AUTH_SALT',        'o#{h:}I1q0G#7&hnk&<e~nIoPsXOV:AN]}T!mhQ#J}TnqF`[`Kvc`8a]ZMmo|iAP' );
define( 'SECURE_AUTH_SALT', 'D|]7o)@&f<@%Ml#7Kxt?5/Mc/9r*|o1%i]%Krna;{&k_F!1w`FjKKh.%5yJGn+$e' );
define( 'LOGGED_IN_SALT',   '-@:{`DL^?+]zNa*k.bAeFvsswuD86i9la%Q9n4I4U[S<G9jv6*PQtOj.xGk*rj_G' );
define( 'NONCE_SALT',       '.+g?d%6f89Lm%-n9C0~exr.$doQ2IQfLT}y!cEI|R/$bo@(8f%ES.hw$8Aj$ao*_' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
