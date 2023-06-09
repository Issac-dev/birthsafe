<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv='X-UA-Compatible' content='IE=edge' />
  <link rel='icon' type='image/x-icon' href='/birthsafe/app/view/images/png_20230114_152034_0000.png' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css' />
  <link rel='stylesheet' href='/birthsafe/app/view/media/style.css' />
  <title>Birthsafe</title>
</head>
<style>
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



  @media only screen and (max-width : 600px) {
    .btn {
      display: none;
      position: absolute;
      right: 20px;
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

    .navbar {
      overflow: visible;
      background: transparent;
      margin-bottom: -150pt;
    }

    .menu {
      width: 100%;
      right: 0;
      margin-bottom: 200pt;
      top: 80px;
      overflow: hidden;
      max-height: 0;
      transition: 3s;
      background: linear-gradient(to bottom, rgba(235, 191, 213, 0.767), rgba(209, 67, 162, 0.521)),
        url('');

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
          <h3 class="display-5"><img class="rounded logo" style="" src="/birthsafe/app/view/images/png_20230114_152034_0000.png" class="img-fluid" alt="..."></h3>
        </div>
        <div class="col">
          <a class="btn">
            <span></span>
            <span></span>
            <span></span>
          </a>
        </div>
      </div>
      <div class="menu logo2">
        <a href="/" class="nav-item nav-link">Home</a>
        <a href="/login" class="nav-item nav-link">Login</a>
        <a href="/services" class="nav-item nav-link">Subscription</a>
        <a href="/about" class="nav-item nav-link">About</a>
        <a href="/contact" class="nav-item nav-link">Contact</a>
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