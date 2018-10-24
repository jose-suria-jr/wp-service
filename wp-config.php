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
define('DB_NAME', 'wp_services');

/** MySQL database username */
define('DB_USER', 'wpservice');

/** MySQL database password */
define('DB_PASSWORD', 'mike');

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
define('AUTH_KEY',         'HlBNS-cmy~*{9XDMC5+6lyQ_&,n=,-Q9xYx4_p=Wv><?8T7N}<r3whLab?U@C,]S');
define('SECURE_AUTH_KEY',  'Fo]+-^-cH?>+X<yF:&EZtP29c;NZ %X,x;!fo@2Wv] WH$tY4di@7`d7@bq#gm0i');
define('LOGGED_IN_KEY',    '4F`k1;c^w6%gq1&=MuFja+98SFyTXJb~.0)zh)P&3wI8:euN9Q&H5rc0/`]z_18n');
define('NONCE_KEY',        '#PhlF:F|GuE}SOn[nc6;p6Xy(kcVk)_Yx0rzenx6vg4gmF/LIba5u$A4{f*WgUsM');
define('AUTH_SALT',        'ec|Z.rxHK,q2w=)Zn6zdMCh>PQ|mVeWUKmj/=IRIMrh2reDmTHFo$,RO1|Qfbx0#');
define('SECURE_AUTH_SALT', 'jzXf#BfXb<yFV_tw0z0N+tZGnCXM97r-){/;tQ&<-M^^X;8f2SHQ&T(=Yii6z`B_');
define('LOGGED_IN_SALT',   '{ERny(mg]%6p`)Mi9xnU=t{RwuI7.<L+hJ`y$F5fvqRq_YSfs%]1<I=n[]sdb(gz');
define('NONCE_SALT',       '-@:%lc5=yG*Myji}sU;LX^k*BU*bt!9q>iO 4P@o0WpE!;mx-prv;7V$0(.r|@R6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wps_';

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
