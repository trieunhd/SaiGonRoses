<?php
$_SERVER['DOCUMENT_ROOT'];
define("VIEW", true);
require("checkad.php");





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
                <h1 class="text-center">Chỉnh sửa sản phẩm</h1>
            </div>
            <hr>
            <div class="panel-body">
                <section class="mb-4">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>#ID sản phẩm</label>
                            <input type="text" class="form-control" name="idsp">
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