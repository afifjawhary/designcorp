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
define('DB_NAME', 'design_corp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '&x~|#a]TJrU:b-0[g%kFH^g{*(43tlW>``,L>0:%!>IU41q& 7D$1OfKpLMxy86/');
define('SECURE_AUTH_KEY',  '74/>C/;xbWK=Irh]FzX>TP9vfm9zNz}.o/i?b$7B11c)QTWR+uu*g+we0]y=UUXe');
define('LOGGED_IN_KEY',    'kq4Q40i;yXY:3*9Qa_Dq/(pp{wrkDx@jP-Ba+yhw>1y_ooiH{BNL|4;D)F!+]@jc');
define('NONCE_KEY',        's3f,:o(TS=.3Q^:-v8DY(rml`<P+~3xfIV:[X@@4kG6cBdx.&KAF(;$zJLY%oijE');
define('AUTH_SALT',        'zfDSH6L,n+E&.lEKLC^}M|Tu><iVmI!s0){RjOV@<kV)CWLF,7wW0<s-!63RQ.88');
define('SECURE_AUTH_SALT', 'zEr:%i@ZSlTO8`I}f;5Lb9RG>zJ|E&[C-^7ao~V%)DGJ(3@vfqdVzy5]/[04:^1K');
define('LOGGED_IN_SALT',   'ck0hnAzJZ,X/k4Gp1-JAOP(l=lu=/K-hJ<9`*qW6t%_96PM so&&)}UKD$xJoY{+');
define('NONCE_SALT',       '+l;l^dhpMH|xb=DLgkfd;sP%W+:60MUG?JPim9i0|;Vi>|I+HT^ A7&+|,UN|YB^');

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
