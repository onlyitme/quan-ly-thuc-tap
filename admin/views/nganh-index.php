<div class="row">
    <div class="alert alert-primary w-100 p-3" role="alert"">
        <h1 >DANH SÁCH NGÀNH HỌC</h1>
        <nav aria-label="breadcrumb" >
            <ol class="breadcrumb bg-transparent p-0">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home    "></i> Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Danh sách ngành học</li>
            </ol>
        </nav>
    </div>
</div>

<table class="table table-hover table-bordered table-striped ">
    <thead >
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên ngành</th>
            <th scope="col">Ẩn hiện</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xoá</th>
        </tr>
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


