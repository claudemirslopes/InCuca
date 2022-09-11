<?php
define('WP_CACHE', true); // WP-Optimize Cache
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'incuca' );
/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );
/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );
/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );
/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );
/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );
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
define( 'AUTH_KEY',         'viGz#32^?Fo[)rbVt3,h1/9f_z1sl.*kWxm3O<.1(Z85`8khs{FYwHiUh<2u,=Lw' );
define( 'SECURE_AUTH_KEY',  'Y+a|BXGfMGRJYdPv9Xs!,4~e3DbkG6hoK/2xGf_CRf|y4+C5|-n jze9l0rdZLjQ' );
define( 'LOGGED_IN_KEY',    'mzSX{<SeN>QWB(fH*Ei$1M_9E]x#&u}udIn6?f6Q[0#Wb<}+k_1ndue[EOTIdboa' );
define( 'NONCE_KEY',        'm#h)vI%E{)8E-7MyPr8~kr#T!|*4I]UE]3U@u(v6@,hj}IBrs2.]v h=Su8?DOE}' );
define( 'AUTH_SALT',        '7<H*Ef<&V#p4[1dS{6vY{%t4xvw2)BS}EM[67jh)]3jV]gX_%@Z3UctS!?#[By$Z' );
define( 'SECURE_AUTH_SALT', '|sbSzr~$g<H)9,aGPa:o+F8^ho)L6,X$eL~fm=F[k^F+cE9YhcXyt :ibz2j4);{' );
define( 'LOGGED_IN_SALT',   'T%3l~N8WJagW]t-q3P[[&c=;0.X+,9VncR]6ZN4RXZsSh9w6Y.R.%5:mrzny$1h@' );
define( 'NONCE_SALT',       'Zeu9df$<U$a=qmb(wps^.7lq8qZ_rjNTzdN0JW#3>oRw9f:cWgKGTA#rWz=`03#/' );
/**#@-*/
/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ic_';
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Adicione valores personalizados entre esta linha até "Isto é tudo". */
/* Isto é tudo, pode parar de editar! :) */
/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';