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
            <th scope="col">Check</th>
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
            <td><div class="checkbox">
            <input type="checkbox" class="checkitem" value ='<?= $row['id_nganh'] ?>' > </div></td>
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
<div class="checkbox">
                <input type="checkbox" id="checkall" style="margin-left: 12px">
                <label for="checkall" style="font-weight: bold;">Chọn Tất Cả</label>
                <input id="xoaall" type="submit" name="xoaall" class="mx-5" value="Xóa Mục Đã Chọn" onclick="return confirm('Bạn chắc chắn muốn xóa các mục đã chọn không ?');">
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
            url: "index.php?ctrl=nganh",
            data: {arr: arrcheck},
            success: function(data) {
              location.reload();
            }
          });
        });
      
    </script>


