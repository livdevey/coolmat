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
define( 'DB_NAME', getenv('MYSQL_DATABASE') ?:'coolmat' );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') ?:'root' );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') ?:'root' );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') ?:'localhost' );

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
define( 'AUTH_KEY', getenv('AUTH_KEY') ?:'dQMMcm[[|KMY.ngBlC=76$|m>KSA[{ZAkL7S*K^sGU.<Sr{8M9rMo16E[Na(@}U?' );
define( 'SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') ?:'4}r293i%)<G-=#c;5K?jMe?WN8thB`+#U2P^VWS[c@ZvD>.~}:YHEm#qmZ%<:_k4' );
define( 'LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') ?:'|UV($d81O}c2AM 9{p=}vRwep?9X&:HAB<%NLwkh9K)zzcc$6Y>jOR;;P$-RDfS?' );
define( 'NONCE_KEY', getenv('NONCE_KEY') ?:'Bt0l626tQq)hy&`[vMz@6o{elwI!pDV(vqj[`?-NBs;q[z,oEJNK#n%c1Bk8`;cq' );
define( 'AUTH_SALT', getenv('AUTH_SALT') ?:'$5ykV-qgh&%uiG^xD40Xvs:^^,Q|gX}mWkWt,[6WI]J5&?Z#l^4IvA>)p{IN?CBm' );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?:'B4,3_D|x5n%sHP7}_s&YTJ}]r/rJNm yl[tZ^X=Fhz+MDJRz-#E0bCXU9-i*@.p?' );
define( 'LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?:'VYt}cMR_rY~C?1+:uoL_~ob6C.#Wf8q4#tuX[lNN6i!ni=Af}$U]OKNt(MsI1iq4' );
define( 'NONCE_SALT', getenv('NONCE_SALT') ?:'{8B6`Jp~2|(jTCKZlHC&]*y:kS2WB=S,TqMH.3H0zlAmvVO#WaHz3+m*^Y^>Y59p' );

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
