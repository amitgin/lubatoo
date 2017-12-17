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
define('DB_NAME', 'lubatoo');

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
define('AUTH_KEY',         '<8.d}_$uh!S$iZ(q/%@>:Py_I2BCB/~h+A4&T]vzHy;*ihNoB`>(w3.,#0ubfIBd');
define('SECURE_AUTH_KEY',  '[O$!~nsR?s`jm|h V$8c[#<e?O<}{?[o @VJ]*>d-GH%?g3:@}1,UTZqgMzFvk84');
define('LOGGED_IN_KEY',    'a+o/VdDqG2BG>h8LyYfJ&6.KGLUyj.HNQ-V<%~CI5-W)mtrZb1GUe`lot_cP<fJO');
define('NONCE_KEY',        '&f6R{C,I6k|3VoiD}$ 5vY#rY?9X^1V~by,4mojHrcm^?R.7MrwWbaY_w[^8ef?p');
define('AUTH_SALT',        'CIbPL$mN:}[ctdW/GCY7fGiX?dJ N7S:k7Ln{n0HP?.Y{0:_xn+C0>{^w_[i!}[w');
define('SECURE_AUTH_SALT', 'Td~;mtday3Vb]ja=+,TKcUFTilKu<oLZv]3$>iufAOe+](/7#r|skO|ay$3*!8o.');
define('LOGGED_IN_SALT',   's8:EFeYvyKPP5KM@Y,yXI3cnC*#SO8qktGl=Ua~3xCAYLM?{ G+lMpb~z,!<Q$r%');
define('NONCE_SALT',       '8AA&QZjNHOF2R{iV<X@)Ty0:&gw$aJmY6~qNAUFPW54^+*&$b#.:]J0zJ%/EY?|b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_wwryki_';

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
