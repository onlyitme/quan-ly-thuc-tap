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
            <h1>Danh sách user</h1>
        </div>
    </th>
    <table class="table table-bordered table-hover ">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Thông tin</th>
                <th scope="col">Email</th>
                <th scope="col">Chức vụ</th>
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
                        <b>Username:</b> <?= $row['user'] ?><br>
                        <b>Password:</b> <?= $row['pass'] ?>
                    </td>
                    <td> <b>Email:</b><?= $row['email'] ?></td>
                    <td>
                        <b>Chức vụ:</b><?php if($row['chuc_vu'] == 0) echo "Sinh viên" ;
                                         elseif($row['chuc_vu'] == 1) echo "Doanh nghiệp";
                                         else echo "ADMIN";
                                         ?>
                    </td>
                    <td><a href="?ctrl=user&act=edit&id_user=<?= $row['id_user'] ?>"><i class="fa fa-edit"></i></a>
                    </td>
                    <td><a href="?ctrl=user&act=delete&id_user=<?= $row['id_user'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>