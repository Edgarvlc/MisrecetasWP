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
define('AUTH_KEY',         '22vd3pdv6f/QaoHzLqISLsUCJLawgf1qqXlRmKJD97BNnXt3INPdOAvtvwlXHvJzIAUgff5RZSUw78nhsQ1TJg==');
define('SECURE_AUTH_KEY',  'ZupRlkat1k+SzB4Bx9J8VmQo9nXxUjHS54b9+k3IkrPBX264kAdHxB4jflCVtCodDvm9kElLdau6Zr7QLA3b8A==');
define('LOGGED_IN_KEY',    '5c8GlrkuDImxC2OI+BkQM2i6pKiXtBUmAg3eaUytV0o50gzOV8vVX3wQLQgIKp3X/RKW2kgb+Q+LYqIWLM4zZA==');
define('NONCE_KEY',        'aUr6dExGBMyhWLVlLJYjNeH0IsP+wpwGKgy7FjsKnBCr5cz+2o5yno82EXMXrLvxLgJN061I0KmtjvMNxHTyEQ==');
define('AUTH_SALT',        'lraRreTKbq9PKfjgd/Wji+jxm128fHxXqBKSgziff6gCVnarikCaS5o+Acf3nNeF24E9H9FCiw0q4Fo43vIx2Q==');
define('SECURE_AUTH_SALT', '8MbBUsA66DcxOJT2Dbd0u+DQ+SGfQKPgN1i/g9vIayjhG9eLhqib30Vi0/lGlcP1rbG2SapYH7CMTdpxtR9P6w==');
define('LOGGED_IN_SALT',   'e8o9rokpCu00n4MHZzZVThAUW+3QSrReXRF0MyTez51XJK2UAEUvtdCE82fWzBAm2tKUui/k4+vUVWGamhy16g==');
define('NONCE_SALT',       '4JA5kfs0mLiUr6OaFdna/miyGpFNTOqWeNAF6mFH3R0M0qwE3T3bfSrDY9g7ujKMyLtaqWXsFjvq5qxtOpKLYA==');

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
