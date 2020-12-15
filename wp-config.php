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
define( 'DB_NAME', 'sgg' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'sgg' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'sgg' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'xw=bEmg1vJ(fLRHlam20XUbrl|&aVF;;u(lF+]0)[_2h[R/.hLe*$$s39|ro:~PT' );
define( 'SECURE_AUTH_KEY',  '7hT)h^^Yy&#y;68l$VQ+c }ZjHVv{RLJu~D14c$6@Z_WNZ~aeDeGAs$?nR7*K&D;' );
define( 'LOGGED_IN_KEY',    '4~f`fow3xG^v-82Z=[pBf7niWU_1%nVzZb![)3,a.WCD|MvV+-2eK*T>.B]ldWmQ' );
define( 'NONCE_KEY',        'h1lrQKaqt|x7O$q_K&`ebHxPDZ.P_brI<N1edH}C C<:;:sSN/w1iu/cw;AsF>gR' );
define( 'AUTH_SALT',        '?swM^1A}i26vA(kRYJ$Zs^ZK*Ie5yDuYVatP{]*%6{]bad#}`p=;xD4K9gZT?X*H' );
define( 'SECURE_AUTH_SALT', '8&02H+Xj.>PD!k%jg>)q UmqP_>U(w$b5o?|%?v1OTqQ}?ss)db&CV*q&m:s%NBg' );
define( 'LOGGED_IN_SALT',   'Tzq:vLgU,#XG,=,]1W.jlc<:ZX+KzNO596W~?YA,9_I{kwoQhzO%eO:^S-M$V8x-' );
define( 'NONCE_SALT',       ' dET}HSvNwNwc*5q|qx_H&SNwof%pet-1x;W>V>Bl?X>Uf>u36Mfs-R!OFzzP^d7' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
