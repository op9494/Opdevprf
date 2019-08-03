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
define( 'DB_NAME', 'epiz_24127007_w939' );

/** MySQL database username */
define( 'DB_USER', '24127007_2' );

/** MySQL database password */
define( 'DB_PASSWORD', '1S75(7uf[p' );

/** MySQL hostname */
define( 'DB_HOST', 'sql312.byetcluster.com' );

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
define( 'AUTH_KEY',         'hzzucmwm4bswaicivq6dzgvrsyqgfuin9vlqp8su7xrvsymepmmdd2jt09t4x6zu' );
define( 'SECURE_AUTH_KEY',  'vwmohgf5njkcpmvezapwipnby8lal13hylpg1098dxietj0kobhuupj82eejarhc' );
define( 'LOGGED_IN_KEY',    'd5g7rqvpquz3lnut0la1c221g3rafz6s10x0qa5cux2ubxj6c3fjqqhcbanxe7hr' );
define( 'NONCE_KEY',        'xcbxyewx7bpq3904zv0kxfyqnle2bnqjxmc1s5hgsi1tiewpmzfen273asbod6j9' );
define( 'AUTH_SALT',        'izj6njbs0q2vskhb4dpuiwha4dlwqegl51bsofeeeptmyhyebt8hdxxxgv74suy4' );
define( 'SECURE_AUTH_SALT', 'nhgnaihjh4lk92chupda5k1yjovycfwfdktizpsnbyzwbqheocshwdkctnnlpewb' );
define( 'LOGGED_IN_SALT',   'yoz633jwuerujysq3gxwcblcia2bovqd4eku3qcwnbcmvtomx8ihtzqeegyxoaly' );
define( 'NONCE_SALT',       'k0ghiou2jjnu0ybzqhfqbooda0sylccwfjh0drk5zktearbc6onhcebppuyz6mxi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpimrq_';

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
