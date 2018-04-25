<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser.
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'admin_wp2345');

/** O nome do utilizador de MySQL */
define('DB_USER', 'admin_wp2345');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 'admin_wp2345');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', '199.91.100.222');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pwCQo!BAi,QBu<_!mj;4xg6miY0dr=+a5z5UKXoRUaeG:Hu1cscKuj{tfVZ)4dK8');
define('SECURE_AUTH_KEY',  'r.PSB-W>T0fPca]{djKPS-q(a,!27peQ7*-,BaPdr7<B`hY!R*7rS&0RFo!~XvD!');
define('LOGGED_IN_KEY',    'kNwH@F<|BTu/TLJ(cbLE}e1}K5Q[l<]x$+WtHu $=;;q$rY|}uUzb=OK(|[%W&y&');
define('NONCE_KEY',        '~br!A%<NnqC3nQumV2cEyA$=M~kkj(XWcnpS~]ZhucO&xfLW_@IXh^NI~Lx[+tlb');
define('AUTH_SALT',        '`X:k#5[TN{9~FBB/U?Y<j>y+c`V#;n=s:Ng^7k`IEGqzZK/.cw[wEiMs%A;%w,lg');
define('SECURE_AUTH_SALT', 'v)b/pAp.KED}+SJbt)Zx!c3IlWPNt10._DuOE3NmyhaGnY{r6-C;&SMlk4=hSbq2');
define('LOGGED_IN_SALT',   'eRd4FJfxlUoKHA$u*4/1`Z?3R9Bu/O0&d`(9bzQ-D^pJ;5i*j$uz-sTcIzCD@kvW');
define('NONCE_SALT',       '=+wq.CT]ZAi+aEG;JaydInOmm] y6S_p#?=l<P<S-sJ(m@;3E&cL<$r8;Xn%_fdR');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
