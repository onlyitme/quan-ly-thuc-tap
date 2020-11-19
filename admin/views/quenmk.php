

<head>
    <title>Login</title>
    <link rel="stylesheet" href="/quan-ly-thuc-tap/admin/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <section class="section-login">
        <div class="section-login-create flex-betw">
        <div class="row form-group  justify-content-center align-items-center">
            <h2>QUÊN MẬT KHẨU</h2>
        </div>
            <form action="/quan-ly-thuc-tap/admin/?ctrl=home&act=quenmk" method="POST">
                <div class="login flex-betw p-3 ">
                    <div class=" form-group ">
                        <input type="text" name="user" id="user" class="form-control border-top border-left border-right py-4" required placeholder="Nhập tên đăng nhập">
                        <?php if (isset($user_error)) { ?>
                            <span class="badge badge-warning"> <?= $user_error ?> </span>
                        <?php } ?>
                        <span id="kqcheckuser"></span>
                    </div>
                    <div class="login-sec flex-betw">
                        <input type="email" name="email" id="pass" class="form-control border-top border-left border-right py-4" required placeholder="Nhập email xác nhận">
                    </div>
                    
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/quan-ly-thuc-tap/admin/?ctrl=home" class="btn btn-outline-light text-decoration-none">↩ Quay lại</a>
                        <button type="submit" class="btn btn-primary font-weight-bold col ml-3">Xác nhận</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $("#user").blur(function() {
                u = $(this).val();
                $("#kqcheckuser").load("<?= ADMIN_URL ?>/?ctrl=home&act=kiemtrauser&user=" + u);
            });
        });
    </script>
</body>

