<?php
require('top.inc.php');
$sql = "SELECT * FROM `statistic`";
$res = mysqli_query($con, $sql);
$data = mysqli_fetch_array($res);

$blogSql="SELECT * FROM `blogs` WHERE `category`='blog' ORDER BY `blogs`.`id` DESC LIMIT 3;";
$blogRes=mysqli_query($con,$blogSql);
?>
<style>
	#dashbroad-card {
		border: 2px solid#121c20;
		/* width: 80%; */
	}
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
<div class="content pb-0" style="background:white">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4><b>DASHBOARD</b> </h4><p></p>
						<p><h5><b>Hi, Welcome Back Admin!!!</b><br> Lorem ipsum dolor sit amet, 
						consectetur adipiscing elit. Hac potenti nunc nibh
						 a faucibus rhoncus. Ipsum gravida ut 
                          mattis in euismod enim id netus porttitor. Scelerisque quisque 
                            augue congue ipsum feugiat. Dui lorem sit nullam </h5></p>
						<hr>
					</div>

					<div class="row text-center">
						<div class="col-lg-4">
							<div id="dashbroad-card" style="height:6.3cm">
								<img src="images/skl6.png" alt="" width="130">

								<h3>Nursery Students: <b><br><?php echo $data['nursery'] ?></b> </h3>
							</div>

						</div>
						<div class="col-lg-4">
							<div id="dashbroad-card" style="height:6.3cm">
								<img src="images/skl2.jpg" alt="" width="130" style="margin-top: 0rem;">

								<h3>Primary Students: <b><br> <?php echo $data['primary'] ?></b></h3>
							</div>
						</div>
						<div class="col-lg-4">
							<div id="dashbroad-card" style="height:6.3cm">
								<img src="images/skl1.png" alt="" width="155" style="margin-top: 3rem;">

								<h3>Secondary Students: <b><br><?php echo $data['secondary'] ?></b></h3>
							</div>
						</div>
					</div>
					<br><br><br>
					<div class="row text-center">
						<div class="col-lg-4">
							<div id="dashbroad-card" style="height:6.3cm">
								<img src="images/skl5.png" alt="" width="130">

								<h3>Students with Disability: <b><br><?php echo $data['with_disability'] ?></b></h3>
							</div>
						</div>
						<div class="col-lg-4">
							<div id="dashbroad-card" style="height:6.3cm">
								<img src="images/skl7.png" alt="" width="130">

								<h3>Teachers: <b><br><?php echo $data['teacher'] ?></b></h3>
							</div>
						</div>
						<div class="col-lg-4">
							<div id="dashbroad-card" style="height:6.3cm">
								<img src="images/skl4.png" alt="" width="155">
								<h3>School Staff: <b><br><?php echo $data['staff'] ?></b></h3>
							</div>
						</div>
					</div>

					<br><br>
				</div>
				<section class="ftco-gallery ftco-no-pb ftco-section" style="background-color: white;padding:0.5cm;margin-bottom: 0.5cm;">
    <div class="container-xl-fluid">
        <h2>Recent events</h2>
        <!-- <p>Welcome to GS ROSA MYSTICA 's Official Blog! Stay updated with the latest news, events, and 
 achievements of our vibrant school community. Explore insightful articles, student spotlights, 
 and faculty features. Join us on our journey of learning, growth, and excellence!</p> -->
        <div class="row g-4"> <!-- Added g-4 class for spacing between columns -->
            <!-- Blog Card 1 -->
            <?php
            while($row=mysqli_fetch_array($blogRes)){
             ?>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <a href="../single_blog_page.php?id=<?php echo $row[0] ?>" class="blog-link">
                    <div class="blog-card">
                        <div class="blog-cover">
                            <img src="<?php echo $row[3] ?>" alt="<?php echo $row[1] ?>">
                        </div>
                        <div class="blog-details">
                            <h2><?php echo $row[1] ?></h2>
                            <p><?php if(strlen($row[2])>100)  echo substr($row[2], 0, 100) . '...';else echo $row[2]?></p>
                            <hr class="separator">
                            <p class=""><?php echo $row[4] ?></p>
                        </div>
                    </div>
            </div>
            <?php } ?>

        </div>
    </div>
   </section>
			</div>
		</div>
	</div><hr>
</div>
<script>
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
<?php
require('footer.inc.php');
?>