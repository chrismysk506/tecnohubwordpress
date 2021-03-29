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
define('AUTH_KEY',         '69TslIKNwfauTBS7binBB5xHYcqkM1euLOgEb6slM5NO6+LsLdIlMCGDQNz5tjszbGU3vP5UoNCC03oftGglRw==');
define('SECURE_AUTH_KEY',  'rbMuaWmkWJstKmKDmBGbtyhLxXjsZvrpWQhzMm9XU9Idl3VLL1JPsE+CGk/66BE4PeJgus10tCLg02M4bSjTnQ==');
define('LOGGED_IN_KEY',    'wqwameu4Rn2GAyELq83xGZaG4Kyxsz56/SHaZk+2cHVqAIHoEFqdKqfuWN+G9mLXdhzDz1SiZIPyW5T4cMjVcQ==');
define('NONCE_KEY',        'AjfV/UzDqQx9qPlLM2dfU0Q4TK5Erig0B5kP3wtohjg3JR0bIUavcC335QirC5sA5N3rNQBdcWA6SmIw9i2ztA==');
define('AUTH_SALT',        'xhzKQsSlxF7QFCD7/rRfpzSn6ILGkk3vfB9o2p2U4b8j8bCvp8y84E2rLixsyHTJ/SnPGc7k/jGS9MCsMmnMFg==');
define('SECURE_AUTH_SALT', '1UHXK5EzHFp6Q2/A2FtonBaZ6X3PGvS4Qd9THz4GzH9JwB9Sg+JyhwCTSgcbNq1zni4plHFNlyUFRp1hJkN3NA==');
define('LOGGED_IN_SALT',   'wZzz0YEGwSbdSZBA2qXs+rFL9jKvA+lnQPf0UahnMU9m1gjXTsns7J+1TUB0Br0IZ3uX1f1drJxW55MqhgzT6g==');
define('NONCE_SALT',       'd2JfBrjTL+TDhp6OQme8bCcvdIgM0RvOpEGRoUQETt2BrJM0No3Le8o21RiwvJ/ljqWPrx1PiLf/BPJ6DjJtZA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
