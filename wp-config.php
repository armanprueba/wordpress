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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '(xm[EPH;GZ^/RXy]lkPWibqWXlCegLIt7$M6;.l`S}v=Mq7!HaNv5r@?x?rj+U^0' );
define( 'SECURE_AUTH_KEY',  'D?>P&[qcVO&0@%l0TK3pQY{syG-d-bxH5&X5hSn*|:/Vc9J?k+ZNfzD$ 6P=JvJ8' );
define( 'LOGGED_IN_KEY',    '{-)EzMRz+O:hA8><tNee{tnD1]}3tbnVl4IAv*nTEo*5aPOa${lWrGVJ<*tp=tj>' );
define( 'NONCE_KEY',        'KuijjzR$R^4WpHM/jMi^t|c$}v_+|BG7?_5rV|XXdN<yRk1CXE`kz=n[%$bf{1_4' );
define( 'AUTH_SALT',        '>2W4:#ipyAUwW<JLm>nj0)7VGaNV<9ULkuleXB<|0^N.zY@)dnX8:d{QKH$DT5<M' );
define( 'SECURE_AUTH_SALT', 'DMcjZ[%^}7z(QPK1W#y5`g+#2U<H9Oh%GPTDj`viQLuCtTr2P.vqQCv R#{=iFNv' );
define( 'LOGGED_IN_SALT',   '50>n|bus~+LD1k0yUN.rTQO#f+}T1KMz?-`?Ch}MGc4;1vqkLy;Ibhu$-0``4<}X' );
define( 'NONCE_SALT',       ')&h=/0 8WvB=[N;&mXMCY-Bgy1ZHVw+&m@DNlJo^&48&}))M36`7r}epCmvM.n|h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
