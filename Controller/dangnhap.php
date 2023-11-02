<?php
    $act='dangnhap';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case 'dangnhap':
            include './View/pages/dangnhap.php';
            break;
        case 'dangnhap_action':
            $emaildn='';
            $passdn='';
            if(isset($_POST['txtemail'])&& isset($_POST['txtpassword'])) {
                $emaildn = $_POST['txtemail'];
                $passdn = $_POST['txtpassword'];
                $salt = 'Painle#';
                $staticsalt='M1710#';
                //$passmd5=md5($pass); //chỉ mã hóa đi, không mã hóa về
                $passmd5=md5($salt.$passdn.$staticsalt);
                $user = new user();
                $dn = $user->userLogin($emaildn, $passmd5);
                if($dn == true){
                    echo '<script>alert("Đăng nhập thành công")</script>';
                    $_SESSION['id_user'] = $dn['id_user'];
                    $_SESSION['ten_quyen'] = $dn['ten_quyen'];
                    $_SESSION['email'] = $dn['email'];
                    $_SESSION['ten_kh'] = $dn['ten_kh'];
                    $_SESSION['dia_chi'] = $dn['dia_chi'];
                    $_SESSION['so_dien_thoai'] = $dn['so_dien_thoai'];
                    if($_SESSION['ten_quyen'] === "Admin"){
                        include('./View/pages/home.php');
                        echo '<meta http-equiv="refresh"  content="0; url=../doanphp/index.php?action=quanly"/>';
                    }else {
                        include('./View/pages/home.php');
                        echo '<meta http-equiv="refresh"  content="0; url=../doanphp/index.php?action=home"/>';
                    }  
                } else {
                    echo '<script>alert("Đăng nhập thất bại")</script>';
                    include('./View/pages/dangnhap.php');
                }

            }
            break;
        case 'dangxuat_action':
                session_unset();
                include('./View/pages/home.php');
                echo '<meta http-equiv="refresh"  content="0; url=../doanphp/index.php?action=home"/>';

            break;
        default:
            echo "invalid act";
    }

?>