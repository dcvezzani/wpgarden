<?php
require_once 'config/bootstrap.php';

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         'r;8YtmB@=~DjRraI|1LD:,E8qyPfHr*Q*Q_TpXLN.)@jgN2XR#J|rgG##a$4BnQm');
define('SECURE_AUTH_KEY',  '{31rPf?r9O3W4jR|=1wriGUNB~?P^J7]5X`RV4@x|m).i2*[[z^DA~@rm^kQJ}P!');
define('LOGGED_IN_KEY',    '3v`~|;JJz%+6eeMe%l.hVrsbxM%d@JLr4QZWR#7WA8X|6,.}| hKZ}2X;yy:*mi|');
define('NONCE_KEY',        't5,w{Gu+*EqAfZ3lBb!c= fG00^WtL#/lBuf*opfM[)fJHx4<-GX^G BtL8`g[#[');
define('AUTH_SALT',        'kZUu*,hDk7-n%Xl?6a-mD#Ggc43x>Y-a1R80 n12xnSNGpf(G>1ZNRXs|hxHfjon');
define('SECURE_AUTH_SALT', '&[p]t+}1gH7@PF6.2@ }+956>.@*TE-iX**%[-d[$aUbfQ}vTT<p7(>e^RUO.M]~');
define('LOGGED_IN_SALT',   'r2|<%OHFIhvX~I#+iHT-V.8u(VlxI,s`N~iXu(|Fg$,uldwK(=h`pG 5IcBj`./&');
define('NONCE_SALT',       '6cZ(+VDH%GZ:K<m#r;.n`e2YdwTG~Cj,e@H=sx%=a+%`!Z9SXb)QM-11~{YW}g]g');

$table_prefix  = 'wp_';
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
?>
