<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hyperhyc_wo1798');

/** MySQL database username */
define('DB_USER', 'hyperhyc_wo1798');

/** MySQL database password */
define('DB_PASSWORD', 'JmlBQkjgvChH');

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
define('AUTH_KEY', 'eZg$iuEW<pKme/n+N&Mu+s(SoaPpmBsCj!BSgOVRZ+/)eZ^Le_=>v!_C$wwB/cNn*}X_ojRA]%ZpwZUHa|xsiHk[vuBXV-_@!F^OPONete&DbYjGMRpn-fo)<e;dPIV}');
define('SECURE_AUTH_KEY', 'v[(!fbD?^pwdk*KZYtex-H>S>-KZX]gCE@}DDSO^yj!q&afilqKNt_}Ai)R%nt>IJh^CSXyASsLwly@}]QpyDLfDd)D<YCq<>qAWcD}<WqJ]TnhGtlO*TUdqTTzb^OXJ');
define('LOGGED_IN_KEY', 'fo?OH-JeESo||jym{%DU&OsR$!)r/(MsZ|bQV;rFS]jqnnsn/Icq/COJ;pusvG)LTF$uFI>RLkB_lQd!GfFZWBJduBnGrfWXfUR|XK$z>?{Yl{u-Mt=KfiE/klQ$|LF^');
define('NONCE_KEY', 'AkE)Y[GM_yf<WSI|;Ri$*yF/^Zz|UK|?+_(+|%e>(iCs?UFKj|A-U-mde@$!hQun+)oj-g[Gb;J*Cw?O]I*gB=P/gB&C?Lx=(yvAH<%WGqe]IY*&?^-_HLq-{/pK[dpv');
define('AUTH_SALT', '<>{WqoOh@NJ>IHwwWn)jPw(VY!CZnpcqN;[<YSujPXpVN^mL_N?BYPhWmuIQ{%Cz%Hg*gUq!saYyI^O+%TTjESMZvhLFNk(LaffLcKd@bK!RX)_uB%}@*i)PZ[=h$OLU');
define('SECURE_AUTH_SALT', 'QhxLK-[![&{B!a/r[Tb)zM)B--_AJ[Fa)rO^{]CgOBq{GxoYjYwt@X][@KS)<xZ?Z/Ud-dFbPsAWDo&@t)jGD@D&?ck_nS^uGP_*Z&g=EK(Cd*?YbXT$APDzwI+$hU{-');
define('LOGGED_IN_SALT', 'H()|;$brAPJcf{EnLi|uZMcq+bOBV&RIrTM{O%Hr>Kc[j-qW|ZH@ron^?qf![K?akPICR=?rxNh_hHvyox_m+zLz?-|Y??nnwXFBW^(;up-jNgY<%y*u)ARp(m!>Vjsh');
define('NONCE_SALT', 'jR!}Crnx=]h&;<^oC&LSctPZ_+U;pjUPVFjI_b|!L)rfd/En]cbYOV-h|j|Uti?lxpK[XpcN;M[I$WcacrlBcCz%fZPSO[jCf{o?*uq-jo_V%-}fpe*WY?aolb]-dBir');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_gdmb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
