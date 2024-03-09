<?php

require('top.inc.php');

isAdmin();
$title = "";
$file = "";
$msg = "";
$date = date("d/m/Y");
$time = date("G:i a");

if (isset($_GET['id']) && $_GET['id'] != '') {

    $image_required = '';
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "select * from announcements where id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $title = $row['title'];
    } else {
        header('location:teams_management.php');
        die();
    }
}

if (isset($_POST['submit'])) {

    $title = get_safe_value($con, $_POST['title']);

    if (isset($_GET['id']) && $_GET['id'] != '') {
    } else {
        $sel = mysqli_query($con, "SELECT * FROM announcements");
        $num = mysqli_num_rows($sel);
        $fileName =  $_FILES['file']['name'] . '_' . $num;
        $file = "upload/files/" . $fileName;
        $target_dir = "upload/files/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("pdf");
        if (!in_array($FileType, $extensions_arr)) {
            $msg = "Please select pdf file";
        }
    }

    // $res = mysqli_query($con, "select * from teams where name='$name'");
    // $check = mysqli_num_rows($res);
    // if ($check > 0) {
    //     if (isset($_GET['id']) && $_GET['id'] != '') {
    //         $getData = mysqli_fetch_assoc($res);
    //         if ($id == $getData['id']) {
    //         } else {
    //             $msg = "Team already exist";
    //         }
    //     } else {
    //         $msg = "Team already exist";
    //     }
    // }


    if ($msg == '') {

        if (isset($_GET['id']) && $_GET['id'] != '') {
            $update_sql = "update announcements set title='$title' where id='$id'";
            mysqli_query($con, $update_sql);
        } else {
            // Check extension

            $done = mysqli_query($con, "INSERT INTO `announcements` (`id`, `title`, `body`, `date`, `time`) VALUES (NULL, '$title', '$file', '$date', '$time');");
            if ($done) {

                $isUploaded = move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $fileName);
            }
        }
        header('location:announcement_management.php');
        die();
    }
}

?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>MAKE NEW ANNOUNCEMENT</strong><small> </small></div>
                    <form method="post" action="#" enctype="multipart/form-data">
                        <div class="card-body card-block">

                            <div class="form-group">
                                <label for="date" class=" form-control-label">Title</label>
                                <input type="text" name="title" placeholder="announcement title goes here" class="form-control" required value="<?php echo $title ?>">
                            </div>
                            <?php if (!isset($_GET['id'])) {
                            ?>
                                <div class="form-group">
                                    <label for="file" class=" form-control-label">Upload announcement</label>
                                    <input type="file" name="file" class="form-control" required value="<?php echo $division ?>">
                                </div>
                            <?php
                            }
                            ?>



                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">
                                    <?php if (isset($_GET['id'])) {
                                    ?>
                                        UPDATE
                                    <?php
                                    } else {
                                    ?> UPLOAD
                                    <?php
                                    } ?>
                                </span>
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