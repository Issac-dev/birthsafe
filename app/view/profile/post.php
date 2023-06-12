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
    <script src="/birthsafegit/app/view/media/script2.js"></script>
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
                    $sql = "SELECT * FROM `topics` ORDER BY `id` DESC LIMIT 3;";
                    $feed = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($feed)) {
                        $id = $row['id'];
                        $title2 = $row['title'];
                        $date = $row['date'];
                    ?>
                        <form class="feed mb-1 pb-1" method="POST" action="/post">
                            <input type="hidden" name="title" value="<?php echo "$title2"; ?>">
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
                    if (!isset($_POST['title'])) {
                        $title3 = $_SESSION['title'];
                    } else {
                        $title3 = $_POST['title'];
                    }

                    $sql = "SELECT * FROM `topics` WHERE `title` = '$title3'";
                    $feed = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($feed)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $body = $row['body'];
                        $date = $row['date'];
                        $image = $row['image'];
                        $likes = $row['likes'];
                        $dislikes = $row['dislike'];
                    ?>
                        <div class="row p-1 lead">
                            <p class="title"><i class="fa fa-calendar-days"></i> Posted: <?php echo "$date"; ?></p>
                            <h2 class="title"><?php echo "$title"; ?></h2>
                        </div>
                        <div class="row">
                            <img style="height: 100%; width: 100%;" class="mt-1 mb-5" src="/birthsafegit/app/backend/images/<?php echo "$image"; ?>" class="img-fluid" alt="...">
                        </div>
                        <div class="lead">
                            <p><?php echo nl2br($body); ?></p>
                        </div>
                        <div class="row">
                            <?php
                            $sql = "SELECT COUNT(*) AS total_comment FROM `comments` WHERE `title` = '$title'";
                            $result = mysqli_query($con, $sql);
                            $fetch = mysqli_fetch_assoc($result);

                            $counter = $fetch['total_comment'];

                            ?>
                        </div>
                        <p>
                        <form action="/post" method="POST">
                            <input type="hidden" name="id" value="<?php echo "$id"; ?>">
                            <input type="hidden" name="count" value="<?php echo "$likes"; ?>">
                            <input type="hidden" name="countdislikes" value="<?php echo "$dislikes"; ?>">
                            <div class="row" style="">
                                <div class="col">
                                    <i class="fa fa-comment fa-1x"></i><?php echo $counter; ?>
                                </div>
                                <div class="col">
                                    <button class="bt3" type="submit" name="like" style="border: 0pt;">
                                        <i class="fa fa-thumbs-up fa-1x"></i><?php echo $likes; ?>
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="bt3" type="submit" name="dislike" style="border: 0pt;">
                                        <i class="fa fa-thumbs-down fa-1x"></i><?php echo $dislikes; ?>
                                    </button>
                                </div>
                            </div>
                        </form>
                        </p>
                        <p>
                            <?php
                            $sql = "SELECT * FROM `comments` WHERE `title` = '$title'";
                            $comments = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($comments)) {
                                $user = $row['user'];
                                $comment = $row['comment'];

                                if (empty($row['audio'])) {
                                    $stackaudio = "none";
                                } else {
                                    $stackaudio = "";
                                    $vn = $row['audio'];
                                }

                                if (empty($row['image'])) {
                                    $stack = "none";
                                } else {
                                    $stack = "";
                                    $media = $row['image'];
                                }

                                $date = $row['date'];
                            ?>
                        <div class=" row bt5 lead mb-2">
                            <p style="font-size: 12pt;"><?php echo $user; ?> <?php echo $date; ?></p>
                            <p><?php echo $comment; ?></p>
                            <img style="display: <?php echo $stack; ?>; width: 100%; hieght: 30%;" class="mt-1 mb-5" src="/birthsafegit/app/backend/images/<?php echo $media; ?>" class="img-fluid" alt="...">
                            <audio controls style="display: <?php echo $stackaudio; ?>;">
                                <source src="/birthsafegit/app/backend/audiofile/<?php echo "$vn"; ?>" type="audio/mp3">
                                <source src="/birthsafegit/app/backend/audiofile/<?php echo "$vn"; ?>" type="audio/ogg">
                                <source src="/birthsafegit/app/backend/audiofile/<?php echo "$vn"; ?>" type="audio/webm">
                            </audio>
                        </div>
                    <?php
                            }
                    ?>
                    <div class="row message" id="message">
                        <form class="form" method="POST" action="/functions" enctype='multipart/form-data'>
                            <input type="hidden" name="title3" value="<?php echo $title3; ?>">
                            <input type="hidden" name="currentuser" value="<?php echo $useremail; ?>">
                            <div class="row">
                                <div id="nav">
                                    <p class="dropdown-toggl lead mt-3 set">Add Media <i class="fa fa-microphone"></i></p>
                                    <div class="dropdown2">
                                        <?php
                                        require("record.php");
                                        ?>
                                        <label for="audio">Audio</label><br>
                                        <input type="file" accept=".webm" name="audio"><br>
                                        <label for="image">Image</label><br>
                                        <input type="file" name="img"><br>
                                    </div>
                                </div>
                                <div class="row" style="display: inline;">
                                    <div class="col" id="text"><input type="text" placeholder="Message" autocomplete="off" name="comment"></div>
                                    <div class="col" id="btn"><input type="submit" name="addcomment" value="Enter"></div>
                                </div>
                            </div>
                        </form>
                        <?php
                        ?>
                    </div>

                    <?php
                        if (isset($_POST['like'])) {
                            $userid = $_POST['id'];
                            $userlikes = $_POST['count'];
                            $update = $userlikes + 1;
                            $sql = "UPDATE `topics` SET `likes` = '$update' WHERE `id`=$userid";
                            $updatelikes = mysqli_query($con, $sql);
                            if ($updatelikes) {
                    ?>
                            <script>
                                var delay = ms => new Promise(res => setTimeout(res, ms));
                                var hold = async () => {
                                    await delay(1000);
                                    window.location.href = "/post";
                                };
                                hold();
                            </script>
                    <?php
                            }
                        }
                    ?>
                    <?php
                        if (isset($_POST['dislike'])) {
                            $userid = $_POST['id'];
                            $userdislikes = $_POST['count'];
                            $update = $userdislikes + 1;
                            $sql = "UPDATE `topics` SET `dislike` = '$update' WHERE `id`=$userid";
                            $updatelikes = mysqli_query($con, $sql);
                            if ($updatelikes) {
                    ?>
                            <script>
                                var delay = ms => new Promise(res => setTimeout(res, ms));
                                var hold = async () => {
                                    await delay(1000);
                                    window.location.href = "/post";
                                };
                                hold();
                            </script>
                    <?php
                            }
                        }
                    ?>
                    </p>
                <?php
                    }
                ?>
                </div>
            </div>
            <script>
                $(function() { // Dropdown toggle
                    $('.dropdown-toggl').click(function() {
                        $(this).next('.dropdown2').slideToggle();
                    });
                });
            </script>
        </div>
    </div>
    </div>
</body>

</html>