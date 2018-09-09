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
define('DB_NAME', 'clemo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '9817ffbaa6f401c4357922aa3b00e995698d59b610705263');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'O$B6[(~xp(zh!UHMc~<z=8sdmq5.lMRGe+ *b5VTf6%wiI3j6(; m4*#{($N26uX');
define('SECURE_AUTH_KEY',  '+*?Z~E`~eC=l$ akH`ikhbPOzWS#9@.gu%+f*jaZLA3!z-(;{HIDDm-sGGs/9uPK');
define('LOGGED_IN_KEY',    't*<3-vj1Gp.:#YKkb$Pb=UK2pyBZ^%zDuIyBsboWEFRA`d<8(p;cy[:j5v}xRoR4');
define('NONCE_KEY',        '$jgsw+ 9Cl-K)KI<G-Qy<YTApX5pNO$Rp@^,A[5UU[9zAZ5#FA_s[{=pm9cb: nJ');
define('AUTH_SALT',        'i6EFDQb+PFlVfK@25ZSpt@9,V*553Q@ywpy+G(Hy5o<s}e&jyWb8OVbP@r]V0O>v');
define('SECURE_AUTH_SALT', 'JYs3nMtC2:h<T{ T9YBG>p;]@,]Y0%>5r~sIrwOd@{tOd1J@PG!LxjB?tMl6v .A');
define('LOGGED_IN_SALT',   '?u4,@w=SH/4_$aVP%H`,A&,SPKIG?YfXWxM8HLD|l2>?mjD8D/=ZC5=EHq3<6Df6');
define('NONCE_SALT',       'E5I$|en7)I`c@Nox;|y5BL?&2^mq{G>tszL1VQNNG-tfV86hx8;(v8[@d*>rP/Im');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'clm_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

