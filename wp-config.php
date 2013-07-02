<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D(N~gJ Isaj~7g}?D:,`z&b;LdWKh*N-VF<$.||dsRWR<K}gMje3fJe3;?N-C/d9');
define('SECURE_AUTH_KEY',  'o!U?1A-{is)hpnG.qx[?=V#S#kpOgBLM8Go0uJ[&~(yGg_{Dv[om=7#|^m) UoS&');
define('LOGGED_IN_KEY',    'WVVGt*iY9@OYHQn4#/eZUA:K^e/`KaAX{`]({Yw2Z+1oySi-RfsB&x`bD#Pk2 K)');
define('NONCE_KEY',        '~=ZOHVncyRR/4zVj-%z4L[+}wvD~8g{vG[.N2^p+~tfvmo=!X<x)Z?G3t(7Mlcyv');
define('AUTH_SALT',        'k-.5Z S;amHIXo{S-7%.aWtqY|x,ycF;u.8*[1!B OFV(jwf;?C[PCyCe!dl@!ZM');
define('SECURE_AUTH_SALT', 'f#F:R0<SJH~ozQszU6Sy]Y~LUK]?KvQn&vg-arD3R5=+n.HprUp%D]21_z=1&l?(');
define('LOGGED_IN_SALT',   '9%]t2bI)MAXC?1]g?[f7)m i>SJsji-`GIT!y5TR<fZ{ x94!&l@uY5M+k>u2|yY');
define('NONCE_SALT',       '@)2xwQp}AjkTe|2oZf[Q^zYmdHt@?jqNHi&E($Ts7oIhH6Hl*HIfDuSn]ZDeI@4|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');