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
define( 'DB_NAME', 'busquedaCAO' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY', 'x;uJE+i[5g}^#l-8:4xTHeM/+f!1k2vCXfQuZvq`B&Og6`4S)|pPu4Q>xo3a+-]2' );
define( 'SECURE_AUTH_KEY', 'XwCxP`s~x4Pw_%s^mNvi/3$0^)<3Nsy3h08oA++*UpUa{tcFUMr]yKdP|BD%4_|y' );
define( 'LOGGED_IN_KEY', '#*Mu&>Yt<g|%Os{w5bo*KEass2bYi(Qv*}5<;%l0n gzi)3C`a#QBw$1d`WbjEAU' );
define( 'NONCE_KEY', 'li8,G,D4*;!BKv(:SS4&Q]I.^D6X&Nrlppv]m$k9ePGnT5e|91G=fNw@/cx?Gnnc' );
define( 'AUTH_SALT', '*s-[ZpVCe0w$P2}ux[>`B;4I_=yphGy%TY<jZ.d[|tG:MoyU xmZsP#:&cL^x#]^' );
define( 'SECURE_AUTH_SALT', ']fQ%N9Uf0fB7f?#Z]!nP^}]^/Y-DJ-=#v<v=UA7<9xS>+z`kl*w|[J[:!m3]RL$8' );
define( 'LOGGED_IN_SALT', 'QRAvEH[=&@[#YS4xrIer@3^w,cr)9>-,l.xK~]iki@XpEQKD^K=6vVT;c:~?3|T2' );
define( 'NONCE_SALT', 'Lr#$`}LX0GSNhm9Q[gEvf9=Q%&2cZyiP5*Qz;R,j4[LHV+~i/$UC!AHso,!x)[op' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

