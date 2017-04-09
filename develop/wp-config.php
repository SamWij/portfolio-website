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
define('DB_NAME', 'samwij_wp1');

/** MySQL database username */
define('DB_USER', 'samwij_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Q.wZBgE@YVdaGoS7Co&23&&2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'E8ktI6mGi9GXW0FCDu02NSIxmLLLaHP9qVJC0FTTYG0tavU6AUIEOIVr2Gpjf6YW');
define('SECURE_AUTH_KEY',  'xqzu2OATjlE28DIc4FBVWkiiKAMLtm3eyGkRNvnoYJLF6zHQcpRWK6cW8NU9Q1Z8');
define('LOGGED_IN_KEY',    'PE8K0YON7HoJcVKpicA7Ci156JleFqfUOZUMMTLzQ7avYazI6MckOzlgDMisRhMs');
define('NONCE_KEY',        'yrN1y8WlAdOXkhRTadLK3Xb7KHUSbOKb3nlF6QFbAsMOyI6cLZMLzcmxzFg7H11u');
define('AUTH_SALT',        'TbgKP1wuPYfIbEZeVI3exrudjjxAq1yDtXS6f3xHN6FVbRHJ9JPysdZde5EHlW5H');
define('SECURE_AUTH_SALT', 'nFfCw1y1BtXsRyapG7x6DWhEwD3MjEpHedoEbLpT3pn2OxKgDYk9BrsCkdnG6C90');
define('LOGGED_IN_SALT',   'ZzCANE3pT5y9329NtR1pS67hr9SGBC7g4vuTdVroUJdvs2XR7WoVmb33fzDczQvf');
define('NONCE_SALT',       'yRBXjkT6ANVKCMA05cZgGPekwYZo0LnisOWXKMK7oayal2ckQfLaVDXKI2GIPlkc');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
