<?php
include ("engine/kernel.php");

$_REQUEST['view'] = $_REQUEST['controller'] = '403';

$o_site = new itSite();
$o_site->compile();
unset($o_site);
?>