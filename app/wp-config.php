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
define('DB_NAME', 'mediakit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf-8');

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
define('AUTH_KEY',         ':-E}2=~R[A`_[[B-/MAgg],.DM7-zZ4c307+bH8S#L[+H<<KG}X;o>5BT$Yk^?o:');
define('SECURE_AUTH_KEY',  '@nZ7$Yi||g-D{?uy_G5F3XN-;UrHU~<*UNo!92QB: >899~/X[UFfwm<G=-+4!3F');
define('LOGGED_IN_KEY',    ';F[Z|1g]o/D>Uv1BFgJ<|l-Xd~a7UC?9H +y#|EEI9#;f#A^sL)RAjU:]YL``AuQ');
define('NONCE_KEY',        'hwZWG)VDcw0HSEh|t= ~1Af44_v0!P@D^-97Nq;!?d]P[Kn7{cW&]mLBU=--/lL`');
define('AUTH_SALT',        '6J~~`#|DXl?86sX6nJ#DS9v 1&1<9|L-8swa|OchSq+6NL|=}@_r7~4J^H)JB+.3');
define('SECURE_AUTH_SALT', 'Y<&k$5{yCz+9];ohHy.Y!^6+9@8I]9}Nk:=xu]tV7[~UA.LzCF)9U1OMhgt_T|h%');
define('LOGGED_IN_SALT',   '|I|z^0nD+~~:F@<E_7l^wDTaM-,wX} o-ObLzjj6-J5AuodFz^5nUaZZ{}i$UCT9');
define('NONCE_SALT',       '+A&+*X.2[KI|62}]Rp<4~LXh,x&wRI,sfgQyTYkMLJ^u?j6v)KDs|D6DM=ksa3k+');

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
