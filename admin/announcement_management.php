<?php
require('top.inc.php');
isAdmin();
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);

    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $fileUrl = mysqli_fetch_array(mysqli_query($con, "SELECT `body` from `announcements` WHERE `id`='$id'"));
        $delete_sql = "DELETE FROM `announcements` WHERE `id`='$id'";
        $file_to_delete = $fileUrl[0];
        unlink($file_to_delete);
        mysqli_query($con, $delete_sql);
    }
}

$sql = "SELECT * FROM `announcements`";
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
                                <h4 class="box-title">ANNOUNCEMENT MANAGEMENT </h4>
                            </div>
                            <div class="col-lg-6 " style="text-align: right;">
                                <h4 class="box-link"><a href="manage_announcements.php">MAKE ANNOUNCEMENT</a> </h4>

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
                                        <th width="10%">Time</th>
                                        <th width="60%">Title</th>
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
                                            <td><?php echo $row[3] ?></td>
                                            <td><?php echo $row[4] ?></td>
                                            <td><?php echo $row[1] ?></td>
                                            <td class="d-flex justify-contant-between"><a href="<?php echo $row[2] ?>"><button class="btn btn-primary">View</button></a>&nbsp;&nbsp; <a href='?type=delete&id=<?php echo $row[0] ?>'><button class="btn btn-danger">Detele</button></a>&nbsp;&nbsp;
                                                <a href="manage_announcements.php?id=<?php echo $row[0] ?>"> <button class="btn btn-saccuss">Modify</button></a>
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