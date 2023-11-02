<?php 
    class laptop {
        public function __construct() {}

        function getLaptopByIdCt($id_ctlaptop){
            if($id_ctlaptop){
                $db = new connect();
                        $query = "SELECT a.id_laptop, a.ten_laptop, a.mieu_ta, a.so_luot_xem,b.id_ctlaptop, b.don_gia, b.giam_gia, b.cpu, b.man_hinh, b.so_luong,
                        c.ten_loai, d.id_dungluong, d.dung_luong,e.id_mau, e.ten_mau, f.url
                                    FROM laptop a
                                    INNER JOIN ct_laptop b ON a.id_laptop = b.id_laptop
                                    INNER JOIN loai c ON a.id_loai = c.id_loai
                                    INNER JOIN dungluong d ON b.id_dungluong = d.id_dungluong
                                    INNER JOIN mau e ON b.id_mau = e.id_mau
                                    INNER JOIN hinhanh f ON b.id_laptop = f.id_laptop
                                    WHERE b.id_ctlaptop = $id_ctlaptop
                                    AND f.id_mau = b.id_mau 
                                ";
            $result = $db->getInstance($query);
            return $result;
            }
        }       
        function getLaptopById($id, $id_ct) {
            if($id){
                $subquery = '';
                if($id_ct != ''){
                    $subquery = " AND b.id_ctlaptop = $id_ct ";
                }
                $db = new connect();
                        $query = "SELECT a.id_laptop, a.ten_laptop, a.mieu_ta, a.so_luot_xem,b.id_ctlaptop, b.don_gia,b.giam_gia, b.cpu, b.man_hinh, b.so_luong, d.id_dungluong, d.dung_luong,e.id_mau, e.ten_mau, f.url
                                    FROM laptop a
                                    INNER JOIN ct_laptop b ON a.id_laptop = b.id_laptop
                                    INNER JOIN dungluong d ON b.id_dungluong = d.id_dungluong
                                    INNER JOIN mau e ON b.id_mau = e.id_mau
                                    INNER JOIN hinhanh f ON b.id_laptop = f.id_laptop
                                    WHERE a.id_laptop = $id
                                        AND f.id_mau = b.id_mau
                                    $subquery
                                    ORDER BY b.don_gia ASC 
                                    LIMIT 1;
                                ";
                                // echo $query;
            $result = $db->getInstance($query);
            return $result;
            }
        }
        function getLaptopByData($id, $id_mau, $id_dungluong) {
            if($id){
                $submau = $id_mau ? " AND b.id_mau = $id_mau ": "";
                $subdl = $id_dungluong ? " AND b.id_dungluong = $id_dungluong " : "";
                $db = new connect();
                        $query = "SELECT a.id_laptop, a.ten_laptop, a.mieu_ta, a.so_luot_xem,b.id_ctlaptop, b.don_gia, b.giam_gia, b.cpu, b.man_hinh, b.so_luong, d. id_dungluong, d.dung_luong,e.id_mau, e.ten_mau, f.url
                                    FROM laptop a
                                    INNER JOIN ct_laptop b ON a.id_laptop = b.id_laptop
                                    INNER JOIN dungluong d ON b.id_dungluong = d.id_dungluong
                                    INNER JOIN mau e ON b.id_mau = e.id_mau
                                    INNER JOIN hinhanh f ON b.id_laptop = f.id_laptop
                                    WHERE a.id_laptop = $id
                                    AND f.id_mau = b.id_mau 
                                    $submau
                                    $subdl
                                    ORDER BY b.don_gia ASC 
                                    LIMIT 1;
                                ";
            $result = $db->getInstance($query);
            return $result;
            }
        }

        function selectMauByDungLuong($id, $id_dungluong) {
            $db = new connect();
            $query = "		SELECT DISTINCT b.id_mau, b.ten_mau
                            FROM ct_laptop a,  mau b
                            WHERE a.id_mau = b.id_mau
                            AND a.id_laptop = $id
                            AND a.id_dungluong = $id_dungluong
                    ";
            $result = $db->getList($query);
            return $result;
        }

        public function getDungLuongByIdLaptop($id){
            $db = new connect();
            $query = "		SELECT DISTINCT b.dung_luong, b.id_dungluong
                            FROM ct_laptop a,  dungluong b
                            WHERE a.id_dungluong = b.id_dungluong
                            AND a.id_laptop = $id
                    ";
            $result = $db->getList($query);
            return $result;
        }
        public function getMauByIdLaptop($id){
            $db = new connect();
            $query = "		SELECT DISTINCT b.id_mau, b.ten_mau
                            FROM ct_laptop a,  mau b
                            WHERE a.id_mau = b.id_mau
                            AND a.id_laptop = $id
                    ";
            $result = $db->getList($query);
            return $result;
        }

        public function getLaptopList(){
            $db = new connect();
            $query = "SELECT * FROM laptop";
            $rs = $db->getList($query);
            return $rs;
        }

        public function getCTLaptopList(){
            $db = new connect();
                        $query = "SELECT a.id_laptop, a.ten_laptop, a.mieu_ta, a.so_luot_xem,b.id_ctlaptop, b.don_gia, b.giam_gia, b.cpu, b.man_hinh, 
                                b.so_luong, d.id_dungluong, d.dung_luong, c.ten_loai, e.id_mau, e.ten_mau, f.url
                                    FROM laptop a
                                    INNER JOIN ct_laptop b ON a.id_laptop = b.id_laptop
                                    INNER JOIN loai c ON a.id_loai = c.id_loai
                                    INNER JOIN dungluong d ON b.id_dungluong = d.id_dungluong
                                    INNER JOIN mau e ON b.id_mau = e.id_mau
                                    INNER JOIN hinhanh f ON b.id_laptop = f.id_laptop
                                    WHERE f.id_mau = b.id_mau 
                                    ORDER BY b.id_ctlaptop ASC;
                                ";
            $result = $db->getList($query);
            return $result;
        }

    }
?>