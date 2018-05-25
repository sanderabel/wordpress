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
define('DB_NAME', 'abelsand_wp');

/** MySQL database username */
define('DB_USER', 'abelsanderiktkhk');

/** MySQL database password */
define('DB_PASSWORD', 'w~QR}2Ez2onl');

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
define('AUTH_KEY',         'O+APd|:$^?kG=69ko^kj!gE/D]d@MdlXr0AuBS3KMZo|9;9[6(&V#wcqN>A1(9aA');
define('SECURE_AUTH_KEY',  'nUh0t- -)WyWQ,ism3( lSTn/@Zln7[H4E; )8AyFBYM)pX_y4l]j1Y-,r?lOppm');
define('LOGGED_IN_KEY',    '^H=uKV]l9(OdN)mP67|VW{5)x_$,LvM*>I[CFBzoP[y5ybvdg[(Tu%81!ySOEW`&');
define('NONCE_KEY',        'bq2q!Z!QBW_3+Mt-y]bxn99xkVB>zB-nTU4Odxz0qM%SlBIwT_OLvDM:78$9,DMZ');
define('AUTH_SALT',        '*]w5Wq6SY0(WhY%9W1>qm=Ws<4N9Bou6T,c$r(AnDl-cl?@7`2Zc}ad&Uq-cH@O?');
define('SECURE_AUTH_SALT', 'vr^A@C.7K.Z/sEGvZ+b#ysf4)vn1`XN?#8;%&@@q>00zMUzXaB{K)4uv/y:3?H9<');
define('LOGGED_IN_SALT',   'EN@-b$*O|@U@rG/#>k[bm9KC8|HSup~pUI/0=z/p`}7,.#Qoqdtj_hK3zI,Gaqh>');
define('NONCE_SALT',       'E0:g<F7;$ 6FKOgU0~D=_%7#`nrU>a7$ NmVB6,77PJ|av0dMiRB@@tywT]xW.0}');

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
define('WP_MEMORY_LIMIT', '256M');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
