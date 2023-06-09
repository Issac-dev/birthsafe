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
            url('/birthsafe/app/view/images/young-mom.avif');
        background-size: cover;
        height: 465pt;
    }

    .carousel-inner img {
        opacity: 0.6;
        transition: 6;
    }

    .carousel-inner img:hover {
        opacity: 0.1;
    }

    .cars {
        width: 60%;
        height: 60%;
    }

    @media screen and (max-width: 600px) {
        .header-service {
            background-image: linear-gradient(to bottom, rgba(235, 191, 213, 0.767), rgba(209, 67, 162, 0.521)),
                url('/birthsafe/app/view/images/pexels3.jpeg');
            background-size: cover;
            height: 465pt;
        }

        .cars {
            width: 100%;
            height: 100%;
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
                        <p class="typewrite" data-period="2000" data-type='[ "Get Started With the Best Package For You and Your Baby."]'>
                            <span class="wrap"></span>
                        </p>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row m-2 p-3">
            <div class="col shadow-lg p-2 m-1 bg-body rounded">
                <div class="row">
                    <div class="row"><i class="fa-regular fa-bell fa-4x"></i></div>
                    <div class="row m-3 p-3">
                        <h3 class="">Queen Subscription</h3>
                        <h4 class="display-5"><i class="fa fa-naira-sign">2,800.00</i>/3Months</h4>
                        <ul class="lead">
                            <li>Birth recovery resources</li>
                            <li>Pcv protocol</li>
                            <li>Meal protocol</li>
                            <li>Supplement protocol</li>
                            <li>3 Group consultation</li>
                        </ul>
                        <form action="/function" method="post">
                            <input type="hidden" name="subscribe_plan" value="yearly">
                            <button class="btmb w-75 mb-5" value="submit" name="subscribe"></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col shadow-lg p-2 m-1 bg-body rounded">
                <div class="row">
                    <div class="row"><i class="fa-regular fa-bell fa-4x"></i></div>
                    <div class="row m-3 p-3">
                        <h3 class="">Princess Subscription</h3>
                        <h4 class="display-5"><i class="fa fa-naira-sign">1,000.00</i>/Monthly</h4>
                        <ul class="lead">
                            <li>Birth recovery resources</li>
                            <li>Pcv protocol</li>
                            <li>Meal protocol</li>
                            <li>Supplement protocol</li>
                            <li>1 Group consultation</li>
                        </ul>
                        <button class="btmb w-75 mb-5" id="submit" style="color: white; text-decoration: none;">Subscribe</button>
                    </div>
                </div>
            </div>

            <div class="row m-2 p-3" id="container2">
                <div class="col shadow-lg p-2 m-3 bg-body rounded">
                    <div class="row">
                        <div class="row"><i class="fa-regular fa-bell fa-2x"></i></div>
                        <div class="row m-3 p-3">
                            <h3 class="">1st Trimester</h3>
                            <h4 class="lead"><i class="fa fa-naira-sign">1,000</i>/Monthly</h4>
                            <form action="/function" method="post">
                                <input type="hidden" name="subscribe_plan" value="yearly">
                                <button class="btmb w-75 mb-5" value="submit" name="subscribe"></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col shadow-lg p-2 m-3 bg-body rounded">
                    <div class="row">
                        <div class="row"><i class="fa-regular fa-bell fa-2x"></i></div>
                        <div class="row m-3 p-3">
                            <h3 class="">2nd Trimester</h3>
                            <h4 class="lead"><i class="fa fa-naira-sign">1,000</i>/Monthly</h4>
                            <form action="/function" method="post">
                                <input type="hidden" name="subscribe_plan" value="yearly">
                                <button class="btmb w-75 mb-5" value="submit" name="subscribe"></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col shadow-lg p-2 m-3 bg-body rounded">
                    <div class="row">
                        <div class="row"><i class="fa-regular fa-bell fa-2x"></i></div>
                        <div class="row m-3 p-3">
                            <h3 class="">3rd Trimester</h3>
                            <h4 class="lead"><i class="fa fa-naira-sign">1,000</i>/Monthly</h4>
                            <form action="/function" method="post">
                                <input type="hidden" name="subscribe_plan" value="yearly">
                                <button class="btmb w-75 mb-5" value="submit" name="subscribe"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <div class="container mb-5 justify-content-center">
                <div class="row">
                    <h2 class="mb-5 mt-5">
                        <center>Testimonials</center>
                    </h2>
                </div>
                <div class="row justify-content-center cars" style="font-size: 13pt;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/birthsafe/app/view/images/mig4.avif" class="d-block w-100" alt="...">
                                <div class="aft">
                                    <h5 style="color: black;">Ajayi Esther</h5>
                                    <p style="color: black;">"I can't say enough great things about the care I received. From my very first appointment, I felt welcomed and supported by the entire team. They took the time to listen to my concerns and answer all of my questions, and I felt like they really cared about me and my baby. When it came time to deliver, I felt completely confident in the team's abilities and was so grateful for their expertise and guidance during the whole process."</p>
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;">Ajayi Esther</h5>
                                    <p style="color: black;">"I can't say enough great things about the care I received. From my very first appointment, I felt welcomed and supported by the entire team. They took the time to listen to my concerns and answer all of my questions, and I felt like they really cared about me and my baby. When it came time to deliver, I felt completely confident in the team's abilities and was so grateful for their expertise and guidance during the whole process."</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/birthsafe/app/view/images/nig2.avif" class="d-block w-100" alt="...">
                                <div class="aft">
                                    <h5 style="color: black;">Samuel Faith</h5>
                                    <p style="color: black;">"As a first-time mom, I was nervous and overwhelmed by the prospect of pregnancy and childbirth. But the team made me feel completely at ease. They provided me with all the information and support I needed to feel empowered and prepared for the journey ahead. I felt like I had a team of experts on my side, and that made all the difference."</p>
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;">Samuel Faith</h5>
                                    <p style="color: black;">"As a first-time mom, I was nervous and overwhelmed by the prospect of pregnancy and childbirth. But the team made me feel completely at ease. They provided me with all the information and support I needed to feel empowered and prepared for the journey ahead. I felt like I had a team of experts on my side, and that made all the difference."</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/birthsafe/app/view/images/nig3.avif" class="d-block w-100" alt="...">
                                <div class="aft">
                                    <h5 style="color: black;">Uje Queen</h5>
                                    <p style="color: black;">"I had a high-risk pregnancy and was really worried about the health of my baby. But the team went above and beyond to provide me with the best care possible. They worked closely with me to develop a care plan that addressed all of my concerns and helped me manage my health throughout my pregnancy. Thanks to their support and expertise, my baby was born healthy and happy, and I will always be grateful to them for that."</p>
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;">Uje Queen</h5>
                                    <p style="color: black;">"I had a high-risk pregnancy and was really worried about the health of my baby. But the team went above and beyond to provide me with the best care possible. They worked closely with me to develop a care plan that addressed all of my concerns and helped me manage my health throughout my pregnancy. Thanks to their support and expertise, my baby was born healthy and happy, and I will always be grateful to them for that."</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </center>
        <script>
            $('#submit').on('click', function() {
                if ($('#container2').css('opacity') == 0) {
                    $('#container2').css('opacity', 1);
                } else {
                    $('#container2').css('opacity', 0);
                }
            });
        </script>
</body>
</div>
<?php
require("footer.php");
?>

</html>