<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$path = 'https://';
	} else {
		$path = 'http://';
	}
	$path .= $_SERVER['HTTP_HOST'];
	header('Location: '.$path.'/module/');
	exit;
?>