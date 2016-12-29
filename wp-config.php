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
define('AUTH_KEY',         'dfpQ$)t<o%5w>FU6P,wFf$ZQTerQ+,Iv@<z;!u`84x2:DwIv^yy2C25Ik|AG$Stv');
define('SECURE_AUTH_KEY',  'X_ISA;p7e?p&AgJ83Im<i>4jcofirDQ*T&N7q041U-4|=QY/zA[l|1 }^A}]HpqV');
define('LOGGED_IN_KEY',    '_Tp%p>viY|%J+G_[;a:r2QvlWGTUr7Z,K}{EiQwlBU^ocOD[B^`}BH#<W=A+PhZ@');
define('NONCE_KEY',        'xQxn%P@6[kS[kcdxg+(Mm>kLnmTsx``w@@Tf{=PAvCy>*@Xl|P?X2}d>9ZPp@WDD');
define('AUTH_SALT',        'J:Hh?$zpbF/U)Xzs69kM%T+&4PA}]OFz.*EQC(x=&+K7.V-3ZFrDCrNL!0$iNh)g');
define('SECURE_AUTH_SALT', '>&t3DE6D~eaq9s00Cj^NH|-jkMDWV-4#W0C W*B?%Dqrg>`jZ+w@y?h,ge|A:cca');
define('LOGGED_IN_SALT',   '*pxgn^1L>xImKD;+%AT[nD5Hp>G`<ogUHF-[Kv~Q`g#njOgarEGU>uJqRJ)]97sX');
define('NONCE_SALT',       '(<WPJ3R7i=<tD%xVz|ZN>>_,UtVk_ElW$Tqj6g:DvPem.JZ1sA3+UpwMNUn80V3#');

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
