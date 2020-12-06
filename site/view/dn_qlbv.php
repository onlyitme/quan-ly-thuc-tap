
<div class="row align-items-center">
    <div class="col-lg-12">
        <h2 class="font-weight-700 mb-0">Quản lý bài viết</h2>
        <span class="text-secondary px-1"><i class="far fa-file"></i>
            299
        </span>
    </div>
</div>
<?php foreach ($ds as $row) { ?>
    <div class="h-box-bv">
        <div class="h-box-bv-left">
            <div class="h-bv-left-img">
                <a href="#">
                    <img src="https://img.freepik.com/free-vector/real-estate-logo-icon_126523-966.jpg?size=626&ext=jpg&ga=GA1.2.172804449.1602504837" alt="avatar_logo.png">
                </a>
            </div>
        </div>
        <div class="h-box-bv-right">
            <div class="h-bv-right-title">
                <h4 class=""><?=$row['tieu_de']?></h4>
            </div>
            <div class="h-bv-right-span">
                <span class="text-secondary">
                    <span class="text-success"><i class="fas fa-toggle-on"></i>
                        <span>Hoạt động</span>
                    </span>
                    <i class="far fa-calendar-alt"></i> <span>01/12/2020</span>
                    <i class="far fa-eye"></i> <span>299</span>

                </span>
            </div>
            <hr class="h-bv-hr">
            <div class="h-bv-right-content">
                <p class="text-uppercase text-secondary"> <?php
                                                            $ds = getAllDoanhnghiep();
                                                            foreach ($ds as $r) { ?>
                        <?php if ($row['id_dn'] == $r['id_dn']) { ?>
                            <?= $r['ten_dn'] ?>
                        <?php } ?>
                    <?php } ?></p>
                <span>Sinh viên đăng ký: <span>1.220</span> | </span>
                <span>Sinh viên xác thực: <span>1.020</span> | </span>
                <span>Sinh viên đã duyệt: <span class="text-success">1.209</span></span>
                <br>
                <span class="text-success"><i class="fas fa-dollar-sign"></i> Lương: 6tr - 8tr VNĐ</span>
                <span class="text-secondary"><i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</span>
            </div>
            <div class="h-bv-right-button">
                <button class="btn h-bg-button"><a href="<?= SITE_URL ?>/?ctrl=home&act=thongtindt&id_dt=<?= $row['id_dt'] ?>">Xem chi tiết</a></button>
                <button class="btn btn-danger"> <a class="text-light text-decoration-none"
                        href="?ctrl=doanh_nghiep&act=delete_dt&id_dt=<?= $row['id_dt'] ?>"
                        onclick="return confirm('Bạn chắc chắn muốn xóa?');">Xoá đăng tuyển</a></button>
                <button class="btn btn-outline-warning h-bv-text-lock" onclick="an_hien_dt(<?= $row['id_dt'] ?>)">
                            <?php 
                            if($row['an_hien'] == 0) echo ' <i class="far fa-lock"></i>';
                            else echo ' <i class="fas fa-lock-open"></i>';
                            ?>
               
                   </button>
            </div>
        </div>
    </div>
<?php } ?>
<script language="javascript">
    function an_hien_dt(id_dt) {
        $.ajax({
            type: "post",
            url: "index.php?ctrl=doanh_nghiep&act=an_hien_dt",
            data: {          
                id_dt: id_dt,
            },
            success: function(response) {
                
                location.reload(); 
            }
        })}
    
</script>