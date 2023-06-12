<?php
require $_SERVER['DOCUMENT_ROOT'] . '/birthsafegit/app/admin/connection.php';
session_start();
session_destroy();
header('Location: /');
