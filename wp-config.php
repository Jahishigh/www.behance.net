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
define('DB_NAME', 'adobe');

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
define('AUTH_KEY',         '1+G;WXpUhr$Q:%/!XS<MqOvCct03!2xh=w-c-$-OvWd^W]&*5Iy5SXj%U:Zz/R!9');
define('SECURE_AUTH_KEY',  'TmW2@Ibr3[$:AXo0bA&<[]E`]=:a+xlXQ>?t|QRZT%6>R~7e-Yp;I&a#]fQp~vc8');
define('LOGGED_IN_KEY',    'fI8t_XG:I=gYFcN7};})3?yR`},_N>*<zle[?E<](8K&^ I`E3.%6C ?A&>04sHd');
define('NONCE_KEY',        '}5{^%K23yKIA>5~O<xNbtB#YXpMH/[|8k$9R82bt.$r(}V>&`(k%w`uFV2Q+(U?(');
define('AUTH_SALT',        '(5.9mK40G`5||w%N$lH^17d+923[TqE<C$LRIypa hvTe&fn7{ppQHRgN&Uk-mF_');
define('SECURE_AUTH_SALT', ')x,E.kT6}9HyFZSN%%KHcgo`Rt@FWlCEdmz5$%B.-@swowCcx5,R#Bw!O]~@4|^j');
define('LOGGED_IN_SALT',   'Uf$V0hl?6v zR=Hb)WEB!Y 4yyOx+e2;=*.>d0r!DV/ &ok.2@RM|l87T^1(:S~f');
define('NONCE_SALT',       'E*UYd9yxMm$o6<~%|-uIvX<Ty)*Ai/rkgZt,MIR9iomOWSB!sW70FLC,~M-S;XUf');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'adobe2k17_wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');