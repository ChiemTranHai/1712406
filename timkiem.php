<?php
include_once("connect.php");
if (isset($_GET['txtSearch'])) {
    $tukhoa = $_GET['txtSearch'];
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h2>Sản phẩm</h2>
                <div class='row'>
                    <!--Load san pham tu DB -->
                    <?php
                    $query = "select a.*,(SELECT b.hsp_tentaptin
                            FROM hinhanh b WHERE a.MSHH = b.MSHH LIMIT 0,1) as sp_hinhdaidien
                                FROM hanghoa a where TenHH LIKE '%" . $tukhoa . "%' ";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    ?>
                        <!--Một sản phẩm -->
                        <div class="card" style="border:0;">
                            <div class="card-body">
                                <a href="?khoatrang=quanly_chitiet_sp&ma=<?php echo  $row['MSHH'] ?>">
                                    <img src="feature/img/<?php echo $row['sp_hinhdaidien'] ?>" title="product-imgs" width='200px' height='150px'>
                                </a>
                            </div>
                            <h6><a align='center' href="?khoatrang=quanly_chitiet_sp&ma=<?php echo $row['MSHH'] ?>"><?php echo $row['TenHH'] ?></a>
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
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>