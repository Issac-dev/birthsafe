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
                </div>
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM `tasks` WHERE `category` = '$usercategory'";
                    $feed = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($feed)) {
                        $id = $row['id'];
                        $title = $row['task'];
                        $id = $row['id'];
                        $title = $row['task'];
                        $date = $row['date'];
                        $image = $row['image'];
                    ?>
                        <form class="feed mb-4 pb-2" method="POST" action="/task">
                            <input type="hidden" name="task" value="<?php echo "$title"; ?>">
                            <button type="submit" name="post2" class="bt">
                                <div class="row p-3 lead">
                                    <p class="title"><i class="fa fa-calendar-days"></i> Posted: <?php echo "$date"; ?></p>
                                    <h2 class="title"><?php echo "$title"; ?></h2>
                                </div>
                            </button>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <script>
                $(function() { // Dropdown toggle
                    $('.dropdown-toggl').click(function() {
                        $(this).next('.dropdown3').slideToggle();
                    });
                });
            </script>
        </div>
    </div>
    </div>
</body>

</html>