<?php
require $_SERVER['DOCUMENT_ROOT'] . '/birthsafegit/app/admin/connection.php';
require('functions.php');
session_start();


if (isset($_POST['login'])) {
    $log = new functions();
    // $log->setparameters($email);
    $email = $log->cleanme($_POST['email']);
    $password = $log->cleanme($_POST['password']);

    $log->login($email, $password);
}
