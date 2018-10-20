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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k/pZYVUp83JnShcqrcNkxPJS4cHe7xOvft9iHtaCFs8zRttZE2FXX6A9kpoULIjeeFUp4ZAp88+QXfJKedMVcg==');
define('SECURE_AUTH_KEY',  'DD5K1NOXLnyd9JLzeB7WqgpypbKdU1yKUSDcL4KY8QgdcSVXRrQPwiP4uGELwLuhQ3zMZ4YTCGp2P2ViO4frYw==');
define('LOGGED_IN_KEY',    '/qkhU7BVh9s4by1pHThQlzouGj6o0CWQm1bkeg6SQdMMJ9ZBvvd5VRqYabPRDZMYlikBNuNVRSLnNGeMcI1dOQ==');
define('NONCE_KEY',        '3dvAvNZkcOmkXKdVVOqSzsCPUXPjSC6XmXdlGYWbH5UimgMx3jAOI3uzAxs9s7V3wcX8VF2jc8oy2FI+3idFGw==');
define('AUTH_SALT',        'HETq4KGAyluAUNEbUKCUDwMu+Ju9wI4inav/V+LWbHeO9jbBYIvBLKqmAHBkn2i/j7WzSMGZNFH6pKbW9QXT5g==');
define('SECURE_AUTH_SALT', 'sk0YDQ+IzyoYnyRn/RMy/Jwo4S8OK1QuudZvajdPYSxkF8wNf4IBCK3+X/NuJkR7PJVfCL2WkohAkdSl2e4Ddw==');
define('LOGGED_IN_SALT',   'I0zDW81b9FRyPlU37VYlblkdF36PkS8M/F6e4Hh+2nNt62p/Deq/5+mp1RKkXUt7mhUH0UQp09DKKpac3U1Erg==');
define('NONCE_SALT',       'xC21WUUqfVYeP+zObfEuCouEJvdwidt9+c8FtrEzcuKJp1AYsae3YkcqMmNVk3FgxpPIRiNCLfFmfrWG2QAbPg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
