<div class="row align-items-center">
    <div class="col-lg-8">
        <h2 class="font-weight-700 mb-0">Danh sách hồ sơ ứng tuyển</h2>
        <span class="font-weight-500 text-secondary"><i class="far fa-folder-open"></i>

            dem
        </span>
    </div>
    <div class="col-lg-4">
        <div class="input-group mb-3">
            <div class="input-group col-8">
                <input type="text" class="form-control" placeholder="Tìm kiếm..">
                <div class="input-group-append">
                    <button class="input-group-text">
                        <a href=""><i class="far fa-search"></i></a>
                    </button>
                </div>
            </div>
            <button class="input-group-text" type="button" data-toggle="dropdown">
                Sắp xếp <i class="far fa-angle-down"></i></button>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Đã duyệt</a>
                <a class="dropdown-item" href="#">Chưa duyệt</a>
                <a class="dropdown-item" href="#">Theo tên</a>
                <a class="dropdown-item" href="#">Theo thời gian</a>
            </div>
        </div>
    </div>
</div>

<div class=" h-big-box mt-4">
    <div class="h-box1">
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">STT</th>
                    <th scope="col">MSSV</th>
                    <th scope="col">Họ &amp; tên</th>
                    <th scope="col">Ngày nộp</th>
                    <th scope="col">Vị trí ứng tuyển</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col" class="text-center">Hồ sơ</th>
                </tr>
            </thead>
            <tbody class="table-bordered">
                <?php foreach ($ds as $row) { ?>
                    <tr>
                        <th scope="row" class="text-center">1</th>
                        <td>
                            <?php
                            $dt = getAllDangtuyen();
                            foreach ($dt as $t) { ?>
                                <?php if ($t['id_dn'] == $row['id_dn']) { ?>
                                    <?php $id_dt = $t['id_dt']; ?>
                                    <?php $ut = getAllUngtuyen($id_dt); ?>
                                    <?php foreach ($ut as $t) { ?>
                                        <?php $sv = getAllSinhvien(); ?>
                                        <?php foreach ($sv as $s) { ?>
                                            <?php if ($s['id_sv'] == $t['id_sv']) { ?>
                                                <?=$s['mssv']?>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td class="text-success">Đã duyệt <i class="fas fa-check"></i></td>
                        <td class="text-center"><a href="#"><i class="fas fa-address-card show-btn" style="font-size: 30px; color: #2574A9;"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>