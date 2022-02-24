<?php
$_SERVER['DOCUMENT_ROOT'];
define("VIEW", true);
require("checkad.php");

if (isset($_POST["sbm"])) {
    $loai = $_POST['loai'];
    $tensp = $_POST['tensp'];
    $mota = $_POST['mota'];
    $gia = $_POST['gia'];
    $logo = $_POST['logo'];
    $anh1 = $_POST['anh1'];
    $anh2 = $_POST['anh2'];
    $anh3 = $_POST['anh3'];
    if (mysqli_query($conn, "INSERT INTO `san_pham`(`loai`, `ten_sp`, `mo_ta_sp`, `gia`, `logo`, `anh_1`, `anh_2`, `anh_3`, `het_hang`) VALUES ('$loai','$tensp','$mota','$gia','$logo','$anh1','$anh2','$anh3','0')")) {
        echo '<script>alert("Đăng sản phẩm thành công");</script>';
    } else {
        echo '<script>alert("Hệ Thống Lỗi: ' . mysqli_error($conn) . '");</script>';
    }
}




?>
<!DOCTYPE html>
<html>

<head>
    <?php require("head.php"); ?>
    <title>Quản lý sản phẩm</title>
</head>

<body>
    <?php require("body.php"); ?>
    <div class="panel panel-default">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="text-center">Thêm sản phẩm</h1>
            </div>
            <hr>
            <div class="panel-body">
                <section class="mb-4">
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Loại hoa</label>
                                <select class="form-control" name="loai">
                                    <option value="hong">Hoa Hồng</option>
                                    <option value="huongduong">Hoa Hướng Dương</option>
                                    <option value="ly">Hoa Ly</option>
                                    <option value="lan">Hoa Lan</option>
                                    <option value="sen">Hoa Sen</option>
                                    <option value="dongtien">Hoa Đồng Tiền</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tên hoa</label>
                                <input type="text" class="form-control" name="tensp" placeholder="VD: Ánh Dương">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mô tả</label>
                            <textarea class="form-control" name="mota" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input type="number" class="form-control" name="gia" placeholder="VD: 300.000">
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="text" class="form-control" name="logo">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Ảnh 1</label>
                                <input type="text" class="form-control" name="anh1">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Ảnh 2</label>
                                <input type="text" class="form-control" name="anh2">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Ảnh 3</label>
                                <input type="text" class="form-control" name="anh3">
                            </div>
                        </div>

                        <button name="sbm" class="btn btn-primary">Đăng bán</button>
                    </form>
                </section>
            </div>
        </div>
    </div>


    <?php require("footer.php"); ?>

</body>

</html>