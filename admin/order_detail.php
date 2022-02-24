<?php
$_SERVER['DOCUMENT_ROOT'];
define("VIEW", true);
require("checkad.php");


if (isset($_GET["id"])) {
    // kiểm tra nếu key id tồn tại
    $query = mysqli_query($conn, "select * from lsgiaodich where id = '" . $_GET["id"] . "'");
    $row = mysqli_fetch_array($query);
    $id = $row["id"];
    $uid = $row["id_user"];
    $idsp = $row["id_sp"];
    $time = $row["thoigian"];
    $status = $row["status"];
    $product =  mysqli_query($conn, "SELECT lsgiaodich.id_sp , san_pham.ten_sp, san_pham.gia , san_pham.loai, san_pham.het_hang FROM lsgiaodich JOIN san_pham ON lsgiaodich.id_sp = san_pham.id WHERE lsgiaodich.id_sp = '$idsp'");
    $pro = mysqli_fetch_array($product);
    $namesp = $pro["ten_sp"];
    $giasp = $pro["gia"];
    $loaisp = $pro["loai"];
    $hethang = $pro["het_hang"];
    $user =  mysqli_query($conn, "SELECT lsgiaodich.id_sp , thanh_vien.fullname, thanh_vien.diachi , thanh_vien.phone, thanh_vien.email FROM lsgiaodich JOIN thanh_vien ON lsgiaodich.id_user = thanh_vien.user WHERE lsgiaodich.id_user = '$uid'");
    $u = mysqli_fetch_array($user);
    $fullname = $u["fullname"];
    $diachi = $u["diachi"];
    $phone = $u["phone"];
    $email = $u["email"];
}



?>
<!DOCTYPE html>
<html>

<head>
    <?php require("head.php"); ?>
    <title>Chi tiết đơn hàng #<?php echo $id;?></title>
</head>

<body>
    <?php require("body.php"); ?>
    <h1 class="text-center">Chi tiết đơn hàng #<?php echo $id;?></h1>
    <section class="mb-4">
        <div class="card">
            <div class="card-header">
                Thông tin đơn hàng
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">ID đơn hàng: <?php echo $id; ?></li>
                <li class="list-group-item">Trạng thái: <?php if ($status == 0)
                                                            echo 'Chờ duyệt';
                                                        else if ($status == 1)
                                                            echo 'Đang vận chuyển';
                                                        else if ($status == 2)
                                                            echo 'Giao hàng thành công';
                                                        else
                                                            echo 'Huỷ đơn';
                                                        ?>
                </li>
                <li class="list-group-item">Đặt hàng lúc: <?php echo $time; ?></li>
            </ul>
        </div>
    </section>
    <section class="mb-4">
        <div class="card">
            <div class="card-header">
                Thông tin khách hàng
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Họ tên: <?php echo $fullname; ?></li>
                <li class="list-group-item">Địa chỉ: <?php echo $diachi; ?></li>
                <li class="list-group-item">Số điện thoại: <?php echo $phone; ?></li>
                <li class="list-group-item">Email: <?php echo $email; ?></li>
            </ul>
        </div>
    </section>
    <section class="mb-4">
        <div class="card">
            <div class="card-header">
                Thông tin sản phẩm
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Loại: <?php echo $loaisp; ?></li>
                <li class="list-group-item">Tên: <?php echo $namesp; ?></li>
                <li class="list-group-item">Giá: <?php echo $giasp; ?></li>
                <li class="list-group-item">Tình trạng: <?php   if($hethang==0)
                                                                    echo 'Còn hàng';
                                                                else
                                                                    echo 'Hết hàng';
                                                        ?>
                </li>
            </ul>
        </div>
    </section>


    <?php require("footer.php"); ?>
</body>

</html>