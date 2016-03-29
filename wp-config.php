<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'rianmart_wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'rianmart_admin');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'custelinha14');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nNST8i+NeQK2EY0-i@Ip2_4&<H8[nN.:kS&W&0q6E{Q1TT.3f=%^Ns4VuHKMWzHH');
define('SECURE_AUTH_KEY',  'uB(aJM<,n{6{ek>bk9,(H=?]}g|k*]?!Wava(.R<SASdixOYv@Gsv4p(sF#-+P1@');
define('LOGGED_IN_KEY',    ',::T/).fW@se3mjfSL_d^Ci]1w9RHC?7KQcz@@GI+HsIz1%BSs3]^ ]Z-.1+HWQ{');
define('NONCE_KEY',        '8<YL*I`)bxNJ_+*|Ww8tl|K4VZ@W|^TTQ5TDF?!- S)d_QkSf[7h+ M.e,BL6S$/');
define('AUTH_SALT',        'L[_)U!yC|IR;Ndb5eo&J%ir4FW?t0x~|}Z4VEo$9Qi~*~:,AD}e;-$NA62$2YBt|');
define('SECURE_AUTH_SALT', 'Mv;7Mn$=E|BSQhci2(ssi0Gi=z2<8&gk5qv[Mmf?RKh*wAs^CFShSd%8Pav-O#;1');
define('LOGGED_IN_SALT',   'l)PctDxCkwp;Y2VzHmw*[(Nvy`#ptuG@%{V8Zt[_pUMQR=4BE8E$dtmiFGf{.sX?');
define('NONCE_SALT',       '_N#*j=~.m2z8+j1q-hAr5J?~9q;]-EEt2B1@<%.uw ;x`k[IZ6$@%dd9PS-`dUU3');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
