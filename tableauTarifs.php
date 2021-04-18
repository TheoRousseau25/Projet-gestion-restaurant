<?php
include "classes/Connexion.php";
include "classes/tarif.class.php";
include "classes/SmartyIUT.php";
session_start();

$tarifs = Tarif::getTarifs();

$notifications = $_SESSION["notifications"] ?? [];
unset($_SESSION['notifications']);

$action = $_GET['action'] ?? 'login';
$isConnected = !empty($_SESSION['user']);



$layout = new SmartyIUT();
$layout->assign('isConnected', $isConnected);
$layout->assign('content', $content);
$fetched = $layout->display('layout.tpl');


$smarty = new SmartyIUT();
$smarty->assign("tarifs", $tarifs);
$smarty->display("liste-tarifs.tpl");