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
define('AUTH_KEY',         'c8oydegGeVcPusp0pkdS7swRxbXZQzzRv1FLSdsSlMGzAQT9mGyrUISwjbsIVmIO7mcQ2iZ9GZ+aTAXNnxjyqw==');
define('SECURE_AUTH_KEY',  '3FtC2MlcX+z8IFlwHMosLww9R1GVbBse13X+I6SA5kmkhL54nTADuOfq3wO2MA/HEZUrDa6OUo/SyVFVf0sq3w==');
define('LOGGED_IN_KEY',    'QO8KEfmDnrFjb7wd+SZFWkhae2R9zXlCeF8vTCzqcHq7VMdG1nDvwl/yZRmRhJ/sp4A1FzrE9Pk6MAIWHjBFRA==');
define('NONCE_KEY',        'odt63/x4h1vMQ76PPkYrG6//2+Zs3b9ezLE3xdSvBY0ME+Ymxfl0ASyEEv8ysiHvqFyaxpeyEWvyHQJMP1PpXg==');
define('AUTH_SALT',        'uZ6i8ZMi9BTn2rJTThBV8ma0HSkKXSpidfVZnXrv/aRNVsPc396LOwe0C+Y+9yG8ar3rlvFRQfgflU6aTvmgRg==');
define('SECURE_AUTH_SALT', '9S4/4tjLoM3Kg53bjPLk28yduF67VJ1KaAsTACv1w9haHicc3uxxB7yZR4eon0MnOCDkWzMELn+3dpqE4AePdA==');
define('LOGGED_IN_SALT',   '4Ve8tZLnVkV3s8jr2jRgS4WoppYu+O5H7D19YVazaVedWt0/fjSSkbArUw+FiM7uTZMMngL1bg8dzpot2KgYOQ==');
define('NONCE_SALT',       'peTrkeB8Ks4pObnfI833NUVCd/Nj/0B+G5vRbob0NyXJMYDGQXfN11zwDPxuz9jsEX+pyxDW/Sbc7R2g8mz+ZQ==');

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
