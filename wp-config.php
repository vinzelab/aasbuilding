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
define('DB_NAME', 'aas');

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
define('AUTH_KEY',         '^0Vre|GUDMlfM8|Jny?|)`o]8ufU-s}~O3j@>c~V$2`x(0&%<2aO-x1].v)bKdJE');
define('SECURE_AUTH_KEY',  ',$ByJvp~[v|Eji,duUV@~?+vD0d/]%W}]8:Pu|DzWpZ?+$ArBL*=&Nd=]`.<&3$E');
define('LOGGED_IN_KEY',    'ne,3xvOy:t#|AE]q4Z,g->3{N4.3$Z?TNYZ)+Ij5bgA?]28>3~:1]aqHOGSXQ26Y');
define('NONCE_KEY',        'v$B1>t?FrZed;*2Fg R47A<?$*5&K T[|!dnX:uayBi1k)c}o*s~.j}o^Ed<%8*L');
define('AUTH_SALT',        'EdSAXQd,M`9kc/%aJ#e2 DxztX5cl1&o%C<wB=l?*dNmHf[#H2Z/{CCvX6Su]J4H');
define('SECURE_AUTH_SALT', ':w .>Y0TL=$H|B9-&.>,V)dyEp8caWI9(_<z^,2&b`2E8M2Z./zTTC{|]dXh 2F(');
define('LOGGED_IN_SALT',   'qVB0)K[?^=;On[)NiD|o#)@]Y>_GY}B+%PsAnc`~s0^=#oH)&p9AzQWK#5gqN[&W');
define('NONCE_SALT',       'S0<rq:#M5M[u1<j-?d~a,9n]KB?h%SFCrFZdj}~XuH!5S>Hf5HgFR#B%e;B))~?*');
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
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
