<?php 
    class user {
        function insertUser($email, $id_quyen, $passmd5, $so_dien_thoai, $ten_khach_hang, $dia_chi) {
            $db = new connect();
            $query = "
            INSERT INTO `khachhang` (`id_user`, `email`, `id_quyen`, `password`, `so_dien_thoai`, `ten_kh`, `dia_chi`) 
            VALUES (NULL, '$email', '$id_quyen', '$passmd5', '$so_dien_thoai', '$ten_khach_hang', '$dia_chi');
            ";
            $db->exec($query);
        }

        function selectCheckUser($email,$sodt) {
            $db = new connect();
            $select = "select * from khachhang WHERE email='$email' or so_dien_thoai = '$sodt';";
            $result = $db->getInstance($select);
            return $result;
        }

        function userLogin($email, $pass) {
            $db = new connect();
            $query = "select a.id_user, a.email, a.password, a.so_dien_thoai, a.ten_kh, a.dia_chi, b.ten_quyen from khachhang a, phanquyen b WHERE email = '$email' and password='$pass' AND a.id_quyen = b.id_quyen";
            $result = $db->getInstance($query);
            return $result;
        }

        function getEmail($email){
            $db = new connect();
            $query = "select * from khachhang WHERE email = '$email'";
            $result = $db->getInstance($query);
            return $result;
        }

        function updateCode($emailold, $codenew){
            $db = new connect();
            $query = "update khachhang SET password = '$codenew' WHERE email = '$emailold'";
            $result = $db->exec($query);
            return $result;
        }
    }

?>