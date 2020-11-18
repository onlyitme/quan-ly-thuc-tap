<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <th colspan="7">
        <div class="row justify-content-center align-items-center text-warning">
            <h1>Danh sách đăng tuyển</h1>
        </div>
    </th>
    <table class="table table-bordered table-hover ">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Thông tin</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;
            foreach ($ds as $row) { ?>
                <tr>
                    <td><?=$i++?></td>
                    <td>
                        <img src="images/<?= $row['anh'] ?>" width="150" height="100" onerror="this.src='<?= ADMIN_URL ?>/images/avt.jpg';">
                    </td>
                    <td>
                    <?php 
                        $ds = getAllDoanhnghiep();
                        foreach ($ds as $r) { ?>
                            <?php if ($row['id_dn'] == $r['id_dn']) { ?>
                                <b>Tên doanh nghiệp:</b> <?= $r['ten_dn'] ?><br>
                            <?php } ?>
                        <?php } ?>
                        <?php require_once "models/nganh.php";
                        $ds = getAllNganh();
                        foreach ($ds as $r) { ?>
                            <?php if ($row['id_nganh'] == $r['id_nganh']) { ?>
                                <b>Ngành tuyển:</b> <?= $r['ten_nganh'] ?><br>
                            <?php } ?>
                        <?php } ?>
                        <b>Tiêu đề:</b> <?= $row['tieu_de'] ?><br>
                        <b>Yêu cầu:</b> <?= $row['yeu_cau'] ?><br>
                        <b>Trạng thái:</b> <?= ($row['trang_thai'] == 0) ? "Chưa duyệt" : "Đã duyệt"; ?><br>
                    </td>
                    <td>
                    <b>Nội dung:</b> <?= $row['noi_dung'] ?><br>
                    </td>
                    <td> 
                        <b>Số lượng sinh viên cần :</b><?= $row['sl_sv_can'] ?><br>
                        <b>Số lượng sinh viên đăng ký :</b><?= $row['sl_sv_dk'] ?><br>
                        <a href="<?= ADMIN_URL ?>/?ctrl=dang_tuyen&act=ung_tuyen&id_dt=<?= $row['id_dt'] ?>"><b>Xem sinh viên ưng tuyển</b></a><br>
                    </td>
                    <td><br>
                        <a href="?ctrl=dang_tuyen&act=edit&id_dt=<?= $row['id_dt'] ?>"><i class="fa fa-edit"></i></a><br><br>
                        <a href="<?= ADMIN_URL ?>/?ctrl=dang_tuyen&act=duyet&id_dt=<?= $row['id_dt'] ?>">Duyệt</a>
                    </td>
                    <td><br>
                        <a href="?ctrl=dang_tuyen&act=delete&id_dt=<?= $row['id_dt'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>