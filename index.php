<?php
define("VIEW", true);
require("config/config.php");

$query_top1 = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = (SELECT  id_sp  FROM lsgiaodich GROUP BY id_sp ORDER BY COUNT(*) DESC LIMIT  1)");
$query_top2 = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = (SELECT  id_sp  FROM lsgiaodich GROUP BY id_sp ORDER BY COUNT(*) DESC LIMIT  1,1)");
$query_top3 = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = (SELECT  id_sp  FROM lsgiaodich GROUP BY id_sp ORDER BY COUNT(*) DESC LIMIT  2,1)");
$query_top4 = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = (SELECT  id_sp  FROM lsgiaodich GROUP BY id_sp ORDER BY COUNT(*) DESC LIMIT  3,1)");


?>
<!DOCTYPE html>
<html>

<head>
	<title>Shop hoa tươi của bạn</title>
	<?php require("all/head.php"); ?>
</head>

<body>
	<?php require("all/body.php"); ?>
	<br>
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://i.imgur.com/FfJZo5F.png" class="d-block w-100" alt="...">
			</div>
		</div>
	</div>

	<br>
	<div class="separator">
		<h2>Hoa Hồng</h2>
	</div>
	<br>

	<div class="row">
		<?php
		$query = mysqli_query($conn, "select * from san_pham where loai='hong' and het_hang=0 limit 6");
		if ($query->num_rows > 0) {
			while ($row = mysqli_fetch_array($query)) {
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
		<div class="mx-auto">
			<button type="button" class="btn btn-secondary btn-sm">XEM THÊM</button>
		</div>

	</div>

	<br>
	<div class="separator">
		<h2>Hướng Dương</h2>
	</div>
	<br>
	<div class="row">
		<?php
		$query = mysqli_query($conn, "select * from san_pham where loai='huongduong' limit 6");
		if ($query->num_rows > 0) {
			while ($row = mysqli_fetch_array($query)) {
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
							<div class="card-title text-center"><?php echo $ten_sp; ?></div>
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
		<div class="mx-auto">
			<button type="button" class="btn btn-secondary btn-sm">XEM THÊM</button>
		</div>

		
	</div>

	<br>
	<div class="separator">
		<h2>Hoa Sen</h2>
	</div>
	<br>
	<div class="row">
		<?php
		$query = mysqli_query($conn, "select * from san_pham where loai='sen' limit 6");
		if ($query->num_rows > 0) {
			while ($row = mysqli_fetch_array($query)) {
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
							<div class="card-title text-center"><?php echo $ten_sp; ?></div>
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

	<br>
	<div class="separator">
		<h2>Hoa Sen</h2>
	</div>
	<br>
	<div class="row">
		<?php
		$query = mysqli_query($conn, "select * from san_pham where loai='dongtien' limit 6");
		if ($query->num_rows > 0) {
			while ($row = mysqli_fetch_array($query)) {
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
							<div class="card-title text-center"><?php echo $ten_sp; ?></div>
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

	<br>
	<div class="separator">
		<h2>Hoa Ly</h2>
	</div>
	<br>
	<div class="row">
		<?php
		$query = mysqli_query($conn, "select * from san_pham where loai='ly' limit 6");
		if ($query->num_rows > 0) {
			while ($row = mysqli_fetch_array($query)) {
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
							<div class="card-title text-center"><?php echo $ten_sp; ?></div>
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

	<br>
	<div class="separator">
		<h2>Hoa Lan</h2>
	</div>
	<br>
	<div class="row">
		<?php
		$query = mysqli_query($conn, "select * from san_pham where loai='lan' limit 6");
		if ($query->num_rows > 0) {
			while ($row = mysqli_fetch_array($query)) {
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
							<div class="card-title text-center"><?php echo $ten_sp; ?></div>
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
		function go_sp(id) {
			window.location.href = "/chitiet.php?id=" + id;
		}
	</script>
</body>

</html>