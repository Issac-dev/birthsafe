<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
</head>

<body>
    <script src="/birthsafe/app/view/media/script.js"></script>
    <script>
        AOS.init({
            duration: 1500,
        })
    </script>
    <div class="header" style="padding-top: 20pt;">
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
                        <p class="typewrite" data-period="2000" data-type='[ "Page Not Found"]'>
                            <span class="wrap"></span>
                        </p>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>