<?php
require_once("connection.php");
$query = mysqli_query($connect, "select * from announcements");

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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/we.jpg');height:11cm">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <h1 style="padding:3cm">Announcements</h1>
                </div>
            </div>
    </section>





    <section class="ftco-section">
        <div class="container">
            <div class="row" style="margin-top: -5rem;">
                <div class="col-md-4 d-none d-md-block">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2FGSRosa-Mystica-Inclusive-School-Kamonyi-473835673002742&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="500" style="border:none;overflow:hidden;" scrolling="1" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                </div>
                <div class="col-md-5">

                    <?php
                    if (mysqli_num_rows($query)) {
                        while ($row = mysqli_fetch_array($query)) {
                    ?>

                            <a href="admin/<?php echo $row[2] ?>">
                                <p class="d-flex"><span class="text-link"><?php echo $row[3] ?></span>&nbsp;&nbsp;<span><?php echo $row[1] ?></span></p>
                            </a>
                        <?php
                        }
                    } else {
                        ?>
                        <p class="warning text-center">
                            No Announcement Found
                        </p>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-3">

                    <a class="twitter-timeline" data-height="450" href="https://twitter.com/mystica_kamonyi?ref_src=twsrc%5Etfw">Tweets by mystica_kamonyi</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                </div>
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
                                <span class="subheading">Disability is not inability</span>

                                <h1 class="mb-md-0 mb-4" style="text-align: justify; line-height:2rem ;">
                                    Help the needy people, save the whole world. Early intervention is the pillar of inclusiveness. </h1>

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