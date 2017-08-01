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
define('DB_NAME', 'BoazConsulting');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'M:O[)Yg,W^$0:tQ,-9M_s:fg:tDHS!_8*Mc_[+,ie@@YlhaH;w,CJ39ug(1)(apY');
define('SECURE_AUTH_KEY',  '>hN3Bi5^D&.aRl_MYepJ&0tEH:+cCwQrs{>xT}z^+p}L94x^esS:axJV<,I;-mOI');
define('LOGGED_IN_KEY',    'Y7YF$|9=CvZoRK?D ^Bu1o&EV?SA<eoap;Rn9?/74}u$o_vZ<xb?zFur<eN~?ZuB');
define('NONCE_KEY',        '}l,:bqgsEh()So/vtXfR@_,h+5{KvRC~*v<[:oCT723<pe@j`b]h?h5g4d1ODEj]');
define('AUTH_SALT',        'XPmQ8L$;eA]<!QDxjk:VUkkL8bU}Z801B~|79gS~[1XNV?l+iH}6Yy]fa67Jre53');
define('SECURE_AUTH_SALT', 'mR3V-O8cZdN ;13 $G{n2}~nMj<Oc3x;n<!,A5}X[qCnT%3j@bg/ mSi7F,)R3?S');
define('LOGGED_IN_SALT',   'tU1+W9=76;c<k WQFS5]a]aF0=T,/LbLmzitWQW_fj_PZ01ysZ?#s.AQj!6B4lJ,');
define('NONCE_SALT',       'EVlm3#5XPK>F=HLC<n SXeHXr[ 5g@{!QAuN q2k|6{)s(II,OWhIU&d3C3fOCQ*');
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