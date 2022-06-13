<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dot2dot' );

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
define( 'AUTH_KEY',         ';Y=KT0,:LO&-@-zbA`.wq/:aBs~382zAr#]h8Y=l;%L6n=SG+6vdrOSOV=b+J5#m' );
define( 'SECURE_AUTH_KEY',  '@gkH3Q&X0l: C$0Mm`%$zWtBA6wsvFsj&&K[c}@w`YxeSkaLK*LV)B`<ThLegHdY' );
define( 'LOGGED_IN_KEY',    'iAlobPj4.#&K.lt|?gEx<)Z{L-{B^5|MP3`q?>X3A[be$F_Jh+hzZP|,ywUNZ|6E' );
define( 'NONCE_KEY',        '1JI.&@mTpUkC)h)8a>3Jn:Q@Q+j5JOqeSI4)B9GmcA_0HLiD12#uum[,Cs:XQf^%' );
define( 'AUTH_SALT',        '{DSe@&R%1,(~bB7-U*Lduru;?BM9S[uvQq|ZJ6!*$YZ~`D$,DjT1yxSCM6n#_3U<' );
define( 'SECURE_AUTH_SALT', ':{v-%I~<9hsvCQxHU2R*.vJYRWp2M(&WgWZp`!UoU6Oi)3+.OeO@[gIvBq^{S3CI' );
define( 'LOGGED_IN_SALT',   '&S<XEg$CDw`c!(!#Sz6xitTu|Rg_+kOqRt62J,cA+$/+abe2I]%]Y!a/Y|J6i^G/' );
define( 'NONCE_SALT',       'm..e}}UKf-&pQ?RE);0E*(G&Vn#n_2g;<LEVQv~4nv$ysxk>P8@OQtEFa}Ti_)^7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
