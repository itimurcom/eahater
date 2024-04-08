<!DOCTYPE html>
<html lang='<?=CMS_LANG?>'>
<head>
	<?=ready_val($_CONTENT['header'])?>

<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>
<?
// $o_focus = new itFocus();
// $focus_msg = !is_null($o_focus->code) ? $o_focus->code : NULL
// unset($o_focus);
?>
<body>
<?include ('tpl.photoswipe.php'); ?>