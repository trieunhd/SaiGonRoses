<?php
define("VIEW", true);
require("../config/config.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
$date = date("H:i - d/m/Y");
if (isset($_POST["submit"])) { //nếu form submit
    if (getUser($conn)["status"] == true) {
    } else { //chưa login
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $diachi = $_POST['diachi'];

        $query = mysqli_query($conn, "select * from thanh_vien where user = '$user'");
        if ($query->num_rows > "0") {
            echo '<script>alert("Tài khoản đã tồn tại");</script>';
        } else {
            //viết code ở đây
            if (mysqli_query($conn, "INSERT INTO thanh_vien(user, pass, fullname, email, phone, diachi, quyen ) VALUES ( '$user', '$pass', '$fullname', '$email', '$phone', '$diachi', '0')")) {
            } else {
                echo '<script>alert("Hệ Thống Lỗi: ' . mysqli_error($conn) . '");</script>';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký</title>
    <?php require("../all/head.php"); ?>
</head>

<body>
    <?php require("../all/body.php"); ?>
    <br>
    <div class="col-12 col-md-6 m-auto bg-light rounded-sm">
        <h2 class="text-center">Đăng ký</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label>Tài khoản</label>
                <input type="text" class="form-control" id="user" name="user">
            </div>

            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <div class="form-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" class="form-control" id="re_pass" name="re_pass">
            </div>
            <div class="form-group">
                <label>Họ và tên</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không chia sẻ email của bạn với bất kỳ ai khác.</small>
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" class="form-control" id="diachi" name="diachi">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Đăng ký</button>
        </form>

    </div>

    <?php require("../all/footer.php"); ?>
</body>

</html>