<?php
	$folder='../../';
	include('../function.php');
	error_reporting(E_ALL & ~E_NOTICE);
	ProtectEspace::administrateur($_SESSION['id'], $_SESSION['captcha'], $_SESSION['jeton'], $_SESSION['niveau']);
	include('../../header.php');
?>