<?php
$_SERVER['DOCUMENT_ROOT'];
define("VIEW", true);
require("checkad.php");

if (isset($_POST["sbm"])) {
    $idsp = $_POST['idsp'];
    
    if (mysqli_query($conn, "delete from san_pham where `id`='$idsp'")) {
        echo '<script>alert("Xoá sản phẩm thành công");</script>';
    } else {
        echo '<script>alert("Hệ Thống Lỗi: ' . mysqli_error($conn) . '");</script>';
    }
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
                <h1 class="text-center">Xoá sản phẩm</h1>
            </div>
            <hr>
            <div class="panel-body">
                <section class="mb-4">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>#ID sản phẩm</label>
                            <input type="text" class="form-control" name="idsp">
                        </div>
                        
                        <button name="sbm" class="btn btn-primary">Xoá sản phẩm</button>
                    </form>
                </section>
            </div>
        </div>
    </div>


    <?php require("footer.php"); ?>

</body>

</html>