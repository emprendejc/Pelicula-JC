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
define( 'DB_NAME', 'base_pagina' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         '/}h%&-EdGmp4^`#!Eorkf{R.C]%)qF{8ae1WP&kfhm2(dA#E@Z&fl/B)8^RVO2+s' );
define( 'SECURE_AUTH_KEY',  'UrFovB-l5J@qZ6=3R= FOUv3c>r{C[/(IgQ]8t},/xrsu^9hI90Q#E5p5xgw>d7I' );
define( 'LOGGED_IN_KEY',    'kT._R!Cr;0Nd@WGb+Vafc^P8Gvh>]F=1*l/4&]:/K6bq!Ui};9=!wL-veM2+2qv@' );
define( 'NONCE_KEY',        '^2.KF14QEr96a|BxTzTYKbC,nWOi`rzsK OMdA{7]~qC1`FB7}{Z}]`lG+R^y{V3' );
define( 'AUTH_SALT',        'WQ{X)P&:b`(qqUH]k?s_00xU4z4FXKzMq0uu>UPe!`%Craw-*[GL0FG~<m2ds#ws' );
define( 'SECURE_AUTH_SALT', 'eM_c}2xn[O]EXDh7Z,pD1pO|8u{c(X8G(y-DD$j&hNB&DYGpfPcUZq^hp#+^K1<+' );
define( 'LOGGED_IN_SALT',   '*)GZK%biq}U~0N_-!A1O66D}jP$.9ns{VaEQ:;d$n%JAS)a42pteC$kiO6*C$r]]' );
define( 'NONCE_SALT',       '`y[~K:N4.bib$WD8P*f~c9+5rA~Y7jpzqSxq3O7PlIOT`)k8:AZP3ly7m,)7nlb&' );

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
