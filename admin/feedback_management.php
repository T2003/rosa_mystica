<?php
require('top.inc.php');
isAdmin();
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);

    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE FROM `comments` WHERE `id`='$id'";
        mysqli_query($con, $delete_sql);
    }
}

$sql = "select * from comments";
$res = mysqli_query($con, $sql);
?>
<link rel="stylesheet" href="assets/css/feedback.css">
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h4 class="box-title">FEEDBACK MANAGEMENT </h4>
                            </div>

                        </div>


                    </div>
                    <div class="card-body--">

                        <?php
                        if (mysqli_num_rows($res)) {
                            while ($row = mysqli_fetch_array($res)) {
                        ?>
                                <div class="message">
                                    <div class="row">
                                        <h4 class="col-sm-6"><?php echo $row[1] ?></h4>
                                        <small class="col-sm-6 text-right"><?php echo $row[5] ?></small>
                                    </div>
                                    <p><?php echo $row[3] ?></p>
                                    <p><?php echo $row[4] ?></p>
                                    <div style="display: flex; align-items:justify;">

                                        <a type="submit" class="btn btn-info btn-sm" href="mailto:<?php echo $row[2] ?>">

                                            Reply
                                        </a>

                                        &nbsp;
                                        <a href='?type=delete&id=<?php echo $row[0] ?>'>
                                            <button class="d-flex btn btn-danger btn-sm">

                                                Delete
                                            </button>
                                        </a>
                                    </div>
                                </div>

                        <?php
                            }
                        } else {
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php');
?>