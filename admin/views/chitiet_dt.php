<h1></b> <?= $row['tieu_de'] ?></h1>
<div class="row">
    <div class="col-5"><img src="views/images/<?= $row['anh'] ?>" width="80%" onerror="this.src='views/images/avt.jpg';"></div>
    <div class="col-7">
        <ul class="list-group">
            <li class="list-group-item"><?php
                                        $ds = getAllDoanhnghiep();
                                        foreach ($ds as $r) { ?>
                    <?php if ($row['id_dn'] == $r['id_dn']) { ?>
                        <b>Tên doanh nghiệp:</b> <?= $r['ten_dn'] ?><br>
                    <?php } ?>
                <?php } ?></li>
            <li class="list-group-item"> <?php require_once "models/nganh.php";
                                            $ds = getAllNganh();
                                            foreach ($ds as $r) { ?>
                    <?php if ($row['id_nganh'] == $r['id_nganh']) { ?>
                        <b>Ngành tuyển:</b> <?= $r['ten_nganh'] ?><br>
                    <?php } ?>
                <?php } ?></li>
            <li class="list-group-item"><b>Yêu cầu:</b> <?= $row['yeu_cau'] ?><br>
            <li class="list-group-item"><b>Lương:</b> <?= $row['luong'] ?>$<br>
            <li class="list-group-item"> <b>Số lượng cần:</b> <?= $row['sl_sv_can'] ?><br></li>
            <li class="list-group-item"> <b>Số lượng sinh viên đăng ký:</b> <?= $row['sl_sv_dk'] ?><br></li>
            <li class="list-group-item"><button class="btn btn-success"><a class="text-light" href="<?= ADMIN_URL ?>/?ctrl=dang_tuyen&act=ung_tuyen&id_dt=<?= $row['id_dt'] ?>"> Chi tiết sinh viên ứng tuyển</a></button>
                <button class="btn btn-danger"> <a class="text-light" href="?ctrl=dang_tuyen&act=delete&id_dt=<?= $row['id_dt'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');">Xoá đăng tuyển</a></button>
            </li>
        </ul>
    </div>
</div>
<hr>
<div><?= $row['mo_ta'] ?></div>