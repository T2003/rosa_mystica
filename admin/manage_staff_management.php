<?php
require('top.inc.php');
isAdmin();
$names = '';
$phone = '';
$email = '';
$gender = '';
$position = '';
$image = '';

$msg = '';


if (isset($_POST['submit'])) {
    $names = get_safe_value($con, $_POST['names']);
    $phone = get_safe_value($con, $_POST['phone']);
    $email = get_safe_value($con, $_POST['email']);
    $gender = get_safe_value($con, $_POST['gender']);
    $position = get_safe_value($con, $_POST['position']);

    if (isset($_GET['id']) && $_GET['id'] != '') {
    } else {
        $sel = mysqli_query($con, "SELECT * FROM staff");
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
            $done = mysqli_query($con, "INSERT INTO `staff` (`id`, `names`, `gender`, `position`, `email`, `phone`, `picture`) VALUES (NULL, '$names', '$gender', '$position', '$email', '$phone', '$image');");
            if ($done) {
                $isUploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $imageName);
            }
            if (!$done)  $msg = "Error: " . mysqli_error($con);
        }
        header('location:staff_management.php');
        die();
    }
}

?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>ADD NEW STAFF MEMBER</strong><small> </small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">


                            <div class="form-group">
                                <label for="name" class=" form-control-label">Names</label>
                                <input type="text" name="names" class="form-control" required value="<?php echo $names ?>" placeholder="Enter full name">
                            </div>

                            <div class="form-group">
                                <label for="position" class=" form-control-label">position</label>
                                <select name="position" class="form-control" required>

                                    <option>Head Teacher Of The School</option>
                                    <option>Representative Of Bernardines Sisters</option>
                                    <option>Dean of Studies and Discpline</option>
                                    <option>Accountant Of The School</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gender" class=" form-control-label">Gender</label>
                                <select type="text" class="form-control" name="gender" required placeholder="Enter district stadium located in">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>

                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="homeTeam" class=" form-control-label">Email </label>
                                <input type="Email" class="form-control" name="email" value="<?php echo $email ?>" required placeholder="Enter Email ">
                            </div>

                            <div class="form-group">
                                <label for="homeTeam" class=" form-control-label">Phone Number</label>
                                <input type="number" class="form-control" name="phone" value="<?php echo $phone ?>" required placeholder="Enter phone number ">
                            </div>

                            <div class="form-group">
                                <label for="homeTeam" class=" form-control-label">Picture</label>
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