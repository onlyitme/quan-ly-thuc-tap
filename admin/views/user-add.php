<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</head>

<body>
    <form method="POST" class="col-8 mx-auto border border-warning p-2 shadow rounded mt-4" action="<?= ADMIN_URL ?>/?ctrl=user&act=insert" enctype="multipart/form-data">
        <div class="row justify-content-center align-items-center text-warning">
            <h1>Thêm user</h1>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="user" name="user" required placeholder="Tên tài khoản">
            <?php if (isset($user_error)) { ?>
                <span class="badge badge-warning"> <?= $user_error ?> </span>
            <?php } ?>
            <span id="kqcheckuser"></span>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="pass" required placeholder="Mật khẩu">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" required id="email" name="email" placeholder="Email">
            <?php if (isset($email_error)) { ?>
                <span class="badge badge-warning"> <?= $email_error ?> </span>
            <?php } ?>
            <span id="kqcheckemail"></span>
        </div>
        <div class="form-group">
            <label for="">Vai trò :</label>
            <select name="chuc_vu" id="">
                <option value="0">Sinh viên</option>
                <option value="1">Doanh nghiệp</option>
                <option value="2">Admin</option>
            </select>
        </div>
        <div class="row form-group  justify-content-center align-items-center ">
            <button type="submit" class="btn btn-primary">Lưu lại</button>
        </div>
    </form>
    <script>
        $(document).ready(function() {
            $("#user").blur(function() {
                u = $(this).val();
                $("#kqcheckuser").load("<?= ADMIN_URL ?>/?ctrl=user&act=kiemtrauser&user=" + u);
            });
        });
        $(document).ready(function() {
            $("#email").blur(function() {
                u = $(this).val();
                $("#kqcheckemail").load("<?= ADMIN_URL ?>/?ctrl=user&act=kiemtraemail&email=" + u);
            });
        });
    </script>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>