<?php
require $_SERVER['DOCUMENT_ROOT'] . '/birthsafe/app/admin/connection.php';

class functions
{
  public $string;

  function setparameters($email)
  {
    $this->$email = $email;
  }

  function cleanme($string)
  {
    global $con;
    $input = $string;
    // This removes all the HTML tags from a string. This will sanitize the input string, and block any HTML tag from entering into the database.
    // filter_var($geeks, FILTER_SANITIZE_STRING);
    $input = filter_var($input, FILTER_SANITIZE_STRING);
    $input = trim($input, " \t\n\r");
    // htmlspecialchars() convert the special characters to HTML entities while htmlentities() converts all characters.
    // Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities:
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    // prevent javascript codes, Convert some characters to HTML entities:
    $input = htmlentities($input, ENT_QUOTES, 'UTF-8');
    $input = stripslashes(strip_tags($input));
    $input = mysqli_real_escape_string($con, $input);

    return $input;
  }

  function login($email, $passwordd)
  {
    require $_SERVER['DOCUMENT_ROOT'] . '/birthsafe/app/admin/connection.php';
    $validateuser = "SELECT * FROM `users` WHERE `email` = '$email'";
    $user = mysqli_query($con, $validateuser);

    //Check if user exists
    if (empty(mysqli_fetch_array($user))) {
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
      require $_SERVER['DOCUMENT_ROOT'] . '/birthsafe/app/view/login.php';
    } else {

      $sql = "SELECT * FROM `users` WHERE `password` = '$passwordd' AND `email` = '$email'";
      $login = mysqli_query($con, $sql);
      if (!empty(mysqli_fetch_array($login))) {
        $userDetails = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$passwordd'";
        $details = mysqli_query($con, $userDetails);
        while ($row = mysqli_fetch_array($details)) {
          $_SESSION['email'] = $row['email'];
          $_SESSION['active'] = $row['active'];
          header('Location: /profile');
        }
      } else {
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
              title: 'Incorrect Password'
            })
          </script>
        </body>

        </html>
  <?php
        require $_SERVER['DOCUMENT_ROOT'] . '/birthsafe/app/view/login.php';
      }
    }
  }

  function signup($email, $name, $passwordd)
  {
    require $_SERVER['DOCUMENT_ROOT'] . '/birthsafe/app/admin/connection.php';
    $sql = "INSERT INTO `users`(`email`, `name`, `password`) VALUES 
          ('$email','$name','$passwordd')";
    $register = mysqli_query($con, $sql);

    if ($register) {
      $login = $this->login($email, $passwordd);
    }
  }
}
function cleanme($string)
{
  global $con;
  $input = $string;
  // This removes all the HTML tags from a string. This will sanitize the input string, and block any HTML tag from entering into the database.
  // filter_var($geeks, FILTER_SANITIZE_STRING);
  $input = filter_var($input, FILTER_SANITIZE_STRING);
  $input = trim($input, " \t\n\r");
  // htmlspecialchars() convert the special characters to HTML entities while htmlentities() converts all characters.
  // Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities:
  $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
  // prevent javascript codes, Convert some characters to HTML entities:
  $input = htmlentities($input, ENT_QUOTES, 'UTF-8');
  $input = stripslashes(strip_tags($input));
  $input = mysqli_real_escape_string($con, $input);

  return $input;
}

if (isset($_POST['create'])) {
  $title = cleanme($_POST['title']);
  $body = ($_POST['body']);
  $date = cleanme($_POST['date']);
  $image = $_FILES['img']['name'];

  $folder = "birthsafe/app/backend/images/";
  move_uploaded_file($_FILES["img"]["tmp_name"], "$folder" . $_FILES["img"]["name"]);
  $target = "birthsafe/app/backend/images/" . basename($image);
  $sql = "INSERT INTO `topics`(`title`, `body`, `image`, `date`) VALUES ('$title', '$body', '$image', '$date')";
  $add = mysqli_query($con, $sql);
  if ($add) {
    header('Location: /profile');
  }
}


