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
                <th scope="col">Thông tin chung</th>
                <th scope="col">Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;
            foreach ($ds as $row) { ?>
                <tr>
                    <td><?=$i++?></td>
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
                    </td>
        
                    <td> 
                        <a href="<?= ADMIN_URL ?>/?ctrl=dang_tuyen&act=chi_tiet&id_dt=<?= $row['id_dt']?>"><b>Xem chi tiết</b></a><br>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>