<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'freshghost_art');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '(LF*`H2(Y@G3c1xNHo+t&us4,1^{fa jU&_n(_|u)[X[;4ck6/*Mv1yv?D`QcdQ<');
define('SECURE_AUTH_KEY',  'lPF|``@qL:U-{zq-$ pz{RKu%pi=Mx}-p-z+Yk!^WFCpu++| +5cV8P3m3+,Tof+');
define('LOGGED_IN_KEY',    'zAfx;YT-+J+QwZuIitd,.$xHf%^oAmrVzatkYymJdhQQ5]+bG-+c+Yo%^g[B$:b-');
define('NONCE_KEY',        'i_?;&+o]!$Ci>b>Oy^.(Xn8GF8uh;+qz3$AOiPMYI9U]7+NTz}{<zI};Hlh;5eHM');
define('AUTH_SALT',        'f:!*.+N*-49jK_rJ]h(b qHMAUQk~sA=q+=zO bJ_m>Y`2mdE&h3%d&+V@<?-J%q');
define('SECURE_AUTH_SALT', 'FDLzPY41:*KR%K>f8z-QBp#@rat0?,R][f@oOI@(XL5^cd=EAF{cOVLeSS5&I1^<');
define('LOGGED_IN_SALT',   '+_vMm}nnAD}enmN7|ox3/e!;r7Ye+%Wu?0.NYp3R#7L&j4cH(.mhq{%x?DdJV}J,');
define('NONCE_SALT',       'Was b;0<~W;+),!0<oBSIMqpWPq-H9?iMqR|:Eb#5< v1S6J_ Y4Z /r&aM.kr!H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
