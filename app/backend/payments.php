<?php
require $_SERVER['DOCUMENT_ROOT'] . '/birthsafe/app/admin/connection.php';

if ($_GET['email']) {
    $paidemail = $_GET['email'];
    $cat = $_GET['cat'];
    $sql = "UPDATE `users` SET `active`='1',`category`='$cat' WHERE `email` = '$paidemail'";
    $update = mysqli_query($con, $sql);

    if ($update) {
        header("Location: /login");
    }
}
