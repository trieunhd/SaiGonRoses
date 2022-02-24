<?php
$_SERVER['DOCUMENT_ROOT'];
define("VIEW", true);
require("checkad.php");


if (isset($_GET["user"])) {
    // kiểm tra nếu key id tồn tại
    $query = mysqli_query($conn, "select * from thanh_vien where user = '" . $_GET["user"] . "'");
} else{
    if (isset($_POST['find_name'])) {
        $search = addslashes($_POST['search']);
        $query = (mysqli_query($conn, "SELECT * FROM thanh_vien WHERE `fullname` LIKE '%$search%'"));
    } else {
        $query = mysqli_query($conn, "SELECT * FROM thanh_vien");
    }

}





?>
<!DOCTYPE html>
<html>

<head>
    <?php require("head.php"); ?>
    <title>Quản lý thành viên</title>
</head>

<body>
    <?php require("body.php"); ?>
    <?php if (isset($_GET["user"])==false) { ?>
    <section class="mb-4">
            <form action="" method="POST">
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control" name="search" placeholder="Nhập tên người dùng">
                        </div>
                    </div>
                    <div class="col-auto my-1">
                        <button name="find_name" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
    </section>
    <?php }?>

    <!-- Section: Main chart -->
    <section class="mb-4">
        <div class="card">
            <div class="card-header py-3">
                <h5 class="mb-0 text-center"><strong>Thành viên</strong></h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Địa chỉ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($r = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $r["id"]; ?></th>
                                <td><?php echo $r["fullname"]; ?></td>
                                <td><?php echo $r["email"]; ?></td>
                                <td><?php echo $r["phone"]; ?></td>
                                <td><?php echo $r["diachi"]; ?></td>
                            </tr>
                        <?php }
                        ?>
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