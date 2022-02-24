<?php 
$_SERVER['DOCUMENT_ROOT'];
define("VIEW", true);
require("checkad.php");

if(!empty($_POST)){
    if(isset($_POST['action'])){
        $action = $_POST['ation'];

        switch ($action) {
            case 'delete':
                # code...
                if(isset($_POST['id '])){
                    $id = $_POST['id'];
                    $query = mysqli_query($conn, "delete from san_pham where 'id'='".$id."' ");
                }
                break;
        }
    }
}

?>