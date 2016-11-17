<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpresstest');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WlP+)+~x-Ee(+)e)!,!v`4IxD.Xph=xl-7[eMb[fFE{f/z`r[TTvLd)I}R|}#>d|');
define('SECURE_AUTH_KEY',  '*1<{+cIaWZ`!YQGYR._Me0Vi2Zgz2#~< >X/+l43veqKBG$zC4FZb fzS$|&PP1)');
define('LOGGED_IN_KEY',    'P$UBzF>AMpedz0)<~JYqbMH!2)Vz5M%gR/8DA+Z9jWl}_RPZvR/iNl<}mchLd$A4');
define('NONCE_KEY',        'zi#I8pkJbEJ>hBbhtI+]lBvq~E{3XTbroII]TtOjNv-fx;;f(KoYOCQ_IP1%DQ1c');
define('AUTH_SALT',        '_oZ.7hYOh8GE75TF!EaS0)?Of$<wjTGQz:7Rs*PHo?npE:O%2>&ML`v}H0|j3|^e');
define('SECURE_AUTH_SALT', '>9f0ZUvMoRB LyYA_+6+j_3&IqOyR5,;TFeHvD.,C_x4 y&qe.Rd#].Hz(A~ ={7');
define('LOGGED_IN_SALT',   'e5Qb{e<KlzM(w BgZ]qFQ-8)pp?W3Ohg21Dsv!rg8[qOFKi2,gBM8eZ{HJf@o>7]');
define('NONCE_SALT',       'aoHbH]o!o][V;Z>S6hjFGS-Z)v57Xcw%$.-dFHs*E-QQ=l{`.L^gDBR*-Wh3)>Ee');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');