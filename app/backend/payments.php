<?php
require $_SERVER['DOCUMENT_ROOT'] . '/birthsafegit/app/admin/connection.php';

if ($_GET['email']) {
    $paidemail = $_GET['email'];
    $auth_email = "SELECT `email` FROM `users` WHERE `email` = '$paidemail'";
    $setemail = mysqli_query($con, $auth_email);
    if (empty(mysqli_fetch_array($setemail))) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script src=;sweetalert2.min.js;></script>
            <link rel='stylesheet' href=;sweetalert2.min.css;>
        </head>

        <body>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    title: 'User Does Not Exist'
                })
            </script>
        </body>

        </html>
<?php
        require $_SERVER['DOCUMENT_ROOT'] . '/birthsafegit/app/view/login.php';
    } else {
        $cat = $_GET['cat'];
        $sql = "UPDATE `users` SET `active`='1',`category`='$cat' WHERE `email` = '$paidemail'";
        $update = mysqli_query($con, $sql);

        if ($update) {
            header("Location: /login");
        }
    }
}
