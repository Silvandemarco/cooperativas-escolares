<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oS!>P?fP2pa@z&W2_ujbn0>AkU3#G$PwC5zO0e[9!MkB8GH!wX-wrGY}siq1SZx,' );
define( 'SECURE_AUTH_KEY',  '<|$D lkl(ZV2N<$kls%`A;hOO<7K$zC`}[|G!:C@}x3l-0xh<083Ki.r GC/d!N2' );
define( 'LOGGED_IN_KEY',    '<>=Fy|^$p%W]jQ;wVue]M`dJK}fO~J7_u{|Apb|u}`Bq$f&Q)#bTH-PT2NEf`YbR' );
define( 'NONCE_KEY',        ' Bf]/g [)D/+jr~yAWVYw1hwF_r$YrIWYMf{zR#7Gi`@@<xV[Rxq+no`AC.lC4,m' );
define( 'AUTH_SALT',        '~-L$+GmeH%[@vRt}k4)dz|f(C5wmwum>fS)So[v!%#N$MNziO#OP:qD5e}A[lZ;:' );
define( 'SECURE_AUTH_SALT', 'K#kXJ&tG&{gCa?_T*p:vCycc]e;1|#QC82(>@D`U0tQ@x -oF4OUyO#I-mH|u.-a' );
define( 'LOGGED_IN_SALT',   'i3J%8*D7411;1,TenDf,*~RVM5Z53(_c7kU12B%fED@/.a8,7x|N*u(7A-7ma/69' );
define( 'NONCE_SALT',       'HjRWV%g*##$x-?7m2;2gMI7t e5:}A7r4pD]gf;LGs.jp>Yjj~xN{Y]Bohl>$p{!' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
