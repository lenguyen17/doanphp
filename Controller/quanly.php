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
        case "delete": 
            $idlaptop = isset($_GET['idlaptop']) ? $_GET['idlaptop'] : '';
            $laptop = new laptop();
            $result = $laptop->deleteCTLaptop($idlaptop);
            if($result){
                echo "<script>alert('Xóa thành công');window.location.href='index.php?action=quanly&act=quanly'</script>";
            }else{
                echo "<script>alert('Xóa thất bại');window.location.href='index.php?action=quanly&act=quanly'</script>";
            }
            break;
     }
?>