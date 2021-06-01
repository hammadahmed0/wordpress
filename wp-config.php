<?php
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'wordpressuser' );
define( 'DB_PASSWORD', 'password' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('AUTH_KEY',         'o5Nj[)0:R0hEO##gxw>8&Ut9TV/3%TterrIME1Tp]Ff-Z,e>+DkG?=?s2ZZX%D$-');
define('SECURE_AUTH_KEY',  '/D8i^-|(e}Nth.bIwE=@/+m37mB~;-*32)JaQCtET]&:JZtI0Uo:|#S-2PH  p|t');
define('LOGGED_IN_KEY',    'MqB;g.l;2 U4 i5TI@LP!(R-#fqN_II:,S{CCgazS-Sg!Zg[wKP&%QL=!*{#< {_');
define('NONCE_KEY',        'h!u,**d|lNX<K?ey6ImzIy%DZG8++2qNpPz+ti[P`+:n$s70xj|XhaU}`WBys@Oe');
define('AUTH_SALT',        ' jpq +Y4^-WS{9$@0;yV;}MV1p|[<MeA@`g+h:Wz+ ](k*;j><C;k&X.cU*I|MNM');
define('SECURE_AUTH_SALT', 'FgO49P=_3#?!)~D|?B?~Pk5tf=kDF0|ckJ`D;8-|qyh5KKb*UnE|d7FPHajk^j&b');
define('LOGGED_IN_SALT',   'ut.(NML-C3$2~O>+~Z_c}[DO6AzM-dzBqQ}ZIB*S<h?+:7a?KN(]Y%x4jq+IMcGr');
define('NONCE_SALT',       '5Y7C#=]i[UU0d[1<-pG(*tJ.#H)0U:u?f|%5n6sa11WjWU;O5HR:k-`j!xF?26s+');
$table_prefix = 'wp_';
define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
       define( 'ABSPATH', __DIR__ . '/' );
       }
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');
