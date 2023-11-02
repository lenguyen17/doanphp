<?php
$item = array();
if (isset($_GET['id_ctlaptop'])) {
    $id_ctlaptop = $_GET['id_ctlaptop'];
    $laptop = new laptop();
    $item = $laptop->getLaptopByIdCt($id_ctlaptop);
}
?>

<div class="container w-75">
    <h4 class="text-center fw-bold">SỬA SẢN PHẨM</h4>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Mã sản phẩm</label>
            <input type="number" class="form-control" value="<?php echo $item['id_ctlaptop']; ?>">
        </div>
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" class="form-control" value="<?php echo $item['ten_laptop']; ?>">
        </div>
        <div class="form-group">
            <label for="">Loại</label>
            <input type="text" class="form-control" value="<?php echo $item['ten_loai']; ?>">
        </div>
        <div class="form-group">
            <label for="">Cấu hình</label>
            <input type="text" class="form-control" value="<?php echo $item['dung_luong']; ?>">
        </div>
        <div class="form-group">
            <label for="">Màn hình</label>
            <input type="text" class="form-control" value="<?php echo $item['man_hinh']; ?>">
        </div>
        <div class="form-group">
            <label for="">Màu</label>
            <input type="text" class="form-control" value="<?php echo $item['ten_mau']; ?>">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <input type="text" class="form-control" value="<?php echo $item['mieu_ta']; ?>">
        </div>
        <div class="form-group">
            <label for="">Lượt xem</label>
            <input type="number" class="form-control" value="<?php echo $item['so_luot_xem']; ?>">
        </div>
        <div class="form-group">
            <label for="">Khuyến mãi (%)</label>
            <input type="number" class="form-control" value="<?php echo $item['giam_gia']; ?>">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="number" class="form-control" value="<?php echo $item['so_luong']; ?>">
        </div>

    </form>
</div>