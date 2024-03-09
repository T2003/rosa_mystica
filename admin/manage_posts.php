<?php
require('top.inc.php');
isAdmin();
$category="";
$title="";
$description="";
$image="";

if(isset($_POST["save"])){
    $category=get_safe_value($con,$_POST['category']);
    $title=get_safe_value($con,$_POST['title']);
    $description=get_safe_value($con,$_POST['description']);
    $image='';
    $date=date("Y-m-d h:i:sa");

     if (isset($_GET['id']) && $_GET['id'] != '') {

    } else {
        $sel = mysqli_query($con, "SELECT * FROM blogs");
        $num = mysqli_num_rows($sel);
        $imageName =   $num . '_' . $_FILES['image']['name'];
        $image = "upload/images/" . $imageName;

        $target_dir = "upload/images/";
        $target_image = $target_dir . basename($_FILES["image"]["name"]);

        // Select image type
        $imageType = strtolower(pathinfo($target_image, PATHINFO_EXTENSION));

        // Valid image extensions
        $extensions_arr = array("png", "jpg", "jpeg");
        if (!in_array($imageType, $extensions_arr)) {
            $msg = "Please select real image";
        }
    }

    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {


            if (!$done)  $msg = "Error: " . mysqli_error($con);
        } else {
            $sql="INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `date`, `category`) VALUES (NULL, '$title', '$description', '$image', '$date', '$category');";
            $done = mysqli_query($con, "$sql");
            if ($done) {
                $isUploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $imageName);
            }
            if (!$done)  $msg = "Error: " . mysqli_error($con);
        }
        header('location:posts_management.php');
        die();
    }
}

?>

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <!-- <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="box-title">UPLOAD GALLERY </h4>
                            </div>
                            <div class="col-lg-6 " style="text-align: right;">
                                <h4 class="box-link"><a href="manager_gallery.php">ADD PICTURE</a> </h4>

                            </div>
                        </div>


                    </div> -->
                    <section class="comment-section">
    <div class="container"><br>
                <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="box-title">MAKE NEW POST </h4>
                            </div>
                           
                        </div>

<hr>
                    </div>
        
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nameInput" class="form-label">Category</label>
                <select name="category" id="" class="form-control">
                    <option value="blog">Blog Post</option>
                    <option value="event">Upcoming event</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nameInput" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="nameInput" placeholder="Enter Post Title">
            </div>
            <div class="mb-3">
                <label for="commentTextarea" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="commentTextarea" rows="3" placeholder="Enter Post Description"></textarea>
            </div>
            <div class="mb-3">
                <label for="fileInput" class="form-label">Add Cover Photo</label>
                <input type="file" name="image" class="form-control" id="fileInput"  placeholder="No Chosen Photo">
            </div>
            <button type="submit" class="btn btn-primary" name="save">Submit</button>
        </form>
    </div><br>
</section>
                    <!-- <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th width="15%">Date</th>
                                        <th width="60%">Caption</th>
                                        <th width="15%">Options</th>

                                    </tr>
                                </thead>
                                <?php
                                $i = 0;

                                if (mysqli_num_rows(mysqli_query($con, $sql))) {
                                    while ($row = mysqli_fetch_array($res)) {
                                        $i++;
                                ?>

                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $row[1] ?></td>
                                            <td><?php echo $row[2] ?></td>
                                            <td class="d-flex justify-contant-between"><a target="_blank" href="<?php echo $row[3] ?>"><button class="btn btn-primary">View</button></a>&nbsp;&nbsp; <a href='?type=delete&id=<?php echo $row[0] ?>'><button class="btn btn-danger">Detele</button></a>&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <p class="warning text-center">
                                        No dat found!
                                    </p>
                                <?php
                                }
                                ?>


                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php');
?>