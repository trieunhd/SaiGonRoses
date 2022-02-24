<?php
define("VIEW", true);
require("config/config.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
$date= date("H:i - d/m/Y");

if (getUser($conn)["status"] == true) {
    $idp = $_GET['id'];
    if (mysqli_query($conn, "INSERT INTO lsgiaodich(id_user, id_sp, thoigian ) VALUES ( '" . $_COOKIE['user'] . "', '$idp', '$date')")) {
      echo '<script>alert("Đặt hàng thành công!");</script>';
    }else{
      echo '<script>alert("Hệ Thống Lỗi: ' . mysqli_error($conn) . '");</script>';
    }
}

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
        $idp = $_GET['id'];
        if (mysqli_query($conn, "INSERT INTO lsgiaodich(id_user, id_sp, thoigian ) VALUES ( '$user', '$idp', '$date')")) {
          echo '<script>alert("Đặt Hàng Thành Công Hãy Đăng Nhập Để Kiểm Tra");</script>';
        } else {
          echo '<script>alert("Đăng kí thành công, đặt hàng lỗi thử lại sau, mã lỗi: ' . mysqli_error($conn) . '");</script>';
        }
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
  <title>Thanh toán</title>
  <?php require("all/head.php"); ?>
</head>

<body>
  <?php require("all/body.php"); ?>

  <?php
  if (getUser($conn)["status"] != true) {
  ?>
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
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label>Số điện thoại</label>
        <input type="text" class="form-control" id="phone" name="phone">
      </div>
      <div class="form-group">
        <label>Địa chỉ</label>
        <input type="text" class="form-control" id="chiachi" name="chiachi">
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Đăng ký</button>
    </form>
  <?php } ?>


  <?php require("all/footer.php"); ?>
</body>

</html>