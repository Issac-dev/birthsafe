<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="/birthsafegit/app/view/media/script.js"></script>
    <title>birthsafe - Sign Up</title>
</head>
<style>
    .header-service {
        background-image: linear-gradient(to bottom, rgba(235, 191, 213, 0.767), rgba(209, 67, 162, 0.521)),
            url('/birthsafegit/app/view/images/medium-shot.avif');
        background-size: cover;
        height: 465pt;
    }

    form {
        text-align: left;
        padding: 20pt;
    }

    form button {
        margin-top: 10pt;
        text-align: left;
        padding: 20pt;
        width: 100%;
        border-radius: 5pt;
    }

    .inp {
        width: 100%;
        height: 30pt;
        border: 0pt;
        border-radius: 5pt;
        margin: 10pt;
        background: #e6e6e6;
        padding-left: 10pt;
    }

    input:focus {
        border: 0pt;
    }

    .message {
        height: 100pt;
    }

    @media screen and (max-width: 600px) {
        body {
            background-image: linear-gradient(to bottom, rgba(235, 191, 213, 0.767), rgba(209, 67, 162, 0.521)),
                url('/birthsafegit/app/view/images/medium-shot2.avif');
            background-size: cover;
        }

        .header-service {
            display: none;
        }

        form button {
            text-align: left;
            padding: 20pt;
            width: 150pt;
            border-radius: 5pt;
            margin-right: 30pt;
            margin-top: 20pt;
        }

        form input {
            width: 150pt;
        }

        img {
            width: 200pt;
        }

        form input {
            width: 150pt;
            border: 0pt;
            border-radius: 5pt;
            margin: 10pt;
            background: #e6e6e6;
            padding-left: 10pt;
        }

        input:focus {
            border: 0pt;
        }
    }
</style>

<body>
    <div class="position-sticky">
        <?php
        require("heading.php");
        ?>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col header-service mb-5">
            </div>
            <div class="col">
                <center>
                    <div class="col m-2 mt-5 p-3">
                        <h3 class="display-5">Sign Up</h3>
                        <form method='POST' action="/signupp">
                            <label for="email">Email</label><br>
                            <input class="inp" type="email" name="email">
                            <label for="name">Full Name</label><br>
                            <input class="inp" type="text" name="name"><br>
                            <label for="password">Password</label><br>
                            <input class="inp" type="password" name="password"><br>
                            <label for="confirmpassword">Confirm Password</label><br>
                            <input class="inp" type="password" name="confirmpassword"><br>
                            <center>
                                <button type="submit" value="register" name="register" class="btn btn-primary btn-sm mt-3">Submit</button>
                            </center>
                        </form>
                    </div>
                    <p class="lead">Have an account already? <a href="/login">Login</a></p>
                </center>
            </div>
        </div>
    </div>
</body>
</div>

</html>