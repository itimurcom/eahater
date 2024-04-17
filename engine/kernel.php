<?php
ini_set('error_reporting', E_ALL ^ E_DEPRECATED);
error_reporting(E_ALL ^ E_DEPRECATED);
set_time_limit(600);

define('CMS_NAME', 'I hate EA');
define ('ENGINE_VERSION_VAL','0.0.01.01');
define ('ENGINE_VERSION_DATE','08 april 2024');

define('ENGINE_VERSION',ENGINE_VERSION_VAL." ".ENGINE_VERSION_DATE);
define ('DEFAULT_AGENT_CHECK', false);
// путь к SKELETON
require "../--#SKEL80/run.php";
// require "/var/www/admin/data/www/--#SKEL80/run.php";
// require dirname('.')."/--#SKEL80/run.php";

// установим данные email для отправки
define ('DEFAULT_ADMIN_EMAIL', 'info@itimur.com');
define ('DEFAULT_ADMIN_NAME', "admin<".DEFAULT_ADMIN_EMAIL.">");


$_CDN['jquery']['ver']		= '3.5.1';
$_CDN['jquery']['ui'] 		= '1.12.1';
$_CDN['photoswipe']['ver']	= '4.1.3';
$_CDN['bxslider']['ver']	= '4.2.15';

if ($_USER->is_logged('ANY')) {
    $_CDN['ck_editor']['ver'] = '4.12.1';
    }

$plug_meta[] = [
	'name'		=> 'viewport',
	'content'	=> 'width=device-width, initial-scale=1,  maximum-scale=1, user-scalable=no',
	];
// установки для мобильных устройств
$plug_media[1000] = 'ipad';
$plug_media[760] = 'iphone';
?>