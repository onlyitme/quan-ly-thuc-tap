  <!-- Modal Nhận xét - Đánh giá - QLNS -->
  <div class="modal fade" id="exampleModal_Hoang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header alert alert-info">
                  <h5 class="modal-title" id="exampleModalLabel">Đánh giá -
                      Quản lý nhân sự</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form>
                      <div class="form-group">
                          <!-- <label for="recipient-name" class="col-form-label">
                                            <i class="far fa-clock-o" aria-hidden="true"></i> Thời gian:
                                            <span class="px-2"> <input type="date"></span>
                                        </label> <br> -->
                          <label for="recipient-name" class="col-form-label">
                              <i class="far fa-trophy-alt"></i> Đánh giá:
                              <span class="text-success px-2">
                                  <input type="radio" name="h-danhgia" id="h-dat"> Đạt <i class="fa fa-check"></i>
                              </span>
                              <span class=text-danger>
                                  <input type="radio" name="h-danhgia" id="h-chuadat"> Chưa đạt <i class="fas fa-close"></i>
                              </span>
                          </label>
                      </div>

                      <div class="form-group">
                          <label for="message-text" class="col-form-label">Nhận xét:</label>
                          <textarea class="form-control" cols="30" rows="7" id="message-text"></textarea>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button> -->
                  <!-- <button type="button" class="btn btn-outline-success">Cập nhật</button> -->
                  <!-- <button type="button" class="btn btn-danger" data-dismiss="">Chưa đạt <i class="far fa-close" aria-hidden="true"></i></button> -->
                  <button type="button" class="btn btn-success" data-dismiss="">Cập nhật </button>
              </div>
          </div>
      </div>
  </div>
  <!-- End Modal -->
  <div class="row align-items-center">
      <div class="col-lg-8">
          <h2 class="font-weight-600 mb-0">Quản lý nhân sự</h2>
          <span class="text-secondary px-1"><i class="far fa-users"></i>
              299
          </span>
      </div>
      <div class="col-lg-4">
          <div class="input-group mb-3">
              <div class="input-group col-8">
                  <!-- <input type="text" class="form-control" placeholder="Tìm kiếm..">
                                        <div class="input-group-append">
                                            <button class="input-group-text">
                                                <a href=""><i class="far fa-search"></i></a>
                                            </button>
                                        </div> -->
              </div>
              <button class="input-group-text" type="button" data-toggle="dropdown">
                  Sắp xếp <i class="far fa-angle-down"></i></button>
              <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Theo MSSV</a>
                  <a class="dropdown-item" href="#">Theo tên</a>
                  <a class="dropdown-item" href="#">Theo đánh giá</a>
                  <a class="dropdown-item" href="#">Theo thời gian</a>
              </div>
          </div>
      </div>
  </div>
  <p class="text-secondary m-1"> &ast;Sinh viên đang thực tập tại công ty&ast;</p>
  <div class=" h-big-box mt-4">
      <div class="h-box1">
          <table class="table table-hover table-striped">
              <thead class="thead-dark">
                  <tr>
                      <th scope="col" class="text-center">STT</th>
                      <th scope="col">MSSV</th>
                      <th scope="col">Họ &amp; tên</th>
                      <th scope="col">Chuyên ngành</th>
                      <th scope="col" class="text-center">Hồ sơ</th>
                      <th scope="col" class="text-center">Đánh giá</th>
                  </tr>
              </thead>
              <tbody class="table-bordered">
                  <?php $i = 1;
                    foreach ($ds as $row) { ?>
                      <?php $dt = getAllDangtuyen();
                        foreach ($dt as $t) { ?>
                          <?php if ($t['id_dn'] == $row['id_dn']) { ?>
                              <?php $id_dt = $t['id_dt']; ?>
                              <?php $ut = getAllUngtuyen($id_dt); ?>
                              <?php foreach ($ut as $t) { ?>
                                  <?php $sv = getAllSinhvien_(); ?>
                                  <?php foreach ($sv as $s) { ?>
                                      <?php if ($s['id_sv'] == $t['id_sv']) { ?>
                                          <tr>
                                              <th scope="row" class="text-center"><?= $i++ ?></th>
                                              <td><?= $s['mssv'] ?></td>
                                              <td><?= $s['ho_ten'] ?></td>
                                              <?php $nganh = getAllNganh();
                                                foreach ($nganh as $n) { ?>
                                                  <?php if ($n['id_nganh'] == $s['id_nganh']) { ?>
                                                      <td><?= $n['ten_nganh'] ?></td>
                                                  <?php } ?>
                                              <?php } ?>
                                              <td class="text-center"><a onclick="truyen_id(<?= $t['id_phieu'] ?>)"><i class="fas fa-address-card show-btn" style="font-size: 30px; color: #2574A9;"></i></a>
                                              </td>
                                              <td class="text-center">
                                                  <div class="h-md-qlns">
                                                      <a onclick="truyen_id(<?= $t['id_phieu'] ?>)"class="text-dark show-btn" data-toggle="modal" data-target="#exampleModal_Hoang">
                                                          <i class="far fa-book-open show-btn" style="font-size: 30px; color: #2574A9;"></i>
                                                      </a>
                                                      <!-- <button type="button" class="btn text-dark" data-toggle="modal"
                                                        data-target="#exampleModal_Hoang">
                                                        <i class="far fa-edit"></i>
                                                         </button> -->
                                                  </div>
                                              </td>
                                          </tr>
                                      <?php } ?>
                                  <?php } ?>
                              <?php } ?>
                          <?php } ?>
                      <?php } ?>
                  <?php } ?>
              </tbody>
          </table>
      </div>
  </div>
  <!-- Modal Nhận xét - Đánh giá - QLNS -->
  <div class="modal fade" id="exampleModal_Hoang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Đánh giá -
                      Quản lý nhân sự</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form>
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">
                              <i class="far fa-clock-o" aria-hidden="true"></i> Thời gian:
                              <span class="px-2"> <input type="date"></span>
                          </label> <br>
                          <label for="recipient-name" class="col-form-label">
                              <i class="far fa-trophy-alt"></i> Đánh giá:
                              <span class="text-success px-2">
                                  <input class="form-check-input" type="radio" name="ket_qua" id="ket_qua2" value="2"> Đạt <i class="fa fa-check"></i>
                              </span>
                              <span class=text-danger>
                                  <input class="form-check-input" type="radio" name="ket_qua" id="ket_qua1" value="1" checked> Chưa đạt <i class="fas fa-close"></i>
                              </span>
                          </label>
                      </div>
                      <div class="form-group">
                          <label for="message-text" class="col-form-label">Nhận xét:</label>
                          <textarea class="form-control" name="nghi_chu" cols="30" rows="7" id="message-text"></textarea>
                      </div>
                      <div class="modal-footer">
                          <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button> -->
                          <!-- <button type="button" class="btn btn-outline-success">Cập nhật</button> -->
                          <!-- <button type="button" class="btn btn-danger" data-dismiss="">Chưa đạt <i class="far fa-close" aria-hidden="true"></i></button> -->
                          <button type="submit" class="btn btn-success"data-dismiss=""><a href=""id="nutpheduyet">Cập nhật</a> </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- End Modal -->
  <script>
      function truyen_id(id_phieu) {
          $("#nutpheduyet").attr('href', '<?= SITE_URL ?>/?ctrl=doanh_nghiep&act=pheduyet&id_phieu=' + id_phieu);
      }
  </script>