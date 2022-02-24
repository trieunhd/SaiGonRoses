<?php
define("VIEW", true);
require("config/config.php");

if (isset($_GET["loai"])) {
    // kiểm tra nếu key id tồn tại
    $query = mysqli_query($conn, "select * from san_pham where loai = '" . $_GET["loai"] . "'");
    
} else {
    // khi không có key id
    header("Location: /");
    die;
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php 
            if (($_GET["loai"])=='hong') {
                echo 'Hoa Hồng';
            } else if (($_GET["loai"])=='huongduong') {
                echo 'Hoa Hướng Dương';
            } else if (($_GET["loai"])=='sen') {
                echo 'Hoa Sen';
            } else if (($_GET["loai"])=='dongtien') {
                echo 'Hoa Đồng Tiền';
            }else if (($_GET["loai"])=='lan') {
                echo 'Hoa Lan';
            } else if (($_GET["loai"])=='ly') {
                echo 'Hoa Ly';
            }
            ?> 
</title>
	<?php require("all/head.php"); ?>
</head>
<body>
<?php require("all/body.php"); ?>
	<br>
	

	<br>
	<div class="separator">
        <h2><?php 
            if (($_GET["loai"])=='hong') {
                echo 'Hoa Hồng';
            } else if (($_GET["loai"])=='huongduong') {
                echo 'Hoa Hướng Dương';
            } else if (($_GET["loai"])=='sen') {
                echo 'Hoa Sen';
            } else if (($_GET["loai"])=='dongtien') {
                echo 'Hoa Đồng Tiền';
            }else if (($_GET["loai"])=='lan') {
                echo 'Hoa Lan';
            } else if (($_GET["loai"])=='ly') {
                echo 'Hoa Ly';
            }
            ?>
        </h2>
    </div>
	<br>

<div class="row">
<?php 
// $query = mysqli_query($conn,"select * from san_pham where loai='hong' and het_hang=0 limit 6");
if ($query->num_rows > 0){
	while($row = mysqli_fetch_array($query)){
	    $id = $row["id"];
		$loai = $row["loai"];
		$ten_sp = $row["ten_sp"];
		$mo_ta_sp = $row["mo_ta_sp"];
		$gia = $row["gia"];
		$logo = $row["logo"];
		$anh_1 = $row["anh_1"];
		$anh_2 = $row["anh_2"];
		$anh_3 = $row["anh_4"];
		$het_hang = $row["het_hang"];
    ?>

	<div class="col-6 col-md-4 py-2" onclick="go_sp('<?php echo $id; ?>')">
		<div class="card">
			<img src="<?php echo $logo; ?>" class="card-img-top">	
			<div class="card-body">
				<div class="card-title text-center w-100"><?php echo $ten_sp; ?></div>	
				<div class="card-text text-center"><?php echo number_format($gia, 0, '', ','); ?> VND</div>
			</div>
		</div>
	</div>
	
<?php 
	}
	} else {
	echo '<div class="note note-danger">Hiện tại chưa có sản phẩm nào</div>';

	}
?>
	
</div>






<?php require("all/footer.php"); ?>

<script>
function go_sp(id){
    window.location.href = "/chitiet.php?id=" + id;
  }
</script>
</body>
</html>