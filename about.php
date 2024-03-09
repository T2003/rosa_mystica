<?php
require_once("connection.php");
$headQuery = mysqli_query($connect, "SELECT * FROM `staff` WHERE `position`='Head Teacher Of The School'");
$representativeQuery = mysqli_query($connect, "SELECT * FROM `staff` WHERE `position`='Representative Of Bernardines Sisters'");
$deanQuery =  mysqli_query($connect, "SELECT * FROM `staff` WHERE `position`='Dean of Studies and Discpline'");
$accountantQuery =  mysqli_query($connect, "SELECT * FROM `staff` WHERE `position`='Accountant Of The School'");

$head = mysqli_fetch_array($headQuery);

$representative = mysqli_fetch_array($representativeQuery);

$dean = mysqli_fetch_array($deanQuery);

$accountant = mysqli_fetch_array($accountantQuery);

//statistics
$con = mysqli_connect('localhost', 'root', '', 'rosa_mystica');
$sql = "SELECT * FROM `statistic`";
$res = mysqli_query($con, $sql);
$data = mysqli_fetch_array($res);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rose Mystica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/datepicker.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    include('menu.php');

    ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/uuu.jpg');height:11cm;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <h1 style="padding:3cm">School background</h1>
                </div>
            </div>
    </section><br>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="img w-100" style="background-image: url(images/skulu.jpg);">
                    </div>
                </div>
                <div class="col-lg-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">
                        <span class="subheading">school history</span>
                        <h2 class="mb-4">
                            <p style="color:#4f86f9;">GS Rosa Mystica</p>
                        </h2>
                        <p></p>
                        <p> Is an inclusive school of Bernardines Sisters aided by Government located in
                            Southern Province, Kamonyi District, Gacurabwenge Sector ,Nkingo cell ,Kamonyi Village, It
                            was started in 2008 in the period of “ Ecole Secondaire du District”, that is the reason why
                            at the starting the school name was ‘Ecole Secondaire de Kamonyi’. It was started with
                            O’level only; as it was Inclusive school, step by step we put other levels in place for the
                            main purpose of early intervention. The following chart presents the summarized school
                            profile which determines our school structure. </p>
                        <p><a href="files/GS Rose Mystica School situation after lockdown.pdf">View summary report of school situation after lockdown</a>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-image img" style="background-image: url(images/skl.jpg);">
        <div class="overlay"></div>
        <P style="margin-top: -3cm;color:black;text-align: center;font-size:xx-large; font-family: Arial Black;">GENERAL STRUCTURE OF SCHOOL TRANSFORMATION </P>
        <div class="container">
            <div class="row ">
                <div class="" data-aos="fade-up" data-aos-duration="1000">

                    <img src="images/unooo.JPG" class="img-responsive" style="width: 100%;"></span>
                </div>

                </a>
            </div>
        </div>
        </div>
    </section>
    <section class="ftco-section-counter img" style="background-image: url(images/skl2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 heading-section heading-section-white text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">OVER REVIEW OF ROSA MYSTICA</span>
                    <h2 class="mb-0" style="font-size: 35px;">SCHOOL STATISTIC</h2>
                </div>
            </div>
            <div class="row section-counter">
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <h2 class="number"><span class="countup"><?php echo $data['nursery'] ?></span></h2>
                        <span class="caption">NURSERY STUDENTS</span>
                    </div>



                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <h2 class="number"><span class="countup"><?php echo $data['primary'] ?></span></h2>
                        <span class="caption">PRIMARY STUDENTS </span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <h2 class="number"><span class="countup"><?php echo $data['secondary'] ?></span></h2>
                        <span class="caption">SECONDARY STUDENTS</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2 class="number"><span class="countup"><?php echo $data['teacher'] ?></span></h2>
                        <span class="caption">TEACHERS</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Meet our school staff members</span>
                    <h2 class="mb-5">School Leadership</h2>
                </div>
            </div>
            <div class="row">
                <?php if (mysqli_num_rows($headQuery)) {
                ?>
                    <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url(admin/<?php echo $head['picture'] ?>);">
                                </div>
                            </div>
                            <div class="text text-center">
                                <h3 class="mb-2"><?php echo $head['names'] ?></h3>
                                <span class="position mb-2"><?php echo $head['position'] ?></span>
                                <p>Tel:<?php echo $head['phone'] ?></p>
                                <!-- <div class="faded">
                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                    </ul>

                                </div> -->
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

                <?php if (mysqli_num_rows($representativeQuery)) {
                ?>
                    <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url(admin/<?php echo $representative['picture'] ?>);">
                                </div>
                            </div>
                            <div class="text text-center">
                                <h3 class="mb-2"><?php echo $representative['names'] ?></h3>
                                <span class="position mb-2"><?php echo $representative['position'] ?></span>
                                <p>Tel:<?php echo $representative['phone'] ?></p>
                                <!-- <div class="faded">
                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                    </ul>

                                </div> -->
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php if (mysqli_num_rows($deanQuery)) {
                ?>
                    <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url(admin/<?php echo $dean['picture'] ?>);">
                                </div>
                            </div>
                            <div class="text text-center">
                                <h3 class="mb-2"><?php echo $dean['names'] ?></h3>
                                <span class="position mb-2"><?php echo $dean['position'] ?></span>
                                <p>Tel:<?php echo $dean['phone'] ?></p>
                                <!-- <div class="faded">
                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                    </ul>

                                </div> -->
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (mysqli_num_rows($accountantQuery)) {
                ?>

                    <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url(admin/<?php echo $accountant['picture'] ?>);">
                                </div>
                            </div>
                            <div class="text text-center">
                                <h3 class="mb-2"><?php echo $accountant['names'] ?></h3>
                                <span class="position mb-2"><?php echo $accountant['position'] ?></span>
                                <p>Tel:<?php echo $accountant['phone'] ?></p>
                                <!-- <div class="faded">
                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                    </ul>

                                </div> -->
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </section>
    <section class="ftco-intro-2 img" style="background-image: url(images/skul2.jpg);">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-10">
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-md-8 d-flex align-items-center">
                            <div>
                                <span class="subheading">We get learner better for future</span>

                                <h1 class="mb-md-0 mb-4">
                                    Every learner is unique, their uniqueness really matters to us! . </h1>

                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('footer.php');

    ?>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/datepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>