<?php
$_SERVER['DOCUMENT_ROOT'];
define("VIEW", true);
require("checkad.php");

$query = mysqli_query($conn, "select * from lsgiaodich  where status = '1'");


if (isset($_GET['dagiao'])) {
    mysqli_query($conn, "UPDATE `lsgiaodich` SET `status` = '2' where `id`='" . $_GET['id'] . "'");
    echo '<script>alert("Giao đơn ID ' . $_GET['id'] . ' thành công!");window.location.href="/admin/shipping.php";</script>';
} elseif (isset($_GET['trahang'])) {
    mysqli_query($conn, "UPDATE `lsgiaodich` SET `status` = '3' where `id`='" . $_GET['id'] . "'");
    echo '<script>alert("Huỷ đơn ID ' . $_GET['id'] . ' thành công!");window.location.href="/admin/shipping.php";</script>';
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php require("head.php"); ?>
    <title>Quản lý vận chuyển</title>
</head>

<body>
    <?php require("body.php"); ?>


   
                <!-- Section: Main chart -->
                <section class="mb-4">
                    <div class="card">
                        <div class="card-header py-3">
                            <h5 class="text-center"><strong>Đơn đang vận chuyển</strong></h5>
                            <h6 class="text-center"><i>(* Lấy kết quả của đơn vị vận chuyển)</i></h6>

                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã đơn hàng</th>
                                        <th scope="col">Tên khách hàng</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Thời gian đặt hàng</th>
                                        <th scope="col">Chi tiết</th>
                                        <th scope="col">Thao tác</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($r = mysqli_fetch_array($query)) {
                                        $product =  mysqli_query($conn, "SELECT lsgiaodich.id_sp , san_pham.ten_sp, san_pham.gia FROM lsgiaodich JOIN san_pham ON lsgiaodich.id_sp = san_pham.id WHERE lsgiaodich.id_sp = '$r[id_sp]'");
                                        $p = mysqli_fetch_array($product);
                                        $user =  mysqli_query($conn, "SELECT lsgiaodich.id_sp , thanh_vien.fullname FROM lsgiaodich JOIN thanh_vien ON lsgiaodich.id_user = thanh_vien.user WHERE lsgiaodich.id_user = '$r[id_user]'");
                                        $u = mysqli_fetch_array($user);
                                    ?>
                                        <tr>
                                            <th scope="row" name="id"><?php echo $r["id"]; ?></th>
                                            <td><?php echo $u["fullname"]; ?></td>
                                            <td><?php echo $p["ten_sp"]; ?></td>
                                            <td><?php echo $r["thoigian"]; ?></td>
                                            <td><a href="/admin/orther_detail.php?chitiet&id=<?php echo $r["id"]; ?>">CLICK</a></td>

                                            <td>
                                                <a href="?dagiao&id=<?php echo $r["id"]; ?>" class="badge badge-success"> Giao thành công <i class="fa fa-check"></i></a>
                                                <a href="?trahang&id=<?php echo $r["id"]; ?>" class="badge badge-danger"> Trả hàng <i class="fas fa-times"></i></a>
                                            </td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <!-- Section: Main chart -->
            



    </div>


    <?php require("footer.php"); ?>
</body>

</html>