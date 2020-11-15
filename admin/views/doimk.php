<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
    <form class="col-10 mx-auto border border-warning p-2 shadow rounded mt-4" method="post" action="<?= ADMIN_URL ?>/?ctrl=user&act=doimk">
        <div class="form-group">
            <h1 class="row justify-content-center align-items-center text-info">Đổi mật khẩu</h1>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control"  name="user" id="user" required placeholder="Nhập user">
            <?php if (isset($user_error)) { ?>
                <span class="badge badge-warning"> <?= $user_error ?> </span>
            <?php } ?>
            <span id="kqcheckuser"></span>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mật khẩu</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass"  placeholder="Nhập mật khẩu hiện tại">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mật khẩu mới</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass_new"  placeholder="Nhập mật khẩu mới">
        </div>
        <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
    </form>
    <script>
        $(document).ready(function() {
            $("#user").blur(function() {
                u = $(this).val();
                $("#kqcheckuser").load("<?= ADMIN_URL ?>/?ctrl=home&act=kiemtrauser&user=" + u);
            });
        });
    </script>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>