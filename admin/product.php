<?php
$_SERVER['DOCUMENT_ROOT'];
define("VIEW", true);
require("checkad.php");


if (isset($_POST['find_product'])) {
    $search = addslashes($_POST['search']);
    $query = (mysqli_query($conn, "SELECT * FROM san_pham WHERE `ten_sp` LIKE '%$search%'"));
} else {
    $query = mysqli_query($conn, "SELECT * FROM san_pham");
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

            <section class="mb-4">
                    <form action="" method="POST">
                        <div class="form-row align-items-center">
                            <div class="col-auto my-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control" name="search" placeholder="Nhập tên sản phẩm">
                                </div>
                            </div>
                            <div class="col-auto my-1">
                                <button name="find_product" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
            </section>
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>Sản phẩm</strong></h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Loại</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Trạng thái</th>
                             
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($r = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $r["id"]; ?></th>
                                        <td><?php echo $r["loai"]; ?></td>
                                        <td><img class="fa-2x mr-4 grey rounded-circle" src="<?php echo $r["logo"]; ?>" width="50px" height="50px"></td>
                                        <td><?php echo $r["ten_sp"]; ?></td>
                                        <td><?php echo number_format($r["gia"], 0, '', ',') ; ?></td>
                                        <td><?php if ($r["het_hang"] == 0) {
                                                echo "Còn hàng";
                                            } else {
                                                echo "Hết hàng";
                                            } ?></td>    
                                        
                                        
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
