<?php


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'projectx');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j-VA1CDvlmtAnB=%$DI|=6t`0|`TlCqI1 =e;.@3 H[-7X1NvnZYRo[%l:ZGL/;w');
define('SECURE_AUTH_KEY',  ';3yy?j9XN0ccJ~83I$#n|Cpw0dx#mM9E[SeF?4/Cp| Bq@MT4FSt%*4)+8|6D>Q7');
define('LOGGED_IN_KEY',    '~[m@k$CED.6seYb+1^|qry]xS)j5t[2N7&Zks+=`:Cx|[Ljg(ei]a<YfmRXbQ-BB');
define('NONCE_KEY',        's-!R}Yw{0i/V 2QK0oz|x}!4f@Cc ^=tF:9]VUL9D|/88juLbQWU+v<2V-DRO+|w');
define('AUTH_SALT',        'jnlIQy21[nM5cm~|u^SpfXV48xjwVUFH>kyDFxKy`Pp<3K?g-,za^oI}`nmszl;X');
define('SECURE_AUTH_SALT', '<KIFi-Jk%GFv<AX>x.?*l#4#_`^lJi.5u!Fdd^7oe/1&vkr&N<UNu!Hj)w,_-qNL');
define('LOGGED_IN_SALT',   'v( Ppb`BJ I4>IPDCW4 7:)Vx8k~oG?Y1>?P&9RI|ri8W7SZ~J,pn<FtA.+UnW)5');
define('NONCE_SALT',       '@S[_RLmn);RF$.;(@#Yr{T5(3BE8H]U0m||J23,hnr5Q{`QO D|4Jt,Ml.vEK^bw');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'trr_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
