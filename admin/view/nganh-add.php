<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" class="col-10 mx-auto border border-warning p-2 shadow rounded mt-4" action="<?= ADMIN_URL ?>/?ctrl=nganh&act=insert">
    <div class="row justify-content-center align-items-center text-warning">
        <h1>Thêm ngành</h1>
    </div>
        <div class="form-group">
            <select name="id_nn" class="form-control">
                <option value="">Chọn nhóm ngành</option>
                <?php require_once "models/nhom_nganh.php";
                $ds = getAllNhomnganh();
                foreach ($ds as $row) { ?>
                    <option value="<?= $row['id_nn'] ?>"> <?= $row['ten_nn'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="ten_loai">Tên ngành</label>
            <input type="text" class="form-control"  name="ten_nganh">
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="an_hien" id="anhien1" value="1" checked>
                <label class="form-check-label" for="anhien1"> Hiện </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="an_hien" id="anhien0" value="0">
                <label class="form-check-label" for="anhien0">Ẩn</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>