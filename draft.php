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
    <section class="slider-hero">
        <div class="overlay"></div>
        <div class="hero-slider">
            <div class="item">
                <div class="work">
                    <div class="img img2 d-flex align-items-center js-fullheight" style="background-image: url(images/uuu.jpg);">
                        <div class="container-xl">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-7">
                                    <div class="text text-center mt-lg-5">
                                        <h1 class="mb-4">Build Your Better Future With Good Education</h1>
                                        <p class="mb-4">" learning with love and laughter "</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="work">
                    <div class="img d-flex align-items-center justify-content-center js-fullheight" style="background-image: url(images/sukulu.jpg);">
                        <div class="container-xl">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-7">
                                    <div class="text text-center mt-lg-5">
                                        <h1 class="mb-4">Make Your Childs World Better</h1>
                                        <p class="mb-4">" every child yearns to learn "</p>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-lg-6 order-lg-last heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">

                        <span class="subheading">About School</span>
                        <h2 class="mb-4">Many People Trusted Our Education For All</h2>
                        <p>G.S Rosa Mystica is an inclusive school of Bernardines Sisters aided by Government located in
                            Southern Province, Kamonyi District, Gacurabwenge Sector ,Nkingo cell ,Kamonyi Village, It
                            was started in 2008 in the period of “ Ecole Secondaire du District”, that is the reason
                            why......
                        </p>

                        <p class="mt-4"><a href="about.php" class="btn btn-primary py-3 px-4">Read More</a></p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services">
                                <img src="admin/images/skl6.png" alt="" width="70" style="border-radius: 50%;">

                                <div class="text">
                                    <h2>Nursery School </h2>
                                    <p class="mb-0">Pre-Nursery & Nursery, we have 111 boys and 121 girls, for students
                                        with
                                        disability are 10 for boys and 9 for girls, in general all students are 40. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services active">
                                <img src="admin/images/skl2.jpg" alt="" width="70" style="border-radius: 50%;">
                                <div class="text">
                                    <h2>Primary school</h2>
                                    <p class="mb-0">In Primary (P1-P6), we have 132 boys and 154 girls, for students
                                        with
                                        disability are 11 boys and 22 girls, in general all students are 319.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services">
                                <img src="admin/images/skl4.png" alt="" width="70" height="60" style="border-radius: 50%;">
                                <div class="text">
                                    <h2>Secondary School</h2>
                                    <p class="mb-0">In Secondary (S1-S3), we have 219 boys and 273 girls, for students
                                        with
                                        disability are 2 boys and 3 girls, in general all students are 497</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services">
                                <img src="admin/images/skl5.png" alt="" width="70" style="border-radius: 50%;">
                                <div class="text">
                                    <h2>Autism Special Unit</h2>
                                    <p class="mb-0">In Autism Special Unit, we have 2 boys and 6 girls, for students
                                        with
                                        disability are 2 boys and 6 girls, in general all students are 16</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- <section  style="height:0.5cm; background:#4f86f9">
     </section> -->

    <section class="ftco-section ftco-image img">


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/i.png">
                </div>
                <div class="col-md-6 heading-section" data-aos="fade-up" data-aos-duration="800">
                    <span class="subheading" style="margin-top: -45rem;">Headmistress Message</span>
                    <h2 class="mb-4">“Learning starts at birth and ends at death”</h2>
                    <p> G.S Rosa Mystica considers Inclusive Education and Special Needs Education
                        as a cornerstone pillar to achieve the Rwandan envisioned Education for all.
                        In this regards, the quality of inclusive Education and Special needs Education
                        is paramount to guarantee that Education for all is implemented effectively.
                        Since 2008, G.S Rosa Mystica Inclusive School started to implement inclusive and special needs
                        education. By experiences, the school confirms that Inclusive Education is a process where all
                        school members accept to be engaged and involved in continuous learning for performing the set
                        objectives as inclusive school! This as to model the saying that <b>“Learning starts at birth and
                            ends at death”!</b><br> All Education practices are centred on the learner’s needs and the learners
                        are the best trainers for all school members, (Teachers, peers, parents, administrative staff
                        and the community at large).<br>
                        In collaboration with all stakeholders, G.S Rosa Mystica expects to perform
                        inclusive education and special needs Education.

                    <h6 style="color:#4f86f9;">Sœur Marie Crescence UWARUREMA
                    </h6>Headmistress of G.S Rosa Mystica Inclusive School </p>
                    <a href="https://www.youtube.com/GS ROSA MYSTICA TV">

                        <span>Click here to Watch more event</span></a>
                </div>

            </div>
        </div>

        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <img src="images/mission.png" width="200" style="margin-top: -6rem;">
                </div>
            </div>

            <h2 class="text-center">Values</h2>

            <div class="row">
                <div class="col-lg-1">
                    <div style="width: 5rem;height: 5rem; border: 8px rgb(3, 8, 82) solid;padding-top:1rem;text-align: center;border-radius: 50%;">
                        1
                    </div>
                </div>
                <div class="col-lg-11">
                    <p>
                        Respect of God,Fraternity,Honesty,inclusiveness,Excellence,collaboration,
                        hardworking,respect of time, creativity and innovation help G.S Rosa Mystica
                        school members to provide inclusive and special needs Education through our
                        different options which are within our school such as : Pre-nursery, Nursery,
                        Primary, secondary, transitional class, Autism Special Unit and professional
                        orientation program for adults with special needs education..
                    </p>
                    <hr style="color: rgb(30, 77, 233);">
                    </col-lg-9>
                </div>

                <br><br>
                <h2 class="text-center">Vision</h2>

                <div class="row">
                    <div class="col-lg-1">
                        <div style="width: 5rem;height: 5rem; border: 8px rgb(241, 135, 13) solid;padding-top:1rem;text-align: center;border-radius: 50%;">
                            2
                        </div>
                    </div>
                    <div class="col-lg-11">
                        <p>
                            Rosa Mystica will be an excellent model school in Rwanda in teaching and learning of
                            students with special Needs Education where Respect of God , the respect of human dignity,
                            friendship, team work ,creativity ,parental involvement are the pillars of students
                            ‘Performance that lead to inclusive development.
                        </p>
                        <hr style="color: rgb(30, 77, 233);">
                        </col-lg-9>
                    </div>

                    <br><br>
                    <h2 class="text-center">Mission</h2>

                    <div class="row">
                        <div class="col-lg-1">
                            <div style="width: 5rem;height: 5rem; border: 8px rgb(3, 8, 82) solid;padding-top:1rem;text-align: center;border-radius: 50%;">
                                1
                            </div>
                        </div>
                        <div class="col-lg-11">
                            <p>
                                Rosa Mystica contributes to education for all by promoting Special Needs Education in
                                developing the existing talent for every student and delivering equal opportunities to all
                                children especially some with Special Needs Education and creating a Learning Family School.
                            </p>
                            <hr style="color: rgb(30, 77, 233);">
                            </col-lg-9>
                        </div>

                        <br><br>


                    </div>
                    <br>

    </section>
    <section class="ftco-gallery ftco-no-pb ftco-section">
        <div class="container-xl-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Recent photo</span>
                    <h2 class="mb-4">"learning with love and laughter"</h2>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <a href="images/skul1.jpg" class="gallery-wrap img d-flex align-items-end justify-content-center glightbox" style="background-image: url(images/skl411.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">Students</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <a href="images/skul2.jpg" class="gallery-wrap img d-flex align-items-end justify-content-center glightbox" style="background-image: url(images/skul2.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">Classrooms</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <a href="images/5.jpg" class="gallery-wrap img d-flex align-items-end justify-content-center glightbox" style="background-image: url(images/skl3.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">Transport</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <a href="images/4.jpg" class="gallery-wrap img d-flex align-items-end justify-content-center glightbox" style="background-image: url(images/skl5.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">School As Family</h2>
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
    <section class="ftco-section testimony-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">PREFERES</span>
                    <h2 class="mb-5">Happy Students</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">

                                <div class="text">
                                    <p class="mb-4">The best school i've seen, wonderful climate, Good teaching, keep
                                        winning forward.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(admin/images/skl4.png)"></div>
                                        <div class="ps-3">
                                            <p class="name">Uwimana Aurore</p>
                                            <span class="position">Student in senior 1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">

                                <div class="text">
                                    <p class="mb-4">Everyone in our school we support his/her talent in all different
                                        kinds of talents.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(admin/images/skl4.png)"></div>
                                        <div class="ps-3">
                                            <p class="name">TUYIZERE Daniel</p>
                                            <span class="position">Student in Primary 4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">

                                <div class="text">
                                    <p class="mb-4">Everyone in our school we support his/her talent in all different
                                        kinds of talents.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(admin/upload/images/c.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">H.Cedrek</p>
                                            <span class="position">Student in senior 2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">

                                <div class="text">
                                    <p class="mb-4">Everyone in our school we support his/her talent in all different
                                        kinds of talents.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(admin/upload/images/e.jpeg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Rene Senceri</p>
                                            <span class="position">Student in Nursery </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">

                                <div class="text">
                                    <p class="mb-4">Everyone in our school we support his/her talent in all different
                                        kinds of talents.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(admin/upload/images/d.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Alain Tresor</p>
                                            <span class="position">Student with disability</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro-2 img" style="background-image: url(images/skl.jpg);">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-10">
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-md-8 d-flex align-items-center">
                            <div>
                                <span class="subheading">Your Voice Is Our Priority</span>
                                <h1 class="mb-md-0 mb-4">We're open for any suggestion or just to have a chat</h1>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                            <p class="mb-0"><a href="contact.php" class="btn btn-white py-md-4 py-3 px-md-5 px-4">Get
                                    Started</a>
                            </p>
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