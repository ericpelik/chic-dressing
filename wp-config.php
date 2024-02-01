<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'chic-dressing' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '44a;QW4)7w94RHt7#:R/HqM:Uxy_GTo$T E%&*AMmUQPGCULfden7<[F+u*4`IuN' );
define( 'SECURE_AUTH_KEY',  'Phy=16t8.MfMI18SeP<h&A4Xl`|jf?=0!<_fzqg^G6JorzAw| ;a1wh_P)mP>u9-' );
define( 'LOGGED_IN_KEY',    '%ao<*>PfyW+Mx~EB(ISEVVG!j4F;z6h|%xe5[NzRo6?I]h&z}Y>LM%O>. GG{P=t' );
define( 'NONCE_KEY',        '8/;Cm8s*4wy5%1[)8PoKJEct~<a;G]=1Lw$}3w8IH.o}1Z2?qaSurrA197!#C_9r' );
define( 'AUTH_SALT',        '7H&TC^2U?W}H4:/(` I1!##a:ts;[K[l7h<<p/vHB=i&o~sxc-6`P@Cz5$+{?`3/' );
define( 'SECURE_AUTH_SALT', '8TCSF<0n$olHD/,pW<plVB+7J~]@b]CQ%VxNNu>Am]ne3=+G;nP3ip<W0U54y#*S' );
define( 'LOGGED_IN_SALT',   'i*Hke~{SZ%>uQSw646g3PRqjyAxAqvD^Gh$I.UfTo6-^hqLb)OTGjPlz(NDn$jrW' );
define( 'NONCE_SALT',       'Pf47(wpW}nuJ=6.`*rqFZ4ShCu+/o#= Ia(XW]vsK@b5=Xb`/gic9II(n81~F]-n' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
