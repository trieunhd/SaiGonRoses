<?php
define("VIEW", true);

require $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";
$query = mysqli_query($conn, "select * from thanh_vien where user = '" . $_COOKIE['user'] . "'");
$row = mysqli_fetch_array($query);
if ($row["quyen"] != 1) {
    header("Location: /");
    die;
}
