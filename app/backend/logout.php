<?php
    require $_SERVER['DOCUMENT_ROOT'].'/birthsafe/app/admin/connection.php';
    session_start();
        session_destroy();
        header('Location: /');
