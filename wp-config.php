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
define('DB_NAME', 'funioc');

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
define('AUTH_KEY',         '?4YA~LZK?#vsJ<`*p{Cv:0AVKS=z_dSEa>p*^Q$ucsT`Rr1PHyLN)p|-&$hVc=L:');
define('SECURE_AUTH_KEY',  'J%oza7G&*y*,)a2Z+ZpJdfOnY/gQ~!K3+  BY*/$pidJ(1Z dF4MDQ@.pk=?AD}B');
define('LOGGED_IN_KEY',    'V]V%mC@TH&zb+~bl|a7B55f H|]7v_YBS5gGQj(p  34Sx&TcFm]txX4+|@OagA]');
define('NONCE_KEY',        'bkXNqbvRo%`lb!TK7M|Rgm6s`&<(7e>jGBHb6&,SgL4Evq}%hUw$hYVegUeT/xE#');
define('AUTH_SALT',        '9_-z)se+k8ya>PGU?Q3y$Y7#_]bvW`y8uWD6O]RLlXQA#/;rZ=S*[e,%`VANxc_L');
define('SECURE_AUTH_SALT', 'KU5P5~oIj_$*i-m?xq:N,_LSkrL59qcW*~EhUZbdRPC~|tc?NAiOwxH.R%Y:VLdO');
define('LOGGED_IN_SALT',   '|/j%2|=()65r)-&Bt6lW1r)DnJ|)f1UVoG9dRZ<N::?>|  |BrFg-9h*/nO_`^3T');
define('NONCE_SALT',       '!0<TM067}4eRifDso:--3[gUiX[-~pBsR9_p(vpKv.0EwNck,b/_>V,t@}+D9?WH');

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
