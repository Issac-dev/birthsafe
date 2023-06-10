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
    <script src="/birthsafe/app/view/media/script2.js"></script>
    <title></title>
</head>
<style>

</style>

<body>
    <div class="container">
        <div class="row">

            <div class="col">
                <div class="row">
                    <?php
                    require $_SERVER['DOCUMENT_ROOT'] . '/birthsafe/app/admin/connection.php';
                    $emailcat = $_SESSION['email'];
                    $selectcat = "SELECT `category` FROM `users` WHERE `email` = '$emailcat'";
                    $setcategory = mysqli_query($con, $selectcat);
                    while ($row = mysqli_fetch_array($setcategory)) {
                        $usercategory = $row['category'];
                    }
                    $sql = "SELECT * FROM `tasks` WHERE `category` = '$usercategory' ORDER BY `id` DESC;";
                    $feed = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($feed)) {
                        $id = $row['id'];
                        $title2 = $row['task'];
                        $date = $row['date'];
                    ?>
                        <form class="feed mb-1 pb-1" method="POST" action="/task">
                            <input type="hidden" name="task" value="<?php echo "$title2"; ?>">
                            <button type="submit" name="post2" class="bt mt-3 head2">
                                <div class="row lead">
                                    <p class="title"><i class="fa fa-calendar-days"></i> Posted: <?php echo "$date"; ?></p>
                                    <p class="title"><?php echo "$title2"; ?></p>
                                </div>
                            </button>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>


            <div class="col right">
                <div class="nav">
                    <p class="dropdown-toggl lead mt-3 set">Create a Task <i class="fa fa-list-check"></i></p>
                    <div class="dropdown3">
                        <form class="form" method="POST" action="/functions" enctype='multipart/form-data'>
                            <label for="title">Task</label><br>
                            <input type="text" name="task" required><br>
                            <label for="image">Media</label><br>
                            <input type="file" name="img"><br>
                            <label for="date">Date</label><br>
                            <input type="date" name="date" required>
                            <input type="submit" value="Submit" name="createtask" class="">
                        </form>
                    </div>
                </div>
                <div class="row bt4">
                    <?php
                    $title3 = $_POST['task'];

                    $sql = "SELECT * FROM `tasks` WHERE `task` = '$title3'";
                    $feed = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($feed)) {
                        $id = $row['id'];
                        $title = $row['task'];
                        $date = $row['date'];
                        $image = $row['image'];
                        $ext = pathinfo($image, PATHINFO_EXTENSION);
                        switch ($ext) {
                            case 'webm':
                                $stack = "none";
                                $stackvideo = "none";
                                break;
                            case 'mp3':
                                $stack = "none";
                                $stackvideo = "none";
                                break;
                            case 'jpg':
                                $stackaudio = "none";
                                $stackvideo = "none";
                                break;
                            case 'png':
                                $stackaudio = "none";
                                $stackvideo = "none";
                                break;
                            case 'jpeg':
                                $stackaudio = "none";
                                $stackvideo = "none";
                                break;
                            case 'mp4':
                                $stackaudio = "none";
                                $stack = "none";
                                break;
                            default:
                                $stack = "none";
                                $stackaudio = "none";
                                $stackvideo = "none";
                                break;
                        }
                        $vn = $row['image'];
                    ?>
                        <div class="row p-1 lead">
                            <p class="title"><i class="fa fa-calendar-days"></i> Posted: <?php echo "$date"; ?></p>
                            <h2 class="title"><?php echo "$title"; ?></h2>
                        </div>
                        <div class="row">
                            <img style="display: <?php echo $stack; ?>; width: 100%; hieght: 30%;" class="mt-1 mb-5" src="/birthsafe/app/backend/media/<?php echo $vn; ?>" class="img-fluid" alt="...">
                            <video controls style="display: <?php echo $stackvideo; ?>;">
                                <source src="/birthsafe/app/backend/media/<?php echo "$vn"; ?>" type="video/mp4">
                                <source src="/birthsafe/app/backend/media/<?php echo "$vn"; ?>" type="video/webm">
                            </video>
                            <audio controls style="display: <?php echo $stackaudio; ?>;">
                                <source src="/birthsafe/app/backend/media/<?php echo "$vn"; ?>" type="audio/mp3">
                                <source src="/birthsafe/app/backend/media/<?php echo "$vn"; ?>" type="audio/ogg">
                                <source src="/birthsafe/app/backend/media/<?php echo "$vn"; ?>" type="audio/webm">
                            </audio>
                        </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    </div>
    <script>
        $(function() { // Dropdown toggle
            $('.dropdown-toggl').click(function() {
                $(this).next('.dropdown3').slideToggle();
            });
        });
    </script>
</body>

</html>