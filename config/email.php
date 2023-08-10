<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://mail.ssmaule.cl';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'sistemaoirs';
$config['smtp_pass'] = 'hbc2015';
//$config['smtp_timeout'] = '7';
$config['charset']    = 'utf-8';
$config['newline']    = "\r\n";
$config['mailtype'] = 'html'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not

/*
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'causticrez@gmail.com';
$config['smtp_pass'] = 'Silent2309';
//$config['smtp_timeout'] = '7';
$config['charset']    = 'utf-8';
$config['newline']    = "\r\n";
$config['mailtype'] = 'html'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not
 */
?>