<?php 

    class giohang {
        function add_items($id_ctlaptop, $quantity){
            $laptop = new laptop();
            $sanpham = $laptop->getLaptopByIdCt($id_ctlaptop);
            $dongia = $sanpham['don_gia'];
            $giam_gia = $sanpham['giam_gia'];
            $gia_da_giam = $dongia * (1-$giam_gia/100);
            $max_so_luong = $sanpham['so_luong'];
            // $soluong = $sanpham['soluong'];
            $total = $quantity * $gia_da_giam;
            $item = array(
                "id_ctlaptop" => $id_ctlaptop,
                "ten_laptop" => $sanpham['ten_laptop'],
                "url" => $sanpham['url'],
                "don_gia" => $gia_da_giam,
                "so_luong_mua" => $quantity,
                "max_so_luong" => $max_so_luong,
                "ten_mau" => $sanpham['ten_mau'],
                "dung_luong" => $sanpham['dung_luong'],
                "tong_tien" => $total,
            );
            $_SESSION['cart'][] = $item;
        }

        function getTotal(){
            $subtotal = 0;
            foreach($_SESSION['cart'] as $item){
                $subtotal += $item['total'];
            }
            return number_format($subtotal,2);
        }
        
        function delete_items($vitri){
            unset($_SESSION['cart'][$vitri]);
        }

        function delete_items_by_id($id_ctlaptop){
            $newCart = array();
            foreach ($_SESSION['cart'] as $item) {
                if ($item['id_ctlaptop'] !== $id_ctlaptop) {
                    $newCart[] = $item;
                }
            }
            $_SESSION['cart'] = $newCart;
        }

        function update_items($vitri, $so_luong_mua){
            if($so_luong_mua<=0){
                $this->delete_items($vitri);
            } else {
                $_SESSION['cart'][$vitri]['so_luong_mua'] = $so_luong_mua;
                $total_new = $_SESSION['cart'][$vitri]['so_luong_mua'] * $_SESSION['cart'][$vitri]['don_gia'];
                $_SESSION['cart'][$vitri]['total'] = $total_new;
            }
        }

        function kiemTraTonTai($id_ctlaptop) {
            $daTonTai = false;
            if(isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                $cartCount = count($cart);
                for($i = 0; $i < $cartCount; $i++) {
                    if($cart[$i]['id_ctlaptop'] == $id_ctlaptop){
                        $daTonTai = true;
                        break;
                    }
                }
            }
            return $daTonTai;
        }

        function themSpDaCo($id_ctlaptop){
            if(isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                $cartCount = count($cart);
                for($i = 0; $i < $cartCount; $i++) {
                    if($cart[$i]['id_ctlaptop'] == $id_ctlaptop){
                        $_SESSION['cart'][$i]['so_luong_mua'] += 1;
                        $this->update_items($i,$_SESSION['cart'][$i]['so_luong_mua']);
                        break;
                    }
                }
            }
        }
    }
?>