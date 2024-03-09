<?php
require('top.inc.php');
isAdmin();


$sql =  mysqli_query($con, "select * from staff where id='{$_GET['id']}'");
$res = mysqli_fetch_array($sql);

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
                                <h4 class="box-title">VIEW STAFF MEMBER </h4>
                            </div>

                        </div>


                    </div>
                    <div class="card-body--">
                        <center>
                            <div style="width: 40rem; ">
                                <div class="text-center">
                                    <img src="<?php echo $res['picture'] ?>" width="300" srcset="">
                                </div>
                                <br>
                                <table style="text-align: left;">
                                    <tr>
                                        <td>
                                            <b>Names:</b>
                                        </td>
                                        <td>
                                            <?php echo $res['names'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Position:</b>
                                        </td>
                                        <td>
                                            <?php echo $res['position'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Gender:</b>
                                        </td>
                                        <td>
                                            <?php echo $res['gender'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Email:</b>
                                        </td>
                                        <td>
                                            <?php echo $res['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Phone:</b>
                                        </td>
                                        <td>
                                            <?php echo $res['phone'] ?></td>
                                    </tr>
                                </table>
                                <br><br>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php');
?>