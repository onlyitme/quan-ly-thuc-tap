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
            <?php $i=1;
            foreach ($ds as $row) { ?>
                <tr>
                    <td><?=$i++?></td>
                    <td>
                        <img src="images/<?= $row['anh'] ?>" width="150" height="100" onerror="this.src='<?= ADMIN_URL ?>/images/avt.jpg';">
                    </td>
                    <td>
                        <b>Tên doanh nghiệp:</b> <?= $row['ten_dn'] ?><br>
                        <b>Ẩn hiện:</b><?php if($row['an_hien'] == 0) echo "Đang hiện" ;
                                         elseif($row['an_hien'] == 1) echo "Đang ẩn";
                                         ?>
                    </td>
                    <td> 
                        <b>Địa chỉ :</b><?= $row['dia_chi'] ?><br>
                        <b>Số điện thoại :</b><?= $row['sdt'] ?>
                    </td>
                    <td><a href="?ctrl=doanh_nghiep&act=edit&id_dn=<?= $row['id_dn'] ?>"><i class="fa fa-edit"></i></a>
                    </td>
                    <td><a href="?ctrl=doanh_nghiep&act=delete&id_user=<?= $row['id_user'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>