if (isset($_POST['createtask'])) {
  $task = cleanme($_POST['task']);
  $date = cleanme($_POST['date']);
  $image = $_FILES['img']['name'];
  $folder = "birthsafe/app/backend/images/";
  move_uploaded_file($_FILES["img"]["tmp_name"], "$folder" . $_FILES["img"]["name"]);
  $target = "birthsafe/app/backend/images/" . basename($image);
  $sql = "INSERT INTO `tasks`(`task`, `image`, `date`) VALUES ('$task', '$image', '$date')";
  $add = mysqli_query($con, $sql);
  if ($add) {
    header('Location: /tasks');
  }
}


if (isset($_POST['addcomment'])) {
  $title3 = $_POST['title3'];
  $comment = $_POST['comment'];
  $currentuser = $_POST['currentuser'];
  $image = $_FILES['img']['name'];
  $audiorec = $_FILES['audio']['name'];
  $folder = "birthsafe/app/backend/images/";
  $audiofile = "birthsafe/app/backend/audiofile/";
  $date = date("Y/m/d");
  if (preg_match('/\'/', $comment)) {
    $comment = str_replace("'", "", $comment);
  };

  move_uploaded_file($_FILES["img"]["tmp_name"], "$folder" . $_FILES["img"]["name"]);
  $target = "birthsafe/app/backend/images/" . basename($image);

  move_uploaded_file($_FILES["audio"]["tmp_name"], "$audiofile" . $_FILES["audio"]["name"]);
  $target = "birthsafe/app/backend/audiofile/" . basename($audiorec);
  ?>

  <?php
  $sql = "INSERT INTO `comments`(`title`, `user`, `comment`, `image`, `audio`, `date`) VALUES ('$title3','$currentuser','$comment','$image','$audiorec','$date')";
  $add = mysqli_query($con, $sql);

  if ($add) {
    session_destroy();
    session_start();
    $_SESSION['title'] = $_POST['title3'];
  ?>
    <script>
      var delay = ms => new Promise(res => setTimeout(res, ms));
      var hold = async () => {
        await delay(5);
        window.location.href = "/post";
      };
      hold();
    </script>
  <?php
  }
  ?>
  <?php
}

if (isset($_POST['changeemail'])) {
  $oldemail = cleanme($_POST['oldemail']);
  $newemail = cleanme($_POST['newemail']);
  $checkemail = "SELECT `email` FROM `users` WHERE `email` = '$oldemail'";
  $check = mysqli_query($con, $checkemail);
  if (empty($check)) {
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
          title: 'Email not Found'
        })
      </script>
    </body>

    </html>
  <?php
    require("/profile");
  } else {
    $update = "UPDATE `users` SET `email` = '$newemail' WHERE `email` = '$oldemail'";
    $up = mysqli_query($con, $update);
    require $_SERVER['DOCUMENT_ROOT'] . '/birthsafe/app/backend/logout.php';
  }
}


if (isset($_POST['changepassword'])) {
  $email = cleanme($_POST['email']);
  $oldpassword = cleanme($_POST['oldpassword']);
  $newpassword = cleanme($_POST['newpassword']);
  $checkpassword = "SELECT `password` FROM `users` WHERE `email` = '$email'";
  $checkp = mysqli_query($con, $checkpassword);
  while ($row = mysqli_fetch_array($checkp)) {
    $pass = $row['password'];
  }
  if (empty($pass)) {
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
          title: 'Email not Found'
        })
      </script>
    </body>

    </html>
<?php
    require("/profile");
  } else {
    $update = "UPDATE `users` SET `password` = '$newpassword' WHERE `email` = '$email'";
    $up = mysqli_query($con, $update);
    require $_SERVER['DOCUMENT_ROOT'] . '/birthsafe/app/backend/logout.php';
  }
}
?>