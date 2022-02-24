<?php

define("VIEW", true);
require("../config/config.php");

if (getUser($conn)["status"] == true) {
  header("Location: ../index.php");
  die;
}

if (isset($_POST["user"])) {
  $user = mysqli_real_escape_string($conn, $_POST["user"]);
  $pass = mysqli_real_escape_string($conn, $_POST["pass"]);
  $query1 = mysqli_query($conn, "select * from thanh_vien where user = '$user'");
  if ($query1->num_rows > "0") {
    $r = mysqli_fetch_array($query1);
    if ($pass == $r["pass"]) {
      setcookie("user", $r["user"], time() + 360000, "/");
      echo '<script>alert("Đăng nhập thành công");window.location.href="/";</script>';
    } else {
      echo '<script>alert("Sai mật khẩu");</script>';
    }
  } else {
    echo '<script>alert("Tài khoản không tồn tại");</script>';
  }
}




?>
<!DOCTYPE html>
<html>

<head>
  <title>Đăng nhập</title>
  <?php require("../all/head.php"); ?>
</head>

<body>
  <?php require("../all/body.php"); ?>

  <br>
  <div class="col-12 col-md-6 m-auto bg-light rounded-sm">
    <h2 class="text-center">Đăng nhập</h2>
    <form method="POST">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example1">Tài khoản</label>
        <input type="text" id="user" name="user" class="form-control" />
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Mật khẩu</label>
        <input type="password" id="pass" name="pass" class="form-control" />
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example3" checked />
            <label class="form-check-label" for="form2Example3"> Ghi nhớ </label>
          </div>
        </div>

        <div class="col">
          <!-- Simple link -->
          <a href="#!">Quên mật khẩu?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Đăng nhập</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Bạn chưa có có tài khoản? <a href="#!">Đăng ký</a></p>
        <p>hoặc đăng nhập bằng:</p>
        <li class="list-inline-item"><a class="btn-floating btn-fb waves-effect waves-light"><i class="fab fa-facebook-f"> </i></a></li>
        <li class="list-inline-item"><a class="btn-floating btn-gplus waves-effect waves-light"><i class="fab fa-google-plus-g"> </i></a></li>

      </div>
    </form>
  </div>




  <?php require("../all/footer.php"); ?>
</body>

</html>