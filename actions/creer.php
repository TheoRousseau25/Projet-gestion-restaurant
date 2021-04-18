<?php
include "../classes/usager.class.php"; 
session_start();

$notifications = [];

if (!empty($_POST)) {
    $emptyFields = array_filter($_POST, fn ($value) => empty($value));
    $hasError = sizeof($emptyFields) !== 0;

    try {
        if (!$hasError) {
            $usager = new Usager($_POST['nom'], $_POST['num_carte'], $_POST['num_categ'], $_POST['date_carte'], $_POST['mt_caution']);
            $usager->creerUsager($usager);
            array_push($notifications, ['type' => 'success', 'message' => 'Usager créée !']);
        } else {
            array_push($notifications, ['type' => 'error', 'message' => 'Les champs ne peuvent pas être vides.']);
        }
    } catch (Exception $error) {
        array_push($notifications, ['type' => 'error', 'message' => $error->getMessage()]);
    }
} else {
    array_push($notifications, ['type' => 'error', 'message' => 'Les champs ne peuvent pas être vides.']);
}

$_SESSION['notifications'] = $notifications;

header('location:../creerUsager.php');
die;

