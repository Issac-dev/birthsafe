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
    <title>birthsafe</title>
</head>
<style>
    .header-service {
        background-image: linear-gradient(to bottom, rgba(235, 191, 213, 0.767), rgba(209, 67, 162, 0.521)),
            url('/birthsafegit/app/view/images/young-mom.avif');
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
                url('/birthsafegit/app/view/images/pexels3.jpeg');
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

<script>
    AOS.init({
        duration: 1500,
    })
</script>

<body>
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
                        <p class="typewrite" data-period="2000" data-type='[ "Healthy Maternity for You and Your Baby", "Help Mother and Father to Get Their Own Baby Dream", "Spread The Love" ]'>
                            <span class="wrap"></span>
                        </p>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row m-2">
            <div class="col shadow-lg m-3 p-3 rounded" data-aos='fade-up'>
                <div class="row justify-content-center"><img class="mt-3 rounded-circle hero" style="width: 150pt; height:130pt;" src="/birthsafegit/app/view/images/adult.jpg" class="img-fluid" alt="..."></div>
                <div class="row text-center p-4">
                    <h3>Birthsafe</h3>
                    <p>Welcome to our pregnancy website, a place where you can find all the information and support you need to have a healthy and happy pregnancy. Whether you're a first-time mom or a seasoned pro, our website has everything you need to know to make the most of this exciting time in your life.</p>
                </div>
            </div>
            <div class="col shadow-lg m-3 p-3 rounded" data-aos='fade-up'>
                <div class="row justify-content-center"><img class="mt-3 rounded-circle hero" style="width: 150pt; height:130pt;" src="/birthsafegit/app/view/images/family.jpg" class="img-fluid" alt="..."></div>
                <div class="row text-center p-4">
                    <h3>Services and Support</h3>
                    <p>We offer a wide range of services and support to help you through every stage of your pregnancy. From prenatal classes and breastfeeding support to pregnancy fitness and nutrition tips, we've got you covered. Our team of experienced professionals is here to answer your questions and offer guidance every step of the way.</p>
                </div>
            </div>
            <div class="col shadow-lg m-3 p-3 rounded" data-aos='fade-up'>
                <div class="row justify-content-center"><img class="mt-3 rounded-circle hero" style="width: 150pt; height:130pt;" src="/birthsafegit/app/view/images/hands.jpg" class="img-fluid" alt="..."></div>
                <div class="row text-center p-4">
                    <h3>Pregnancy Information</h3>
                    <p>We know that pregnancy can be overwhelming, so we've compiled a comprehensive list of articles and resources to help you navigate this exciting time. Our website covers everything from the first trimester to postpartum care, and we've got information on everything from pregnancy symptoms to baby development.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container community-header mt-5">
        <div class="row m-2">
            <div class="col m-2 p-3" data-aos='flip-right'>
                <img class="rounded community" src="/birthsafegit/app/view/images/pink.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col m-2 p-3" data-aos='flip-left'>
                <h2 class="display-5">Community</h2>
                <p>Pregnancy is a journey best shared with others, and our website has a thriving community of moms-to-be and new moms who are all going through the same experiences. Our forum is a great place to connect with other women, ask questions, and share your own experiences. We also offer local meetups and events where you can connect with other moms in person.</p>
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

    <div class="container subsc">
        <div class="row">
            <div class="col m-2 p-3">
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
                            <form action="/functions" method="post">
                                <input type="hidden" name="subscribe_plan" value="0">
                                <input class="btmi mb-3 w-75" type="email" name="email" placeholder="Email" required><br>
                                <button class="btmb w-75 mb-5" value="submit" name="subscribe">Subscribe</button>
                            </form>
                        </div>
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
                            <form action="/functions" method="post">
                                <input type="hidden" name="subscribe_plan" value="1">
                                <input class="btmi mb-3 w-75" type="email" name="email" placeholder="Email" required>
                                <button class="btmb w-75 mb-5" value="submit" name="subscribe">Subscribe</button>
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
                            <form action="/functions" method="post">
                                <input type="hidden" name="subscribe_plan" value="2">
                                <input class="btmi mb-3 w-75" type="email" name="email" placeholder="Email" required>
                                <button class="btmb w-75 mb-5" value="submit" name="subscribe">Subscribe</button>
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
                            <form action="/functions" method="post">
                                <input type="hidden" name="subscribe_plan" value="3">
                                <input class="btmi mb-3 w-75" type="email" name="email" placeholder="Email" required>
                                <button class="btmb w-75 mb-5" value="submit" name="subscribe">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container why">
        <div class="row p-3">
            <div class="col">
                <h3 class="display-5">Why You Should Choose Us</h3>
                <ul>
                    <li>
                        <p>Birthsafe have a team of experienced and compassionate medical professionals who are dedicated to providing top-quality care to expectant mothers. You could emphasize the expertise and qualifications of your staff, as well as their compassionate and patient-centered approach to care.</p>
                    </li>
                    <li>
                        <p>Birthsafe offers personalized care that is tailored to the specific needs and preferences of each expectant mother. This could include customized birth plans, one-on-one consultations with medical professionals, and individualized support throughout pregnancy and childbirth.</p>
                    </li>
                    <li>
                        <p>Birthsafe offers a holistic approach to pregnancy care, providing a range of services that address the physical, emotional, and spiritual needs of expectant mothers. This could include prenatal yoga and massage, nutrition counseling, and mental health support.</p>
                    </li>
                    <li>
                        <p>Birthsafe have a strong community focus, offering a range of programs and services that support the health and well-being of expectant mothers and their families. This could include prenatal education classes, breastfeeding support groups, and community outreach initiatives.</p>
                    </li>
                    <li>
                        <p>Birthsafe leverage cutting-edge technology and innovative approaches to care to provide the best possible outcomes for expectant mothers and their babies. This could include the latest medical equipment, advanced screening and diagnostic tools, and state-of-the-art birthing suites.</p>
                    </li>
                </ul>
            </div>
            <div class="col-7 d-flex m-3 p-3">
                <div class="col"><img class="rounded" src="/birthsafegit/app/view/images/pexels.webp" class="img-fluid" alt="..."></div>
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
                            <img src="/birthsafegit/app/view/images/mig4.avif" class="d-block w-100" alt="...">
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
                            <img src="/birthsafegit/app/view/images/nig2.avif" class="d-block w-100" alt="...">
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
                            <img src="/birthsafegit/app/view/images/nig3.avif" class="d-block w-100" alt="...">
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
<script>
    $('#submit').on('click', function() {
        if ($('#container2').css('opacity') == 0) {
            $('#container2').css('opacity', 1);
        } else {
            $('#container2').css('opacity', 0);
        }
    });
</script>
<?php
require("footer.php");
?>

</html>