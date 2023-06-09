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
                    $sql = "SELECT * FROM `tasks` ORDER BY `id` DESC LIMIT 3;";
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

                        if (empty($row['image'])) {
                            $stack = "none";
                        } else {
                            $stack = "";
                            $media = $row['image'];
                        }
                    ?>
                        <div class="row p-1 lead">
                            <p class="title"><i class="fa fa-calendar-days"></i> Posted: <?php echo "$date"; ?></p>
                            <h2 class="title"><?php echo "$title"; ?></h2>
                        </div>
                        <div class="row">
                            <img style="display: <?php echo $stack; ?>; width: 100%; hieght: 30%;" class="mt-1 mb-5" src="/birthsafe/app/backend/images/<?php echo "$image"; ?>" class="img-fluid" alt="...">
                        </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>