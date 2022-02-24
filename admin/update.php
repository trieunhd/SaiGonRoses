<?php
// require  $_SERVER["DOCUMENT_ROOT"]."/admin/update.php";
define("VIEW", true);
require("checkad.php");

if (isset($_POST["sbm"])) {
    $idsp = $_POST['idsp'];
    $loai = $_POST['loai'];
    $tensp = $_POST['tensp'];
    $mota = $_POST['mota'];
    $gia = $_POST['gia'];
    $logo = $_POST['logo'];
    $anh1 = $_POST['anh1'];
    $anh2 = $_POST['anh2'];
    $anh3 = $_POST['anh3'];
    $status = $_POST['status'];
    if (mysqli_query($conn, "UPDATE `san_pham` SET `loai`='$loai',`ten_sp`='$tensp',`mo_ta_sp`='$mota',`gia`='$gia',`logo`='$logo',`anh_1`='$anh1',`anh_2`='$anh2',`anh_3`='$anh3',`het_hang`='$status' WHERE `id`='$idsp' ")) {
        echo '<script>alert("Cập nhật sản phẩm thành công");</script>';
    } else {
        echo '<script>alert("Hệ Thống Lỗi: ' . mysqli_error($conn) . '");</script>';
    }
}

if (isset($_GET["id"])) {
    // kiểm tra nếu key id tồn tại
    $query = mysqli_query($conn, "select * from san_pham where id = '" . $_GET["id"] . "'");
    $row = mysqli_fetch_array($query);
    $id = $row["id"];
    $loai = $row["loai"];
    $ten_sp = $row["ten_sp"];
    $mo_ta_sp = $row["mo_ta_sp"];
    $gia = $row["gia"];
    $logo = $row["logo"];
    $anh_1 = $row["anh_1"];
    $anh_2 = $row["anh_2"];
    $anh_3 = $row["anh_3"];
    $het_hang = $row["het_hang"];
} 




?>
<!DOCTYPE html>
<html>

<head>
    <?php require("head.php"); ?>
    <title>Cập nhật sản phẩm</title>
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
                        <div class="form-group">
                            <label>#ID sản phẩm</label>
                            <input type="text" class="form-control" name="idsp" value="<?php echo $id;?>">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Loại hoa</label>
                                <select class="form-control" name="loai">
                                    <option value="hong">Hoa Hồng</option>
                                    <option value="huongduong">Hoa Hướng Dương</option>
                                    <option value="ly">Hoa Ly</option>
                                    <option value="lan">Hoa Lan</option>
                                    <option value="sen">Hoa Sen</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tên hoa</label>
                                <input type="text" class="form-control" name="tensp" value="<?php echo $ten_sp;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" name="mota" rows="3"><?php echo $mo_ta_sp;?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input type="number" class="form-control" name="gia" value="<?php echo $gia;?>">
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="text" class="form-control" name="logo" value="<?php echo $logo;?>">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Ảnh 1</label>
                                <input type="text" class="form-control" name="anh1" value="<?php echo $anh_1;?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Ảnh 2</label>
                                <input type="text" class="form-control" name="anh2" value="<?php echo $anh_2;?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Ảnh 3</label>
                                <input type="text" class="form-control" name="anh3" value="<?php echo $anh_3;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tình trạng</label>
                            <select class="form-control" name="status">
                                <option value="0">Còn hàng</option>
                                <option value="1">Hết hàng</option>
                            </select>
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