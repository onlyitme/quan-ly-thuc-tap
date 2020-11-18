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
            <h1>Danh sách sinh viên</h1>
        </div>
    </th>
    <table class="table table-bordered table-hover ">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Hình</th>
                <th scope="col">Thông tin</th>
                <th scope="col">Liên hệ</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ds as $row) { ?>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="images/<?= $row['anh'] ?>" width="150" height="100" onerror="this.src='<?= ADMIN_URL ?>/images/avt.jpg';">
                    </td>
                    <td>
                        <b>Họ tên:</b> <?= $row['ho_ten'] ?><br>
                        <b>Giới tính:</b><?= ($row['gioi_tinh'] == 1) ? "Nam" : "Nữ"; ?><br>
                        <?php require_once "models/nganh.php";
                        $ds = getAllNganh();
                        foreach ($ds as $r) { ?>
                            <?php if ($row['id_nganh'] == $r['id_nganh']) { ?>
                                <b>Tên ngành:</b> <?= $r['ten_nganh'] ?>
                            <?php } ?>
                        <?php } ?>
                    </td>
                    <td>
                        <b>Số điện thoại:</b><?= $row['sdt'] ?><br>
                        <b>Mã số SV:</b> <?= $row['mssv'] ?><br>
                        <b>Trạng thái:</b><?= ($row['trang_thai'] == 1) ? "Đang thực tập" : "Chưa thực tập"; ?> <br>
                    </td>
                    <td><a href="?ctrl=sinh_vien&act=edit&id_sv=<?= $row['id_sv'] ?>"><i class="fa fa-edit"></i></a>
                    </td>
                    <td><a href="?ctrl=sinh_vien&act=delete&id_user=<?= $row['id_user'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>