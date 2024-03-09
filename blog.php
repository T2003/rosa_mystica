<?php
require_once("connection.php");

$blogSql="SELECT * FROM `blogs` WHERE `category`='blog' ORDER BY `blogs`.`id` DESC";
$blogRes=mysqli_query($connect,$blogSql);

$eventSql="SELECT * FROM `blogs` WHERE `category`='event' ORDER BY `blogs`.`id` DESC";
$eventRes=mysqli_query($connect,$eventSql);
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
    <style>
  .ftco-gallery h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.ftco-gallery p {
    font-size: 16px;
    color: #666;
    margin-bottom: 30px;
}

.blog-card {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    height: 100%;
    transition: transform 0.3s;
}

.blog-card:hover {
    transform: translateY(-5px);
}

.blog-cover img {
    width: 100%;
    height: 200px; /* Set a default height for the cover image */
    object-fit: cover; /* Ensure the image covers the entire space */
    border-radius: 8px;
    margin-bottom: 10px;
}

.blog-details h2 {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
}

.blog-details p {
    font-size: 16px;
    color: #666;
    margin-bottom: 10px;
}

.separator {
    border-top: 1px solid #ccc;
    margin: 10px 0;
}

.blog-details .updated {
    font-style: italic;
    color: #999;
    font-size: 14px;
}

.blog-link {
    text-decoration: none;
    color: inherit;
}

.blog-link:hover .blog-details h2 {
    color: #007bff;
}
    </style>
</head>

<body style="background-color: #ffffff;">

    <?php
    include('menu.php');

    ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/w.jpg'); height:11.4cm">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <h1 style="padding:3cm">School Blog</h1>
                </div>
            </div>
    </section>
<section class="ftco-gallery ftco-no-pb ftco-section" style="background-color: white;padding: 2cm;margin-bottom: 2cm;">
    <div class="container-xl-fluid">
        <h2>Recent events</h2>
        <p>Welcome to GS ROSA MYSTICA 's Official Blog! Stay updated with the latest news, events, and 
 achievements of our vibrant school community. Explore insightful articles, student spotlights, 
 and faculty features. Join us on our journey of learning, growth, and excellence!</p>
        <div class="row g-4"> <!-- Added g-4 class for spacing between columns -->
            <!-- Blog Card 1 -->
    <?php
            while($row=mysqli_fetch_array($blogRes)){
             ?>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <a href="single_blog_page.php?id=<?php echo $row[0] ?>" class="blog-link">
                    <div class="blog-card">
                        <div class="blog-cover">
                            <img src="admin/<?php echo $row[3] ?>" alt="<?php echo $row[1] ?>">
                        </div>
                        <div class="blog-details">
                           <h2><?php echo $row[1] ?></h2>
                           <p><?php if(strlen($row[2])>100)  echo substr($row[2], 0, 100) . '...';else echo $row[2]?></p>
                            <hr class="separator">
                            <p class="updated"></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>

           

        </div>
    </div>
</section>
<!-- upcoming events -->
<section class="ftco-gallery ftco-no-pb ftco-section" style="background-color: white;padding: 2cm;margin-bottom: 2cm;" id="event">
    <div class="container-xl-fluid">
        <h2>Upcoming events</h2>
        <p>Stay tuned for upcoming events at GS ROSA MYSTICA. Don't miss out on exciting opportunities and activities. Join us as we make memorable moments together!</p>
        <div class="row g-4"> <!-- Added g-4 class for spacing between columns -->
            <!-- Blog Card 1 -->
            <?php
            while($row=mysqli_fetch_array($eventRes)){
             ?>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="blog-card">
                        <div class="blog-cover">
                             <img src="admin/<?php echo $row[3] ?>" alt="<?php echo $row[1] ?>">
                        </div>
                        <div class="blog-details">
                             <h2><?php echo $row[1] ?></h2>
                           <p><?php if(strlen($row[2])>100)  echo substr($row[2], 0, 100) . '...';else echo $row[2]?></p>
                            <hr class="separator">
                            <p class="updated"></p>
                        </div>
                    </div>
            </div>
            <?php } ?>
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
      document.addEventListener('DOMContentLoaded', function() {
    var date = new Date();
    var options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
        second: 'numeric',
        hour12: false
    };
    var updatedDate = date.toLocaleDateString('en-US', options).replace(/,/g, '|');
    var updatedElement = document.querySelectorAll('.updated');
    updatedElement.forEach(function(element) {
        element.textContent = updatedDate;
    });
});
    </script>
</body>

</html>