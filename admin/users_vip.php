<?php
$_SERVER['DOCUMENT_ROOT'];
define("VIEW", true);
require("checkad.php");



    $query = mysqli_query($conn, "SELECT id_user, COUNT(*) FROM lsgiaodich GROUP BY id_user ORDER BY `COUNT(*)` DESC");


?>
<!DOCTYPE html>
<html>

<head>
    <?php require("head.php"); ?>
    <title>Khách hàng mua nhiều</title>
</head>

<body>
    <?php require("body.php"); ?>
    

    <!-- Section: Main chart -->
    <section class="mb-4">
        <div class="card">
            <div class="card-header py-3">
                <h5 class="mb-0 text-center"><strong>Khách hàng mua nhiều</strong></h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#TOP</th>
                            <th scope="col">UID</th>
                            <th scope="col">Lượt mua</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($r = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th scope="row"><i class="fas fa-medal fa-2x"></i></th>
                                <th><a href="/admin/users.php?user=<?php echo $r["id_user"]; ?>"><?php echo $r["id_user"]; ?></a></th>
                                <td><?php echo $r["COUNT(*)"]; ?></td>
                               
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