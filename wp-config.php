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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'teodados' );

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
define( 'AUTH_KEY',         'c<HPX!?1/FhXBN,}S}6%|%av|[U^sdG|`Y^4}8T7WPI/-v#R[JRTI?J56R6Yb~>s' );
define( 'SECURE_AUTH_KEY',  'mJ3 ?~|61gTb`NE(tU>J1@Ak&^MIQb`3E!f1+yrH~>]7:qCX<NYb|N$Q>@|1/kCE' );
define( 'LOGGED_IN_KEY',    '4bVchu?f{DkDK}Mztszv1[V,`ubQG[1Ci#o]}-^h:I~9(#2y*FfTdq1H_r970|<U' );
define( 'NONCE_KEY',        'Vo`3` 3!]11MPOrv1%TlN! m,B@.JOEPKJi8LLi5,)`VQqV|PWDY)Bi|NVo@MDm_' );
define( 'AUTH_SALT',        'uWA}[744Q!1gPaCM_#_Wb.XDtnM4g?e*nq2u`Lmvkuw8@1rma-nne,pX?r%-B@tz' );
define( 'SECURE_AUTH_SALT', 's?Rwnbt0@I!9ZI<3VXG]+RD451IDS|} Gn2AkJ-}@KA _ fz|qiVob.(U~DPOO%{' );
define( 'LOGGED_IN_SALT',   'TW-(-9{NV^S(Nd,65uH8w^q<9E=;Z]7rmFjpRi|-NQt[!vmqL~iIsV~KbJuM$,DQ' );
define( 'NONCE_SALT',       '!R0E-Qm@>]>FpV]^Nk~T8 keSrOlJ[cDp$kn[WN+af[bLC+`RNndJ3|?Dmg{/yMn' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'teowp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
