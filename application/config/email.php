<?php

defined('BASEPATH') OR exit('Ação não permitida');

/*
 * Verificar o arquivo php.ini do xamp para saber se a ;extension=openssl está descomentada
 */

/*
 * Habilitar na sua conta do gmail o acesso de aplicativos menos seguros
 */

$config = array();
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.gmail.com';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'pdvativo@gmail.com';
$config['smtp_pass'] = '1918jw1914';
$config['mailtype'] = 'text';
$config['newline'] = "\r\n"; //sem esta linha não funciona 

