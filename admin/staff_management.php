<?php
require('top.inc.php');
isAdmin();
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);

    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $imageUrl = mysqli_fetch_array(mysqli_query($con, "SELECT `picture` from `staff` WHERE `id`='$id'"));
        $delete_sql = "DELETE from `staff` WHERE `id`='$id'";
        $file_to_delete = $imageUrl[0];
        unlink($file_to_delete);
        mysqli_query($con, $delete_sql);
    }
}

$sql = "select * from staff";
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
                                <h4 class="box-title">STAFF MANAGEMENT </h4>
                            </div>
                            <div class="col-lg-6 " style="text-align: right;">
                                <h4 class="box-link"><a href="manage_staff_management.php">ADD STAFF MEMBER</a> </h4>

                            </div>
                        </div>


                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th width="30%">Names</th>
                                        <th width="30%">Position</th>
                                        <th width="15%">Emails</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $i = 0;
                                    if (mysqli_num_rows($res)) {
                                        while ($row = mysqli_fetch_array($res)) {
                                            $i++;
                                    ?>
                                            <tr>
                                                <td class="serial"><?php echo $i ?></td>
                                                <td><?php echo $row[1] ?></td>
                                                <td><?php echo $row[3] ?></td>
                                                <td><?php echo $row[4] ?></td>
                                                <td class="d-flex justify-contant-between"><a href="view_staff_member.php?id=<?php echo $row[0] ?>"><button class="btn btn-primary">View</button></a> &nbsp;&nbsp; <a href='?type=delete&id=<?php echo $row[0] ?>'><button class="btn btn-danger">Detele</button></a>
                                                    <!-- &nbsp;&nbsp;
                                                    <button class="btn btn-saccuss">Modify</button> -->
                                                </td>

                                            </tr>
                                        <?php
                                        }
                                    } else { ?>
                                        <p class="warning text-center"></p>
                                    <?php
                                    }
                                    ?>


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