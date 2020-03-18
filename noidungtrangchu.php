  <?php
    include_once("connect.php");
    include_once("index.php");
    if (isset($_GET['trang'])) {
        $so_trang = $_GET['trang'];
        settype($so_trang, "int");
    } else {
        $so_trang = 1;
    }
    ?>
  <div class="container text-center" id="introduce">
      <div class="color">
          <h4>Chào mừng bạn đến với trang web.</h4>
          <h5></br>
              Người thực hiện:Chiêm Trấn Hải - 1712406
              </br>Các thành viên còn lại của nhóm HCMUS-EC-20A06
              </br>Vũ Văn Đạt - 1712339
              </br>Nguyễn Hữu Hảo - 1712419
              </br>Phan Đăng Khoa - 1712536
              </br>Lê Văn Minh - 1712594
          </h5>
      </div>
  </div>
  <div>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div>
                      <h2>Sản phẩm</h2>
                      <div>
                          <!--Load san pham tu DB -->
                          <div class='row'>
                              <?php
                                $so_du_lieu = 24;
                                $tv = "select count(*) from hanghoa";
                                $tv_1 = mysqli_query($conn, $tv);
                                $tv_2 = mysqli_fetch_array($tv_1);
                                $so_trang = ceil($tv_2[0] / $so_du_lieu);
                                if (!isset($_GET['trang'])) {
                                    $vtbd = 0;
                                } else {
                                    $vtbd = ($_GET['trang'] - 1) * $so_du_lieu;
                                }
                                $result = mysqli_query($conn, "select a.*,(select b.hsp_tentaptin FROM hinhanh b WHERE a.MSHH = b.MSHH LIMIT 0,1) 
                            as sp_hinhdaidien FROM hanghoa a order by a.MSHH  limit $vtbd,$so_du_lieu");
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                  <!--Một sản phẩm single-product product-f-image -->
                                  <div class="card" style="border:0;">
                                      <div class="card-body">
                                          <a href="?khoatrang=quanly_chitiet_sp&ma=<?php echo  $row['MSHH'] ?>">
                                              <img src="feature/img/<?php echo  $row['sp_hinhdaidien'] ?>" title="product-imgs" width='200px' height='150px'>
                                          </a>
                                          <h6><a align='center' href="?khoatrang=quanly_chitiet_sp&ma=<?php echo  $row['MSHH'] ?>"><?php echo  $row['TenHH'] ?></a>
                                          </h6>
                                          <div class="">
                                              <span class='font-weight-bold text-warning'>
                                                  <?php
                                                    echo number_format($row['Gia'], 0, ',', '.');
                                                    echo 'đ';
                                                    ?>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              <?php
                                }
                                ?>
                          </div>
                          <!--Phân trang-->
                          <div>
                              <?php
                                for ($i = 1; $i <= $so_trang; $i++) {
                                    $link = "?khoatrang=dssp&trang=" . $i;
                                    echo "<a class='font-weight-bold' href='$link' align='center'>";
                                    echo $i;
                                    echo " ";
                                    echo "</a>";
                                }
                                ?>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>