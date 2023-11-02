<?php 
    $act = "shop";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case "shop":
            include("./View/pages/shop.php");
            break;
        case "detail":
            include("./View/pages/chitietsanpham.php");
            break;
    }
?>