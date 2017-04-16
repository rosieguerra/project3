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
define('AUTH_KEY',         'W42dSACnLLEvYoShSQpFpjKpRhRbwugPVM574K1wGwIIRfYqdQvaEoOVPKhOCqyOQX0WZJaiCpwEwgSYQoHYcA==');
define('SECURE_AUTH_KEY',  'mnSE4/bUwuD91dffdJwgj4HzEVi5Bm+jKv1LfM8dg2MA0zSH9y0jYax+P5hoE1CxLJGB3CNLO5MKsyHtCYx6ig==');
define('LOGGED_IN_KEY',    'atd6niI4XNp4GHl5Dz3MCC2vcR35tpyh+Gm6B03zr41tzSOzhMb0Huw64ngNCmBf3asxApkSUak5QC+W8f+B7w==');
define('NONCE_KEY',        '9fodjFJwhc91TFuwFaDGvRM6X9HdWzpT/yW+sDDsZDOPhnQCnDRqvW2dmLMu4EBWrFwRS8bH+G5sX6R7O6azTQ==');
define('AUTH_SALT',        'A5Ze3VHrJPSxB1/TeH6B86ZwJ2EujrKkWpl9hJ9AZ/M8xfq71QQBCMIuJeqMkNWNevKrSwcbJU7atSoaeI91IQ==');
define('SECURE_AUTH_SALT', '63TA/PL3TUStjKxQmSW+Wu5cqw63x2sj3sILFFaI9pc4C3KJKZldFvw3z1UjNJVsjvvpomGQxBk41u4W7s0OhA==');
define('LOGGED_IN_SALT',   'FSWSJivZnFeOSGOMOFJa4CbMUtX2B+0YZ4haA1qlxMY0yY7UNW9isHh2DH6itMWOxfwEmRY3t0VKe8HNtd46cA==');
define('NONCE_SALT',       'JNuALmKbE0bR4InrINMi2RjTWaFg4kJ0fiwcftPXCCtLW4FCaxvWDGCfg7wO1QzFmZe+Uve3GLH+bNmH7qy+SA==');

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
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
