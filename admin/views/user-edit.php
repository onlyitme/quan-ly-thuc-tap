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
    <form method="POST" class="col-8 mx-auto border border-warning p-2 shadow rounded mt-4" action="<?= ADMIN_URL ?>/?ctrl=user&act=update" enctype="multipart/form-data">
        <div class="row justify-content-center align-items-center text-warning">
        <input type="hidden" class="form-control" name="id_user" value="<?= $row['id_user'] ?>">    
            <h1>Sửa user</h1>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="user" value="<?= $row['user'] ?>">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="pass" value="<?= $row['pass'] ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="email"  value="<?= $row['email'] ?>">
            <?php if (isset($email_error)) { ?>
                <span class="badge badge-warning"> <?= $email_error ?> </span>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="">Vai trò :</label>
            <select name="chuc_vu" id="">
                <option value="0" <?= ($row['chuc_vu'] == 0) ? "selected" : ""; ?>>Sinh viên</option>
                <option value="1" <?= ($row['chuc_vu'] == 1) ? "selected" : ""; ?>>Doanh nghiệp</option>
                <option value="2" <?= ($row['chuc_vu'] == 2) ? "selected" : ""; ?>>Admin</option>
            </select>
        </div>
        <div class="row form-group  justify-content-center align-items-center ">
        <button type="submit" class="btn btn-primary">Lưu lại</button>
        </div>
    </form>
</body>

</html>