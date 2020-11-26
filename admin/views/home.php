<div class="card-deck my-1">
   <div class="card text-white bg-primary">
      <a href="<?= ADMIN_URL ?>/?ctrl=doanh_nghiep">
         <img src="views/images/doanhnghiep.jpg" class="card-img-top" alt="" width="150" height="200"></a>
      <div class="card-body">
         <h5 class="card-title">Tổng số doanh nghiệp</h5>
         <p class="card-text"><?= demDoanhnghiep() ?></p>
      </div>
   </div>
   <div class="card text-white bg-success">
      <a href="<?= ADMIN_URL ?>/?ctrl=dang_tuyen">
         <img src="views/images/job.jpg" class="card-img-top" width="150" height="200"></a>
      <div class="card-body">
         <h5 class="card-title">Tổng số bài đăng tuyển</h5>
         <p class="card-text"><?= demDangtuyen() ?></p>
      </div>
   </div>
   <div class="card text-white bg-info">
      <a href="<?= ADMIN_URL ?>/?ctrl=sinh_vien">
         <img src="views/images/sinhvien.jpg" class="card-img-top" alt="..." width="150" height="200"></a>
      <div class="card-body">
         <h5 class="card-title">Tổng số sinh viên</h5>
         <p class="card-text"><?= demSinhvien() ?></p>
      </div>
   </div>
   <div class="card text-white bg-warning">
      <a href="<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=dacott">
         <img src="views/images/sinhvien2.jpg" class="card-img-top" alt="..." width="150" height="200"></a>
      <div class="card-body">
         <h5 class="card-title">Sinh viên đang thực tập</h5>
         <p class="card-text"><?= demSinhvienTT() ?></p>
      </div>
   </div>
</div>

<?php require_once "models/home.php"; ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
   google.charts.load("current", {
      packages: ['corechart']
   });
   google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
      var data = google.visualization.arrayToDataTable([
         ["Element", "Density", {
            role: "style"
         }],
         ["Doanh nghiệp thất bại",<?=demDangtuyentheoDN($id_dn=14)?>, "#1abc9c"
         ],
         ["Doanh nghiệp thành công", <?=demDangtuyentheoDN($id_dn=15)?>, "#f1c40f"],
         ["Doanh nghiệp đào tạo", <?=demDangtuyentheoDN($id_dn=17)?>, "#3498db"],
         ["Doanh nghiệp nasa", 21, "#e67e22"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
         {
            calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation"
         },
         2
      ]);

      var options = {
         title: "Số lượng bài đăng tuyển",

         bar: {
            groupWidth: "100%"
         },
         legend: {
            position: "none"
         },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
   }
</script>
<div class="row">
   <div id="columnchart_values" style="height: 400px;" class="col-12"></div>
</div>