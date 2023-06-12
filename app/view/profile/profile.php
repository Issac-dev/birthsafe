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
            <p class="dropdown-toggl lead mt-3 set">Create a Post <i class="fa fa-image"></i></p>
            <div class="dropdown">
              <form class="form" method="POST" action="/functions" enctype='multipart/form-data'>
                <label for="title">Title</label><br>
                <input type="text" name="title" required><br>
                <label for="body">Text</label><br>
                <textarea name="body" id="" cols="30" rows="10" required></textarea><br>
                <label for="image">Image</label><br>
                <input type="file" name="img" required><br>
                <label for="date">Date</label><br>
                <input type="date" name="date" required>
                <input type="submit" value="Submit" name="create" class="">
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
          $sql = "SELECT * FROM `topics` ORDER BY `id` DESC LIMIT 20";
          $feed = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($feed)) {
            $id = $row['id'];
            $title = $row['title'];
            $date = $row['date'];
            $image = $row['image'];
          ?>
            <form class="feed mb-4 pb-2" method="POST" action="/post">
              <input type="hidden" name="title" value="<?php echo "$title"; ?>">
              <button type="submit" name="post2" class="bt">
                <div class="row p-3 lead">
                  <p class="title"><i class="fa fa-calendar-days"></i> Posted: <?php echo "$date"; ?></p>
                  <h2 class="title"><?php echo "$title"; ?></h2>
                </div>
                <div class="row">
                  <img class="mt-1 mb-5" src="/birthsafegit/app/backend/images/<?php echo "$image"; ?>" class="img-fluid" alt="...">
                </div>
                <div class="row">
                  <?php
                  $sql = "SELECT COUNT(*) AS total_comment FROM `comments` WHERE `title` = '$title'";
                  $result = mysqli_query($con, $sql);
                  $fetch = mysqli_fetch_assoc($result);
                  $counter = $fetch['total_comment'];

                  $sql2 = "SELECT * FROM `topics` WHERE `id`='$id'";
                  $result2 = mysqli_query($con, $sql2);
                  $fetch = mysqli_fetch_assoc($result2);
                  $likes = $fetch['likes'];
                  $dislikes = $fetch['dislike'];

                  ?>
                </div>
                <p><i class="fa fa-comment fa-1x"></i><?php echo $counter; ?> <i class="fa fa-thumbs-up fa-1x"></i><?php echo $likes; ?> <i class="fa fa-thumbs-down fa-1x"></i><?php echo $dislikes; ?></p>
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
            $(this).next('.dropdown').slideToggle();
          });
        });
      </script>
    </div>
  </div>
  </div>
</body>

</html>