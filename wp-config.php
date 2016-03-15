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
define('DB_NAME', 'cgaramont');

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
define('AUTH_KEY',         'o{sg+#`C)NjNI,a%ZDJ}b;1#p#u,[Q= pjcZJHrc+h<~H!m|DAl^!q oz+$N;9rc');
define('SECURE_AUTH_KEY',  '8GE4Q!6S-Yt|IjAQ,7Kt;-S%-vLb+.NbvVlK7S6;.J6+e%85lNy<T!n>1vRisXX6');
define('LOGGED_IN_KEY',    '2[eUM3MPstOgZW><AxykxiA~[o6!;vJ=VfYen$tbwQpMd$t)0BL55-`2=5syeO_s');
define('NONCE_KEY',        '~[_~SEEDCJ2P690A9Gs~<Jjz|hwq2Gb!u?Z1EUGX|O4}MvETn^+:p4lB$u|8@ @?');
define('AUTH_SALT',        '-Ur*&0NPtR:@ jJB={:DSs(:.5Of.w|t-/mOT]#A9?M6eg&3;t-xD^;%s`}t8`iS');
define('SECURE_AUTH_SALT', 'K+hS-N(9s-|dv8=#h-jxIqRac@3v6:]mL$gK_@H:w$dw$S><K|/4+_a,(e#7=&P2');
define('LOGGED_IN_SALT',   'tGl7B/Fz36D&mt%bP;C`p%*%E:nn-}s8b.,6<IS5gH.935LMy7W{G#}VtcU P|M7');
define('NONCE_SALT',       'tYBvPncC n7B{1Ucg8I|_%GBd`$INWE(/S?@>CZymY0pt+7U(U@9%vjaQ69_fe{m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cg_';

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
