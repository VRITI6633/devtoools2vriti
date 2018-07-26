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
define('DB_NAME', 'devtools2vriti');

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
define('AUTH_KEY',         'dT#3Bx%P..uB=Wnd)9/u&&IkV$mInAhN#+Kr2$A@(RsOQB;MNy7q6>AEE4q+F9%|');
define('SECURE_AUTH_KEY',  '7Ln+#$KA s|pPpBdk`jThX!iZH]3^246u/#PG9-Sz]S5;Z@S+67qt=znJQ/k<ihO');
define('LOGGED_IN_KEY',    'vnp%]y#ILm_N]X8HoS$Pg*YK?4?*7Mp2Zh7G#3nN&/#gyC53fG8m7Kd}3drP7+c0');
define('NONCE_KEY',        'As5f:8h=7jGm.I+q%|ubPp9oM{[Fx%~BSh2$rMJ!TO?Or<(B-IP@?TgRf_4F-k*?');
define('AUTH_SALT',        '|3QE/nO+V6w=n>.G3t<B@HId}!d@En@^V( JD?hjriYAb_njc{r2SrL[ Ghr]Ag<');
define('SECURE_AUTH_SALT', 'dgqC-3MlmP/+>9<-#D!r+B{4@{Zw4=d+OcK.n{<pg;O-2r7tKMEMZ6dcw2s*X.pv');
define('LOGGED_IN_SALT',   'P<;g;a-ln6jA4*AyE7pqq7DNRP7LPo0=6%D1qiN3t C&W,^>(M{>fM.q0+DoGlv{');
define('NONCE_SALT',       'qR.IEU?t4%RXJKv9i3-Q_of iEB0FU!Ky2Si@r$/iu5K;4BQft[@y~(k0>qo,oY#');

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
