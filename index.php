<?php
$start = microtime(true);
include ("engine/kernel.php");

// $o_mailer = new itMailer();
// unset($o_mailer);


$o_site = new itSite();
$o_site->compile();
unset($o_site);


// if (array_key_exists('_USER',get_defined_vars()))
// //if (isset(($GLOBALS['user'])))
// 	{
// 	echo "ERROR _USER";
// 	die;
// 	}


$time = microtime(true) - $start;
// if (str_contains($_SERVER['SERVER_NAME'], 'dev.')) {
    // printf('Скрипт выполнялся %.4F сек.', $time);
    // }
?>