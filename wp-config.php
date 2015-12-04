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
define('ENVIRONMENT', getenv('ENVIRONMENT'));
// set specific global database variables depending on your environment

if (ENVIRONMENT == 'local') {
   define('url_name', 'http://localhost');
   define('DB_NAME', 'wordpress');
   define('DB_USER', 'root');
   define('DB_PASSWORD', '');
   define('DB_HOST', 'localhost');

  }else if(ENVIRONMENT == 'staging'){

   define('DB_NAME', 'k4042857527641');
   define('DB_USER', 'k4042857527641');
   define('DB_PASSWORD', 'gf_!G2fVRW');
   define('DB_HOST', 'localhost');
   define('url_name', 'https://staging.freshschools.com/app/static_pages');
  }
  else if(ENVIRONMENT == 'production'){

   define('DB_NAME', '');
   define('DB_USER', '');
   define('DB_PASSWORD', '');
   define('DB_HOST', '');
   define('url_name', 'https://freshschools.com/app/static_pages');
  }
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);


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
define('AUTH_KEY',         'h!am/NVBl1/2vc%e_O=#qkeMoWQ*uyyH3K0MLC#q{4lh~>-kRZo+=tQ{9q6@VC?E');
define('SECURE_AUTH_KEY',  ']Q{gR[IKCpJ=uQG&(n1dIk>Q]bFI(Z5Em?%rw5kg)rso0oMq?EL7tP~9j=djw+?2');
define('LOGGED_IN_KEY',    'A)t4v55e~jF>}xpeOP-<apxN!c+-nRU?hw6FX-P<nAn@`Dhb=>ZKAri^e~aLM!-y');
define('NONCE_KEY',        'P?:hiAJ*,X>(lXei_H,f-x4Y4Mv!uv10F~vE_KLyCddA!9tRsrkA4OD<=Q_mS<-^');
define('AUTH_SALT',        'D{f67/D1(UcvG&#]-*I(4p}N7pbVXh$y6Zz)p#xUAGRUHAcxt^qq[|Pp,K8jGBxa');
define('SECURE_AUTH_SALT', 'DZp9_Ay2~|iZzfgA5Z@sI r4FAb%;yNit$.5,`P/{XK%&+Czb^w!+v%WZy:SJ3Q-');
define('LOGGED_IN_SALT',   '35b)?$fZRMlQ.JE;o.bssQ?1n7Kwlp@-s7$dBL*K+)n/za-^k%ToPW6>_$,L7gp2');
define('NONCE_SALT',       'wM@=mTTB+dbU,3NMv4f[!-e^+8+H3(Sq*YrkX$#ABOw}MR4TJ>l!6|W:+rBr.{zj');

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


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>