<?php
define("VIEW", true);
require("config/config.php");

$query = mysqli_query($conn, "select * from thanh_vien where user = '" . $_COOKIE['user'] . "'");
$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $ten_sp; ?></title>
    <?php require("all/head.php"); ?>
</head>

<body>
    <?php require("all/body.php"); ?> <br>
    

    <section class="mb-4">
        <div class="container">
        <div class="row">
        <div class="card col-8">
            <div class="card-header text-center">
                Thông tin
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Họ và tên: <?php echo $row['fullname'];?></li>
                <li class="list-group-item">Địa chỉ: <?php echo $row['diachi'];?></li>
                <li class="list-group-item">Email: <?php echo $row['email'];?></li>
                <li class="list-group-item">Số điện thoại: <?php echo $row['phone'];?></li>
            </ul>
        </div>
        <div class="col-1"></div>
        <div class="card col-3">
            <div class="card-header text-center">
                Thao tác
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Thông tin cá nhân</li>
                <li class="list-group-item">Thay đỗi thông tin</li>
                <li class="list-group-item">Đỗi mật khẩu</li>
            </ul>
        </div>
        </div>
        </div>
        
    </section>
    <!-- Section: Main chart -->


    <?php require("all/footer.php"); ?>
</body>

</html>