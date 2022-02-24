<?php
define("VIEW", true);
require("config/config.php");


function getInfo($conn, $id)
{
    $query = mysqli_query($conn, "select * from san_pham where id = '$id'");
    $row = mysqli_fetch_array($query);
    $j["loai"] = $row["loai"];
    $j["ten_sp"] = $row["ten_sp"];
    $j["gia"] = $row["gia"];
    $j["logo"] = $row["logo"];
    return $j;
}
function getHistory($conn, $id)
{
    $query = mysqli_query($conn, "select * from lsgiaodich where id = '$id'");
    $row = mysqli_fetch_array($query);
    $q["thoigian"] = $row["thoigian"];
    $q["status"] = $row["status"];
    return $q;
}
$query = mysqli_query($conn, "select * from lsgiaodich where id_user = '" . $_COOKIE['user'] . "'");
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
        <div class="card">
            <div class="card-header py-3">
                <h5 class="mb-0 text-center"><strong>Lịch sử mua hàng</strong></h5>
            </div>
            <div class="card-body">
                <table class="table" >
                    <thead>
                        <tr>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Đặt hàng lúc</th>
                            <th scope="col">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                            $idsp = $row["id_sp"];
                            $st = $row["status"];
                            $id = $row["id"];
                            $info = getInfo($conn, $idsp);
                            $history = getHistory($conn, $id);
                        ?>
                            <tr>
                                <td><img class="fa-2x mr-4 grey rounded-circle" src="<?php echo $info["logo"]; ?>" width="50px" height="50px"></td>
                                <td><?php echo $info["ten_sp"]; ?></td>
                                <td><?php echo number_format($info["gia"], 0, '', ',') ; ?></td>
                                <td><?php echo $history["thoigian"]; ?></td>
                                <td><?php if ($history["status"] == 0) {
                                                echo "Chờ duyệt";
                                            } else if($history["status"] == 1 ){
                                                echo "Đang vận chuyển";
                                            }else if($history["status"] == 2 ){
                                                echo "Đã giao";
                                            }else {
                                                echo "Huỷ đơn";
                                            } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Section: Main chart -->


    <?php require("all/footer.php"); ?>
</body>

</html>