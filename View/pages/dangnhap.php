<div class="container my-3">
    <form action="index.php?action=dangnhap&act=dangnhap_action" method="post">
        <div class="w-25 mx-auto">
            <h4 class="text-center">ĐĂNG NHẬP</h4>
            <div class="my-2 form-group">
                <label for="">Email</label>
                <input type="text" name="txtemail" class="form-control">
            </div>
            <div class="my-2 form-group">
                <label for="">Password</label>
                <input type="password" name="txtpassword" class="form-control">
            </div>
            <div class="my-2 d-flex justify-content-between">
                <a href="index.php?action=dangky&act=dangky">Đăng ký</a>
                <a href="index.php?action=forgetpw&act=forgetpw">Quên mật khẩu ?</a>
            </div>
            <button class="btn btn-outline-danger w-100" type="submit">LOGIN</button>
        </div>
    </form>
</div>