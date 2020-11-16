<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" class="col-10 mx-auto border border-warning p-2 shadow rounded mt-4" action="<?= ADMIN_URL ?>/?ctrl=nganh&act=update">
        <div class="row justify-content-center align-items-center text-warning">
            <h1>Sửa ngành</h1>
        </div>
        <input type="hidden" name="id_nganh" value="<?=$row['id_nganh']?>">
        <div class="form-group">
        <label for="ten_loai">Tên nhóm ngành</label>
            <select name="id_nn" class="form-control">
                <?php require_once "/nhom_nganh.php";
                $ds = getAllNhomnganh();
                foreach ($ds as $nn) { ?>
                    <?php if ($row['id_nn'] == $nn['id_nn']) { ?>
                        <option value="<?= $nn['id_nn'] ?>" selected="selected"> <?= $nn['ten_nn'] ?></option>
                    <?php } else { ?>
                        <option value="<?= $nn['id_nn'] ?>"> <?= $nn['ten_nn'] ?></option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="ten_loai">Tên ngành</label>
            <input type="text" class="form-control" name="ten_nganh" value="<?= $row['ten_nganh'] ?>">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="an_hien" id="anhien1" value="1" <?= ($row['an_hien'] == 1) ? "checked" : ""; ?>>
            <label class="form-check-label" for="anhien1"> Hiện </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="an_hien" id="anhien0" value="0" <?= ($row['an_hien'] == 0) ? "checked" : ""; ?>>
            <label class="form-check-label" for="anhien0">Ẩn</label>
        </div>
        <div class="row form-group  justify-content-center align-items-center ">
        <button type="submit" class="btn btn-primary">Lưu lại</button>
        </div>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>