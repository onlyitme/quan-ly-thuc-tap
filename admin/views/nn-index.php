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
                <th scope="col">Tên nhóm ngành</th>
                <th scope="col">Ẩn hiện</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xoá</th>
            </tr>
            <div class="row justify-content-center align-items-center text-warning">
                <h1>Danh sách nhóm ngành</h1>
            </div>
        </thead>
        <tbody>
            <?php
            $i = 1;
             foreach ($ds as $row) { ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td> <?= $row['ten_nn'] ?></td>
                    <td><?= ($row['an_hien'] == 1) ? "Đang hiện" : "Đang ẩn"; ?></td>
                    <td><a href="?ctrl=nhom_nganh&act=edit&id_nn=<?= $row['id_nn'] ?>"><i class="far fa-edit"></i></a>
                    </td>
                    <td><a href="?ctrl=nhom_nganh&act=delete&id_nn=<?= $row['id_nn'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>