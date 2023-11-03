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
            $id_laptop = isset($_POST['id_ctlaptop']) ? $_POST['id_ctlaptop'] : '';
            $laptop = new laptop();
            $result = $laptop->deleteCTLaptop($id_laptop);
            if($result){
                echo "<script>alert('Xóa thành công');window.location.href='index.php?action=quanly&act=quanly'</script>";
            }else{
                echo "<script>alert('Xóa thất bại');window.location.href='index.php?action=quanly&act=quanly'</script>";
            }
            break;
        case "khachhang":
            include './View/admin/quanlykhachhang.php';
            break;
     }
?>