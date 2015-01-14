<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress_pj1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '6]FOQu19XO~t9+ab%4tkeT)=`&<-no%qgqMtdm@o$@!vcEP2bSOG%E98.~wyv|0O');
define('SECURE_AUTH_KEY',  'K}vJek5UK=VB_Xvow6;.C<jYzm[u(4[A{$bN}?zPM2[|P&nQL-H>])h1i$6DN[X;');
define('LOGGED_IN_KEY',    'J$9dLZZg4,<hY1c<(v2-8<{Q~bwjykEg-@PO~w 6&^I20{hm>1t?_jAA:/(Z|}`r');
define('NONCE_KEY',        '|B`tdv^eXkWpmhNx{E-/xd!&QCH,p:Cr/~AbPOU<S E;uMUtD-/B r~],;3p,G@A');
define('AUTH_SALT',        'PB$cXNbk#!U0D<fJHe_bB%^0Xn#gz&)9}Ua-hdKN|~Pj=VBOnZ^5O!ob{0z,[8t{');
define('SECURE_AUTH_SALT', 'Y5.+0Q-;|>3F3B7` w.??|q.Gzy+#DYfU2$U4K?`3*v$Ht*CB`S8U#`%cyPtaoO`');
define('LOGGED_IN_SALT',   'xP-wa);VpD`wn;hCq@!o|}Gr!aNI-s:wyYV!;eOwPFo+,`4#gQfFJPh{}CtOkyR[');
define('NONCE_SALT',       '6#N6Y2c&(Cm@jM-HB_SAnTS}?3zoznS-F?Q;525Lncj~&aG|0u~JXd+y?-tAvt<}');

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
