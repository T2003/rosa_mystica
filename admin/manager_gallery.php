<?php
require('top.inc.php');
isAdmin();
$msg = '';
$date = date("d/m/Y");

if (isset($_POST['submit'])) {

    $title = get_safe_value($con, $_POST['title']);
    // $num = mysqli_num_rows($sel);
    $fileName =  $_FILES['image']['name'];
    $file = "upload/images/gallery/" . $fileName;
    $target_dir = "upload/images/gallery/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Select file type
    $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("png", "jpg", "jpeg");
    if (!in_array($FileType, $extensions_arr)) {
        $msg = "Please select image file";
    }



    if ($msg == '') {

        if (isset($_GET['id']) && $_GET['id'] != '') {
            $update_sql = "update announcements set title='$title' where id='$id'";
            mysqli_query($con, $update_sql);
        } else {
            // Check extension

            $done = mysqli_query($con, "INSERT INTO `gallery` (`id`, `date`, `caption`, `image`) VALUES (NULL, '$date', '$title', '$file');");
            if ($done) {

                $isUploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $fileName);
            }
        }
        header('location:gallery.php');
        die();
    }
}

?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>UPLOAD PICTURE</strong><small> </small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">


                            <div class="form-group">
                                <label for="name" class=" form-control-label">Insert Caption</label>
                                <input type="text" name="title" class="form-control" required value="<?php //echo $names 
                                                                                                        ?>" placeholder="Enter photo caption">
                            </div>

                            <div class="form-group">
                                <label for="homeTeam" class=" form-control-label"> Upload Picture</label>
                                <input type="file" class="form-control" name="image" value="<?php echo $image ?>" required>
                            </div>

                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">SUBMIT</span>
                            </button>
                            <div class="field_error"><?php echo $msg ?></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
require('footer.inc.php');
?>