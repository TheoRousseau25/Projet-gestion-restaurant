<?php
require_once './classes/SmartyIUT.php';
session_start();
$notifications = $_SESSION["notifications"] ?? [];
unset($_SESSION['notifications']);

$isConnected = !empty($_SESSION['user']);

$tplAction = new SmartyIUT();
    $tplAction->assign('isConnected', $isConnected);
    $tplAction->assign('notifications', $notifications);
$content = $tplAction->fetch('login.tpl');

$layout = new SmartyIUT();
    $layout->assign('isConnected', $isConnected);
    $layout->assign('content', $content);
$fetched = $layout->display('layout.tpl');
