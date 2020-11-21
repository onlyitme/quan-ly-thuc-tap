

    <th colspan="7">
        <div class="row justify-content-center align-items-center text-warning">
            <h1>Danh sách sinh viên</h1>
        </div>
    </th>
    <table class="table table-bordered table-hover ">
        <thead>
            <tr class="text-center">
            <th scope="col">Check</th>
                <th scope="col">#</th>
                <th scope="col">Hình</th>
                <th scope="col">Thông tin</th>
                <th scope="col">Liên hệ</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
        
            <?php  $i = 1;foreach ($ds as $row) { ?>
                <tr>
                <td><div class="checkbox">
            <input type="checkbox" class="checkitem" value ='<?= $row['id_user'] ?>' > </div></td>
                    <th scope="row"><?= $i++ ?></th>
                    <td>
                        <img src="views/images/<?= $row['anh'] ?>" width="150" height="100" onerror="this.src='<?= ADMIN_URL ?>/views/images/avt.jpg';">
                    </td>
                    <td>
                        <b>Họ tên:</b> <?= $row['ho_ten'] ?><br>
                        <b>Giới tính:</b><?= ($row['gioi_tinh'] == 1) ? "Nam" : "Nữ"; ?><br>
                        <?php require_once "models/nganh.php";
                        $ds = getAllNganh();
                        foreach ($ds as $r) { ?>
                            <?php if ($row['id_nganh'] == $r['id_nganh']) { ?>
                                <b>Tên ngành:</b> <?= $r['ten_nganh'] ?><br>
                            <?php } ?>
                        <?php } ?>
                        <b>Trạng thái:</b><?= ($row['trang_thai'] == 1) ? "Đang thực tập" : "Chưa thực tập"; ?> <br>
                    </td>
                    <td>
                        <b>Số điện thoại:</b><?= $row['sdt'] ?><br>
                        <b>Mã số SV:</b> <?= $row['mssv'] ?><br>
                        <?php 
                        $ds = getAllUser();
                        foreach ($ds as $r) { ?>
                            <?php if ($row['id_user'] == $r['id_user']) { ?>
                                <b>Email:</b> <?= $r['email'] ?>
                            <?php } ?>
                        <?php } ?>
                    </td>
                    <td><a href="?ctrl=sinh_vien&act=edit&id_sv=<?= $row['id_sv'] ?>"><i class="fa fa-edit"></i></a>
                    </td>
                    <td><a href="?ctrl=sinh_vien&act=delete&id_user=<?= $row['id_user'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="checkbox">
                <input type="checkbox" id="checkall" style="margin-left: 12px">
                <label for="checkall" style="font-weight: bold;">Chọn Tất Cả</label>
                <input id="xoaall" type="submit" name="xoaall" class="mx-5" value="Xóa Mục Đã Chọn" >
        </div>

        <script>
        $("#checkall").change(function(){
            $(".checkitem").prop("checked",$(this).prop("checked"))
        })
        $(".checkitem").change(function(){
            if($(this).prop("checked")==false){
                $("#checkall").prop("checked",false)
            }
            if($(".checkitem:checked").length == $(".checkitem").length){
                $("#checkall").prop("checked",true)
            }
        })
        $("#xoaall").click(function(){
          let arrcheck = [];
          $(".checkitem").each(function(){
              check = $(this).prop("checked");
            if(check){
              arrcheck.push($(this).val());
            }
          }); 
          console.log(arrcheck);
          $.ajax({
            type: "post",
            url: "index.php?ctrl=sinh_vien",
            data: {arr: arrcheck}, 
            success: function(data) {
              location.reload();
            }
          });
        });
      
    </script>
