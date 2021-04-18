<?php
$notifications = [];
session_start();

try {
    session_destroy();
    // unset($_SESSION['user']);
    array_push($notifications, ['type' => 'success', 'message' => 'Go out !!!!']);
} catch (Exception $e) {
    array_push($notifications, ['type' => 'error', 'message' => $e->getMessage()]);
}


$_SESSION['notifications'] = $notifications;


header('location:../login.php');
die;
