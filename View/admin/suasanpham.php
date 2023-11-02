<?php
$item = array();
if (isset($_GET['id_ctlaptop'])) {
    $id_ctlaptop = $_GET['id_ctlaptop'];
    $laptop = new laptop();
    $item = $laptop->getLaptopByIdCt($id_ctlaptop);
}
?>

<div class="container w-75">
    <h4 class="text-center fw-bold my-3">SỬA SẢN PHẨM</h4>
    <form action="" method="post">
        <div class="row">
            <div class="form-group col-lg-6 mb-2">
                <label for="">Mã sản phẩm</label>
                <input type="number" class="form-control" value="<?php echo $item['id_ctlaptop']; ?>">
            </div>
            <div class="form-group col-lg-6 my-2">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" value="<?php echo $item['ten_laptop']; ?>">
            </div>
            <div class="form-group col-lg-6 my-2">
                <label for="">Loại</label>
                <input type="text" class="form-control" value="<?php echo $item['ten_loai']; ?>">
            </div>
            <div class="form-group col-lg-6 my-2">
                <label for="">Cấu hình</label>
                <input type="text" class="form-control" value="<?php echo $item['dung_luong']; ?>">
            </div>
            <div class="form-group col-lg-6 my-2">
                <label for="">Màn hình</label>
                <input type="text" class="form-control" value="<?php echo $item['man_hinh']; ?>">
            </div>
            <div class="form-group col-lg-6 my-2">
                <label for="">Màu</label>
                <input type="text" class="form-control" value="<?php echo $item['ten_mau']; ?>">
            </div>
            <div class="form-group col-lg-6 my-2">
                <label for="">Mô tả</label>
                <textarea name="mieu_ta" id="" class="form-control" cols="30" rows="10"><?php echo $item['mieu_ta']; ?></textarea>
            </div>
            <div class="form-group col-lg-6 my-2">
                <label for="">Lượt xem</label>
                <input type="number" class="form-control" value="<?php echo $item['so_luot_xem']; ?>">
            </div>
            <div class="form-group col-lg-6 my-2">
                <label for="">Khuyến mãi (%)</label>
                <input type="number" class="form-control" value="<?php echo $item['giam_gia']; ?>">
            </div>
            <div class="form-group col-lg-6 my-2">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" value="<?php echo $item['so_luong']; ?>">
            </div>
        </div>
        <button class="btn btn-primary float-end">Cập nhật</button>
    </form>
</div>