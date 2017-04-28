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
if ($_SERVER['SERVER_NAME'] == 'addoplay.com.gridhosted.co.uk' || $_SERVER['SERVER_NAME'] == 'www.addoplay.com.gridhosted.co.uk') {
    $dbName = 'addoplay_db';
    $dbUser = 'addoplay_db';
    $dbPassword = 'Develop100%';
    $dbHost = '10.169.0.142';
    define('WP_HOME','http://addoplay.com.gridhosted.co.uk/');
    define('WP_SITEURL','http://addoplay.com.gridhosted.co.uk/');    
} else {
    $dbName = 'addoplay_db';
    $dbUser = 'addoplay_db';
    $dbPassword = 'Develop100%';
    $dbHost = '91.208.99.2:1181';
    define('WP_HOME','http://localhost:8888/');
    define('WP_SITEURL','http://localhost:8888/');

}
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $dbName );

/** MySQL database username */
define('DB_USER',  $dbUser);

/** MySQL database password */
define('DB_PASSWORD', $dbPassword);

/** MySQL hostname */
define('DB_HOST', $dbHost);

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
define('AUTH_KEY',         '&16<g(U/a4ov9;^0fjG~$^[66B-){}dM,rkhBNBy6[4=<jEJF6-$-I(~ F?:hzNg');
define('SECURE_AUTH_KEY',  '`W[ 23&B[QM@>{0<-O`UT}jj u=qZnPNf`^;:slTpEIxuFKtXn1uKUR&$<x/bhZM');
define('LOGGED_IN_KEY',    'R27m*RnhrGva7}!p()lTzte{heh-ChV119DMFD7TW#jv18%5FDfO4iS$Xcc{,ch0');
define('NONCE_KEY',        '#cI(f|e+nq)Zj#8D)3l0P)S$h{=gn4YG)Ud&A~[=Yanh*5Uph+kM8S-s?YOWg^pD');
define('AUTH_SALT',        ';Wb*V6|Z;Gw5jc#]YZ0.Tc5x`O |j-jsC?zK-Ybcc&s9`X$+/_oFJ~d;<NuZ^Dn-');
define('SECURE_AUTH_SALT', 'ym8R30OPv)=5h9nj,DT8>|E!$u`V:~%[+c,R/NYw.L!{JNTdzKas$+53JMPY@@.-');
define('LOGGED_IN_SALT',   'TF,XN0JW>N}hZX!]&>^H2t7WyhHK^?qg?Hr&qj2bT,kSb/E_~KhF6HEg6}|RA?ls');
define('NONCE_SALT',       '$oLau[;:jq,vf;;D}Fm3j4X_zC#.>4qYV;+- =-Mgd]sQ+X$jQc=WMU~TY7 W ^g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'addo_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
    define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}
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
