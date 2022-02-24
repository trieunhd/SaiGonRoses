<?php
define("VIEW", true);
require("config/config.php");
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
} else {
    // khi không có key id
    header("Location: /");
    die;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $ten_sp; ?></title>
    <?php require("all/head.php"); ?>
</head>

<body>
    <?php require("all/body.php"); ?>
    <h1 class="card-title text-center p-2"><?php echo $ten_sp; ?></h1>
    <hr>
    <div class="row">
        <div class="col-md-4" onclick="go_sp('<?php echo $id; ?>')">
            <div class="card">
                <img src="<?php echo $logo; ?>" class="card-img-top">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="<?php echo $anh_1; ?>" class="card-img-top">
                        </div>
                        <div class="col-4">
                            <img src="<?php echo $anh_2; ?>" class="card-img-top">
                        </div>
                        <div class="col-4">
                            <img src="<?php echo $anh_3; ?>" class="card-img-top">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <p class="card-text"><b>Loại: </b><?php 
                                                    if ($loai=='hong') {
                                                        echo 'Hoa Hồng';
                                                    } else if ($loai=='huongduong') {
                                                        echo 'Hoa Hướng Dương';
                                                    } else if ($loai=='sen') {
                                                        echo 'Hoa Sen';
                                                    } else if ($loai=='dongtien') {
                                                        echo 'Hoa Đồng Tiền';
                                                    }else if ($loai=='lan') {
                                                        echo 'Hoa Lan';
                                                    } else if ($loai=='ly') {
                                                        echo 'Hoa Ly';
                                                    }
                                                    ?> 
            </p> 
            <p class="card-text"><b>Trạng thái: </b><?php if ($het_hang == 0) echo "Còn hàng";
                                                    else echo "Hết hàng"; ?></p>
            <h3 class="card-title">Giá: <span id="amount"><?php echo  number_format($gia, 0, '', ','); ?> VNĐ</span></h3>
            <button type="button" class="col-auto btn btn-outline-info fas fa-shopping-cart" onclick="window.location.href='/thanhtoan.php?id=<?php echo $id; ?>'"> MUA HÀNG</button>


        </div>
    </div>
    <hr class="mt-5">
    <p class="card-text"><b>Mô tả:</b><br><?php echo $mo_ta_sp; ?></p>

    <div class="text-center p-1">
        <img src="<?php echo $anh_1; ?>" width="80%">
    </div>
    <div class="text-center p-1">
        <img src="<?php echo $anh_2; ?>" width="80%">
    </div>
    <div class="text-center p-1">
        <img src="<?php echo $anh_3; ?>" width="80%">
    </div>
    


    <?php require("all/footer.php"); ?>
</body>

</html>