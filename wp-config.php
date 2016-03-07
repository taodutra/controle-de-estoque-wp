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
define('DB_NAME', 'controlewp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Bi;?x}Ux@?QSJm@6<3|vz-t^?@7d$AGKd5.eO)neny~dI?KuNBhoJQh>2Ph!P%!O');
define('SECURE_AUTH_KEY',  'L8=*|x<lqA`}0u2irrkeV2<84|-BCL21@sK7bb->^|c8.asK~Cg4)PP:O-^ ,ueh');
define('LOGGED_IN_KEY',    'eXvuwR=/:_>q#KfJ{g6 k09qM[M1S|r9}2PvAw%-(iae=bG=G1}VRm%g4G1 +DEo');
define('NONCE_KEY',        '/%BhBwX.8nz5ezz3Nl|N`()rsQ^pw`-_/JLH39eWtawL%J10hE+23+^,O`2Yky+s');
define('AUTH_SALT',        '~=OytzyH{>yBn%`a{6hTN-7^v,%HqI?OK(1kxuM5@Q@3A>d/9<f|M8ehu8,{m_S:');
define('SECURE_AUTH_SALT', 'Ju:lqxSGrR?:~5a0wY;Jl!zR7OG5y_iYB+u6_raC |Grq<#fl6c1eLixtV.K|x#-');
define('LOGGED_IN_SALT',   '(2wdre-t;v$[3K|cp@] ne5=)R3^6%_#-za%XzqHX<k.f5o:8,%d$XQOnxh_,73`');
define('NONCE_SALT',       'P_v&Jt-uJQC^+&@@rZsd]q[k|H>R:4}ov!^Wn=H]{lY>1m:2OdSf(+5+rY2k[,OK');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'ce_';


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
