<?php 
    $act = 'giohang';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    $giohang = new giohang();
    switch($act){
        case 'giohang': 
            if(isset($_POST['id_ctlaptop'])){
                $id_ctlaptop = $_POST['id_ctlaptop'];
                $so_luong_mua = $_POST['so_luong_mua'];
                $daTonTai = $giohang->kiemTraTonTai($id_ctlaptop);
                if($daTonTai){
                    $giohang->themSpDaCo($id_ctlaptop);
                }else {
                    $giohang->add_items($id_ctlaptop, $so_luong_mua);
                }
            }
            include './View/pages/giohang.php';
            break;
        case 'delete':
            $id_ctlaptop = $_POST['id_ctlaptop'];
            if($id_ctlaptop){
                $giohang->delete_items_by_id($id_ctlaptop);
            }
            include './View/pages/giohang.php';
            break;
    }
?>