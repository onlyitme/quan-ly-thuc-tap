

    <th colspan="7">
        <div class="row justify-content-center align-items-center text-warning">
            <h1>Danh sách doanh nghiệp</h1>
        </div>
    </th>
    <table class="table table-bordered table-hover ">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Thông tin</th>
                <th scope="col">Liên hệ</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($ds as $row) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>
                        <img src="images/<?= $row['anh'] ?>" width="150" height="100" onerror="this.src='<?= ADMIN_URL ?>/images/avt.jpg';">
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
                                    <b>Số lượng sinh viên đang thực tập:<a href="?ctrl=dang_tuyen&act=ung_tuyen&id_dt=<?= $t['id_dt'] ?>"> <?= $soluongsv ?></a></b><br>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                        <b>Số lượng bài đăng tuyển:<a href="?ctrl=dang_tuyen&act=theodn&id_dn=<?= $row['id_dn'] ?>"><?= $soluong ?></a></b> <br>
                        <b>Ẩn hiện:</b> <?= ($row['an_hien'] == 0) ? "Đang hiện" : "Đang ẩn"; ?><br>
                    </td>
                    <td>
                        <b>Địa chỉ :</b><?= $row['dia_chi'] ?><br>
                        <b>Số điện thoại :</b><?= $row['sdt'] ?><br>
                        <?php  
                        $ds = getAllUser();
                        foreach ($ds as $u) { ?>
                            <?php if ($u['id_user'] == $row['id_user']) { ?>
                            <b>Email:</b>  <?=$u['email'];?>
                            <?php } ?>
                        <?php } ?>
                    </td>
                    </td>
                    <td><a href="?ctrl=doanh_nghiep&act=edit&id_dn=<?= $row['id_dn'] ?>"><i class="fa fa-edit"></i></a>
                    </td>
                    <td><a href="?ctrl=doanh_nghiep&act=delete&id_user=<?= $row['id_user'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt"></i></a>
                    
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


