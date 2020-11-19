<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/quan-ly-thuc-tap/admin/css/style.css">
</head>

<body>
    <section class="section-login">
        <div class="section-login-create flex-betw text-center">
            <h2>ĐĂNG NHẬP</h2>
            <?php
            session_start();
            unset($_SESSION['admin']);
            ?>
            <form action="/quan-ly-thuc-tap/admin/?ctrl=home&act=dangnhap" method="POST"  > 
                <div class="login flex-betw p-3 ">
                    <div class=" form-group flex-betw ">
                        <input type="text" class="form-control border-top border-left border-right py-4" name="user" id="user" placeholder="Nhập tài khoản . . ." required>
                    </div>
                    <div class=" form-group flex-betw">
                        <input type="password" class="form-control border-top border-left border-right py-4" name="pass" id="pass"  placeholder="Nhập mật khẩu . . ."   required>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/quan-ly-thuc-tap/admin/?ctrl=home&act=taikhoan" class="btn btn-outline-light text-decoration-none">Quên mật khẩu ?</a>
                        <button type="submit" class="btn btn-primary w-50">Đăng nhập</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </section>
</body>
</html>