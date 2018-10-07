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
define('DB_NAME', 'www3_4front_se');

/** MySQL database username */
define('DB_USER', '4front-admin');

/** MySQL database password */
define('DB_PASSWORD', 'great4front20318');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'kA v*UaL}:=I&Cum-j6M-xrnFojKj+2e:?P 5)*VaI*Xo}ql@[-/w)zq1lH:T-KC');
define('SECURE_AUTH_KEY',  'B56`-:vv%.Y/y|R(~w( c1qbCR sgvy2Emt8Rna}Kx)?K&+PBY0bYCz_Lt!&9vI#');
define('LOGGED_IN_KEY',    ':|$qkdyzsxf6~AGoqWlV}eoZr fp5ihhp-5)c7I1>}df+|,+a_D01cD?~+xhbU}J');
define('NONCE_KEY',        't.;d<: q)}0OB2TwC3y?zX|]@|y-&6b@wr_N x@n8O;N?#wLn|XA_G>uBYc!@>r1');
define('AUTH_SALT',        'e=X$:AbswGLRa4*$5BZW$V,KRogD_^Lg|j?;}k=G5>5/BQt2DYhi]mV I1h5#gU9');
define('SECURE_AUTH_SALT', 'CB>,W=o}4jewT|fHGV|r`EXujS%!I 5ZJd^V.S0}?2?9/Jf_`/m/t4|5xm!.uk$[');
define('LOGGED_IN_SALT',   'Q!+r7dvOUT-N@~A;=qJj^4GEG aHy7wfv7Hv%[lzW* *[zB9S$?@gYKfC7NLu1J}');
define('NONCE_SALT',       'rx,qHm6+#j@|c9D%mX-b?g-^(-+pW&*_^YQmtLAz[VwIS|q4+Z|nZ1#v{_DQrL:]');

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
