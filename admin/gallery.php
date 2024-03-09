<?php
require('top.inc.php');
isAdmin();
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);

    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $fileUrl = mysqli_fetch_array(mysqli_query($con, "SELECT `image` from `gallery` WHERE `id`='$id'"));
        $delete_sql = "DELETE FROM `gallery` WHERE `id`='$id'";
        $file_to_delete = $fileUrl[0];
        unlink($file_to_delete);
        mysqli_query($con, $delete_sql);
    }
}

$sql = "SELECT * FROM `gallery`";
$res = mysqli_query($con, $sql);
?>

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="box-title">UPLOAD GALLERY </h4>
                            </div>
                            <div class="col-lg-6 " style="text-align: right;">
                                <h4 class="box-link"><a href="manager_gallery.php">ADD PICTURE</a> </h4>

                            </div>
                        </div>


                    </div>
                    <div class="card-body--">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php');
?>