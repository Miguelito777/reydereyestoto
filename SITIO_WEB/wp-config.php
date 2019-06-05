<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'wpreydereyes' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'wpreydereyes' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'wpreydereyes' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '<((9HyiiJ<CP}mG.Li/Ehagg#A607A#*&a>.cQTbMZY;Wl.~mJ^hD$0,nX/kF)]u' );
define( 'SECURE_AUTH_KEY', '^h5Zx&mveXj}TZXjX|yq#.@ vU+/}@G&0fbD{!uHCo<DTJP8p,Mh?VTi@8,F)]l}' );
define( 'LOGGED_IN_KEY', 'mgPuW} =MPPy]6-W9WI*_@=ei;6@xL94&d 2!<X~!96%W&$gs0LK#nH+j MKadfv' );
define( 'NONCE_KEY', '(|!0oDN.t:ze;USHoK<s<%t`d}OO45[-n?]_zv;C-qS#39{dY8BW,;EnLO 8_I?2' );
define( 'AUTH_SALT', '<Y9LazK4LXzIyF5eiKJQ{3t/A|Uy vN7:hmd`8DkqK^=`utE#_)^k@wCz)A<d3UA' );
define( 'SECURE_AUTH_SALT', '!@f+jv/j{:7eboR#zp#3Xamd hZSg.V]VK[iNb]ZW_k+QIL;Zdez)gJ{{)y.b?4f' );
define( 'LOGGED_IN_SALT', 'a&2@V<+&LpVU-+c)5kb,V.^WL1x?g8$0OsHq;Zc}!]zR;qIu0r?onRl|55w~^ZaM' );
define( 'NONCE_SALT', 'A]>4!M>BHL8,*JmRFI,4#{HOD(mE[nO#RRTo~grbY7)2{VYdfB]g-a&$(DK_8+]j' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wprr_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

