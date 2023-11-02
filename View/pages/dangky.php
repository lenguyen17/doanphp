<div class="container my-3">
    <form action="index.php?action=dangky&act=dangky_action" method="post">
        <div class="w-25 mx-auto">
            <h4 class="text-center">ĐĂNG KÝ</h4>
            <div class="my-2 form-group">
                <label for="">Họ tên</label>
                <input type="text" name="txtetenkh" class="form-control" required>
            </div>
            <div class="my-2 form-group">
                <label for="">Email</label>
                <input type="text" name="txtemail" class="form-control" required>
            </div>
            <div class="my-2 form-group">
                <label for="">Password</label>
                <input type="password" name="txtpassword" class="form-control" required>
            </div>
            <div class="my-2 form-group">
                <label for="">Số điện thoại</label>
                <input type="text" name="txtsodt" class="form-control" required>
            </div>
            <div class="my-2 form-group">
                <label for="">Địa chỉ</label>
                <input type="text" name="txtdiachi" class="form-control" required>
            </div>
            <div class="my-2 d-flex justify-content-between">
                <a href="index.php?action=dangnhap&act=dangnhap">Đăng nhập</a>
                <a href="#">Quên mật khẩu ?</a>
            </div>
            <button class="btn btn-outline-danger w-100" type="submit">SIGN UP</button>
        </div>
    </form>
</div>