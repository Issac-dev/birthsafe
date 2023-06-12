<?php
require("heading.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b2b66f5784.js" crossorigin="anonymous"></script>

</head>
<style>

</style>

<body>
    <div class="container">
        <div class="row">

            <div class="col">
                <div class="row">
                    <?php
                    require $_SERVER['DOCUMENT_ROOT'] . '/birthsafegit/app/admin/connection.php';
                    $emailcat = $_SESSION['email'];
                    $selectcat = "SELECT `category` FROM `users` WHERE `email` = '$emailcat'";
                    $setcategory = mysqli_query($con, $selectcat);
                    while ($row = mysqli_fetch_array($setcategory)) {
                        $usercategory = $row['category'];
                    }
                    $sql = "SELECT * FROM `tasks` WHERE `category` = '$usercategory' ORDER BY `id` DESC;";
                    $feed = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($feed)) {
                        $title5 = $row['task'];
                        $date = $row['date'];
                    ?>
                        <form class="feed mb-1 pb-1" method="POST" action="/task">
                            <input type="hidden" name="task" value="<?php echo "$title5"; ?>">
                            <button type="submit" class="bt mt-3 head2">
                                <div class="row lead">
                                    <p class="title"><i class="fa fa-calendar-days"></i> Posted: <?php echo "$date"; ?></p>
                                    <p class="title"><?php echo "$title5"; ?></p>
                                </div>
                            </button>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>


            <div class="col-8 right">
                <div class="row">
                    <div id="nav">
                        <div class="sett">
                            <form class="form" method="POST" action="/functions" enctype='multipart/form-data'>
                                <p class=" lead mt-3 set">Change Password</p>
                                <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
                                <label for="title">Old Password</label><br>
                                <input class="w-75" type="text" name="oldpassword" required><br>
                                <label for="title">New Password</label><br>
                                <input class="w-75" type="text" name="newpassword" required><br>
                                <input class="w-75" type="submit" value="Enter" name="changepassword" class="">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="nav">
                        <div class="sett">
                            <form class="form" method="POST" action="/functions" enctype='multipart/form-data'>
                                <p class=" lead mt-3 set">Change Email</p>
                                <label for="title">Old Email</label><br>
                                <input class="w-75" type="text" name="oldemail" required><br>
                                <label for="title">New Email</label><br>
                                <input class="w-75" type="text" name="newemail" required><br>
                                <input class="w-75" type="submit" value="Enter" name="changeemail" class="">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>