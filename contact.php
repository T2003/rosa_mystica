<?php
require_once('connection.php');
if (isset($_POST['sent'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $date = date("d-M-Y");
    $time = date("");

    $query = "INSERT INTO `comments` (`id`, `name`, `email`, `subject`, `message`, `date`, `time`) VALUES (NULL, '$name', '$email', '$subject', '$message', '$date', '$time');";
    $done = mysqli_query($connect, "$query");
    if ($done) {
?>
        <script>
            alert("Thank you for your feedback.")
        </script>
<?php
    } else {
        echo "Error" . mysqli_error($connect);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rosa Mystica</title>
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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/cont.jpg');height:9cm">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-10">
                    <div class="wrapper">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 id="feedback">Get in touch</h3>
                                    <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Address:</span> Kamonyi - South, RWANDA<br> P.O Box 377
                                                        KIGALI
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Email:<br>
                                                            <p>mysticakam@gmail.com</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Mobile number:</span> <a href="tel://+250783279374">(+250)783279374</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="contactForm" name="contactForm" class="contactForm" method="post">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Create a message here" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary" name="sent">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="w-100 social-media mt-5">
                                        <h3>Follow us here</h3>
                                        <p>
                                            <a href="#" onclick="window.open('https://www.facebook.com/GSRosa-Mystica-Inclusive-School-Kamonyi-473835673002742')">Facebook</a>
                                            <a href="#" onclick="window.open('https://twitter.com/mystica_kamonyi')">Twitter</a>

                                        </p>
                                    </div>
                                    <div>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.361789949532!2d29.905180514606897!3d-2.0106867985341843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dcb142522be1c1%3A0xb7736a4cc179f87a!2sG.S.%20Rosa%20Mystica!5e0!3m2!1sen!2srw!4v1622878767004!5m2!1sen!2srw" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 d-flex align-items-stretch">
                                <div class="bg-white">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.361789949532!2d29.905180514606897!3d-2.0106867985341843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dcb142522be1c1%3A0xb7736a4cc179f87a!2sG.S.%20Rosa%20Mystica!5e0!3m2!1sen!2srw!4v1622878767004!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div> -->
                        </div>
                    </div>
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
                                <span class="subheading">G.S Rosa Mystica is our learning family!</span>
                                <h1 class="mb-md-0 mb-4">Involve wider community for inclusive development.</h1>
                            </div>
                        </div>
                        <!-- <div class="col-md-4 d-flex align-items-center">
                            <p class="mb-0"><a class="btn btn-white py-md-4 py-3 px-md-5 px-4">WELCOME</a>
                            </p>
                        </div> -->
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