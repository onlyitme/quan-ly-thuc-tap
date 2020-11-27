<div class="row">
    <div class="alert alert-primary w-100 p-3" role="alert">
        <h1>QUẢN LÝ SINH VIÊN</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Danh sách sinh viên</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row px-3">
    <form method="POST" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 "
        action="<?= ADMIN_URL ?>/?ctrl=doanh_nghiep&act=timkiem">
        <div class="input-group">
            <input class="form-control" name="ten_dn" type="text" placeholder="Nhập doanh nghiệp cần tìm..."
                aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>

    </form>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Thêm doanh nghiệp <i class="fas fa-plus-square"></i>
    </button>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="<?= ADMIN_URL ?>/?ctrl=doanh_nghiep&act=insert"
                    enctype="multipart/form-data">
                    <div class="row justify-content-center align-items-center text-warning">
                        <h1>Thêm doanh nghiệp</h1>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" required id="email" name="email" placeholder="Email">
                        <?php if (isset($email_error)) { ?>
                        <span class="badge badge-warning"> <?= $email_error ?> </span>
                        <?php } ?>
                        <span id="kqcheckemail"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" required placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="user" name="ten_dn" required
                            placeholder="Tên doanh nghiệp">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="user" name="dia_chi" required placeholder="Địa chỉ">

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="user" name="website" required placeholder="website">

                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <input type="file" class="form-control overflow-hidden" name="anh"
                                placeholder="Mã số sinh viên">
                        </div>
                        <div class="form-group col-6">
                            <input type="number" class="form-control" id="sdt" name="sdt" required
                                placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Ẩn hiện: </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="an_hien" id="an_hien1" value="0"
                                    checked>
                                <label class="form-check-label"> Hiện</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="an_hien" id="an_hien2" value="1">
                                <label class="form-check-label">Ẩn</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                        <button type="submit" class="btn btn-primary">Lưu lại</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered  table-hover Nghia-admin-tb">
    <thead class="bg-primary">
        <tr class="text-center">
            <th scope="col" rowspan="2" class="py-5">#</th>
            <th scope="col" colspan="3">THÔNG TIN DOANH NGHIỆP</th>
            <th scope="col" colspan="3">THÔNG TIN LIÊN LẠC</th>
            <th scope="col" rowspan="2" class="py-5">Ảnh</th>
            <th scope="col" rowspan="2" class="py-5">Sửa</th>
            <th scope="col" rowspan="2" class="py-5">Xóa</th>
        </tr>
        <tr>
            <td>Tên doanh nghiệp</td>
            <td>Số lượng bài đăng</td>
            <td>Ẩn hiện</td>
            <td>Địa chỉ</td>
            <td> Số điện thoại</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
            foreach ($dn as $row) { ?>
        <tr>
            <td class="py-5">
                <?= $i++ ?>
            </td>

            <td class="py-5">
                <?= $row['ten_dn'] ?>
            </td>
            <td class="py-5">
                <?php
                        $id_dn = $row['id_dn'];
                        $soluong = demBaidang($id_dn);
                        ?>
                <?php
                        $dt = getAllDangtuyen();
                        foreach ($dt as $t) { ?>
                <?php if ($t['id_dn'] == $row['id_dn']) { ?>
                <?php $id_dt = $t['id_dt']; ?>
                <?php $soluongsv = demSinhvien($id_dt); ?>
                <?php if ($soluongsv > 0) { ?>
                <a href="?ctrl=dang_tuyen&act=ung_tuyen&id_dt=<?= $t['id_dt'] ?>">
                    <?= $soluongsv ?></a>
                <?php } ?>
                <?php } ?>
                <?php } ?>
                <a href="?ctrl=dang_tuyen&act=theodn&id_dn=<?= $row['id_dn'] ?>"><?= $soluong ?></a>
            </td>
            <td class="py-5">
                <?= ($row['an_hien'] == 0) ? "Đang hiện" : "Đang ẩn"; ?>
            </td>
            <td class="py-5">
                <?= $row['dia_chi'] ?>
            </td>
            <td class="py-5">
                <?= $row['sdt'] ?>
            </td>
            <td class="py-5">
                <?php
                        $ds = getAllUser();
                        foreach ($ds as $u) { ?>
                <?php if ($u['id_user'] == $row['id_user']) { ?>
                <?= $u['email']; ?>
                <?php } ?>
                <?php } ?>
            </td>
            <td>
                <img src="views/images/<?= $row['anh'] ?>" width="100" height="70"
                    onerror="this.src='views/images/avt.jpg';">
            </td>
            <td class="py-5">
                <a href="?ctrl=doanh_nghiep&act=edit&id_dn=<?= $row['id_dn'] ?>"><i class="fa fa-edit"></i></a>
            </td>
            <td class="py-5">
                <a href="?ctrl=doanh_nghiep&act=delete&id_user=<?= $row['id_user'] ?>"
                    onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt text-danger"></i></a>
            </td>

            <!-- 

            </tr>
            <tr>
                <td><?= $i++ ?></td>
                <td>
                    <img src="views/images/<?= $row['anh'] ?>" width="150" height="100"
                        onerror="this.src='views/images/avt.jpg';">
                </td>
                <td>
                    <b>Tên doanh nghiệp:</b> <?= $row['ten_dn'] ?><br>
                    <?php
                        $id_dn = $row['id_dn'];
                        $soluong = demBaidang($id_dn);
                        ?>
                    <?php
                        $dt = getAllDangtuyen();
                        foreach ($dt as $t) { ?>
                    <?php if ($t['id_dn'] == $row['id_dn']) { ?>
                    <?php $id_dt = $t['id_dt']; ?>
                    <?php $soluongsv = demSinhvien($id_dt); ?>
                    <?php if ($soluongsv > 0) { ?>
                    <b>Số lượng sinh viên đang thực tập:<a
                            href="?ctrl=dang_tuyen&act=ung_tuyen&id_dt=<?= $t['id_dt'] ?>">
                            <?= $soluongsv ?></a></b><br>
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>
                    <b>Số lượng bài đăng tuyển:<a
                            href="?ctrl=dang_tuyen&act=theodn&id_dn=<?= $row['id_dn'] ?>"><?= $soluong ?></a></b> <br>
                    <b>Ẩn hiện:</b> <?= ($row['an_hien'] == 0) ? "Đang hiện" : "Đang ẩn"; ?><br>
                </td>
                <td>
                    <b>Địa chỉ :</b><?= $row['dia_chi'] ?><br>
                    <b>Số điện thoại :</b><?= $row['sdt'] ?><br>
                    <?php
                        $ds = getAllUser();
                        foreach ($ds as $u) { ?>
                    <?php if ($u['id_user'] == $row['id_user']) { ?>
                    <b>Email:</b> <?= $u['email']; ?>
                    <?php } ?>
                    <?php } ?>
                </td>
                </td>
                <td><a href="?ctrl=doanh_nghiep&act=edit&id_dn=<?= $row['id_dn'] ?>"><i class="fa fa-edit"></i></a>
                </td>
                <td><a href="?ctrl=doanh_nghiep&act=delete&id_user=<?= $row['id_user'] ?>"
                        onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt"></i></a>

                </td>
            </tr> -->
            <?php } ?>
    </tbody>
</table>