<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'p~2_6uj2<,P-+Zs6>^f9>*iemXm=JW=[Rex#<]J1QOtr%8<=;i>iuBI%CI2${c+B' );
define( 'SECURE_AUTH_KEY',  'q&E~[RrtnU%7]$.O$5^74-dDv7It~56}D^*rJt<OzGXUf5XzvN>Qvtp/EbP`|n;,' );
define( 'LOGGED_IN_KEY',    'a.;9U.emq$`:yZS3g,^$l/R>XIQzT[U%]jkovB.<$sZ;z&gZ8+WekSBVWOS<1oMF' );
define( 'NONCE_KEY',        '!24p: DE)1wdz;AbP!>)HqAX}/4$$*a@MN7Wb=22[h^o:h|V$EP7CPlJbz#it^Mv' );
define( 'AUTH_SALT',        'H,@h!K+)NZH;_cz#i(P@:H|J49VnK@q+ElR$}L_?c,oSCoq.:!f~bk&yHF)=}0Ms' );
define( 'SECURE_AUTH_SALT', 'S hAN4#`T8ls|Z}]bg#Lj5hYf(aEyd(;B{5&_G&iC=t-!==J+)2kgA{w04_8!?:R' );
define( 'LOGGED_IN_SALT',   'VUrvThGqG}JR<Bi>gM{%D,u_$p*.O`-TMt?g*[%!inc*D [+]!&y}6]yXPo|?XL7' );
define( 'NONCE_SALT',       'oab*m$uvH9U/t~2uc7~LU[7$0*_!3F9?R^1bxaAG_^m-BI|$Hr(.X wWXRCQ5QUS' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
