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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '4j;:QA^@$F?ZN~/{fBEeGg/C0pK`4yfEf5+^A&l?Gms5d5i$5y,2XWufu><^088z' );
define( 'SECURE_AUTH_KEY',  'q:vxEbQDjVGuV~EXw/wkZO~b&1I@#/nd[9jz6^Re_ZS8aMYOq){DA9Fw$+#dd&8}' );
define( 'LOGGED_IN_KEY',    '8#5 }*L[<l`K@KbALlF/pvls4}0~Zf#lmCW^8<8yzA^gj+k@8JB}Zu{~vY|jg mh' );
define( 'NONCE_KEY',        'EHiZ/&pL;a( m&Qr@$uQ6a@=WH<P-2mO:A4L?3|3z*!RdD*fubd=cG.P4z#y{ya~' );
define( 'AUTH_SALT',        '7r&=?~?s2+mG9?4x@6r9J^J$nUGV-0kTEJ#E*/ngT:<6&@CYpztY;2Jky>fU=H6Z' );
define( 'SECURE_AUTH_SALT', 'q>fqR<9z=Azzq]kjq3IC633hwW*2)XgJ-:I:9|t=Qap6|RS1r1jB9#My359Cb/Xy' );
define( 'LOGGED_IN_SALT',   'R.P,Kd^~~^QIdO1Sxrj.FWsY}V>xhmi9?qxY(g_7=!$mu8HU+1#]6A.KYYJ!SvXq' );
define( 'NONCE_SALT',       'c9tW0g.sc~p,w{/|+=FSV3rV8|O{Ae10<}q3[d8wBAQ{3llR%BVtUk^3R%43BaY>' );

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
