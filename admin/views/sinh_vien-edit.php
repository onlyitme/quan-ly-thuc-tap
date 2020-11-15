<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" class="col-10 mx-auto border border-warning p-2 shadow rounded mt-4" action="<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=update" enctype="multipart/form-data">
        <div class="row justify-content-center align-items-center text-warning">
            <h1>Sửa sinh viên</h1>
        </div>
        <input type="hidden" name="id_sv" value="<?= $row['id_sv'] ?>" >
        <div class="row">
            <div class="form-group col-6">
                <select name="id_user" class="form-control">
                    <option value="">Chọn user</option>
                    <?php
                    $ds = getAllUser();
                    foreach ($ds as $r) { ?>
                       <?php if ($row['id_user'] == $r['id_user']) { ?>
                            <option value="<?= $r['id_user'] ?>" selected="selected"> <?= $r['user'] ?></option>
                        <?php } else { ?>
                            <option value="<?= $r['id_user'] ?>"> <?=  $r['user'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-6">
                <select name="id_nganh"class="form-control" required>
                    <option value="">Chọn ngành</option>
                    <?php require_once "models/nganh.php";
                    $ds = getAllNganh();
                    foreach ($ds as $r) { ?>
                        <?php if ($row['id_nganh'] == $r['id_nganh']) { ?>
                             <option value="<?= $r['id_nganh'] ?>" selected="selected"> <?= $r['ten_nganh'] ?></option>
                         <?php } else { ?>
                             <option value="<?= $r['id_nganh'] ?>"> <?=  $r['ten_nganh'] ?></option>
                         <?php } ?>
                     <?php } ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <input type="text" class="form-control" id="mssv" name="mssv" required value="<?= $row['mssv'] ?>">
                <?php if (isset($user_error)) { ?>
                    <span class="badge badge-warning"> <?= $user_error ?> </span>
                <?php } ?>
                <span id="kqcheckuser"></span>
            </div>
            <div class="form-group col-6">
                <input type="number" class="form-control" id="sdt" name="sdt" required value="<?= $row['sdt'] ?>">
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="user" name="ho_ten" required value="<?= $row['ho_ten'] ?>">
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="">Hình ảnh:</label>
                <input type="file" class="form-control" name="hinh">
            </div>
            <div class="form-group col-6">
                <label for=""><br>Giới tính:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gioi_tinh" id="gioi_tinh1" value="1" <?= ($row['gioi_tinh'] == 1) ? "checked" : ""; ?>>
                    <label class="form-check-label"> Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gioi_tinh" id="gioi_tinh0" value="0" <?= ($row['gioi_tinh'] == 0) ? "checked" : ""; ?>>
                    <label class="form-check-label">Nữ</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="">Kết quả:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ket_qua" id="ket_qua1" value="1" <?= ($row['ket_qua'] == 1) ? "checked" : ""; ?>>
                    <label class="form-check-label"> Đậu</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ket_qua" id="ket_qua0" value="0" <?= ($row['ket_qua'] == 0) ? "checked" : ""; ?>>
                    <label class="form-check-label">Rớt</label>
                </div>
            </div>
            <div class="form-group col-6">
                <label for="">Trạng thái:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai1" value="1" <?= ($row['trang_thai'] == 1) ? "checked" : ""; ?>>
                    <label class="form-check-label"> Đã có nơi thực tập</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai0" value="0" <?= ($row['trang_thai'] == 0) ? "checked" : ""; ?>>
                    <label class="form-check-label">Chưa có nơi thực tập</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="ghi_chu" rows="5"><?= $row['ghi_chu'] ?></textarea>
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