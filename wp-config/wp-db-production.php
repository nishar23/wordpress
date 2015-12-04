<?php
// Prevent file from being accessed directly
if (!defined('ABSPATH')) exit();

define('DB_NAME',     'wordpress');
define('DB_USER',     'root');
define('DB_PASSWORD', '');
define('DB_HOST',     'localhost');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

define('AUTH_KEY',         'h!am/NVBl1/2vc%e_O=#qkeMoWQ*uyyH3K0MLC#q{4lh~>-kRZo+=tQ{9q6@VC?E');
define('SECURE_AUTH_KEY',  ']Q{gR[IKCpJ=uQG&(n1dIk>Q]bFI(Z5Em?%rw5kg)rso0oMq?EL7tP~9j=djw+?2');
define('LOGGED_IN_KEY',    'A)t4v55e~jF>}xpeOP-<apxN!c+-nRU?hw6FX-P<nAn@`Dhb=>ZKAri^e~aLM!-y');
define('NONCE_KEY',        'P?:hiAJ*,X>(lXei_H,f-x4Y4Mv!uv10F~vE_KLyCddA!9tRsrkA4OD<=Q_mS<-^');
define('AUTH_SALT',        'D{f67/D1(UcvG&#]-*I(4p}N7pbVXh$y6Zz)p#xUAGRUHAcxt^qq[|Pp,K8jGBxa');
define('SECURE_AUTH_SALT', 'DZp9_Ay2~|iZzfgA5Z@sI r4FAb%;yNit$.5,`P/{XK%&+Czb^w!+v%WZy:SJ3Q-');
define('LOGGED_IN_SALT',   '35b)?$fZRMlQ.JE;o.bssQ?1n7Kwlp@-s7$dBL*K+)n/za-^k%ToPW6>_$,L7gp2');
define('NONCE_SALT',       'wM@=mTTB+dbU,3NMv4f[!-e^+8+H3(Sq*YrkX$#ABOw}MR4TJ>l!6|W:+rBr.{zj');

$table_prefix = 'wp_';

define('WPLANG',   '');
define('WP_DEBUG', false);
?>