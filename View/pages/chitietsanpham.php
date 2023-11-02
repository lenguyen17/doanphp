<?php 
    // ?action=shop&act=detail&idlaptop=1
    // ORDERY BY
    // unset($_SESSION['cart']);
    $idlaptop = isset($_GET['idlaptop']) ? $_GET['idlaptop'] : '';
    if(!$idlaptop){
        echo "KHÔNG TÌM THẤY SẢN PHẨM";
    }else {
        //GET DATA
        $laptop = new laptop();
        $result = array();
        $id_mau = isset($_GET['idmau']) ? $_GET['idmau'] : '';
        $id_dungluong = isset($_GET['iddungluong']) ? $_GET['iddungluong'] : '';
        if( $id_dungluong != '' && $id_mau != '') {
            $result = $laptop->getLaptopByData($idlaptop,$id_mau, $id_dungluong);
            if(!$result){
                $result = $laptop->getLaptopByData($idlaptop,"", $id_dungluong);
                $id_mau = $result['id_mau'];
            }
        }else {
            $subid = isset($_GET['subid']) ? $_GET['subid'] : '';
            $result = $laptop->getLaptopById($idlaptop, $subid);
            $id_dungluong = $result['id_dungluong'];
            $id_mau = $result['id_mau'];
        }
        $id_ctlaptop = $result['id_ctlaptop'];
            $active = "";
        
?>
<div class="container-fluid" style="background-color: #ECECEC;">
    <div class="container px-3">
        <div class="container p-0" style="background-color: #fff; border-radius: 5px;">
            <!-- Đường dẫn -->
            <div class="container-fluid">
                <a href="index.php?action=home" class="menu-link ">Trang chủ</a>/
                <a href="index.php?action=shop&act=shop" class="menu-link ">Laptop</a>/
                <a href="#" class="menu-link ">Sản phẩm</a>
            </div>
            <div class="row">
                <div class="col-lg-4 p-5" style="border-right: 1px solid #ECECEC;">
                    <img src="<?php echo $result['url']?>" width="100%" alt="">
                </div>
                <div class="col-lg-8 p-5">
                    <h1 class="product-title mb-3"><?php echo $result['ten_laptop'];?></h1>
                    <div class="d-flex">
                        <?php 
                            if($result['giam_gia'] > 0) { ?>
                        <div class="product-price">
                            <?php echo number_format((1-$result['giam_gia']/100)*$result['don_gia'], 0, ',', '.'); ?>đ
                        </div>
                        <del
                            class="product-presale my-auto"><?php echo number_format($result['don_gia'], 0, ',', '.')?>đ</del>
                        <span class="pro-percent my-auto"><?php echo '-'.$result['giam_gia']?>%</span>
                        <?php }else {?>
                        <div class="product-price"><?php echo number_format($result['don_gia'], 0, ',', '.'); ?>đ</div>
                        <?php }?>
                    </div>

                    <div class="card my-3">
                        <div class="card-header">
                            <h5 class="card-title">Tùy chọn cấu hình</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                    <table>
                                        <tr>
                                            <td style="width: 100px;"><span class="product-info-title">CPU</span></td>
                                            <td>
                                                <button
                                                    class='product-info-select active'><?php echo $result['cpu']?></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="product-info-title">Dung lượng</span></td>
                                            <td>
                                                <?php 
                                                $dungluong = $laptop->getDungLuongByIdLaptop($result['id_laptop']);
                                                foreach ($dungluong as $row) {
                                                    if($result['dung_luong'] == $row['dung_luong']){
                                                        $active = 'active';
                                                    }else {
                                                        $active = '';
                                                    }
                                                    echo "<a href='index.php?action=shop&act=detail&idlaptop=$idlaptop&idram=&iddungluong=".$row['id_dungluong']."&idmau=$id_mau' 
                                                            class='product-info-select $active text-center' >
                                                                ". $row['dung_luong']. " 
                                                            </a>";
                                                }
                                               ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="product-info-title">Màu</span></td>
                                            <td>
                                                <?php 
                                                    $colors = $laptop->selectMauByDungLuong($idlaptop, $id_dungluong);
                                                    foreach ($colors as $row) {
                                                        if($id_mau == $row['id_mau']){
                                                            $active = 'active';
                                                        }else {
                                                            $active = '';
                                                        }
                                                        echo "<a href='index.php?action=shop&act=detail&idlaptop=$idlaptop&idram=&iddungluong=$id_dungluong&idmau=".$row['id_mau']."'
                                                                class='product-info-select $active text-center'>
                                                                    ". $row['ten_mau']. "
                                                                </a>";
                                                    }
                                               ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="product-info-title">Màn hình</span></td>
                                            <td>
                                                <button
                                                    class='product-info-select active'><?php echo $result['man_hinh']?></button>
                                            </td>
                                        </tr>
                                    </table>
                            </div>
                        </div>
                    </div>
                    <form action="index.php?action=giohang&act=giohang" method="post">
                        <div class="d-none">
                            <input type="text" name="id_ctlaptop" value="<?php echo $id_ctlaptop;?>">
                            <input type="number" name="so_luong_mua" value="1">
                        </div>                           
                        <button class="btn-buynow my-3" type="submit">MUA NGAY</button>
                    </form>
                    <div class="product-desc-short">
                        <p><span style="font-size:18px">✔&nbsp;Bảo hành chính hãng 24&nbsp;tháng.&nbsp;</span></p>
                        <p><span style="font-size:18px">✔ Hỗ trợ đổi mới trong 7 ngày.&nbsp;</span></p>
                        <p><span style="font-size:18px">✔ Windows bản quyền tích hợp.&nbsp;</span></p>
                        <p><span style="font-size:18px">✔ Miễn phí giao hàng toàn quốc.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php };?>