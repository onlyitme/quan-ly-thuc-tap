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
            <h1>Danh sách ứng tuyển</h1>
        </div>
    </th>
    <table class="table table-bordered table-hover ">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Thông tin chung</th>
                <th scope="col">Nguyện vọng</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;
            foreach ($ds as $row) { ?>
                <tr>
                    <td><?=$i++?></td>
                    <td>
                    <?php
                        $ds = getAllSinhvien();
                        foreach ($ds as $r) { ?>
                            <?php if ($row['id_sv'] == $r['id_sv']) { ?>
                                <b>Tên sinh viên:</b><?= $r['ho_ten'] ?><br>
                            <?php } ?>
                        <?php } ?>
                        <?php
                        $ds = getAllDangtuyen();
                        foreach ($ds as $r) { ?>
                            <?php if ($row['id_dt'] == $r['id_dt']) { ?>
                                <b>Tên bài đăng tuyển:</b><?= $r['tieu_de'] ?><br>
                            <?php } ?>
                        <?php } ?>
                        <b>Ngày đăng ký ứng tuyển :</b><?= $row['ngay_dk'] ?><br>
                        <b>Trạng thái:</b> <?= ($row['trang_thai'] == 0) ? "Chưa duyệt" : "Đã duyệt"; ?><br>
                    </td>
                    <td>
                    <b>Nguyện vọng</b><?= $row['nguyen_vong'] ?><br>
                    <td><a href="?ctrl=doanh_nghiep&act=delete&id_user=<?= $row['id_user'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>