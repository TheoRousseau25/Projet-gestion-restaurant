<?php
require_once('../classes/User.php');
session_start();
// echo '<pre>' . print_r($_POST, true); die;

$notifications = [];

if (!empty($_POST)) {
    $emptyFields = array_filter($_POST, fn ($value) => empty($value));
    $hasError = sizeof($emptyFields) !== 0;

    try {
        if (!$hasError) {
            // Try to connect
            $_SESSION['user'] = User::load($_POST['login'], $_POST['password']);
            array_push($notifications, ['type' => 'success', 'message' => 'Connexion réussie']);
        } else {
            array_push($notifications, ['type' => 'error', 'message' => 'Les champs ne peuvent pas être vides']);
        }
    } catch (Exception $e) {
        array_push($notifications, ['type' => 'error', 'message' => $e->getMessage()]);
    }
} else {
    array_push($notifications, ['type' => 'error', 'message' => 'Les champs ne peuvent pas être vides']);
}

$_SESSION['notifications'] = $notifications;

header('location:../login.php');
die;
