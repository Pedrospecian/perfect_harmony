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
define('DB_NAME', 'perfect_harmony');

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
define('AUTH_KEY',         'gl|%K(e+sBs|9Jqx?4Ke@w5YzZ; eH94.;B!4>)2;m.4%`T$:+D_rDv}bvU[W(!C');
define('SECURE_AUTH_KEY',  '*z(RM,INp?;6#l4D~|z7m{QG6%*ecX8D{ufa.!9Gg^18gdD41NxOh}yoJw{vW8ZB');
define('LOGGED_IN_KEY',    ',nT417.LEV)m&>*V&iP!{26,bb%)68mUTL4Tm#TjAXBB:Vjc<Bj&dijh@M7yL=[K');
define('NONCE_KEY',        '9pIdi^4%cl~*6`h!Pnbt`.O[K`s*wQmBxw6ebqDq?KmgryiZ~;m$J~)dw{WT)g%p');
define('AUTH_SALT',        'aM5LfIpfh^fOMdg-8^T?&;3kRp{F4xJnF8!rI&l A9*%a./^*=X5^!rj/P)TVM_D');
define('SECURE_AUTH_SALT', '^gY8,QI-1m:l,rE+1Hm0R/KO^;[`G0w4nylM`uN{~_j>otkARnA%kT0Vq5=S9cq2');
define('LOGGED_IN_SALT',   'R<%]Uk1I}?n9oi(:x>:..w`#0ia^;QqO)V82+AaM2dQDyw0_{Y(~mAAQkUat/AYO');
define('NONCE_SALT',       'XE(T5H6vTwAC-XmN:mup-@|N|o}E8q7x>{.pFpl^&OtBGTfAmm#w%9z#Tn*Q~9e$');

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
