<?php
if(!defined('VIEW')){
    exit("Bạn không thể truy trập vào đây");
}
$conn = mysqli_connect("localhost", "root", "", "test");
if (!$conn) {
    die("Không thể kết nối với Database");
}
// $conn = mysqli_connect($server, $user, $pass, $database) or die("ko thể kết nối");

function getUser($conn){
    if (isset($_COOKIE["user"])){
        $query = mysqli_query($conn,"select * from thanh_vien where user = '".$_COOKIE["user"]."'");
        $row = mysqli_fetch_array($query);
        $a["status"] = true;
        $a["id"] = $row["id"];
        $a["user"] = $row["user"];
        $a["pass"] = $row["pass"];
        $a["fullname"] = $row["fullname"];
        $a["email"] = $row["email"];
        $a["phone"] = $row["phone"];
        $a["diachi"] = $row["diachi"];
        $a["quyen"] = $row["quyen"];
        return $a;
    } else {
        return array("status" => false);
    }
}
