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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|db#w6Ec{%U_l99wm2M/3QWkYU@QaxD<u6<a6/IF%gu8dPk%QnT)K33kUu{tx#hy' );
define( 'SECURE_AUTH_KEY',  'O^8$$R#{Ix5v*>C&)697_S1fVvo=hJi/}Voc5S#jVu?*Y<>% L9YpZQD!teb#k||' );
define( 'LOGGED_IN_KEY',    'vYbP(PZrgoH+a%O#3v.!}kcf$AU>JE8)$HxACKU:veRkf2hm!JKl88e!a^y_(ISo' );
define( 'NONCE_KEY',        'IJ9GWcn6^3:]Bx~3~(JN>&e1b(4$:S^=x82$0NdereQu/Z.IGmDDKQ?k6EZ5KuW-' );
define( 'AUTH_SALT',        'ly{Fj&p)ktLOWl4BXc3J1iS0S*9^flBPG?*W_+_+&O[*B^<=Ds9t~bmr,$zV!X]j' );
define( 'SECURE_AUTH_SALT', '5Pa,.H9LTVAhm2BcqV^_Z]1x/fxl5ENDQ,eac H),7Q=,tWeEtm_#ROG9=]OABhH' );
define( 'LOGGED_IN_SALT',   'YM!@=kA-~@%zY5 O5Fo=6un#m *yufIj{f//Mf1YjysVo~zbGx;U9Mw(9pmv-Y}~' );
define( 'NONCE_SALT',       '_w8&M&;4Cuhjd}-:3xG&hYa>NwB{pi$b1[2/u,U9&0bV.Tih3xo2FB=@]_g=/2a(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
