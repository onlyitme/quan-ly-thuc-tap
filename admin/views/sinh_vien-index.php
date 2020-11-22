<th colspan="7">
    <div class="row justify-content-center align-items-center text-warning">
        <h1>Danh sách sinh viên</h1>
    </div>
</th>
<form method="POST" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" action="<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=timkiem">
    <div class="input-group">
        <input class="form-control" name="mssv" type="text" placeholder="Nhập mssv cần tìm..." aria-label="Search" aria-describedby="basic-addon2" />
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </div>
</form>
<table class="table table-bordered table-hover ">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Thêm sinh viên <i class="fas fa-plus-square"></i>
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="POST" action="<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=insert" enctype="multipart/form-data">
                        <div class="row justify-content-center align-items-center text-warning">
                            <h1>Thêm sinh viên</h1>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" required id="email" name="email" placeholder="Email">
                            <?php if (isset($email_error)) { ?>
                                <span class="badge badge-warning"> <?= $email_error ?> </span>
                            <?php } ?>
                            <span id="kqcheckemail"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" required placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="user" name="ho_ten" required placeholder="Họ tên sinh viên">
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <select name="id_nganh" class="form-control">
                                    <option value="">Chọn ngành</option>
                                    <?php require_once "models/nganh.php";
                                    $ds = getAllNganh();
                                    foreach ($ds as $row) { ?>
                                        <option value="<?= $row['id_nganh'] ?>"> <?= $row['ten_nganh'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <input type="number" class="form-control" id="sdt" name="sdt" required placeholder="Số điện thoại">
                            </div>
                     </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <input type="text" class="form-control" id="mssv" name="mssv" required placeholder="Mã số sinh viên">
                                <?php if (isset($user_error)) { ?>
                                    <span class="badge badge-warning"> <?= $user_error ?> </span>
                                <?php } ?>
                                <span id="kqcheckmssv"></span>
                            </div>
                            <div class="form-group col-6">
                                <input type="file" class="form-control overflow-hidden" name="anh">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="">Giới tính:</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gioi_tinh" id="gioi_tinh1" value="1" checked>
                                    <label class="form-check-label"> Nam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gioi_tinh" id="gioi_tinh0" value="0">
                                    <label class="form-check-label">Nữ</label>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Trạng thái:</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai1" value="1">
                                    <label class="form-check-label"> Đã có nơi thực tập</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai0" value="0" checked>
                                    <label class="form-check-label">Chưa có nơi thực tập</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                            <button type="submit" class="btn btn-primary">Lưu lại</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown list-group-item-action active">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Chọn
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?= ADMIN_URL ?>/?ctrl=sinh_vien">Tất cả</a>
            <a class="dropdown-item" href="<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=dacott">Đã có nơi thực tập</a>
            <a class="dropdown-item" href="<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=chuacott">Chưa có nơi thực tập</a>
        </div>
    </div>
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
    <?php $i = 1; foreach ($dm as $row) { ?>
        <tr>
        <td><div class="checkbox">
            <input type="checkbox" class="checkitem" value ='<?= $row['id_user'] ?>' > </div></td>
                    <th scope="row"><?= $i++ ?></th>
            <td>
                <img src="views/images/<?= $row['anh'] ?>" width="150" height="100" onerror="this.src='views/images/avt.jpg';">
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


    $(document).ready(function() {
        $("#user").blur(function() {
            u = $(this).val();
            $("#kqcheckuser").load("<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=kiemtrauser&user=" + u);
        });
    });
    $(document).ready(function() {
        $("#mssv").blur(function() {
            u = $(this).val();
            $("#kqcheckmssv").load("<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=kiemtramssv&mssv=" + u);
        });
    });
    $(document).ready(function() {
        $("#email").blur(function() {
            u = $(this).val();
            $("#kqcheckemail").load("<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=kiemtraemail&email=" + u);
        });
    });
</script>