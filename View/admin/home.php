<div class="container-fluid w-75">
    <h4 class="text-center fw-bold my-3">DANH MỤC SẢN PHẨM</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã SP</td>
                <th>Ảnh</td>
                <th>Tên sản phẩm</td>
                <th>Loại</td>
                <th>Cấu hình</td>
                <th>Màn hình</td>
                <th>Màu</td>
                <th>Mô tả</td>
                <th>Lượt xem</td>
                <th>Đơn giá</td>
                <th>Khuyến mãi</td>
                <th>Số lượng</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $laptop = new laptop();
            $list = $laptop->getCTLaptopList();
            foreach ($list as $item) {
                // var_dump($item);
            ?>
                <tr>
                    <td><?php echo $item['id_ctlaptop']; ?></td>
                    <td><img class="table-product-img" src="<?php echo $item['url']; ?>" alt=""></td>
                    <td><?php echo $item['ten_laptop']; ?></td>
                    <td><?php echo $item['ten_loai']; ?></td>
                    <td><?php echo $item['dung_luong']; ?></td>
                    <td><?php echo $item['man_hinh']; ?></td>
                    <td><?php echo $item['ten_mau']; ?></td>
                    <td>
                        <a type="button" class="" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $item['id_ctlaptop']; ?>">
                            Xem mô tả
                        </a>
                        <div class="modal fade " id="modal-<?php echo $item['id_ctlaptop']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mô tả</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $item['mieu_ta']; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Đóng</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                    <td><?php echo $item['so_luot_xem']; ?></td>
                    <td><?php echo number_format($item['don_gia'], 0, ',', '.'); ?> đ</td>
                    <td><?php echo $item['giam_gia']; ?> %</td>
                    <td><?php echo $item['so_luong']; ?></td>
                </tr>

        </tbody>

    <?php
            }; ?>
    </table>
</div>