<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/b2b66f5784.js" crossorigin="anonymous"></script>

    <script src="/birthsafe/app/view/media/script.js"></script>
    <title>birthsafe</title>
</head>
<style>
    .header-service {
        background-image: linear-gradient(to bottom, rgba(235, 191, 213, 0.767), rgba(209, 67, 162, 0.521)),
            url('/birthsafe/app/view/images/nig5.avif');
        background-size: cover;
        height: 465pt;
    }

    @media screen and (max-width: 600px) {
        .header-service {
            background-image: linear-gradient(to bottom, rgba(235, 191, 213, 0.767), rgba(209, 67, 162, 0.521)),
                url('/birthsafe/app/view/images/pexels5.webp');
            background-size: cover;
            height: 465pt;
        }
    }

    @media screen and (min-width: 600px) {
        .aft {
            display: none;
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
                        <p>About Us</p>
                        <p class="typewrite" data-period="2000" data-type='[ "Journey Deeper Into Our Pregnancy Care Company"]'>
                            <span class="wrap"></span>
                        </p>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row m-2 p-3 text-center">
            <div class="col">
                <div class="row"><i class="fa fa-person-pregnant fa-5x"></i></div>
                <div class="row"><span id="count1" class="display-4"></span>
                    <p>Pregnant Women</p>
                </div>
            </div>
            <div class="col">
                <div class="row"><i class="fa fa-baby fa-5x"></i></div>
                <div class="row"><span id="count2" class="display-4"></span>
                    <p>New Born Babies</p>
                </div>
            </div>
            <div class="col">
                <div class="row"><i class="fa fa-person-breastfeeding fa-5x"></i></div>
                <div class="row"><span id="count3" class="display-4"></span>
                    <p>Happy Mothers</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row m-2 p-3">
            <div class="col shadow-lg p-2 m-3 bg-body rounded">
                <div class="row">
                    <div class="col"><i class="fa fa-user-doctor fa-4x"></i></div>
                    <div class="col-8">
                        <h3 class="">Prenatal Care</h3>
                        <p>This could include regular check-ups with an OB/GYN or midwife to monitor the health of the mother and the baby, as well as ultrasounds and other diagnostic tests as needed.</p>
                    </div>
                </div>
            </div>
            <div class="col shadow-lg p-2 m-3 bg-body rounded">
                <div class="row">
                    <div class="col"><i class="fa fa-baby-carriage fa-4x"></i></div>
                    <div class="col-8">
                        <h3 class="">Labor and Delivery Support</h3>
                        <p>This could include assistance with creating a birth plan, access to birthing suites and other facilities, and support from a team of experienced medical professionals during labor and delivery.</p>
                    </div>
                </div>
            </div>
            <div class="col shadow-lg p-2 m-3 bg-body rounded">
                <div class="row">
                    <div class="col"><i class="fa fa-hospital fa-4x"></i></div>
                    <div class="col-8">
                        <h3 class="">Postpartum Care</h3>
                        <p>This could include follow-up appointments with medical professionals, lactation support for breastfeeding mothers, and mental health counseling for postpartum depression or other emotional challenges.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-2 p-3">
            <div class="col shadow-lg p-2 m-3 bg-body rounded">
                <div class="row">
                    <div class="col"><i class="fa fa-house fa-4x"></i></div>
                    <div class="col-8">
                        <h3 class="">Education and Classes</h3>
                        <p>This could include classes on prenatal nutrition, childbirth preparation, and newborn care, as well as online resources and support groups for expectant and new mothers.</p>
                    </div>
                </div>
            </div>
            <div class="col shadow-lg p-2 m-3 bg-body rounded">
                <div class="row">
                    <div class="col"><i class="fa fa-dumbbell fa-3x"></i></div>
                    <div class="col-8">
                        <h3 class="">Holistic Services</h3>
                        <p>This could include services such as prenatal massage, yoga and other fitness classes, acupuncture, and other complementary therapies that support the health and well-being of expectant mothers and their babies.</p>
                    </div>
                </div>
            </div>
            <div class="col shadow-lg p-2 m-3 bg-body rounded">
                <div class="row">
                    <div class="col"><i class="fa fa-male fa-4x"></i></div>
                    <div class="col-8">
                        <h3 class="">Fertility Services</h3>
                        <p>For couples struggling with infertility, your company could offer a range of fertility services, including diagnostic testing, assisted reproductive technologies, and other interventions to help couples conceive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</div>
<?php
require("footer.php");
?>

</html>