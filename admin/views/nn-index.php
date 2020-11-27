<div class="row">
    <div class="alert alert-primary w-100 p-3" role="alert">
        <h1 >DANH SÁCH NHÓM NGÀNH</h1>
        <nav aria-label="breadcrumb" >
            <ol class="breadcrumb bg-transparent p-0">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home    "></i> Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Danh sách các nhóm ngành</li>
            </ol>
        </nav>
    </div>
</div>
<div class="mb-5">
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        <i class="fas fa-plus"></i> Thêm ngành
    </button>
    <input id="xoaall" type="submit" class="btn btn-danger ml-2" name="xoaall" value="Xóa Mục Đã Chọn" onclick="return confirm('Bạn chắc chắn muốn xóa các mục đã chọn không ?');">
    <form method="POST" id="collapseExample" class="collapse fade col-12 border rounded-lg bg-light py-3 px-4  my-3" action="<?= ADMIN_URL ?>/?ctrl=nhom_nganh&act=insert">
            <div class="form-group">
                <label for="ten_loai" class="font-weight-bold">Tên nhóm ngành</label>
                <input type="text" class="form-control col-5" id="ten_nn" name="ten_nn">
                <?php if (isset($nn_error)) { ?>
                    <span class="badge badge-warning"> <?= $nn_error ?> </span>
                <?php } ?>      
                <span id="kqchecknn"></span>
            </div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="an_hien" id="anhien1" value="1" checked>
                    <label class="form-check-label" for="anhien1"> Hiện </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="an_hien" id="anhien0" value="0">
                    <label class="form-check-label" for="anhien0">Ẩn</label>
                </div>
            </div>
            <button type="submit"  class="btn btn-primary py-2 col-2 ">Lưu</button>
    </form>
</div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><input type="checkbox" name="checkall " class="checkall mr-2"> #</th>
                <th scope="col">Tên nhóm ngành</th>
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
                    <th>
                        <div class="checkbox d-flex align-items-center"><input type="checkbox" class="checkitem mr-2" value ='<?= $row['id_nn'] ?>' > <div ><?= $i++ ?></div> </div>
                    </th>
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

<script>
    $(document).ready(function() {
        $(".checkall").change(function(){
            // $(".checkall").prop("checked",$(this).prop("checked"));
            $(".checkitem").prop("checked",$(this).prop("checked"));
        })  
        $(".checkitem").change(function(){
            if($(this).prop("checked")==false){
                $(".checkall").prop("checked",false)
            }
            if($(".checkitem:checked").length == $(".checkitem").length){
                $(".checkall").prop("checked",true)
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
            url: "index.php?ctrl=nhom_nganh",
            data: {arr: arrcheck},
            success: function(data) {
              location.reload();
            }
          });
        });
        $("#ten_nn").blur(function() {
            u = $(this).val();
            $("#kqchecknn").load("<?= ADMIN_URL ?>/?ctrl=nhom_nganh&act=kiemtra_ten_nn&ten_nn=" + u);
        });
    });
</script>