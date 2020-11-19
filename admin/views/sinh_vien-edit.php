

<body>
    <form method="POST" class="col-10 mx-auto border border-warning p-2 shadow rounded mt-4" action="<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=update" enctype="multipart/form-data">
        <div class="row justify-content-center align-items-center text-warning">
            <h1>Sửa sinh viên</h1>
        </div>
        <input type="hidden" name="id_sv" value="<?= $row['id_sv'] ?>">
        <div class="row">
            <div class="form-group col-6">
            <label for="">Email</label>
                <?php $ds = getAllUser();
                foreach ($ds as $u) { ?>
                    <?php if ($row['id_user'] == $u['id_user']) { ?>
                        <input type="email" class="form-control" required id="email" name="email" value="<?= $u['email'] ?>">
                    <?php } ?>
                <?php } ?>
                <?php if (isset($email_error)) { ?>
                    <span class="badge badge-warning"> <?= $email_error ?> </span>
                <?php } ?>
                <span id="kqcheckemail"></span>
            </div>
            <div class="form-group col-6">
                <label for="">Mật khẩu</label>
                <?php $ds = getAllUser();
                foreach ($ds as $u) { ?>
                    <?php if ($row['id_user'] == $u['id_user']) { ?>
                        <input type="text" class="form-control" required id="email" name="pass" value="<?= $u['pass'] ?>">
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="">Mã số sinh viên</label>
                <input type="text" class="form-control" id="mssv" name="mssv" required value="<?= $row['mssv'] ?>">
                <?php if (isset($mssv_error)) { ?>
                    <span class="badge badge-warning"> <?= $mssv_error ?> </span>
                <?php } ?>
                <span id="kqcheckmssv"></span>
            </div>
            <div class="form-group col-6">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="sdt" name="sdt" required value="<?= $row['sdt'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="">Họ tên sinh viên</label>
                <input type="text" class="form-control" id="user" name="ho_ten" required value="<?= $row['ho_ten'] ?>">
            </div>
            <div class="form-group col-6">
                <label for="">Tên ngành</label>
                <select name="id_nganh" class="form-control" required>
                    <option value="">Chọn ngành</option>
                    <?php require_once "models/nganh.php";
                    $ds = getAllNganh();
                    foreach ($ds as $r) { ?>
                        <?php if ($row['id_nganh'] == $r['id_nganh']) { ?>
                            <option value="<?= $r['id_nganh'] ?>" selected="selected"> <?= $r['ten_nganh'] ?></option>
                        <?php } else { ?>
                            <option value="<?= $r['id_nganh'] ?>"> <?= $r['ten_nganh'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="">Hình ảnh:</label>
                <input type="file" class="form-control" name="anh">
            </div>
            <div class="form-group col-6">
                <label for="">Giới tính :</label>
                <select name="gioi_tinh" id="" class="form-control">
                    <option value="0" <?= ($row['gioi_tinh'] == 0) ? "selected" : ""; ?>>Nam</option>
                    <option value="1" <?= ($row['gioi_tinh'] == 1) ? "selected" : ""; ?>>Nữ</option>
                </select>
            </div>
        </div>
        <div class="row">
        
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
        <div class="row form-group  justify-content-center align-items-center ">
            <button type="submit" class="btn btn-primary">Lưu lại</button>
        </div>
    </form>
</body>
<script>
    $(document).ready(function() {
        $("#user").blur(function() {
            u = $(this).val();
            $("#kqcheckuser").load("<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=kiemtrauser&user=" + u);
        });
    });
    $(document).ready(function() {
        $("#mssv").blur(function() {
            u = $(this).val();
            $("#kqcheckmssv").load("<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=kiemtramssv&mssv=" + u);
        });
    });
    $(document).ready(function() {
            $("#email").blur(function() {
                u = $(this).val();
                $("#kqcheckemail").load("<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=kiemtraemail&email=" + u);
            });
        });
</script>
