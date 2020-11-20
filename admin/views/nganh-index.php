<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên ngành</th>
                <th scope="col">Ẩn hiện</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xoá</th>
            </tr>
            <div class="row justify-content-center align-items-center text-warning">
                <h1>Danh sách ngành</h1>
            </div>
        </thead>
        <tbody>
            <?php
            $i = 1;
             foreach ($ds as $row) { ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td> <?= $row['ten_nganh'] ?></td>
                    <td><?= ($row['an_hien'] == 1) ? "Đang hiện" : "Đang ẩn"; ?></td>
                    <td><a href="?ctrl=nganh&act=edit&id_nganh=<?= $row['id_nganh'] ?>"><i class="far fa-edit"></i></a>
                    </td>
                    <td><a href="?ctrl=nganh&act=delete&id_nganh=<?= $row['id_nganh'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>