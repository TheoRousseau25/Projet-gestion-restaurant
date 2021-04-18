<?php
include "classes/Connexion.php";
include "classes/usager.class.php"; 
require_once './classes/SmartyIUT.php';

session_start();
$notifications = $notifications ?? [];
unset($_SESSION['notifications']);

$isConnected = !empty($_SESSION['user']);

$register = new SmartyIUT();


$layout = new SmartyIUT(); 
    $layout->assign('isConnected', $isConnected);
    $layout->assign('content', $content);
$fetched = $layout->display('layout.tpl');
  
  $users = Usager::getUsagers();
  
  
  $smarty = new SmartyIUT();
	$smarty->assign("usagers", $users);
  $smarty->display("liste-users.tpl");
  
 ?>

  