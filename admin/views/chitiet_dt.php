<div class="row m-2">
    <div class="alert alert-primary w-100  mt-4 " role="alert">
        <h1><?= $row['tieu_de'] ?></h1>
        <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home    "></i> Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Danh sách sinh viên</li>
                </ol>
            </nav> -->
    </div>
</div>
<div class="row m-2">
    <div class="col-3"><img src="views/images/<?= $row['anh'] ?>" width="80%"
            onerror="this.src='views/images/avt.jpg';"></div>
    <div class="col-7">
        <?php
                     $ds = getAllDoanhnghiep();
                       foreach ($ds as $r) { ?>
        <?php if ($row['id_dn'] == $r['id_dn']) { ?>
        <div class="row  mx-1 mb-1">
            <div class="col-4 bg-primary text-white py-3 rounded-left">
                <b> Tên doanh nghiệp </b>
            </div>
            <div class="col-6  py-3 border-top border-right border-bottom rounded-right">
                <?= $r['ten_dn'] ?>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
        <?php require_once "models/nganh.php";
                                            $ds = getAllNganh();
                                            foreach ($ds as $r) { ?>
        <?php if ($row['id_nganh'] == $r['id_nganh']) { ?>
        <div class="row  mx-1 mb-1">
            <div class="col-4 bg-primary text-white py-3 rounded-left">
                <b> Ngành tuyển </b>
            </div>

            <div class="col-6  py-3 border-top border-right border-bottom rounded-right">
                <?= $r['ten_nganh'] ?>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
        <div class="row  mx-1 mb-1">
            <div class="col-4 bg-primary text-white py-3 rounded-left">
                <b> Yêu cầu </b>
            </div>
            <div class="col-6  py-3 border-top border-right border-bottom rounded-right">
                <?= $row['yeu_cau'] ?>
            </div>
        </div>
        <div class="row  mx-1 mb-1">
            <div class="col-4 bg-primary text-white py-3 rounded-left">
                <b> Lương </b>
            </div>
            <div class="col-6  py-3 border-top border-right border-bottom rounded-right">
                <?= $row['luong'] ?>$
            </div>
        </div>
        <div class="row  mx-1 mb-1">
            <div class="col-4 bg-primary text-white py-3 rounded-left">
                <b> Số lượng cần </b>
            </div>
            <div class="col-6  py-3 border-top border-right border-bottom rounded-right">
                <?= $row['sl_sv_can'] ?>
            </div>
        </div>
        <div class="row  mx-1 mb-1">
            <div class="col-4 bg-primary text-white py-3 rounded-left">
                <b> Số lượng SV đăng kí </b>
            </div>
            <div class="col-6  py-3 border-top border-right border-bottom rounded-right">
                <?= $row['sl_sv_dk'] ?>
            </div>
        </div>
        <div class="row  mx-1 mb-1 mt-4">
            <button class="btn btn-success mr-2"><a class="text-light"
                    href="<?= ADMIN_URL ?>/?ctrl=dang_tuyen&act=ung_tuyen&id_dt=<?= $row['id_dt'] ?>"> Chi tiết sinh
                    viên ứng tuyển</a></button>
            <button class="btn btn-danger"> <a class="text-light"
                    href="?ctrl=dang_tuyen&act=delete&id_dt=<?= $row['id_dt'] ?>"
                    onclick="return confirm('Bạn chắc chắn muốn xóa?');">Xoá đăng tuyển</a></button>
        </div>
<!-- 
        <ul class="list-group">
            <li class="list-group-item"><?php
                                        $ds = getAllDoanhnghiep();
                                        foreach ($ds as $r) { ?>
                <?php if ($row['id_dn'] == $r['id_dn']) { ?>
                <b>Tên doanh nghiệp:</b> <?= $r['ten_dn'] ?><br>
                <?php } ?>
                <?php } ?>
            </li>
            <li class="list-group-item"> <?php require_once "models/nganh.php";
                                            $ds = getAllNganh();
                                            foreach ($ds as $r) { ?>
                <?php if ($row['id_nganh'] == $r['id_nganh']) { ?>
                <b>Ngành tuyển:</b> <?= $r['ten_nganh'] ?><br>
                <?php } ?>
                <?php } ?>
            </li>
            <li class="list-group-item"><b>Yêu cầu:</b> <?= $row['yeu_cau'] ?><br>
            <li class="list-group-item"><b>Lương:</b> <?= $row['luong'] ?>$<br>
            <li class="list-group-item"> <b>Số lượng cần:</b> <?= $row['sl_sv_can'] ?><br></li>
            <li class="list-group-item"> <b>Số lượng sinh viên đăng ký:</b> <?= $row['sl_sv_dk'] ?><br></li>
            <li class="list-group-item"><button class="btn btn-success"><a class="text-light"
                        href="<?= ADMIN_URL ?>/?ctrl=dang_tuyen&act=ung_tuyen&id_dt=<?= $row['id_dt'] ?>"> Chi tiết sinh
                        viên ứng tuyển</a></button>
                <button class="btn btn-danger"> <a class="text-light"
                        href="?ctrl=dang_tuyen&act=delete&id_dt=<?= $row['id_dt'] ?>"
                        onclick="return confirm('Bạn chắc chắn muốn xóa?');">Xoá đăng tuyển</a></button>
            </li>
        </ul> -->
    </div>
</div>
<hr>
<h3>Mô tả</h3>
<div class="mb-4">- <?= $row['mo_ta'] ?></div>