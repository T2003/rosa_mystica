<?php
require('top.inc.php');
isAdmin();
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);

    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $imageUrl = mysqli_fetch_array(mysqli_query($con, "SELECT `image` from `blogs` WHERE `id`='$id'"));
        $delete_sql = "DELETE from `blogs` WHERE `id`='$id'";
        $file_to_delete = $imageUrl[0];
        unlink($file_to_delete);
        mysqli_query($con, $delete_sql);
        header('location:posts_management.php');
    }
}

$sql = "select * from blogs";
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
                                <h4 class="box-title">BLOG MANAGEMENT </h4>
                            </div>
                            <div class="col-lg-6 " style="text-align: right;">
                                <h4 class="box-link"><a href="manage_posts.php">ADD POST</a> </h4>

                            </div>
                        </div>


                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th width="30%">Date</th>
                                        <th width="30%">Title</th>
                                        <th width="15%">Category</th>
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
                                                <td class="serial">
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $row[4] ?>
                                                </td>
                                                <td>
                                                    <?php if (strlen($row[1]) > 100)
                                                        echo substr($row[1], 0, 100) . '...';
                                                    else
                                                        echo $row[1] ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row[5] ?>
                                                </td>
                                                <td class="d-flex justify-contant-between"><a href='<?php if ($row[5] === 'blog')
                                                    echo "../single_blog_page.php?id=$row[0]";
                                                else
                                                    echo "../gallery.php#event"; ?>'><button
                                                            class="btn btn-primary">View</button></a>
                                                    &nbsp;&nbsp;
                                                    <button class="btn btn-saccuss" style="background-color: #158d15;color: white;">Edit</button>
                                                    &nbsp;&nbsp; <a href='?type=delete&id=<?php echo $row[0] ?>'><button
                                                            class="btn btn-danger">Detele</button></a>
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