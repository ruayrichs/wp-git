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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'jRy8ksx)(s|4gUfrr:rwwELy|_;ExnZ]!CXjZ7 di:2p@Pl_LsEicTL&=2}y>,W=');
define('SECURE_AUTH_KEY',  '#M]d;|3)[INSkU0AV6LfrGyL6u$YGE4w)FAHrAO*,hMgCO*ZS`%BWIZ6<97BS$K4');
define('LOGGED_IN_KEY',    'QRnOFDgB[d_Bw[0.h8>!}4oqn3GJL]^GquAE{tF1*@x=L`}gvX=={IM1^eXm9l=<');
define('NONCE_KEY',        '.Td5q%}3ES]BX{.?o}LZ7%M-r7WC ?nC=> _aLI:>l@E1Uczx!CzLnqv$(]fEqb8');
define('AUTH_SALT',        '~$-tB1~Sw5wXFSpx&mN?gUaz.#7F7Uq#*Uc!$o1<I9:fLnv :1O)B/NH$d~u)iW0');
define('SECURE_AUTH_SALT', 'd{UHDrC>)3frn_hwHhJ4pzc@<[e&0kPq1QLr!z>K#vvXHKs^p{g!<ai5]SBcK2wu');
define('LOGGED_IN_SALT',   '/aqM1@I8&e!wj2.-w`uvL6UeZt{9r.D64O9&L?}PFNk#?U)qs[7G@~:.`ek{7Aba');
define('NONCE_SALT',       ',=Z_BOxy(eipB7GDrTA}2j_k^`lNRImWr&1+LK@$+^#f}$l=a3?$sj4rKKU)u3~]');

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
