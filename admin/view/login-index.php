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
        <div class="section-login-create flex-betw">
            <h2>LOGIN</h2>
            <?php
            session_start();
            unset($_SESSION['admin']);
            ?>
            <form action="/quan-ly-thuc-tap/admin/?ctrl=home&act=dangnhap" method="POST" > 
                <div class="login flex-betw">
                    <div class="login-sec flex-betw">
                        <label for="user">Tên đăng nhập</label>
                        <input type="text" name="user" id="user" required>
                    </div>
                    <div class="login-sec flex-betw">
                        <label for="pass">Mật khẩu</label>
                        <input type="password" name="pass" id="pass" required>
                    </div>
                    <div class=" form-group">
                       <a href="/quan-ly-thuc-tap/admin/?ctrl=home&act=taikhoan">Quên mật khẩu</a>
                    </div>
                    <div class=" form-group  justify-content-center align-items-cen ter ">
                        <button type="submit" class="btn btn-block btn-primary">Đăng nhập</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </section>
</body>
</html>