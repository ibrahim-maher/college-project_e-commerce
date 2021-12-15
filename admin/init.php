<?php
include 'connect.php';
$tpl = 'includes/templates/';
$fun = 'includes/functions/';
$css = 'layout/css/';
$js = 'layout/js/';
$lang= 'includes/languaes/';

include  $fun.'functions.php'; 
include $lang."english.php";
include  $tpl.'header.php'; 

if (! isset($noNavbar))
{
    include  $tpl.'navbar.php'; 
}


?>
