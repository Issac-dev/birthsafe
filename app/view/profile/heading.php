<?php
session_start();
if (!$_SESSION['email']) {
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
        title: 'Login or Create an Account'
      })
      var delay = ms => new Promise(res => setTimeout(res, ms));
      var hold = async () => {
        await delay(10000);
        window.location.href = "/login";
      };
      hold();
    </script>
  </body>

  </html>
<?php
}
?>

<?php
if ($_SESSION['active'] != 1) {
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
        title: 'Not a Subscriber Yet'
      })
      var delay = ms => new Promise(res => setTimeout(res, ms));
      var hold = async () => {
        await delay(5);
        window.location.href = "/services";
      };
      hold();
    </script>
  </body>

  </html>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel='icon' type='image/x-icon' href='/birthsafe/app/view/images/png_20230114_152034_0000.png' />

  <meta http-equiv='X-UA-Compatible' content='IE=edge' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css' />
  <link rel='stylesheet' href='/birthsafe/app/view/media/style2.css' />
  <title></title>
</head>
<style>
  nav {
    background: linear-gradient(90deg, hsla(233, 60%, 77%, 1) 23%, hsla(245, 100%, 65%, 1) 100%);

  }

  .navbar {
    padding: 6pt;
  }

  .menu {
    right: 20px;
  }

  .menu a {
    display: inline;
    white-space: nowrap;
    color: #333;
    text-decoration: none;
    font-weight: 700;
    margin-left: 20px;
    transition: color 0.3s;
    text-transform: uppercase;
  }

  .menu a:hover {
    color: #005b82;
    transition: 0.3s;
  }

  form input {
    width: 100%;
    border: 0pt;
    border-radius: 5pt;
    margin: 10pt;
    background: #e6e6e6;
    height: 30pt;
    padding-left: 10pt;
  }

  textarea {
    width: 100%;
    border: 0pt;
    border-radius: 5pt;
    margin: 10pt;
    background: #e6e6e6;
    padding-left: 10pt;
  }

  .dropdown-toggle {
    padding: 0;
    background: #777;
  }

  /**** ****/
  form.dropdown {
    display: none;
    position: absolute;
    top: 100%;
    margin-top: 5px;
    padding: 5px 5px 0 0;
    background: #777;
  }

  form.dropdown input {
    list-style-type: none;
  }

  form.dropdown input {
    text-decoration: none;
    padding: 0em 1em;
    display: block;
  }

  @media only screen and (min-width : 600px) {
    .sec {
      display: flex;
      justify-content: space-between;
    }


  }

  @media only screen and (max-width : 600px) {
    nav {
      background: linear-gradient(90deg, hsla(233, 60%, 77%, 1) 23%, hsla(245, 100%, 65%, 1) 100%);
    }

    .btn {
      display: none;
      position: absolute;
      right: 0px;
      top: 13pt;
    }

    .btn:hover>span {
      background: #6ab04c;
    }

    .btn span {
      display: block;
      margin: 6px;
      width: 40px;
      height: 3px;
      background: #333;
    }

    form input {
      width: 150pt;
      border: 0pt;
      border-radius: 5pt;
      margin: 10pt;
      background: #e6e6e6;
      padding-left: 10pt;
    }

    textarea {
      width: 150pt;
      border: 0pt;
      border-radius: 5pt;
      margin: 10pt;
      background: #e6e6e6;
      padding-left: 10pt;
    }

    .navbar {
      height: 60pt;
      overflow: visible;
      margin-bottom: 20pt;
    }

    .menu {
      width: 100%;
      position: absolute;
      right: 0;
      margin-bottom: 200pt;
      top: 80px;
      overflow: hidden;
      max-height: 0;
      transition: 1s;
      z-index: 1;
      background: linear-gradient(90deg, hsla(233, 60%, 77%, 1) 23%, hsla(245, 100%, 65%, 1) 100%);


    }

    .menu a {
      display: block;
      text-align: left;
      padding: 15px 0 15px 25px;
      margin: 0;
    }

    .menu a.a {
      border-left: 2px solid violet;
    }

    .menu a.b {
      border-left: 2px solid blue
    }

    .menu a.c {
      border-left: 2px solid skyblue
    }

    .menu a.d {
      border-left: 2px solid green
    }

    .menu a.e {
      border-left: 2px solid yellow
    }

    .menu a.f {
      border-left: 2px solid orange
    }

    .menu a.g {
      border-left: 2px solid red
    }

    .menu a:hover {
      color: #fff;
    }

    .menu a.a:hover {
      background: violet;
    }

    .menu a.b:hover {
      background: blue;
    }

    .menu a.c:hover {
      background: skyblue
    }

    .menu a.d:hover {
      background: green;
    }

    .menu a.e:hover {
      background: yellow;
    }

    .menu a.f:hover {
      background: orange;
    }

    .menu a.g:hover {
      background: red;
    }

    .btn {
      display: block;
      cursor: pointer;
    }

    .show {
      max-height: 500px;
    }
  }
</style>

<body>
  <nav class="navbar">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead m-3" style="display: flex; justify-content: space-between;">
            <i class="fa fa-user fa-1x pt-1 pe-3"></i>
            <?php
            require $_SERVER['DOCUMENT_ROOT'] . '/birthsafe/app/admin/connection.php';
            $useremail = $_SESSION['email'];
            echo "$useremail";
            $user = "SELECT * FROM `users` WHERE `email` = '$useremail'";
            $fetch = mysqli_query($con, $user);
            ?>
          </p>
        </div>
        <div class="col">
          <a class="btn">
            <span style="width: 30pt;"></span>
            <span style="width: 20pt;"></span>
            <span style="width: 30pt;"></span>
          </a>
        </div>
      </div>
      <div class="menu mt-2 sec ps-3">
        <form action="">
          <input type="text" placeholder="Search" name="search">
        </form>
        <a href="/profile" class="nav-item nav-link mt-1"><i class="fa fa-home fa-2x"></i>
        </a>
        <a href="/call" class="nav-item nav-link mt-1"><i class="fa fa-phone fa-2x"></i></a>
        <a href="/tasks" class="nav-item nav-link mt-1"><i class="fa fa-bell fa-2x"></i></a>
        <a href="/settings" class="nav-item nav-link mt-1"><i class="fa fa-gear fa-2x"></i></a>
        <a href="/logout" class="nav-item nav-link mt-1"><i class="fa fa-arrow-right-from-bracket fa-2x"></i></a>
      </div>
    </div>
  </nav>
  <script>
    $(".btn").on("click", function() {
      $('.menu').toggleClass("show");
    });
  </script>
</body>

</html>