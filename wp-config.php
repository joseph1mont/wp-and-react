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
define('AUTH_KEY',         'XMhDjIKLidLGJIaR2hbSkiHcoeJLRWtCJeLm0UV171nEklUvPUZ8J0ZcmAdeq82gMK59FgEsr4tNKqjanI2PAQ==');
define('SECURE_AUTH_KEY',  'ROObibCuoyeN5G976QCfrTzQHrin06neo2BWiZxKo6+IILPVLTEQMnXxkfE/i1osUi2xxA8hZYuij2aVU4HNSw==');
define('LOGGED_IN_KEY',    '6mAiGXSsffwXoZSCCL4lVDtPkcYxv0aC4acqTLp2GQpsh4GFfY8nWIn1XAR2fMZf06W7jpbQPYvlmqyi7g/ysA==');
define('NONCE_KEY',        'jc6ug3QhO8QEYryGoWSiJP/U8y0LftxRCNasUUndYJDpPiRq0T/2Etxo5zQPdBUNqNbFv5SpLUWJxhu5F8KMZA==');
define('AUTH_SALT',        '6seuaswCBds4UyPjPQaVsCX/IYq745Y999QMQkGze5ajqaR1pzj3icM7lUbf9d2fTIdtf00/o5mj1PjnXCZ1EA==');
define('SECURE_AUTH_SALT', '6T9/NXCbpOg7WoMd3q0n80b3M59XEJhkpIEof1nuOAi8ISFUSR+pamWQKMgQAcPiT7OgnaJA21fjp5Ir5Poa7Q==');
define('LOGGED_IN_SALT',   'b25M0HXipsF8PT/qkWW9F4od/ZNkfG3PV6ICgc1i/fNRIzCZqZf4ZX/cu/6OQE875tplsO/AL6+Zzd0WOtKJFw==');
define('NONCE_SALT',       'N201PPFx9pNtv4fh/V9EpJvLqu745Vo0c6hRdqsa2Lt2yK0AK+9FjapGhwx8wbRchbsHBu7biUZrGNQydk+aig==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
