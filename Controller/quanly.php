<?php 
     $act = 'quanly';
     if(isset($_GET['act'])){
         $act = $_GET['act'];
     }
     switch($act){
        case "quanly":
            include './View/admin/home.php';
            break;
        case "chinhsua":
            include './View/admin/suasanpham.php';
            break;
     }
?>