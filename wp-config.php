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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressGatsby' );

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
define( 'AUTH_KEY',         'O?p@DJn,IQJu)!!r{<Sna(-N@th6SFP0P^J>;-#NM+As:&5~WK!@LQ@1bNGp%>4u' );
define( 'SECURE_AUTH_KEY',  ';l(1a#H(1nh 1e&x-Ux,K=vE[z9=mKT~J2H9bU2e+m+7tXTriv<,~A()w=NK$X!5' );
define( 'LOGGED_IN_KEY',    'qqkUV9Z#2WwZ5!s<5;?AA!D^=lvJ,y/S^#.n;l0V734uL>OJ9U*RUO;,DSGy(8/!' );
define( 'NONCE_KEY',        '8h;$pp:BWeFaV4)v@g6ei6&2@dRM!0bXnh!48`b1/r/xfa+@XU>ANV8Tk9gp%$dS' );
define( 'AUTH_SALT',        'vv.<=W903LNVesWV,)]z&.lUJUCE2xVI4O^l/:t-C5~CkxF^1j4$a-IoiG1qw}s=' );
define( 'SECURE_AUTH_SALT', '{O>ici`XwKs<[j()f2(Hti[dE8 9X-_Tp_`[Si:2|t* _C9poXZP(9</6yHcxT{p' );
define( 'LOGGED_IN_SALT',   'BAp(bhS5dpjEzUJV~GRQ><!)E=O5=Mpw _(<YAzdfTp~<>mKW2*p^<8[ga?T[4Cv' );
define( 'NONCE_SALT',       '<#MLb{plhbFV~3sG&Y4:<v*+)l228HDQkDje)w/QMnw5ES0SF)r83(H~0 XYh@es' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
/*** FTP login ***/
define("FTP_HOST", "host-ftp");
define("FTP_USER", "nombre-usuario-ftp");
define("FTP_PASS", "password-ftp");
/*** Definir FS_METHOD en WordPress para actualizar de manera automatica sin FTP ***/
define("FS_METHOD","direct");
