<?php
require_once("connection.php");

$data = mysqli_query($connect, "SELECT * FROM `blogs` WHERE `id`='{$_GET['id']}'");
$res = mysqli_fetch_array($data);

$commentSql = mysqli_query($connect, "SELECT * FROM `post_comments` WHERE `post_id`='{$_GET['id']}' ORDER BY `post_comments`.`id` DESC;");


if (isset($_POST['submit'])) {
    $name = $_POST['userName'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $date = date("D, M d Y h:i a");

    $sql = "INSERT INTO `post_comments` (`id`, `post_id`, `name`, `email`, `comment`, `date`) VALUES (NULL, '{$_GET['id']}', '$name', '$email', '$comment', '$date');";
    $done = mysqli_query($connect, $sql);

    if ($done) {
        ?>
        <script>
            alert("Thank you for your feedback")
        </script>
        <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rose Mystica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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
            height: 200px;
            /* Set a default height for the cover image */
            object-fit: cover;
            /* Ensure the image covers the entire space */
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

        .background-division img {
            background-size: cover;
            background-position: center;
            height: 35rem;
            border-radius: 7px;
            /* Text color */
        }

        .ftco-section {
            margin-bottom: 1cm;
            /* Reduce the space between sections */
        }

        .comment-section {
            padding: 2cm;
            margin-bottom: 1cm;
            /* Reduce the space between sections */
        }

        .comment-section h3 {
            margin-bottom: 20px;
        }

        .comment-section form {
            max-width: 600px;
        }

        .comment-section form .form-label {
            font-weight: bold;
        }

        .comment-section form .form-control {
            margin-bottom: 15px;
        }

        .comment-section form .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .comment-section form .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* display comments css */
        .comments-section {
            padding: 20px;
            background-color: #f9f9f9;
        }

        .comment {
            display: flex;
            margin-bottom: 20px;
        }

        /* .profile-pic {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
} */

        .comment-content {
            flex-grow: 1;
        }

        .comment-header {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .comment-header strong {
            font-weight: bold;
            margin-right: 5px;
        }

        .comment-date {
            color: #606060;
            font-size: 0.8em;
        }

        .comment-content p {
            margin: 0;
            margin-bottom: 5px;
        }

        .comment-actions button {
            background-color: transparent;
            border: none;
            color: #606060;
            cursor: pointer;
            margin-right: 10px;
        }

        .comment-actions button:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body style="background-color: #ffffff;">

    <?php
    include('menu.php');

    ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/single.jpg'); height: 7.4cm ">

        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <h2 style="padding: 6em; color:white">Single |
                        <a href="blog.php" class="blog-link" style="font-size:19px">All blog</a>
                    </h2>
                </div>
            </div>
    </section>
    <section class="ftco-gallery ftco-no-pb ftco-section"
        style="background-color: white;padding: 2cm;margin-bottom: 2cm;">
        <div class="container-xl-fluid">
            <h2><b>
                    <?php echo $res[1] ?>
                </b></h2>
            <div class="background-division">
                <img src="admin/<?php echo $res[3] ?>" alt="" srcset="">
            </div><br>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>
                            <?php echo $res[2] ?>
                        </p>
                        <hr>
                        <p><a href="">Like</a> | <a href="">Unlike</a> | <a href="">Share</a> | <a href="">GS ROSA
                                MYSTICA Kamonyi</a></p>
                        <hr>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="comments-section">
        <div class="container">
            <h3>Comments</h3>
            <?php
            while ($row = mysqli_fetch_array($commentSql)) {
                ?>
                <div class="comment">
                    <div class="comment-content">
                        <div class="comment-header">
                            <strong>
                                <?php echo $row[2] ?>
                            </strong>
                            <span class="comment-date">
                                <?php echo $row[5] ?>
                            </span>
                        </div>
                        <p>
                            <?php echo $row[4] ?>
                        </p>
                        <div class="comment-actions">
                            <button class="like-btn">Like</button>
                            <button class="reply-btn">Reply</button>
                        </div>
                    </div>
                </div>
                <hr>
            <?php } ?>
            <!-- More comments can be added here -->
        </div>
    </section>
    <!-- Leaving Comments Section -->
    <section class="comment-section">
        <div class="container">
            <h3>Leave a Comment</h3>
            <form method="post">
                <div class="mb-3">
                    <label for="nameInput" class="form-label">Name</label>
                    <input type="text" name="userName" require class="form-control" id="nameInput"
                        placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="emailInput" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="emailInput" name="email" require
                        aria-describedby="emailHelp" placeholder="Enter your email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="commentTextarea" class="form-label">Comment</label>
                    <textarea class="form-control" name="comment" id="commentTextarea" rows="3"
                        placeholder="Enter your comment"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
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
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
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
        document.addEventListener('DOMContentLoaded', function () {
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
            updatedElement.forEach(function (element) {
                element.textContent = updatedDate;
            });
        });
    </script>
</body>

</html>