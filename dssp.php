<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<?php
include_once("connect.php");
if (isset($_GET['trang'])) {
    $so_trang = $_GET['trang'];
    settype($so_trang, "int");
} else {
    $so_trang = 1;
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h2>Sản phẩm</h2>
                <div>
                    <!--Load san pham tu DB -->
                    <div class='row'>
                        <?php
                        if (isset($_GET['maloai'])) {
                            $maloai = $_GET['maloai'];
                            $so_du_lieu = 12;
                            $tv_1 = mysqli_query($conn, "select count(MaNhom) from hanghoa where MaNhom = $maloai");
                            $tv_2 = mysqli_fetch_array($tv_1);
                            $so_trang = ceil($tv_2[0] / $so_du_lieu);
                            if (!isset($_GET['trang'])) {
                                $vtbd = 0;
                            } else {
                                $vtbd = ($_GET['trang'] - 1) * $so_du_lieu;
                            }
                            $result = mysqli_query($conn, "select a.*,(select b.hsp_tentaptin FROM hinhanh b WHERE a.MSHH = b.MSHH LIMIT 0,1) 
                            as sp_hinhdaidien FROM hanghoa a where a.MaNhom = $maloai order by a.MSHH limit $vtbd,$so_du_lieu");
                        } else {
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
                        }
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <!--Một sản phẩm single-product product-f-image -->
                            <div class="card" style="border:0;">
                                <div class="card-body">
                                    <a href="?khoatrang=quanly_chitiet_sp&ma=<?php echo  $row['MSHH'] ?>">
                                        <img src="feature/img/<?php echo  $row['sp_hinhdaidien'] ?>" title="product-imgs" width='200px' height='150px'>
                                    </a>
                                    <h6><a align='center' href="?khoatrang=quanly_chitiet_sp&ma=<?php echo  $row['MSHH'] ?>"><?php echo  $row['TenHH'] ?></a>
                                    </h6>
                                    <div>
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
                    <div class='phantrang'>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<script language="javascript" type="text/javascript" src="jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="jquery.min.js"></script>