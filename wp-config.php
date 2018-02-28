<?php
define( 'WP_CACHE', true );
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
define('AUTH_KEY',         'MM9mQiVOgt30TYe443KrIRzTq7BG4DK0UGt223xIRClK/REVo0CC0gIw0GAuVyJOSUmlB/4cypooCQLDvUrPhw==');
define('SECURE_AUTH_KEY',  '0JSi9uYP286khOUSPpM83p/sS5L1JgPawQwQMwGlMBxcArd2n2P+RKe6vy4UQiwWzYxT8wXA9Ylp20xsRttQGw==');
define('LOGGED_IN_KEY',    '1jsGCfBc0qXsVgZsQhmqzZI+s3yntp+xvCZislEqE7u1Rx1MixYogM1wL//ev4DmylT0LhZ3DYpUATaoQzn2tA==');
define('NONCE_KEY',        'HophWCbpHWZNG0P+aCCKwRko1PyRaJ5ENzRtqceFYZizaB0Qo3pavNbsglrXmbp6u7bbUZcGliAXuusNdoSvvg==');
define('AUTH_SALT',        'OSxDUYquqT2Gh9FfACCahcimuTfA/2CDDVeVCaiiU21Ndw8RBIHAWvTleZ7pN9lK4rVToP+iBqAwXG+zE+cSHg==');
define('SECURE_AUTH_SALT', '21qqhLE4mEYWhhEKQSX6eqz80Cnl0AerplgG9D9jui1FfDWKseqF0QN51urKGflrYBUbbV7oGyfaHZMu3PwE2w==');
define('LOGGED_IN_SALT',   'W8ayKkJnDgz6Zk6WiiC/aTBsjGk210p+a+Dcsse1gTeMByC9sabSVGZR1VAcJKXdIYIhLcIMIDx5GD8gHqlOIw==');
define('NONCE_SALT',       'gN17rJbbfoj0ayV7hcxthupyIAUxB+bp6EOGaL6KfOlafjvuIpS1eYipMNgVKW/9gbjRzPoUjPACYi2J4Gci2Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/* Comet Cache setting for local */
define('LOCALHOST', FALSE);
