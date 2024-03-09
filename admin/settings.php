<?php
require('top.inc.php');
$username = '';
$password = '';
$email = "";

$msg = '';
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "select * from admin where id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {

        $row = mysqli_fetch_assoc($res);
        $email = $row['email'];
        $password = $row['password'];
        $username = $row['username'];
    } else {

        header('location:index.php');
        die();
    }
}

if (isset($_POST['submit'])) {
    $username = get_safe_value($con, $_POST['username']);
    $password = get_safe_value($con, $_POST['password']);
    $email = get_safe_value($con, $_POST['email']);

    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {

            $update_sql = "UPDATE `admin` SET `username`='$username',`email`='$email',`password`='$password' where id='$id'";
            $done = mysqli_query($con, $update_sql);
            if (!$done)  $msg = "Error: " . mysqli_error($con);
            else {
                echo '
                <script>
                    alert("WELL UPDATED")
                </script>
';
                header('location:index.php');
            }


            die();
        }
    }
}
?>
<style>
    #dashbroad-card {
        border: 2px solid#121c20;
        /* width: 80%; */
    }
</style>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">SETTINGS </h4>
                        <hr>
                    </div>
                    <form method="post" enctype="multipart/form-data" onsubmit="return submited()">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Username</label>
                                <input type="text" name="username" class="form-control" required value="<?php echo $username ?>" placeholder="Enter new username">
                            </div>
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Email</label>
                                <input type="text" name="email" class="form-control" required value="<?php echo $email ?>" placeholder="Enter new email">
                            </div>
                            <div class="form-group">
                                <label for="province" class=" form-control-label">Password</label>
                                <input type="password" name="password" class="form-control" required value="<?php echo $password ?>" placeholder="Enter new password">
                            </div>
                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">UPDATE</span>
                            </button>
                            <div class="field_error"><?php echo $msg ?></div>
                        </div>
                    </form>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // const submited = () => {
    //     let check = promet("Ok")
    //     return false;
    // }
</script>
<?php
require('footer.inc.php');
?>