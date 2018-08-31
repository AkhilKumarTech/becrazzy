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
define('DB_NAME', 'wp_becrazzy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']4Xp)~E}K8U,3lKQE=%#eA}|bF!PRjw`,sL;`rK_gUWUb=N_oCLt{yyOJr5LEEcB');
define('SECURE_AUTH_KEY',  '_=CjH]4`r6)s0|aQeNY)Z|oUa}DP?EB[m+02mW{zvFwa7AuF.bnPA*5N`!iKqrsu');
define('LOGGED_IN_KEY',    '+zl&GG4t]/BB)uz#N7VU|W8e91o+vY_7@ynZy@ly~czaw=O)gWqo#)+}v@PBi`i0');
define('NONCE_KEY',        ',.!Zdw&$uy`T =|Y2SPH_S(N[@z0*,=3F,tchebJbl~/)}pzjXWInK.tZ)e*#je1');
define('AUTH_SALT',        '^qo{hc#ray6-fwe t:]@7m%+ir9E|J4<MJ}PJ1KdGm#f?-Unlm/wsY!qNkKXH^Vg');
define('SECURE_AUTH_SALT', 'h3&tndoWD1Z&*Q]TB~]S]03PFh%O#;+uZxvq>nN9}f3aAwJ}bWh !$x3j$RaJW0z');
define('LOGGED_IN_SALT',   ' (HF.RGzg|M@/X9Z7 H4+ox7QA01DP{BrK}sqT#xh-+U?FolReZqh%D!jCcn/e2y');
define('NONCE_SALT',       'b/;=!.4JON#Y-vmkUqlz0>dd4]7[TYC:~hp0v{o9k2puN{9B)RrX<-8qZ[Gz}O-U');

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
