<?php 
    $act = 'dangky';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
        $email = '';
        $diachi = '';
        $sodt = '';
        $tenkh = '';
        $pass = '';
        $passmd5 = '';
    switch($act) {
        case 'dangky':
            include('./View/pages/dangky.php');
            break;
        case 'dangky_action':
            if(isset($_POST['txtemail'])) {
                $tenkh = $_POST['txtetenkh'];
                $diachi = $_POST['txtdiachi'];
                $sodt = $_POST['txtsodt'];
                $email = $_POST['txtemail'];
                $pass = $_POST['txtpassword'];
                $salt = 'Painle#';
                $staticsalt='M1710#';
                //$passmd5=md5($pass); //chỉ mã hóa đi, không mã hóa về
                $passmd5=md5($salt.$pass.$staticsalt);

                // trước khi insert phải check tồn tại chưa
                $nd = new user();
                $check=$nd->selectCheckUser($email,$sodt);
                if($check==true) {
                    echo '<script>alert("Email hoặc sđt đã tồn tại")</script>';
                    include('./View/pages/dangky.php');
                } else {
                    $nd->insertUser($email, 1, $passmd5, $sodt, $tenkh, $diachi);
                    echo '<script>alert("Đăng ký thành công")</script>';
                    include "./View/pages/dangnhap.php";
                }
            };
            break;
            
    }

?>