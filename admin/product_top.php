<?php
$_SERVER['DOCUMENT_ROOT'];
define("VIEW", true);
require("checkad.php");
$date = date("d/m/Y");




?>
<!DOCTYPE html>
<html>

<head>
    <?php require("head.php"); ?>
    <title>Top sản phẩm</title>
</head>

<body>
    <?php require("body.php"); ?>

    <!-- Section: Main chart -->
    <section class="mb-4">
        <div class="card">
            <div class="card-header py-3">
                <h5 class="mb-0 text-center"><strong>Top sản phẩm</strong></h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#TOP</th>
                            <th scope="col">Mã sản phẩm</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $query_top1 = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = (SELECT  id_sp  FROM lsgiaodich GROUP BY id_sp ORDER BY COUNT(*) DESC LIMIT  1)");
                            if ($query_top1->num_rows > 0) {
                                $t1 = mysqli_fetch_array($query_top1);
                            ?>      
                                    <th scope="row"><i class="fas fa-medal fa-2x"></i></th>
                                    <th><?php echo $t1["id"]; ?></th>
                                    <td><img class="fa-2x mr-4 grey rounded-circle" src="<?php echo $t1["logo"]; ?>" width="50px" height="50px"></td>
                                    <td><?php echo $t1["ten_sp"]; ?></td>
                                    
                            <?php
                                }
                            ?>
                        </tr>
                        <tr>
                            <?php
                            $query_top2 = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = (SELECT  id_sp  FROM lsgiaodich GROUP BY id_sp ORDER BY COUNT(*) DESC LIMIT  1,1)");
                            if ($query_top2->num_rows > 0) {
                                $t2 = mysqli_fetch_array($query_top2);
                            ?>
                                <th scope="row"><i class="fas fa-medal fa-2x"></i></th>
                                <th><?php echo $t2["id"]; ?></th>
                                <td><img class="fa-2x mr-4 grey rounded-circle" src="<?php echo $t2["logo"]; ?>" width="50px" height="50px"></td>
                                <td><?php echo $t2["ten_sp"]; ?></td>
                                

                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <?php
                            $query_top3 = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = (SELECT  id_sp  FROM lsgiaodich GROUP BY id_sp ORDER BY COUNT(*) DESC LIMIT  2,1)");
                            if ($query_top3->num_rows > 0) {
                                $t3 = mysqli_fetch_array($query_top3);
                            ?>
                                <th scope="row"><i class="fas fa-medal fa-2x"></i></th>
                                <th><?php echo $t3["id"]; ?></th>
                                <td><img class="fa-2x mr-4 grey rounded-circle" src="<?php echo $t3["logo"]; ?>" width="50px" height="50px"></td>
                                <td><?php echo $t3["ten_sp"]; ?></td>
                                

                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <?php
                            $query_top4 = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = (SELECT  id_sp  FROM lsgiaodich GROUP BY id_sp ORDER BY COUNT(*) DESC LIMIT  3,1)");
                            if ($query_top4->num_rows > 0) {
                                $t4 = mysqli_fetch_array($query_top4);
                            ?>
                                <th scope="row"><i class="fas fa-medal fa-2x"></i></th>
                                <th><?php echo $t4["id"]; ?></th>
                                <td><img class="fa-2x mr-4 grey rounded-circle" src="<?php echo $t4["logo"]; ?>" width="50px" height="50px"></td>
                                <td><?php echo $t4["ten_sp"]; ?></td>
                                
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <?php
                            $query_top5 = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = (SELECT  id_sp  FROM lsgiaodich GROUP BY id_sp ORDER BY COUNT(*) DESC LIMIT  4,1)");
                            if ($query_top5->num_rows > 0) {
                                $t5 = mysqli_fetch_array($query_top5);
                            ?>
                                <th scope="row"><i class="fas fa-medal fa-2x"></i></th>
                                <th><?php echo $t5["id"]; ?></th>
                                <td><img class="fa-2x mr-4 grey rounded-circle" src="<?php echo $t5["logo"]; ?>" width="50px" height="50px"></td>
                                <td><?php echo $t5["ten_sp"]; ?></td>
                                
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <?php
                            $query_top6 = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = (SELECT  id_sp  FROM lsgiaodich GROUP BY id_sp ORDER BY COUNT(*) DESC LIMIT  5,1)");
                            if ($query_top6->num_rows > 0) {
                                $t6 = mysqli_fetch_array($query_top6);
                            ?>
                                <th scope="row"><i class="fas fa-medal fa-2x"></i></th>
                                <th><?php echo $t6["id"]; ?></th>
                                <td><img class="fa-2x mr-4 grey rounded-circle" src="<?php echo $t6["logo"]; ?>" width="50px" height="50px"></td>
                                <td><?php echo $t6["ten_sp"]; ?></td>
                                
                            <?php
                            }
                            ?>
                        </tr>






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