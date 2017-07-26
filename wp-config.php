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
define('DB_NAME', 'scaranomarine_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1111');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-KDq.Z2S}%&X{9uW/XlFTBo_@V4S,^tt{I^z)^6~azP2f=NyWsAee!mmC|0]s~J&');
define('SECURE_AUTH_KEY',  '+!iu)A%3-Ifztc6=sI%R?Z9|mA?9pA7A37C?8q!Jl82AdsGy*AY&KYFH0p{VNm8Q');
define('LOGGED_IN_KEY',    'u@^DkAUbC2H}%#V3hIjyr 7YH35!-bkGb>13}KM>rPa,b[C?Y+xh|4!q+a-xW,Xz');
define('NONCE_KEY',        '(4G1Z_e[sV](Qz!>G+1+V5kfy;Xu,h%fx@=JXP$WC8]`#,U?WQU#;rTeVb.BZtCU');
define('AUTH_SALT',        '2Qz{?=n`{@Wg5z~VZT<]Tgmw=Jg+UpcrSfJA.NLDBp,o3-(b:%K2kUnvPJ@-~,I0');
define('SECURE_AUTH_SALT', '-fsd|@c*9haV^g:+Gi?Q*>dlGkqO#LHh2IvCgV?4e!J&eyX/ccyoc*w uBuT28U1');
define('LOGGED_IN_SALT',   'HPBm#.PJWiG=Lvna/.Olc;ws|j%<sJ6d(.VY@9uBe<A4UuJWaaNb9m(%2xWeWaFX');
define('NONCE_SALT',       'kZbW/CTI4TUe3N)W|%pw54ES+k8Uw9!S6g[ 32Z$]XQTM*qzhUu$+M,<U)W3R)Ib');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
