<?php
require('top.inc.php');
isAdmin();


$sql = "SELECT * FROM `statistic`";
$res = mysqli_query($con, $sql);
$data = mysqli_fetch_array($res);

if (isset($_POST['save'])) {
    $query = "UPDATE `statistic` SET `nursery`='{$_POST['nursery']}',`primary`='{$_POST['primary']}',`secondary`='{$_POST['secondary']}',`with_disability`='{$_POST['disability']}',`teacher`='{$_POST['teacher']}',`staff`='{$_POST['staff']}'";
    $done = mysqli_query($con, "$query");
    if ($done) {
?>
        <script>
            alert("Data update successfully");
            window.open('statistic_management.php', '_self')
        </script>
<?php
    } else {
        echo "Error:" . mysqli_error($con);
    }
}

?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="box-title">SCHOOL STATISTICS </h4>
                            </div>
                            <div class="col-lg-6 " style="text-align: right;">


                            </div>
                        </div>


                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>

                                        <th width="15%" class="text-center"> NURSERY</th>
                                        <th width="15%" class="text-center">PRIMARY</th>
                                        <th width="15%" class="text-center">SECONDARY</th>
                                        <th width="15%" class="text-center"> WITH DISABILITY</th>
                                        <th width="15%" class="text-center">TEACHER</th>
                                        <th width="15%" class="text-center">SFAFF</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="" method="POST">
                                        <tr class="text-center">
                                            <td><input name="nursery" class="text-center" type="text" value="<?php echo $data['nursery'] ?>" style="width: 3cm;"></td>
                                            <td><input name="primary" class="text-center" type="text" value="<?php echo $data['primary'] ?>" style="width: 3cm;"></td>
                                            <td><input name="secondary" class="text-center" type="text" value="<?php echo $data['secondary'] ?>" style="width: 3cm;"></td>
                                            <td><input name="disability" class="text-center" type="text" value="<?php echo $data['with_disability'] ?>" style="width: 3cm;"></td>
                                            <td><input name="teacher" class="text-center" type="text" value="<?php echo $data['teacher'] ?>" style="width: 3cm;"></td>
                                            <td><input name="staff" class="text-center" type="text" value="<?php echo $data['staff'] ?>" style="width: 3cm;"></td>
                                        </tr>
                                </tbody>
                            </table>

                            <div class="text-center">
                                <button name="save" type="submit" class="btn btn-primary">SAVE</button></td>
                            </div>
                            </form>
                            <br><br>
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