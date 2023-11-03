<div class="container-fluid w-75">
    <h4 class="text-center fw-bold my-3">DANH SÁCH KHÁCH HÀNG</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã KH</td>
                <th>Họ tên</td>
                <th>Email</td>
                <th>Password</td>
                <th>Quyền hạn</td>
                <th>SỐ điện loại</td>
                <th>Địa chỉ</td>
                <th>Tùy chọn</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $user = new user();
            $listUser = $user->getAllUser();
            foreach ($listUser as $item) {
                // var_dump($item);
            ?>
                <tr>
                    <td><?php echo $item['id_user']; ?></td>
                    <td><?php echo $item['ten_kh']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td><?php echo $item['password']; ?></td>
                    <td><?php echo $item['ten_quyen']; ?></td>
                    <td><?php echo $item['so_dien_thoai']; ?></td>
                    <td><?php echo $item['dia_chi']; ?></td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center">
                            <a href="index.php?action=quanly&act=chinhsua&id_ctlaptop="class="me-2">
                                <button class="bg-transparent border-0"><i class="fa-regular fa-pen-to-square text-primary"></i></button>
                            </a>
                            <form action="index.php?action=quanly&act=delete_action&id_ctlaptop=" method="get" class="me-2">
                                <button class="bg-transparent border-0"><i class="fa fa-trash text-danger" onclick="confirmSubmit(event)"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>

        </tbody>

    <?php
            }; ?>
    </table>
</div>

<script>
    // Confirm before submit
    function confirmSubmit(event) {
        if (!confirm("Bạn có chắc chắn muốn xóa?")) {
            event.preventDefault();
        }
    }
</script>