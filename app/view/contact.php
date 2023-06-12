<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/b2b66f5784.js" crossorigin="anonymous"></script>

    <script src="/birthsafegit/app/view/media/script.js"></script>
    <title>birthsafe - Contact Us</title>
</head>
<style>
    .header-service {
        background-image: linear-gradient(to bottom, rgba(235, 191, 213, 0.767), rgba(209, 67, 162, 0.521)),
            url('/birthsafegit/app/view/images/nig5.avif');
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
        border: 0pt;
        border-radius: 5pt;
        margin: 10pt;
        background: #e6e6e6;
        height: 30pt;
        padding-left: 10pt;
    }

    input:focus {
        border: 0pt;
    }

    .message {
        height: 100pt;
    }

    @media screen and (max-width: 600px) {
        .header-service {
            background-image: linear-gradient(to bottom, rgba(235, 191, 213, 0.767), rgba(209, 67, 162, 0.521)),
                url('/birthsafegit/app/view/images/pexels5.webp');
            background-size: cover;
            height: 465pt;
        }

        form button {
            text-align: left;
            padding: 20pt;
            width: 150pt;
            border-radius: 5pt;
            margin-right: 70pt;
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

        .message {
            height: 100pt;
        }
    }
</style>

<body>
    <script>
        AOS.init({
            duration: 1500,
        })
    </script>
    <div class="header-service" style="padding-top: 20pt;">
        <div class="bubbles">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>

        </div>
        <div class="position-sticky">
            <?php
            require("heading.php");
            ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h1 class="display-5">
                        Contact Us
                    </h1>
                    <h1>Send us an Email Today.</h1>
                    <h4>We're here to help you every step of the way on your pregnancy journey.</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <img class="mt5" style="" src="/birthsafegit/app/view/images/woman-holding.avif" class="img-fluid" alt="...">
            </div>
            <div class="col m-2 mt-5 p-3">
                <form action="post">
                    <label for="email">Email</label><br>
                    <input class="inp" type="email">
                    <label for="number">Phone Number</label><br>
                    <input class="inp" type="number"><br>
                    <label for="message">Message</label><br>
                    <input class="message inp" type="text"><br>
                    <center>
                        <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>
</div>
<?php
require("footer.php");
?>

</html>